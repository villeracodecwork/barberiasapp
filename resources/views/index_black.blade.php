<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barberías Cercanas</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #121212;
      color: #fff;
    }

    /* Hero */
    .hero {
      position: relative;
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1590080875737-63ccefae5d02?auto=format&fit=crop&w=1470&q=80') center/cover no-repeat;
      height: 30vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
      color: #ccc;
    }

    .search-bar input {
      border-radius: 50px;
      padding: 0.75rem 1.5rem;
      border: none;
      width: 300px;
      max-width: 90%;
      outline: none;
    }

    .search-bar button {
      border-radius: 50px;
      padding: 0.75rem 1.5rem;
      border: none;
      background-color: #ffc107;
      color: #000;
      font-weight: 600;
      transition: transform 0.2s;
    }

    .search-bar button:hover {
      transform: scale(1.05);
    }

    /* Barberías populares */
    .barber-card {
      background-color: #1e1e1e;
      border-radius: 15px;
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .barber-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .barber-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.5);
    }

    .barber-card-body {
      padding: 1rem;
    }

    .barber-card-body h5 {
      margin-bottom: 0.5rem;
    }

    .barber-card-body p {
      color: #aaa;
      font-size: 0.9rem;
    }

    /* Botones */
    .btn-custom {
      border-radius: 50px;
      background-color: #ffc107;
      color: #000;
      font-weight: 600;
      transition: transform 0.2s;
    }

    .btn-custom:hover {
      transform: scale(1.05);
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 2rem;
      color: #aaa;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">BarberíasApp</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#populares">Populares</a></li>
          <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero">
    <div class="container">
      <h1>Encuentra tu barbería ideal</h1>
      <p>Descubre las mejores barberías cerca de ti, reserva tu cita y luce increíble.</p>
      <div class="search-bar d-flex justify-content-center gap-2 flex-wrap">
        <input type="text" placeholder="Ciudad o barrio">
        <button class="btn btn-custom">Buscar</button>
      </div>
    </div>
  </section>

  <!-- Barberías Populares -->
  <section id="populares" class="py-5">
    <div class="container">
      <h2 class="mb-4 text-center">Barberías Populares</h2>
      <div class="row g-4">
        <!-- Tarjeta 1 -->
        <div class="col-md-4">
          <div class="barber-card">
            <img src="https://images.unsplash.com/photo-1603079845816-2a469d06c8b1?auto=format&fit=crop&w=800&q=80" alt="Barbería 1">
            <div class="barber-card-body">
              <h5>Barbería Central</h5>
              <p>Estilo clásico y moderno. Reserva tu cita fácilmente.</p>
              <button class="btn btn-custom w-100">Ver más</button>
            </div>
          </div>
        </div>
        <!-- Tarjeta 2 -->
        <div class="col-md-4">
          <div class="barber-card">
            <img src="https://images.unsplash.com/photo-1601623099867-cdc4445a3f10?auto=format&fit=crop&w=800&q=80" alt="Barbería 2">
            <div class="barber-card-body">
              <h5>Barbería Urbana</h5>
              <p>Ambiente moderno y relajado. Ideal para tu estilo único.</p>
              <button class="btn btn-custom w-100">Ver más</button>
            </div>
          </div>
        </div>
        <!-- Tarjeta 3 -->
        <div class="col-md-4">
          <div class="barber-card">
            <img src="https://images.unsplash.com/photo-1581091012184-13c9c63ef7d3?auto=format&fit=crop&w=800&q=80" alt="Barbería 3">
            <div class="barber-card-body">
              <h5>Barbería Clásica</h5>
              <p>Profesionales expertos y atención personalizada.</p>
              <button class="btn btn-custom w-100">Ver más</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="contacto">
    © 2025 Barberías Cercanas. Todos los derechos reservados.
  </footer>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
