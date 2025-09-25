<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarberStoreRequest;
use App\Http\Requests\ServiceStoreRequest;
use App\Models\Barber;
use App\Models\Barbershop;
use App\Models\Person;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Service $service)
    {
        return view('public.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Service $service)
    {
        return view('services.create', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     * @param ServiceStoreRequest $request
     * @param Barbershop $barbershop
     */
    public function store(ServiceStoreRequest $request, Barbershop $barbershop)
    {
        $data = $request->validated();


        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('public/barbershop_profiles');
            $data['profile_picture'] = basename($path);
        }

        $service = $barbershop->services()->firstOrCreate($data);

        //asignar barberos al servicio
        if (isset($data['barber_ids'])) {
            $barbers = Barber::whereIn('id', $data['barber_ids'])->get();
            $service->barbers()->sync($barbers);
        }


        return redirect()->route('barberias.show', $barbershop)
            ->with('success', 'Servicio creado exitosamente.');
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
    public function edit(Barbershop $barbershop, Service $service)
    {
        $barbershop->load('services.barbers');

        return view('services.edit', compact('barbershop', 'service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceStoreRequest $request, Barbershop $barbershop, Service $service)
    {
        $data = $request->validated();

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('public/barbershop_profiles');
            $data['profile_picture'] = basename($path);
        }

       $service->update($data);

        //asignar barberos al servicio
        if (isset($data['barber_ids'])) {
            $barbers = Barber::whereIn('id', $data['barber_ids'])->get();
            $service->barbers()->sync($barbers);
        } else {
            $service->barbers()->detach();
        }
        
        return redirect()->route('barberias.show', $barbershop)
            ->with('success', 'Servicio actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
    }
}
