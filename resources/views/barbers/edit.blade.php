@extends('layout_public', ['hidden_hero' => false,])


@section('content')
<section id="create_barber" class="container py-5 fade-in">
  <h2 class="mb-4 text-center">Actualizar barbero</h2>
  <form method="POST" action="{{ route('barberias.barberos.update', [$barbershop, $barber]) }}"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')

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
          propGeneral="identification_type" value="{{$barber->person->identification_type}}" />
      </div>

      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Numero de documento (*)" propGeneral="identification_number" type="text" value="{{$barber->person->identification_number}}" />
      </div>
      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Nombres (*)" propGeneral="name" type="text" value="{{$barber->person->name}}" />
      </div>

      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Apellidos" propGeneral="last_name" type="text" value="{{$barber->person->last_name}}" />
      </div>

      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Apodo" propGeneral="nickname" type="text" value="{{$barber->nickname}}" />
      </div>

      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Teléfono (*)" propGeneral="phone" type="text" value="{{$barber->person->phone}}" />
      </div>

      <div class="mb-3 col-md-12 ">
        <x-input_basic label="Agregar descripción" propGeneral="description" type="text" value="{{$barber->description}}" />
      </div>


      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Correo electrónico" propGeneral="email" type="email" value="{{$barber->person->email}}" />
      </div>

      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Fecha de nacimiento" propGeneral="birth_date" type="date" value="{{$barber->person->birth_date}}" />
      </div>

      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Dirección" propGeneral="address" type="text" value="{{$barber->person->address}}" />
      </div>

      <div class="mb-3 col-md-6 ">
        <x-input_basic label="Foto de perfil" propGeneral="profile_picture" type="file" accept="image/*" />
      </div>

      <x-form_row>
        <div class="mb-3 text-center">
          <button type="submit" class="btn btn-custom">Actualizar barbero</button>
        </div>
      </x-form_row>

    </x-form_row>
  </form>
</section>


@endsection