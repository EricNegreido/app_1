<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<link rel="stylesheet" href='../../../css/indexAdminUsers.css'>
</head>
<body>
   <h1> Pagina index del administrador </h1>
   <section class="titulos-index">
    <div class="titutlos-items">Id</div>
    <div class="titutlos-items">Role Id</div>
    <div class="titutlos-items">Nombre</div>
    <div class="titutlos-items">Email</div>
    <div class="titutlos-items">Creado</div>
    <div class="titutlos-items">Actualizado</div>
   </section>
   <section class="items-index">
    @if($users)
      @foreach ($users as $user)
      ----------------------------------------------------------
        <div class="titutlos-items">{{$user->id}} </div>
        <div class="titutlos-items">{{$user->role_id}}  </div>
        <div class="titutlos-items">{{$user->name}} </div>
        <div class="titutlos-items">{{$user->email}} </div>
        <div class="titutlos-items">{{$user->created_at}} </div>
        <div class="titutlos-items">{{$user->update_at}} </div>
      @endforeach
    @endif
   </section>
</body>
</html>