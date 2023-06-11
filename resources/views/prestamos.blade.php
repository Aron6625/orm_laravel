<!DOCTYPE html>
<html>
<head>
  <title>Prestamos de Computadoras</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
    
    h1 {
      text-align: center;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    tr:hover {
      background-color: #f5f5f5;
    }
    
    .btn {
      padding: 6px 12px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    
    #file-upload {
      display: none;
    }
    
    #file-label {
      display: inline-block;
      padding: 6px 12px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>
<body>
  <div class="card mx-auto mt-5" style="width: 35rem;">
    <div class="card-body">
  <h1 class="mb-4">Prestamo computadora</h1>
  <form method="POST">
    <select name="id_profesor_" class="form-control mb-4">
      <option selected="selected" disabled>Profesor</option>
      <?php 
        foreach($profesores as $profesore) {
          $name = $profesore['nom_user'];
          $id = $profesore['id_user'];

          echo "<option value=\"$id\">$name</option>";
        }
      ?>
    </select>
    <select name="id_estudiante" class="form-control mb-4">
      <option selected="selected" disabled>Estudiante</option>
      <?php 
        foreach($estudiantes as $estudiante) {
          $name = $estudiante['nom_user'];
          $id = $estudiante['id_user'];

          echo "<option value=\"$id\">$name</option>";
        }
      ?>
    </select>
    <select name="id_comp" class="form-control mb-4">
      <option selected="selected" disabled>Computadora</option>
      <?php 
        foreach($computadoras as $computadora) {
          $name = $computadora['nombre_comp'];
          $id = $computadora['id_comp'];

          echo "<option value=\"$id\">$name</option>";
        }
      ?>
    </select>
    <input
      class="form-control mb-4"
      type="date"
      name="fecha_prestamos"
      min="2018-01-01"
      max="2018-12-31"
    >
    <input type="file" id="imagen" name="imagen" accept="image/*" required>
    <br />
    <br />
    <button
      type="submit"
      class="btn btn-primary"
    >Prestar</button>
      </div>
    </div>
  </form>
</body>