@extends('layout_public', ['hidden_hero' => false,])


@section('content')
<section id="create_barber" class="container py-5 fade-in">
  <h2 class="mb-4 text-center">Actualizar servicio</h2>
  <form method="POST" action="{{ route('barberias.servicios.update', [$barbershop, $service]) }}">
    @method('PUT')
    @csrf

    <x-form_row>
      <div class="mb-3 col-md-6 ">
        <x-select_type_enum :enum="App\Enums\ServiceCategory::cases()" label="Categoría del servicio (*)"
          propGeneral="category" value="{{ $service->category->value }}" />
      </div>

      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Nombre del servicio (*)" propGeneral="name" type="text" value="{{ $service->name }}" />
      </div>
      <div class="mb-3 col-md-4 ">
        <x-input_basic label="Descripción (*)" propGeneral="description" type="text"
          value="{{ $service->description }}" />
      </div>

      <div class="mb-3 col-md-4 ">
        <x-input_basic label="Duración (minutos) (*)" propGeneral="duration_minutes" type="number"
          value="{{ $service->duration_minutes }}" />
      </div>

      <div class="mb-3 col-md-4 ">
        <x-input_basic label="Precio (*)" propGeneral="price" type="number" value="{{ $service->price }}" />
      </div>

      <div class="mb-3 col-12 ">
        <label for="description" class="form-label">
          <span class="spinner-border spinner-border-sm d-none " id="spinner_description" role="status"
            aria-hidden="true"></span>
          <span class="label_input">Selección de Barberos para el servicio (*)</span>
        </label>
        <div>
          @php
          $assignedBarberIds = $service->barbers->pluck('id')->toArray();
          @endphp
          @foreach ($barbershop->barbers as $index => $barber)
          <x-checkbox_basic label=" {{ $barber->name_for_display }}" propGeneral="barber_ids[{{ $index }}]"
            assignedValue="{{ $barber->id }}" foreceChecked="{{ in_array($barber->id, $assignedBarberIds) }}" />
          <br>
          @endforeach
        </div>

      </div>
    </x-form_row>

    <x-form_row>
      <div class="mb-3 text-center">
        <button type="submit" class="btn btn-custom">Actualizar servicio</button>
      </div>
    </x-form_row>
  </form>
</section>


@endsection