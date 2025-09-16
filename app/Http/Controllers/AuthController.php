<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\PhoneVerification;
use Illuminate\Http\Request;
use App\Services\HablameSmsService;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request, HablameSmsService $smsService)
    {
        $request->validate(['telefono' => 'required|unique:clientes,telefono']);

        //  $cliente = Cliente::create(['telefono' => $request->telefono]);

        $code = random_int(100000, 999999);
        //  $cliente->update(['verification_code' => (string)$code]);
        $telefono = 3004134484;

        $res = $smsService->sendVerificationCode($telefono, (string)$code);

        if (! $res['success']) {
            return response()->json(['error' => 'No se pudo enviar SMS', 'debug' => $res], 500);
        }

        return response()->json(['message' => 'Código enviado', 'cliente_id' => '']);
    }

    public function verifyCode(Request $request)
    {
        $user = User::where('phone', $request->phone)->first();

        if ($user && $user->verification_code == $request->code) {
            $user->update([
                'phone_verified_at' => now(),
                'verification_code' => null,
            ]);

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'message' => 'Número verificado',
                'token'   => $token,
                'roles'   => $user->getRoleNames(),
            ]);
        }

        return response()->json(['error' => 'Código incorrecto'], 400);
    }



    public function enviarCodigo($user)
    {
        $code = random_int(100000, 999999);

        $user->update(['verification_code' => $code]);

        $user->notify(new PhoneVerification((string)$code));

        return response()->json(['message' => 'Código enviado']);
    }
}
