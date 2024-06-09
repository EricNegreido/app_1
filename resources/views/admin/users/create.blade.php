<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1> Agregar usuario</h1>
    <form action="/admin/users" method="POST" enctype="multipart/form-data">
      <label for="name"> Nombre: </label>
      <input type="text" name="name">
      <label for="email"> Email: </label>
      <input type="email" name="email">
      <label for="password"> Contraseña: </label>
      <input type="password" name="password">
      <label for="role_id"> Role: </label>
      <input type="number" name="role_id">
      <label for="foto_id"> Foto: </label>
      <input type="file" name="foto_id">
      <input type="reset" value="Vaciar Campos">
      <input type="submit" value="Enviar">
      {{csrf_field()}}
    </form>
</body>
</html>