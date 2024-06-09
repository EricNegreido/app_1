<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<link rel="stylesheet" href='../../../css/indexAdminUsers.css'>
</head>
<body>
  @if(Session::has('usuario_borrado'))
    <div> {{Session('usuario_borrado')}} </div>
  @endif
   <h1> Pagina index del administrador </h1>
   <section class="titulos-index">
   <div class="titulos-items">Foto</div>
    <div class="titulos-items">Id</div>
    <div class="titulos-items">Role Id</div>
    <div class="titulos-items">Nombre</div>
    <div class="titulos-items">Email</div>
    <div class="titulos-items">Creado</div>
    <div class="titulos-items">Actualizado</div>
   </section>
   <section class="items-index">
    @if($users)
      @foreach ($users as $user)
      ----------------------------------------------------------
        <div class="titulos-items"><img src="/images/{{$user->foto ? $user->Foto->ruta_foto : 'usuario.png' }}" width="100" alt="Imagen Usuario"> </div>
        <div class="titulos-items">{{$user->id}} </div>
        <div class="titulos-items">{{$user->role_id}}  </div>
        <div class="titulos-items"><a href="{{route('users.edit', $user->id)}}" >{{$user->name}}</a> </div>
        <div class="titulos-items">{{$user->email}} </div>
        <div class="titulos-items">{{$user->created_at}} </div>
        <div class="titulos-items">{{$user->update_at}} </div>
      @endforeach
    @endif
   </section>
</body>
</html> 