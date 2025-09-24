@extends('layout_public')


@section('content')



<!-- Slider Barberías Populares -->
<section id="populares" class="py-5">
  <div class="container">
    <h2 class="mb-4 text-center">Barberías cercanas</h2>

    <div id="barberias-list"></div>
  </div>
</section>

<script>
  if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(
    function(position) {
      let lat = position.coords.latitude;
      let lng = position.coords.longitude;

      //aqui va la consulta para listar la barberias cercanas
      fetch(`barberias_list/${lat}/${lng}`)
        .then(response => response.text())
        .then(html => {
          document.getElementById('barberias-list').innerHTML = html;
          console.log("Barberías cargadas correctamente.",html);
        })
        .catch(error => {
          console.error('Error al cargar las barberías:', error);
        });
    },
    function(error) {
      console.error("Error obteniendo ubicación:", error);
      alert("No se pudo obtener tu ubicación. Activa el GPS o usa el pin manual.");
    }
  );
} else {
  alert("Tu navegador no soporta geolocalización.");
}

        

       

        
</script>
@endsection