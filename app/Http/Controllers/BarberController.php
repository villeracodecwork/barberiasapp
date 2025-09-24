<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarberStoreRequest;
use App\Models\Barber;
use App\Models\Barbershop;
use App\Models\Person;
use Illuminate\Http\Request;

class BarberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Barbershop $barbershop)
    {
        return view('public.index', compact('barbershop'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Barbershop $barbershop)
    {
        return view('barbers.create', compact('barbershop'));
    }

    /**
     * Store a newly created resource in storage.
     * @param BarberStoreRequest $request
     * @param Barbershop $barbershop
     */
    public function store(BarberStoreRequest $request, Barbershop $barbershop)
    {
        $data = $request->validated();

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('public/barbershop_profiles');
            $data['profile_picture'] = basename($path);
        }

        Barber::createBarber($barbershop, $data);

        return redirect()->route('barberias.show', $barbershop)
            ->with('success', 'Barbero creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barbershop $barbershop, Barber $barber)
    {
        return view('barbers.edit', compact('barbershop', 'barber'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BarberStoreRequest $request, Barbershop $barbershop, Barber $barber)
    {
        $data = $request->validated();

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('public/barbershop_profiles');
            $data['profile_picture'] = basename($path);
        }

        Barber::updateBarber($data, $barber);

        return redirect()->route('barberias.show', $barbershop)
            ->with('success', 'Barbero actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
    }
}
