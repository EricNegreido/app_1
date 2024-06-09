<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1>Editar usuario</h1>
    <form action="/admin/users/{{$user->id}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method("PUT")
      <div class="titulos-items"><img src="/images/{{$user->foto ? $user->Foto->ruta_foto : 'usuario.png' }}" width="100" alt="Imagen Usuario"> </div>
      <input type="file" name="foto_id">
      <label for="name"> Nombre: </label>
      <input type="text" name="name" value="{{$user->name}}">
      <label for="role_id"> Role: </label>
      <input type="number" name="role_id" value="{{$user->role_id}}">  
      <input type="reset" value="Vaciar Campos">
      <input type="submit" value="Enviar">
    </form>
    <form action="/admin/users/{{$user->id}}" method="POST">
      @csrf
      @method("DELETE")
      <input type="submit" value="Eliminar">
    </form>
</body>
</html>