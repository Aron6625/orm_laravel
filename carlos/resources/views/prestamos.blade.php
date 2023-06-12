<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>
<body>
  <div class="card mx-auto mt-5" style="width: 35rem;">
    <div class="card-body">
      <h1 class="mb-4">Prestamo computadora</h1>
      <form action="{{ route('prestamo')}}" method="POST">
        @csrf
        <select name="profesor_id" class="form-control mb-4">
          <option selected="selected" disabled>User</option>
          @foreach ($profesores as $profesor)
            <option value="{{$profesor->id}}">{{$profesor->name}}</option>
          @endforeach
        </select>
        </select>
        <select name="estudiante_id" class="form-control mb-4">
          <option selected="selected" disabled>User</option>
          @foreach ($estudiantes as $estudiante)
            <option value="{{$estudiante->id}}">{{$estudiante->name}}</option>
          @endforeach
        </select>

        <select name="computer_id" class="form-control mb-4">
          <option selected="selected" disabled>Computadora</option>
          @foreach ($computadoras as $computadora)
            <option value="{{$computadora->id}}">{{$computadora->nombre}}</option>
          @endforeach
        </select>
    <div id="imageContainer"></div>
        <input
          class="form-control mb-4"
          type="date"
          name="fecha_prestamo"
          min="2018-01-01"
          max="2018-12-31"
        >
        <input
          class="form-control mb-4"
          type="date"
          name="fecha_devolucion"
          min="2018-01-01"
          max="2018-12-31"
        >
        <button
          type="submit"
          class="btn btn-primary"
        >Prestar</button>
      </form>
    </div>
  </div>
</body>
<script>
  function showImage(compId) {
    var imageContainer = document.getElementById("imageContainer");
    var selectedComp = <?php echo json_encode($computadoras); ?>;
    var selectedImage = "";

    for (var i = 0; i < selectedComp.length; i++) {
      if (selectedComp[i]['id_comp'] == compId) {
        selectedImage = selectedComp[i]['imagen'];
        break;
      }
    }

    if (selectedImage) {
      var image = document.createElement("img");
      image.src = selectedImage;
      image.style.maxWidth = "300px";
      image.style.maxHeight = "300px";
      imageContainer.innerHTML = "";
      imageContainer.appendChild(image);
    } else {
      imageContainer.innerHTML = "";
    }
  }
</script>          
