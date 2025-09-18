<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BarberíasApp</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">BarberíasApp</a>
      <button class="btn btn-outline-light">Iniciar Sesión</button>
    </div>
  </nav>

  <!-- Hero -->
  <header class="bg-light text-center py-5">
    <div class="container">
      <h1 class="display-5 fw-bold">Encuentra barberías cerca de ti</h1>
      <p class="lead">Explora barberías y agenda citas con un solo clic</p>
      <a href="#barberias" class="btn btn-primary btn-lg">Ver Barberías Cercanas</a>
    </div>
  </header>

  <!-- Lista de Barberías -->
  <section id="barberias" class="py-5">
    <div class="container">
      <h2 class="mb-4 text-center">Barberías Destacadas</h2>
      <div class="row g-4">

        <!-- Card Barbería -->
        <div class="col-md-4">
          <div class="card shadow-sm h-100">
            <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Barbería">
            <div class="card-body">
              <h5 class="card-title">Barbería Estilo Urbano</h5>
              <p class="card-text">Cortes modernos, afeitados clásicos y barbería para toda la familia.</p>
              <button class="btn btn-primary w-100">Ver Barberos</button>
            </div>
          </div>
        </div>

        <!-- Otra Barbería -->
        <div class="col-md-4">
          <div class="card shadow-sm h-100">
            <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Barbería">
            <div class="card-body">
              <h5 class="card-title">Barbería Clásica</h5>
              <p class="card-text">Especialistas en cortes tradicionales y diseños de barba personalizados.</p>
              <button class="btn btn-primary w-100">Ver Barberos</button>
            </div>
          </div>
        </div>

        <!-- Otra Barbería -->
        <div class="col-md-4">
          <div class="card shadow-sm h-100">
            <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Barbería">
            <div class="card-body">
              <h5 class="card-title">Barbería Moderna</h5>
              <p class="card-text">Cortes urbanos y estilos juveniles con barbería rápida.</p>
              <button class="btn btn-primary w-100">Ver Barberos</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-light py-4">
    <div class="container text-center">
      <p class="mb-0">© 2025 BarberíasApp - Todos los derechos reservados</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
