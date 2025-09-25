<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarbershopStoreRequest;
use App\Http\Requests\BarbershopUpdateRequest;
use App\Models\Barbershop;
use App\Models\Municipality;
use Illuminate\Http\Request;

class BarbershopController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('public.index');
    }

    /**
     * listado de barberias
     */
    public function list(Request $request, $lat = null, $lng = null)
    {
        $barbershops = Barbershop::query();

        //buscar barberias cercanas
        if ($lat && $lng) {

            $radius = 5; // en kilómetros

            /* 6371 → radio de la Tierra en km.

                acos(...) → calcula la distancia entre coordenadas.

                having("distance", "<", $radius) → trae solo barberías dentro de un radio (ej: 5 km).

                orderBy("distance") → ordena de la más cercana a la más lejana. 
            */

            $barbershops = Barbershop::selectRaw("
                    id, name, latitude, longitude,address,slug,neighborhood, profile_picture, description,
                    (6371 * acos(cos(radians(?)) * cos(radians(latitude)) 
                    * cos(radians(longitude) - radians(?)) 
                    + sin(radians(?)) * sin(radians(latitude)))) AS distance
                ", [$lat, $lng, $lat])
                ->having("distance", "<", $radius)
                ->orderBy("distance");
        }

        return view('barbershops.list_barbershop', [
            'barbershops' => $barbershops->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barbershops.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \App\Http\Requests\BarbershopStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BarbershopStoreRequest $request)
    {

        $data = $request->validated();

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('public/barbershop_profiles');
            $data['profile_picture'] = basename($path);
        }

        Barbershop::createBarbershop($data);

        return redirect()->route('public.index')->with('success', 'Barbería registrada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barbershop $barbershop)
    {
        $barbershop->loadMissing(['barbers.person', 'services']);
        return view('barbershops.show', compact('barbershop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barbershop $barbershop)
    {
        return view('barbershops.edit', compact('barbershop'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \App\Http\Requests\BarbershopUpdateRequest  $request
     * @param  \App\Models\Barbershop  $barbershop
     */
    public function update(BarbershopUpdateRequest $request, Barbershop $barbershop)
    {
        $data = $request->validated();

        if ($request->hasFile('profile_picture') && $request->file('profile_picture')->isValid()) {
            $path = $request->file('profile_picture')->store('public/barbershop_profiles');
            $data['profile_picture'] = basename($path);
        }

        $data['slug'] = Barbershop::createSlug($data['name']); // para que se regenere el slug si el nombre cambia

        $barbershop->update($data);

        return redirect()->route('public.index')->with('success', 'Barbería actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barbershop $barbershop)
    {
        //
    }
}
