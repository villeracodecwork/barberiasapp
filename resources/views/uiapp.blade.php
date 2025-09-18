<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Barbería UI Kit</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
<style>
body {
  font-family: 'Montserrat', sans-serif;
  background-color: #121212;
  color: #fff;
  scroll-behavior: smooth;
}

/* Navbar */
.navbar-dark .navbar-nav .nav-link {
  color: #fff;
}
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
#sidebar.active { left: 0; }
#sidebar a {
  display: block;
  color: #fff;
  padding: 15px;
  text-decoration: none;
}
#sidebar a:hover { background-color: #333; }

/* Hero */
.hero {
  position: relative;
  background: linear-gradient(rgba(18,18,18,0.7), rgba(18,18,18,0.7)), url('https://images.unsplash.com/photo-1590080875737-63ccefae5d02?auto=format&fit=crop&w=1470&q=80') center/cover no-repeat;
  height: 80vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}
.hero h1 { font-size: 3rem; font-weight: 700; margin-bottom: 1rem; }
.hero p { font-size: 1.2rem; color: #B0B0B0; margin-bottom: 2rem; }
.search-bar input {
  border-radius: 50px; padding: 0.75rem 1.5rem; border: none;
  width: 300px; max-width: 90%; outline: none; background-color: #1E1E1E; color: #fff;
}
.search-bar button {
  border-radius: 50px; padding: 0.75rem 1.5rem; border: none;
  background-color: #FFC107; color: #000; font-weight: 600; transition: transform 0.2s, background-color 0.2s;
}
.search-bar button:hover { transform: scale(1.05); background-color: #FFD54F; }

/* Cards */
.barber-card { border-radius: 15px; overflow: hidden; background-color: #1E1E1E; box-shadow:0 5px 15px rgba(0,0,0,0.5); transition: transform 0.3s, box-shadow 0.3s; position: relative; margin-bottom:1rem; }
.barber-card img { width:100%; height:200px; object-fit:cover; }
.barber-card:hover { transform: translateY(-10px); box-shadow:0 15px 30px rgba(0,0,0,0.6);}
.barber-card-body { padding:1rem;}
.barber-card-body h5 { margin-bottom:0.5rem;}
.barber-card-body p { color:#B0B0B0; font-size:0.9rem;}
.badge-reserva { position:absolute; top:10px; right:10px; background-color:#2ECC71; color:#fff; padding:0.3rem 0.6rem; border-radius:15px; font-size:0.8rem; }

/* Buttons */
.btn-custom { border-radius:50px; background-color:#FFC107; color:#000; font-weight:600; transition: transform 0.2s, background-color 0.2s;}
.btn-custom:hover { transform: scale(1.05); background-color:#FFD54F; }

/* Alerts */
.alert-custom { background-color: #2C2C2C; color:#fff; border-radius:10px; }

/* Inputs / forms */
.form-control, .form-select { background-color:#1E1E1E; color:#fff; border:none; border-radius:50px; padding:0.75rem 1.25rem; }
.form-control:focus, .form-select:focus { box-shadow:none; background-color:#2C2C2C; color:#fff; }

/* Floating Button */
.fab-reserva { position:fixed; bottom:20px; right:20px; background-color:#2ECC71; color:#fff; border-radius:50px; padding:1rem 1.5rem; font-weight:600; box-shadow:0 5px 15px rgba(0,0,0,0.5); cursor:pointer; transition:transform 0.2s, background-color 0.2s; z-index:1000;}
.fab-reserva:hover { transform: scale(1.05); background-color:#27AE60; }

/* Footer */
footer { text-align:center; padding:2rem; color:#B0B0B0; font-size:0.9rem; }

/* Fade-in scroll */
.fade-in { opacity:0; transform:translateY(30px); transition:opacity 0.8s ease, transform 0.8s ease; }
.fade-in.show { opacity:1; transform:translateY(0); }
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

<!-- Sidebar -->
<div id="sidebar">
  <a href="#">Inicio</a>
  <a href="#cards">Cards</a>
  <a href="#alerts">Alerts</a>
  <a href="#forms">Formularios</a>
  <a href="#contacto">Contacto</a>
</div>

<!-- Hero -->
<section class="hero fade-in">
  <div class="container">
    <h1>Bienvenido a Barberías</h1>
    <p>Encuentra tu barbería ideal y reserva tu cita fácilmente.</p>
    <div class="search-bar d-flex justify-content-center gap-2 flex-wrap">
      <input type="text" placeholder="Ciudad o barrio">
      <button class="btn btn-custom">Buscar</button>
    </div>
  </div>
</section>

<!-- Cards -->
<section id="cards" class="py-5 container fade-in">
  <h2 class="mb-4 text-center">Tarjetas de Barberías</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="barber-card">
        <img src="https://images.unsplash.com/photo-1603079845816-2a469d06c8b1?auto=format&fit=crop&w=800&q=80" alt="">
        <span class="badge-reserva">Disponible</span>
        <div class="barber-card-body">
          <h5>Barbería Central</h5>
          <p>Estilo clásico y moderno.</p>
          <button class="btn btn-custom w-100">Ver más</button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="barber-card">
        <img src="https://images.unsplash.com/photo-1601623099867-cdc4445a3f10?auto=format&fit=crop&w=800&q=80" alt="">
        <span class="badge-reserva">Disponible</span>
        <div class="barber-card-body">
          <h5>Barbería Urbana</h5>
          <p>Ambiente moderno y relajado.</p>
          <button class="btn btn-custom w-100">Ver más</button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="barber-card">
        <img src="https://images.unsplash.com/photo-1581091012184-13c9c63ef7d3?auto=format&fit=crop&w=800&q=80" alt="">
        <span class="badge-reserva">Disponible</span>
        <div class="barber-card-body">
          <h5>Barbería Clásica</h5>
          <p>Profesionales expertos.</p>
          <button class="btn btn-custom w-100">Ver más</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Alerts -->
<section id="alerts" class="container py-5 fade-in">
  <h2 class="mb-4 text-center">Alerts</h2>
  <div class="alert alert-custom" role="alert">Este es un mensaje informativo.</div>
  <div class="alert alert-custom mt-3" role="alert">Este es un mensaje de advertencia.</div>
  <div class="alert alert-custom mt-3" role="alert">Este es un mensaje de éxito.</div>
</section>

<!-- Forms -->
<section id="forms" class="container py-5 fade-in">
  <h2 class="mb-4 text-center">Formularios</h2>
  <form>
    <div class="mb-3">
      <label for="name" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="name" placeholder="Tu nombre">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Correo</label>
      <input type="email" class="form-control" id="email" placeholder="Tu correo">
    </div>
    <div class="mb-3">
      <label for="service" class="form-label">Servicio</label>
      <select class="form-select" id="service">
        <option selected>Selecciona un servicio</option>
        <option value="1">Corte clásico</option>
        <option value="2">Corte moderno</option>
        <option value="3">Afeitado</option>
      </select>
    </div>
    <button type="submit" class="btn btn-custom">Reservar</button>
  </form>
</section>

<!-- Floating Button -->
<div class="fab-reserva">Reservar</div>

<!-- Footer -->
<footer id="contacto">
  © 2025 Barbería UI Kit. Todos los derechos reservados.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Sidebar toggle
const sidebar = document.getElementById('sidebar');
const toggleBtn = document.getElementById('sidebarToggle');
toggleBtn.addEventListener('click', () => { sidebar.classList.toggle('active'); });

// Fade-in scroll
const faders = document.querySelectorAll('.fade-in');
const appearOptions = { threshold: 0.1, rootMargin: "0px 0px -50px 0px" };
const appearOnScroll = new IntersectionObserver(function(entries, observer){
  entries.forEach(entry => {
    if(!entry.isIntersecting) return;
    entry.target.classList.add('show');
    observer.unobserve(entry.target);
  });
}, appearOptions);
faders.forEach(fader => appearOnScroll.observe(fader));
</script>
</body>
</html>
<!-- Hero Section -->