<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScheduleStoreRequest;
use App\Http\Requests\ServiceStoreRequest;
use App\Models\Barbershop;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Schedule $schedule)
    {
        return view('public.index', compact('schedule'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Schedule $schedule)
    {
        return view('schedules.create', compact('schedule'));
    }

    /**
     * Store a newly created resource in storage.
     * @param ScheduleStoreRequest $request
     * @param Barbershop $barbershop
     */
    public function store(ScheduleStoreRequest $request, Barbershop $barbershop)
    {
        $data = $request->validated();

        Schedule::createOrUpdateForDays($barbershop, $data);
        
        return redirect()->route('barberias.show', $barbershop)
            ->with('success', 'Horario creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barbershop $barbershop, Schedule $schedule)
    {
        $barbershop->load('services.barbers');

        return view('schedules.edit', compact('barbershop', 'schedule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceStoreRequest $request, Barbershop $barbershop, Schedule $schedule)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barbershop $barbershop, Schedule $schedule)
    {
        $schedule->delete();

        return redirect()->route('barberias.show', $barbershop)
            ->with('success', 'Horario eliminado exitosamente.');
    }
}
