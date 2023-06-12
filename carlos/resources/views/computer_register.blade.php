<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
  <div class="card mx-auto mt-5" style="width: 28rem;">
    <div class="card-body">
  <h1 class="mb-4">Registro computadora</h1>
  <form action="{{ route('computer')}}" method="POST" enctype="multipart/form-data">
    
    @csrf
    <input
      class="form-control mb-3"
      name="nombre"
      required
      placeholder="Nombre"
    >
    <input
      class="form-control mb-3"
      name="marca"
      required
      placeholder="Marca"
    >
    <input
      class="form-control mb-3"
      name="modelo"
      required
      placeholder="Modelo"
      
    >
    <select name="estado_id" class="form-control mb-4">
      <option selected="selected" disabled>Estado</option>
      @foreach ($estados as $estado)
        <option value="{{$estado->id}}">{{$estado->estado}}</option>
      @endforeach
    </select>
    <input type="file" id="imagen" name="imagen" accept="image/*" required>
    <br />
    <br />
    <button
      type="submit"
      class="btn btn-primary"
    >Submit</button>
    <a href="/" class="btn"> Volver</a>
      </div>
    </div>
  </form>
</body>