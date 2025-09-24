@extends('layout_public', ['hidden_hero' => true])


@section('content')


<style>
  #map {
    height: 400px;
    width: 100%;
  }
</style>


<!-- Forms -->
<section id="forms" class="container py-5 fade-in">
  <h2 class="mb-4 text-center">Registra tu barbería</h2>
  <form method="POST" action="{{ route('barberias.store') }}" enctype="multipart/form-data">
    @csrf
    <x-form_row>
      <div class="mb-3">
        <x-input_basic label="Nombre de la barbería(*)" propGeneral="name" />
      </div>

      <div class="mb-3 col-12">
        <x-input_basic label="Añade una descripción corta" propGeneral="description" type="text" />
      </div>
    </x-form_row>

    <x-form_row>
      <div class="mb-3 col-md-6">
        <x-input_basic label="Teléfono(*)" propGeneral="phone" />
      </div>

      <div class="mb-3 col-md-6">
        <x-input_basic label="Correo" propGeneral="email" />
      </div>

       <div class="mb-3 col-md-12">
        <x-input_basic label="Foto de perfil" propGeneral="profile_picture" type="file" />
      </div>

    </x-form_row>

    <x-form_row>

      <div class="mb-3">
        <label for="address(*)" class="form-label">
          <span class="label_input">Indica la dirección en el mapa</span>
        </label>
        <div id="map"></div>
      </div>
      <div class="mb-3 col-md-6">
        <x-input_basic label="Departamento - municipio(*)" propGeneral="department_municipality" readonly={{true}} />
      </div>

      

      <div class="mb-3 col-md-6">
        <x-input_basic label="Dirección(*)" propGeneral="address" />
      </div>

      <div class="mb-3 col-md-4">
        <x-input_basic label="Barrio (*)" propGeneral="neighborhood" />
      </div>

      <div class="mb-3 col-md-4">
        <x-input_basic label="Latitud(*)" propGeneral="latitude" readonly={{true}} />
      </div>
      <div class="mb-3 col-md-4">
        <x-input_basic label="Longitud(*)" propGeneral="longitude" readonly={{true}} />
      </div>

     



    </x-form_row>

    <x-form_row>



      <div class="mb-3 col-md-4">
        <x-input_basic label="Sitio web" propGeneral="website" />
      </div>

      <div class="mb-3 col-md-4">
        <x-input_basic label="Instagram" propGeneral="instagram" />
      </div>

      <div class="mb-3 col-md-4">
        <x-input_basic label="Facebook" propGeneral="facebook" />
      </div>
      <div class="mb-3 col-md-4">
        <x-input_basic label="Twitter" propGeneral="twitter" />
      </div>

      <div class="mb-3 col-md-4">
        <x-input_basic label="TikTok" propGeneral="tiktok" />
      </div>

      <div class="mb-3 col-md-4">
        <x-input_basic label="YouTube" propGeneral="youtube" />
      </div>



    </x-form_row>


    {{-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="terms">
      <label class="form-check-label" for="terms">Acepto términos y condiciones</label>
    </div> --}}
    <x-form_row>
      <div class="mb-3 text-center">
        <button type="submit" class="btn btn-custom">Registrar</button>
      </div>
    </x-form_row>
  </form>
</section>

<script>
  let map, marker, geocoder;

      function initMap() {
        geocoder = new google.maps.Geocoder();

        // Centro inicial en Montería
        const startPos = { lat: 8.74798, lng: -75.88143 };

         map = new google.maps.Map(document.getElementById("map"), {
          center: startPos,
          zoom: 13,
        });

        marker = new google.maps.Marker({
          position: startPos,
          map: map,
          draggable: true
        });

        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(
            function(position) {
              let lat = position.coords.latitude;
              let lng = position.coords.longitude;

              startPos.lat = lat;
              startPos.lng = lng;

              map.setCenter(startPos);
              marker.setPosition(startPos);

              document.getElementById("latitude").value = lat;
              document.getElementById("longitude").value = lng;
              reverseGeocode(lat, lng);

            },
            function(error) {
              console.error("Error obteniendo ubicación:", error);
              alert("No se pudo obtener tu ubicación. Activa el GPS o usa el pin manual.");
            }
          );
        } else {
          alert("Tu navegador no soporta geolocalización.");
        }

        

       

        // Actualizar cuando se mueve el marcador
        marker.addListener("dragend", function() {
          const pos = marker.getPosition();
          document.getElementById("latitude").value = pos.lat();
          document.getElementById("longitude").value = pos.lng();
          reverseGeocode(pos.lat(), pos.lng());
        });

        //actualizar cuando se le de doble click al mapa
        map.addListener("dblclick", function(event) {
          const pos = event.latLng;
          marker.setPosition(pos);
          document.getElementById("latitude").value = pos.lat();
          document.getElementById("longitude").value = pos.lng();
          reverseGeocode(pos.lat(), pos.lng());
        }); 

        // Inicializar valores
        document.getElementById("latitude").value = startPos.lat;
        document.getElementById("longitude").value = startPos.lng;
        reverseGeocode(startPos.lat, startPos.lng);
      }

      function reverseGeocode(lat, lng) {
        const latlng = { lat: parseFloat(lat), lng: parseFloat(lng) };

        geocoder.geocode({ location: latlng }, (results, status) => {
          if (status === "OK" && results[0]) {
            let municipio = "";
            let departamento = "";
            let postal = "";
            let direccionCompleta = results[0].formatted_address;
            document.getElementById("address").value = direccionCompleta;

            results[0].address_components.forEach(c => {
              if (c.types.includes("administrative_area_level_2")) {
                municipio = c.long_name;
              }
              if (c.types.includes("administrative_area_level_1")) {
                departamento = c.long_name;
              }
              if (c.types.includes("postal_code")) {
                postal = c.long_name;
              }
            });

            document.getElementById("department_municipality").value = departamento + " - " + municipio;
           
          }
        });
      }


      getPosition = (options) => {
        return new Promise((resolve, reject) => {
          navigator.geolocation.getCurrentPosition(resolve, reject, options);
        });
      }

      window.onload = initMap;
</script>

@endsection