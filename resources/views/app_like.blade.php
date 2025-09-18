<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Barberías App-like</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
<style>
body {
  font-family: 'Montserrat', sans-serif;
  background-color: #121212;
  color: #fff;
  scroll-behavior: smooth;
}

/* Navbar estilo app */
.navbar-dark .navbar-nav .nav-link {
  color: #fff;
}

/* Sidebar móvil */
#sidebar {
  position: fixed;
  top: 0;
  left: -250px;
  width: 250px;
  height: 100%;
  background-color: #1E1E1E;
  padding-top: 60px;
  transition: left 0.3s;
  z-index: 1000;
}
#sidebar.active {
  left: 0;
}
#sidebar a {
  display: block;
  color: #fff;
  padding: 15px;
  text-decoration: none;
}
#sidebar a:hover {
  background-color: #333;
}

/* Hero */
.hero {
  position: relative;
  background: linear-gradient(rgba(18,18,18,0.7), rgba(18,18,18,0.7)), url('https://images.unsplash.com/photo-1590080875737-63ccefae5d02?auto=format&fit=crop&w=1470&q=80') center/cover no-repeat;
  height: 90vh;
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

/* Carousel */
.carousel-inner .barber-card {
  border-radius: 15px;
  overflow: hidden;
  margin: 0 auto;
  background-color: #1E1E1E;
  box-shadow: 0 5px 15px rgba(0,0,0,0.5);
  transition: transform 0.3s, box-shadow 0.3s;
}
.carousel-inner .barber-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}
.carousel-inner .barber-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(0,0,0,0.6);
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

/* Botón flotante */
.fab-reserva {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #2ECC71;
  color: #fff;
  border-radius: 50px;
  padding: 1rem 1.5rem;
  font-weight: 600;
  box-shadow: 0 5px 15px rgba(0,0,0,0.5);
  cursor: pointer;
  transition: transform 0.2s, background-color 0.2s;
  z-index: 1000;
}
.fab-reserva:hover {
  transform: scale(1.05);
  background-color: #27AE60;
}

/* Footer */
footer {
  text-align: center;
  padding: 2rem;
  color: #B0B0B0;
  font-size: 0.9rem;
}
</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark sticky-top">
  <div class="container d-flex justify-content-between">
    <a class="navbar-brand" href="#">Barberías</a>
    <button id="sidebarToggle" class="btn btn-dark d-lg-none">☰</button>
  </div>
</nav>

<!-- Sidebar móvil -->
<div id="sidebar">
  <a href="#">Inicio</a>
  <a href="#populares">Populares</a>
  <a href="#contacto">Contacto</a>
</div>

<!-- Hero -->
<section class="hero">
  <div class="container">
    <h1>Encuentra tu barbería ideal</h1>
    <p>Descubre las mejores barberías cerca de ti y reserva tu cita fácilmente.</p>
    <div class="search-bar d-flex justify-content-center gap-2 flex-wrap">
      <input type="text" placeholder="Ciudad o barrio">
      <button class="btn btn-custom">Buscar</button>
    </div>
  </div>
</section>

<!-- Carousel Barberías -->
<section id="populares" class="py-5">
  <div class="container">
    <h2 class="mb-4 text-center">Barberías Populares</h2>
    <div id="barberCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="barber-card mx-auto">
            <img src="https://images.unsplash.com/photo-1603079845816-2a469d06c8b1?auto=format&fit=crop&w=800&q=80" alt="Barbería 1">
            <div class="barber-card-body">
              <h5>Barbería Central</h5>
              <p>Estilo clásico y moderno. Reserva tu cita fácilmente.</p>
              <button class="btn btn-custom w-100">Ver más</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="barber-card mx-auto">
            <img src="https://images.unsplash.com/photo-1601623099867-cdc4445a3f10?auto=format&fit=crop&w=800&q=80" alt="Barbería 2">
            <div class="barber-card-body">
              <h5>Barbería Urbana</h5>
              <p>Ambiente moderno y relajado. Ideal para tu estilo único.</p>
              <button class="btn btn-custom w-100">Ver más</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="barber-card mx-auto">
            <img src="https://images.unsplash.com/photo-1581091012184-13c9c63ef7d3?auto=format&fit=crop&w=800&q=80" alt="Barbería 3">
            <div class="barber-card-body">
              <h5>Barbería Clásica</h5>
              <p>Profesionales expertos y atención personalizada.</p>
              <button class="btn btn-custom w-100">Ver más</button>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#barberCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#barberCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</section>

<!-- Botón flotante -->
<div class="fab-reserva">Reservar</div>

<!-- Footer -->
<footer id="contacto">
  © 2025 Barberías App-like. Todos los derechos reservados.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Sidebar toggle
const sidebar = document.getElementById('sidebar');
const toggleBtn = document.getElementById('sidebarToggle');
toggleBtn.addEventListener('click', () => {
  sidebar.classList.toggle('active');
});
</script>
</body>
</html>
