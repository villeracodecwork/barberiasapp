<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>BarberíasApp</title>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOSo77xMD9j_cB5n4ypk3cLOsE3cSB1O0&libraries=places">
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #121212;
      color: #fff;
      scroll-behavior: smooth;
    }

    .navbar-dark .navbar-nav .nav-link {
      color: #fff;
    }

    .hero {
      position: relative;
      background: linear-gradient(rgba(18, 18, 18, 0.7), rgba(18, 18, 18, 0.7)), url('https://images.unsplash.com/photo-1590080875737-63ccefae5d02?auto=format&fit=crop&w=1470&q=80') center/cover no-repeat;
      height: 50vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .hero p {
      font-size: 1.2rem;
      color: #B0B0B0;
      margin-bottom: 2rem;
    }

    .search-bar input {
      border-radius: 50px;
      padding: 0.75rem 1.5rem;
      border: none;
      width: 300px;
      max-width: 90%;
      outline: none;
      background-color: #1E1E1E;
      color: #fff;
    }

    .search-bar button {
      border-radius: 50px;
      padding: 0.75rem 1.5rem;
      border: none;
      background-color: #FFC107;
      color: #000;
      font-weight: 600;
      transition: transform 0.2s, background-color 0.2s;
    }

    .search-bar button:hover {
      transform: scale(1.05);
      background-color: #FFD54F;
    }

    /* Slider Horizontal */
    .slider-container {
      overflow-x: auto;
      display: flex;
      gap: 1rem;
      padding-bottom: 1rem;
      scroll-behavior: smooth;
    }

    .barber-card {
      flex: 0 0 300px;
      background-color: #1E1E1E;
      border-radius: 15px;
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s, opacity 0.5s;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
      opacity: 100%;
    }

    .barber-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .barber-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.6);
    }

    .barber-card-body {
      padding: 1rem;
    }

    .barber-card-body h5 {
      margin-bottom: 0.5rem;
    }

    .barber-card-body p {
      color: #B0B0B0;
      font-size: 0.9rem;
    }

    .btn-custom {
      border-radius: 50px;
      background-color: #FFC107;
      color: #000;
      font-weight: 600;
      transition: transform 0.2s, background-color 0.2s;
    }

    .btn-custom:hover {
      transform: scale(1.05);
      background-color: #FFD54F;
    }

    /* Botón flotante de reserva */
    .fab-reserva {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #2ECC71;
      color: #fff;
      border-radius: 50px;
      padding: 1rem 1.5rem;
      font-weight: 600;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
      cursor: pointer;
      transition: transform 0.2s, background-color 0.2s;
      z-index: 1000;
    }

    .fab-reserva:hover {
      transform: scale(1.05);
      background-color: #27AE60;
    }

    /* Fade-in al hacer scroll */
    /* .fade-in {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .fade-in.show {
      opacity: 1;
      transform: translateY(0);
    } */

    footer {
      text-align: center;
      padding: 2rem;
      color: #B0B0B0;
      font-size: 0.9rem;
    }

    .form-control,
    .form-select {
      background: #1E1E1E;
      color: #fff;
      border: none;
      border-radius: 50px;
      padding: .75rem 1.25rem;
    }

    .form-control:focus,
    .form-select:focus {
      box-shadow: none;
      background: #2C2C2C;
      color: #fff;
    }
  </style>

  <script src="{{ asset('vendor/js/utils.js') }}"></script>
</head>

<body>

  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#"> @if (isset($barbershop)) {{$barbershop->name}} @else BarberíasApp @endif</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="{{route('public.index')}}">Inicio</a></li>
          @if (!isset($barbershop))<li class="nav-item"><a class="nav-link" href="#populares">Populares</a></li>@endif
          <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
          @if (!isset($barbershop))<li class="nav-item"><a class="nav-link"
              href="{{route('barberias.create')}}">Registra barbería</a></li>@endif
          @if (isset($barbershop)) <li class="nav-item"><a class="nav-link"
              href="{{route('barberias.edit', $barbershop->id)}}">Editar barbería</a></li>@endif
          <li class="nav-item"><a class="nav-link" href="#login">Autenticarse</a></li>
        </ul>
      </div>
    </div>
  </nav>

  @if (!isset($hidden_hero))
  <!-- Hero -->
  <section class="hero">
    <div class="container">
      <h1>Encuentra tu barbería ideal</h1>
      <p>Descubre las mejores barberías cerca de ti y reserva tu cita fácilmente.</p>
      <div class="search-bar d-flex justify-content-center gap-2 flex-wrap">
        <input type="text" placeholder="Ciudad">
        <button class="btn btn-custom">Buscar</button>
      </div>
    </div>
  </section>
  @endif



  @yield('content')




  <!-- Botón flotante de reserva -->
  <div class="fab-reserva">Reservar</div>

  <!-- Footer -->
  <footer id="contacto">
    © 2025 BarberíasApp. Todos los derechos reservados.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Animación fade-in al hacer scroll
/* const faders = document.querySelectorAll('.fade-in');

const appearOptions = {
  threshold: 0.1,
  rootMargin: "0px 0px -50px 0px"
};

const appearOnScroll = new IntersectionObserver(function(entries, observer) {
  entries.forEach(entry => {
    if(!entry.isIntersecting) return;
    entry.target.classList.add('show');
    observer.unobserve(entry.target);
  });
}, appearOptions);

faders.forEach(fader => {
  appearOnScroll.observe(fader);
}); */
  </script>
</body>

</html>