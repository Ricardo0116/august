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
			<div class="col-md-12">
				<br>
				<a href="{{url('users/create')}}" class="btn btn-info">Crear Usuario</a>
				@if(session('status'))
				<div class="alert alert-success mt-3">
					{{session('status')}}
				</div>
				@endif
				<table class="table table-striped mt-3">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Email</th>
							<th>Fecha de Creación</th>
							<th>Fecha de Actualización</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{$user->id}}</td>
							<td>{{$user->names}}</td>
							<td>{{$user->lastnames}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->created_at}}</td>
							<td>{{$user->updated_at}}</td>
							<td>
								<form action="{{route('users.destroy',$user->id)}}" method="post">
								@csrf
								@method('DELETE')
									<a href="{{route('users.show', $user->id)}}" class="btn btn-sm btn-info">Detalles</a>
									<a href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-warning">Editar</a>
									<button class="btn btn-sm btn-danger" type="submit">Eleminar</button>	
								</form>
							</td>

							
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
      