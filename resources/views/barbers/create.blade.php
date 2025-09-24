<button type="button" class="btn btn-secondary"
  onclick="toggleCreateBarber()">
  Nuevo Barbero <i class="bi bi-plus-square"></i>
</button>

<section id="create_barber" class="container py-5 fade-in" style="display:none;">
  <h2 class="mb-4 text-center">Registrar barbero </h2>
  <form method="POST" action="{{ route('barberias.barberos.store', $barbershop)  }}" enctype="multipart/form-data">
    @csrf

    {{-- 'identification_type',
    'identification_number',
    'name',
    'last_name',
    'phone',
    'verification_code',
    'email',
    'email_verified_at',
    'is_enabled',
    'birth_date',
    'address',
    'profile_picture' --}}
    <x-form_row>
      <div class="mb-3 col-md-6 ">
        <x-select_type_enum :enum="App\Enums\IdentificationType::cases()" label="Tipo de documento (*)"
          propGeneral="identification_type" />
      </div>

      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Numero de documento (*)" propGeneral="identification_number" type="text" />
      </div>
      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Nombres (*)" propGeneral="name" type="text" />
      </div>

      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Apellidos" propGeneral="last_name" type="text" />
      </div>

      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Apodo" propGeneral="nickname" type="text" />
      </div>

      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Teléfono (*)" propGeneral="phone" type="text" />
      </div>

      <div class="mb-3 col-md-12 ">
        <x-input_basic label="Agregar descripción" propGeneral="description" type="text" />
      </div>


      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Correo electrónico" propGeneral="email" type="email" />
      </div>

      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Fecha de nacimiento" propGeneral="birth_date" type="date" />
      </div>

      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Dirección" propGeneral="address" type="text" />
      </div>

      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Foto de perfil" propGeneral="profile_picture" type="file" accept="image/*" />
      </div>

      <x-form_row>
        <div class="mb-3 text-center">
          <button type="submit" class="btn btn-custom">Registrar barbero</button>
        </div>
      </x-form_row>

    </x-form_row>
  </form>
</section>

{{-- Mostrar el formulario si hay errores --}}
@if ($errors->any())
<script>
  document.getElementById('create_barber').style.display = 'block';
</script>
@else
<script>
  //al volver a darle click en el boton de nuevo barbero, que se oculte el formulario
  function toggleCreateBarber() {
    const form = document.getElementById('create_barber');
    form.style.display = (form.style.display === 'none' || form.style.display === '') 
      ? 'block' 
      : 'none';
  }function toggleCreateBarber() {
    const form = document.getElementById('create_barber');
    form.style.display = (form.style.display === 'none' || form.style.display === '') 
      ? 'block' 
      : 'none';
  }
</script>

@endif