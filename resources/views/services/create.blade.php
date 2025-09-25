<button type="button" class="btn btn-secondary" onclick="toggleCreateService()">
  Nuevo Servicio <i class="bi bi-plus-square"></i>
</button>

<section id="create_service" class="container py-5 fade-in" style="display:none;">
  <h2 class="mb-4 text-center">Registrar servicio </h2>
  <form method="POST" action="{{ route('barberias.servicios.store', $barbershop)  }}" enctype="multipart/form-data">
    @csrf

    {{-- "category",
    "name",
    "description",
    "duration_minutes",
    "profile_picture",
    "price",
    "is_active", --}}
    <x-form_row>
      <div class="mb-3 col-md-6 ">
        <x-select_type_enum :enum="App\Enums\ServiceCategory::cases()" label="Categoría del servicio (*)"
          propGeneral="category" />
      </div>

      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Nombre del servicio (*)" propGeneral="name" type="text" />
      </div>
      <div class="mb-3 col-md-4 ">
        <x-input_basic label="Descripción (*)" propGeneral="description" type="text" />
      </div>

      <div class="mb-3 col-md-4 ">
        <x-input_basic label="Duración (minutos) (*)" propGeneral="duration_minutes" type="number" />
      </div>

      <div class="mb-3 col-md-4 ">
        <x-input_basic label="Precio (*)" propGeneral="price" type="number" />
      </div>

      <div class="mb-3 col-12 ">
        <label for="description" class="form-label">
          <span class="spinner-border spinner-border-sm d-none " id="spinner_description" role="status"
            aria-hidden="true"></span>
          <span class="label_input">Selección de Barberos para el servicio (*)</span>
        </label>
        <div>
          @foreach ($barbershop->barbers as $index => $barber)
          <x-checkbox_basic label=" {{ $barber->name_for_display }}" propGeneral="barber_ids[{{ $index }}]"
            assignedValue="{{ $barber->id }}" />
            <br>
          @endforeach
        </div>

      </div>

      <x-form_row>
        <div class="mb-3 text-center">
          <button type="submit" class="btn btn-custom">Registrar servicio</button>
        </div>
      </x-form_row>

    </x-form_row>
  </form>
</section>

{{-- Mostrar el formulario si hay errores --}}
@if ($errors->any())
<script>
  document.getElementById('create_service').style.display = 'block';
</script>
@else
<script>
  //al volver a darle click en el boton de nuevo barbero, que se oculte el formulario
  function toggleCreateService() {
    const form = document.getElementById('create_service');
    form.style.display = (form.style.display === 'none' || form.style.display === '') 
      ? 'block' 
      : 'none';
  }
</script>


@endif