<div class="slider-container">
    @foreach ($barbershops as $barbershop)
        <div class="barber-card fade-in">
            <img src="https://images.unsplash.com/photo-1603079845816-2a469d06c8b1?auto=format&fit=crop&w=800&q=80"
                alt="Barbería {{ $barbershop->name }}">
            <div class="barber-card-body">
                <h5>{{ $barbershop->name }}</h5>
                <p>{{ $barbershop->description }}</p>
                <p>{{ $barbershop->address }} - {{ $barbershop->neighborhood }}</p>
                <a class="btn btn-custom w-100" href="{{ route('barberias.show', $barbershop->slug) }}">Ver más</a>
                
            </div>
        </div>
    @endforeach

    {{-- <div class="barber-card fade-in">
        <img src="https://images.unsplash.com/photo-1601623099867-cdc4445a3f10?auto=format&fit=crop&w=800&q=80"
            alt="Barbería 2">
        <div class="barber-card-body">
            <h5>Barbería Urbana</h5>
            <p>Ambiente moderno y relajado. Ideal para tu estilo único.</p>
            <button class="btn btn-custom w-100">Ver más</button>
        </div>
    </div>
    <div class="barber-card fade-in">
        <img src="https://images.unsplash.com/photo-1581091012184-13c9c63ef7d3?auto=format&fit=crop&w=800&q=80"
            alt="Barbería 3">
        <div class="barber-card-body">
            <h5>Barbería Clásica</h5>
            <p>Profesionales expertos y atención personalizada.</p>
            <button class="btn btn-custom w-100">Ver más</button>
        </div>
    </div>
    <div class="barber-card fade-in">
        <img src="https://images.unsplash.com/photo-1603570411325-4eb48c1e7e3a?auto=format&fit=crop&w=800&q=80"
            alt="Barbería 4">
        <div class="barber-card-body">
            <h5>Barbería Moderna</h5>
            <p>Estilo urbano y ambiente relajado.</p>
            <button class="btn btn-custom w-100">Ver más</button>
        </div>
    </div> --}}
</div>