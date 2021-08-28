<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<table class="table">
					<tr>
						<td>Nombre:</td>
						<td>{{$user->names}}</td>
					</tr>
					<tr>
						<td>Apellidos:</td>
						<td>{{$user->lastnames}}</td>
					</tr>
					<tr>
						<td>Correo:</td>
						<td>{{$user->email}}</td>
					</tr>
				</table>
				<hr>
				<a href="{{url('users')}}">Ir a inicio</a>
			</div>
		</div>
	</div>
</body>
</html>
      