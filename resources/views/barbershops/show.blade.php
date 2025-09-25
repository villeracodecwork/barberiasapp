@extends('layout_public', ['hidden_hero' => false,])


@section('content')

<style>
    .barber-card img {
        height: 200px;
        object-fit: cover;
    }

    .service-card {
        transition: transform 0.2s;
    }

    .service-card:hover {
        transform: scale(1.05);
    }
</style>

<!-- Hero / Descripción -->
<section class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1>Bienvenido a {{ $barbershop->name }}</h1>
            <p>{{ $barbershop->description }}</p>
        </div>
        <div class="col-md-6">
            <img src="{{asset('img/barberias_default.webp')}}" class="img-fluid rounded" alt="Barbería">
        </div>
    </div>
</section>

<!-- Barberos -->
<section class="container my-5">
    <h2 class="mb-4">Nuestros Barberos</h2>
    <div class="row g-4">
        @foreach ($barbershop->barbers as $barber)
        <div class="col-md-4 barber-card">
            <div class="card h-100">
                <img src="{{asset('img/image_barber_default.png')}}" class="card-img-top"
                    alt="{{ $barber->person->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $barber->name_for_display }}</h5>
                    <p class="card-text">{{ $barber->description }}</p>
                </div>
                {{-- edit --}}
                <div class="card-footer">
                    <a href="{{ route('barberias.barberos.edit', [$barbershop, $barber]) }}" class="btn "><i
                            class="bi bi-pencil-square"></i></a>
                </div>
            </div>
        </div>
        @endforeach





    </div>
    @include('barbers.create')
</section>

<!-- Servicios -->
{{-- "category",
"name",
"description",
"duration_minutes",
"profile_picture",
"price",
"is_active" --}}
<section class="container my-5">
    <h2 class="mb-4">Nuestros Servicios</h2>
    <div class="row g-4">
        @foreach ($barbershop->services as $service)
        <div class="col-md-4">
            <div class="card service-card">
                <div class="card-body">
                    <h5 class="card-title">{{ $service->name }} - {{ $service->category?->description() }}</h5>
                    <p class="card-text">{{ $service->description }}</p>
                    <p class="fw-bold">Precio: ${{ number_format($service->price, 0, ',', '.') }}</p>
                </div>

                {{-- edit --}}
                <div class="card-footer">
                    <a href="{{ route('barberias.servicios.edit', [$barbershop, $service]) }}" class="btn "><i
                            class="bi bi-pencil-square"></i></a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    @include('services.create')
</section>

<!-- Horarios -->
<section class="container my-5">
    <h2 class="mb-4">Horarios de Atención</h2>
    <ul class="list-group">
        @foreach (App\Enums\DayOfWeek::cases() as $day)
        @php
        // Obtener el horario del día actual
        $schedule = $barbershop->schedules->where('day_of_week', $day)->first();
        $srt_view = !$schedule ? 'Cerrado' : $schedule->start_time_formatted . ' - ' . $schedule->end_time_formatted;
        @endphp
        <li class="list-group-item"><span class="">{{ $day->description() }}: {{ $srt_view }}</span>
            @if ($schedule)
            <form id="delete-form-{{ $schedule->id }}"
                action="{{ route('barberias.horarios.destroy', [$barbershop, $schedule]) }}" method="POST"
                class="d-inline">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn  float-end"
                    onclick="return confirm('¿Estás seguro de eliminar este horario?')">
                    <i class="bi bi-trash"></i>
                </button>

            </form>
            @endif
        </li>
        @endforeach

    </ul>

    {{-- Botón para mostrar el formulario de nuevo horario --}}
    @include('schedules.create')

</section>

<!-- Contacto -->
<section class="container my-5">
    <h2 class="mb-4">Contacto</h2>
    <p><strong>Barrio:</strong> {{ $barbershop->neighborhood }}</p>
    <p><strong>Dirección:</strong> {{ $barbershop->address }}</p>
    <p><strong>Teléfono:</strong> {{ $barbershop->phone }}</p>
    <p><strong>Email:</strong> {{ $barbershop->email }}</p>


    <section class="container my-5 text-center">
        <h2 class="mb-4">Cómo llegar</h2>
        <p>Haz clic en el botón para ver la ruta hacia nuestra barbería en Google Maps.</p>
        <a href="https://www.google.com/maps/dir/?api=1&destination={{ $barbershop->latitude }},{{ $barbershop->longitude }}"
            target="_blank" class="btn btn-lg btn-success shadow-lg">
            📍 Cómo llegar
        </a>
    </section>

</section>

<!-- Footer -->
{{-- <footer class="bg-dark text-white text-center py-4">
    &copy; 2025 Barbería de Luis. Todos los derechos reservados.
</footer> --}}

<script defer>
    if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
    }

    // Guardar el scroll en localStorage
    window.addEventListener("beforeunload", () => {
    localStorage.setItem("scrollY", window.scrollY);
    });

    // Restaurar cuando recarga
    window.addEventListener("load", () => {
    const y = localStorage.getItem("scrollY");
    if (y !== null) {
        window.scrollTo(0, y);
    }
    });
</script>

@endsection