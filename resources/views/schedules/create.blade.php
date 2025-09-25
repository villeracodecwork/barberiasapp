<x-form_row>
  <div class="my-3  col-12 ">
    <button type="button" class="btn btn-secondary w-100" onclick="toggleCreateSchedule()">
      Actualizar horarios <i class="bi bi-plus-square"></i>

    </button>
  </div>
</x-form_row>

<section id="create_schedule" class="container py-5 fade-in" style="display:none;">
  <h2 class="mb-4 text-center">Registrar o actualizar horarios </h2>
  <form method="POST" action="{{ route('barberias.horarios.store', $barbershop)  }}">
    @csrf

    {{--
    "barbershop_id",
    "barber_id",
    "day_of_week",
    "start_time",
    "end_time",
    "slot_duration_minutes",
    "is_active",
    --}}
    <x-form_row>
      <div class="mb-3 col-md-6 ">
        @foreach (App\Enums\DayOfWeek::cases() as $index => $enum)
        <x-checkbox_basic label="{{ $enum->description() }}" propGeneral="day_of_week[ {{ $index }} ]"
          assignedValue="{{ $enum->value }}" />
        <br>
        @endforeach

      </div>

      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Hora inicio (*)" propGeneral="start_time" type="time"
          value="{{ now()->format('H:i') }}" />
        <x-input_basic label="Hora fin (*)" propGeneral="end_time" type="time"
          value="{{ now()->addHours(8)->format('H:i') }}" />
      </div>

    </x-form_row>


    <x-form_row>
      <div class="mb-3 text-center">
        <button type="submit" class="btn btn-custom">Guardar horarios</button>
      </div>
    </x-form_row>

  </form>
</section>

{{-- Mostrar el formulario si hay errores --}}
@if ($errors->any())
<script>
  document.getElementById('create_schedule').style.display = 'block';
</script>
@else
<script>
  //al volver a darle click en el boton de nuevo barbero, que se oculte el formulario
  function toggleCreateSchedule() {
    const form = document.getElementById('create_schedule');
    form.style.display = (form.style.display === 'none' || form.style.display === '') 
      ? 'block' 
      : 'none';
  }
</script>


@endif