<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" >
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title></title>
</head>
<body>
  <form action="{{route('users.update', $user->id)}}" method="post">
    <section class="form-register">
    @csrf
    @method('PUT')
      <h4>Crear Usuario</h4>
      <input class="controls" type="text" name="names" value="{{$user->names}}">
      <input class="controls" type="text" name="lastnames" value="{{$user->lastnames}}">
      <input class="controls" type="email" name="email" value="{{$user->email}}">
      <input class="botons" type="submit" value="Guardar Cambios">
      <a class="cancelar" href="{{url('users')}}">Cancelar
      </a>

    </section>
  </form>
</body>
</html>
      