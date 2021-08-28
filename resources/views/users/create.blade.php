<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" >
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title></title>
</head>
<body>
  <form action="{{route('users.store')}}" method="post">
    <section class="form-register">
    @csrf 
      <h4>Crear Usuario</h4>
      <input class="controls" type="text" name="names" placeholder="Ingrese su nombre">
      <input class="controls" type="text" name="lastnames" placeholder="Ingrese sus Apellidos">
      <input class="controls" type="email" name="email" placeholder="Ingrese su Email">
      {{-- <p>Estoy de Acuerdo con <a class="ter" href="#">Términos y Condiciones</a></p> --}}
      <input class="botons" type="submit" value="Crear Nuevo Usuario">
      <a class="cancelar" href="{{url('users')}}">Cancelar
      </a>
      <p><a href="#">¿Ya Tengo Cuenta?</a></p>

    </section>
  </form>
</body>
</html>
      