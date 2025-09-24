@extends('layout_public', ['hidden_hero' => false])


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
            <img src="https://via.placeholder.com/500x300" class="img-fluid rounded" alt="Barbería">
        </div>
    </div>
</section>

<!-- Barberos -->
<section class="container my-5">
    <h2 class="mb-4">Nuestros Barberos</h2>
    <div class="row g-4">
        <div class="col-md-4 barber-card">
            <div class="card">
                <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Barbero 1">
                <div class="card-body">
                    <h5 class="card-title">Juan Pérez</h5>
                    <p class="card-text">Especialista en cortes modernos y afeitados clásicos.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 barber-card">
            <div class="card">
                <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Barbero 2">
                <div class="card-body">
                    <h5 class="card-title">Carlos Rodríguez</h5>
                    <p class="card-text">Experto en barba y estilizado personalizado.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 barber-card">
            <div class="card">
                <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Barbero 3">
                <div class="card-body">
                    <h5 class="card-title">Miguel Gómez</h5>
                    <p class="card-text">Cortes clásicos y modernos, asesoramiento de estilo.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Servicios -->
<section class="container my-5">
    <h2 class="mb-4">Nuestros Servicios</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card service-card">
                <div class="card-body">
                    <h5 class="card-title">Corte de cabello</h5>
                    <p class="card-text">Cortes personalizados según tu estilo y preferencias.</p>
                    <p class="fw-bold">Precio: $20.000</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card service-card">
                <div class="card-body">
                    <h5 class="card-title">Afeitado clásico</h5>
                    <p class="card-text">Afeitado profesional con toalla caliente y crema premium.</p>
                    <p class="fw-bold">Precio: $15.000</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card service-card">
                <div class="card-body">
                    <h5 class="card-title">Barba y estilizado</h5>
                    <p class="card-text">Recorte y diseño de barba según tu estilo personal.</p>
                    <p class="fw-bold">Precio: $18.000</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Horarios -->
<section class="container my-5">
    <h2 class="mb-4">Horarios de Atención</h2>
    <ul class="list-group">
        <li class="list-group-item">Lunes a Viernes: 8:00 AM - 7:00 PM</li>
        <li class="list-group-item">Sábado: 9:00 AM - 5:00 PM</li>
        <li class="list-group-item">Domingo: Cerrado</li>
    </ul>
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

@endsection