<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Barberías Premium</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
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
  box-shadow: 0 5px 15px rgba(0,0,0,0.5);
  opacity: 0;
}

.barber-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.barber-card:hover {
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
  box-shadow: 0 5px 15px rgba(0,0,0,0.5);
  cursor: pointer;
  transition: transform 0.2s, background-color 0.2s;
  z-index: 1000;
}

.fab-reserva:hover {
  transform: scale(1.05);
  background-color: #27AE60;
}

/* Fade-in al hacer scroll */
.fade-in {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.8s ease, transform 0.8s ease;
}

.fade-in.show {
  opacity: 1;
  transform: translateY(0);
}

footer {
  text-align: center;
  padding: 2rem;
  color: #B0B0B0;
  font-size: 0.9rem;
}
</style>
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">Barberías</a>
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
    <p>Descubre las mejores barberías cerca de ti y reserva tu cita fácilmente.</p>
    <div class="search-bar d-flex justify-content-center gap-2 flex-wrap">
      <input type="text" placeholder="Ciudad o barrio">
      <button class="btn btn-custom">Buscar</button>
    </div>
  </div>
</section>

<!-- Slider Barberías Populares -->
<section id="populares" class="py-5">
  <div class="container">
    <h2 class="mb-4 text-center">Barberías Populares</h2>
    <div class="slider-container">
      <div class="barber-card fade-in">
        <img src="https://images.unsplash.com/photo-1603079845816-2a469d06c8b1?auto=format&fit=crop&w=800&q=80" alt="Barbería 1">
        <div class="barber-card-body">
          <h5>Barbería Central</h5>
          <p>Estilo clásico y moderno. Reserva tu cita fácilmente.</p>
          <button class="btn btn-custom w-100">Ver más</button>
        </div>
      </div>
      <div class="barber-card fade-in">
        <img src="https://images.unsplash.com/photo-1601623099867-cdc4445a3f10?auto=format&fit=crop&w=800&q=80" alt="Barbería 2">
        <div class="barber-card-body">
          <h5>Barbería Urbana</h5>
          <p>Ambiente moderno y relajado. Ideal para tu estilo único.</p>
          <button class="btn btn-custom w-100">Ver más</button>
        </div>
      </div>
      <div class="barber-card fade-in">
        <img src="https://images.unsplash.com/photo-1581091012184-13c9c63ef7d3?auto=format&fit=crop&w=800&q=80" alt="Barbería 3">
        <div class="barber-card-body">
          <h5>Barbería Clásica</h5>
          <p>Profesionales expertos y atención personalizada.</p>
          <button class="btn btn-custom w-100">Ver más</button>
        </div>
      </div>
      <div class="barber-card fade-in">
        <img src="https://images.unsplash.com/photo-1603570411325-4eb48c1e7e3a?auto=format&fit=crop&w=800&q=80" alt="Barbería 4">
        <div class="barber-card-body">
          <h5>Barbería Moderna</h5>
          <p>Estilo urbano y ambiente relajado.</p>
          <button class="btn btn-custom w-100">Ver más</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Botón flotante de reserva -->
<div class="fab-reserva">Reservar</div>

<!-- Footer -->
<footer id="contacto">
  © 2025 Barberías Premium. Todos los derechos reservados.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Animación fade-in al hacer scroll
const faders = document.querySelectorAll('.fade-in');

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
});
</script>
</body>
</html>
