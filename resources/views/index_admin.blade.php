<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard BarberíasApp</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { min-height: 100vh; }
    @media (min-width: 768px) {
      .sidebar { width: 250px; position: fixed; top: 0; left: 0; height: 100vh; background-color: #343a40; padding-top: 60px; }
      .content { margin-left: 250px; padding: 20px; }
      .offcanvas-backdrop { display: none; } /* evita que se superponga backdrop */
    }
    @media (max-width: 767.98px) {
      .content { padding: 20px; }
    }
    .sidebar a { color: white; display: block; padding: 10px 20px; text-decoration: none; }
    .sidebar a:hover { background-color: #495057; }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <button class="btn btn-dark d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMobile">
        ☰
      </button>
      <a class="navbar-brand ms-2" href="#">Admin BarberíasApp</a>
    </div>
  </nav>

  <!-- Sidebar Desktop -->
  <div class="sidebar d-none d-md-block">
    <nav class="nav flex-column">
      <a class="nav-link" href="#">Dashboard</a>
      <a class="nav-link" href="#">Barberías</a>
      <a class="nav-link" href="#">Barberos</a>
      <a class="nav-link" href="#">Usuarios</a>
      <a class="nav-link" href="#">Notificaciones</a>
      <a class="nav-link" href="#">Configuración</a>
    </nav>
  </div>

  <!-- Sidebar Mobile Offcanvas -->
  <div class="offcanvas offcanvas-start bg-dark text-white d-md-none" tabindex="-1" id="sidebarMobile">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Menú</h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-0">
      <nav class="nav flex-column">
        <a class="nav-link text-white" href="#">Dashboard</a>
        <a class="nav-link text-white" href="#">Barberías</a>
        <a class="nav-link text-white" href="#">Barberos</a>
        <a class="nav-link text-white" href="#">Usuarios</a>
        <a class="nav-link text-white" href="#">Notificaciones</a>
        <a class="nav-link text-white" href="#">Configuración</a>
      </nav>
    </div>
  </div>

  <!-- Contenido principal -->
  <main class="content mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2>Dashboard</h2>
      <button class="btn btn-primary">Agregar Barbería</button>
    </div>

    <!-- Estadísticas rápidas -->
    <div class="row mb-4">
      <div class="col-6 col-md-3 mb-3">
        <div class="card text-white bg-primary">
          <div class="card-body">
            <h5 class="card-title">Barberías</h5>
            <p class="card-text fs-3">12</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-3">
        <div class="card text-white bg-success">
          <div class="card-body">
            <h5 class="card-title">Barberos</h5>
            <p class="card-text fs-3">45</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-3">
        <div class="card text-white bg-warning">
          <div class="card-body">
            <h5 class="card-title">Usuarios</h5>
            <p class="card-text fs-3">120</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-3">
        <div class="card text-white bg-danger">
          <div class="card-body">
            <h5 class="card-title">Notificaciones</h5>
            <p class="card-text fs-3">30</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Tabla de barberías -->
    <div class="card mb-4">
      <div class="card-header">Barberías Registradas</div>
      <div class="card-body table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Dirección</th>
              <th>Teléfono</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Barbería Estilo Urbano</td>
              <td>Calle 123 #45-67</td>
              <td>3001234567</td>
              <td>
                <button class="btn btn-sm btn-warning">Editar</button>
                <button class="btn btn-sm btn-danger">Eliminar</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Barbería Clásica</td>
              <td>Calle 89 #12-34</td>
              <td>3007654321</td>
              <td>
                <button class="btn btn-sm btn-warning">Editar</button>
                <button class="btn btn-sm btn-danger">Eliminar</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
