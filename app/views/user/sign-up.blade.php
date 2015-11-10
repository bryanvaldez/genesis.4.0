@extends('layout.main.master')
@section('content')
<section class="block">
	<div class="content">
		<h1>Sign up</h1>
		{{ Form::open(['route' => 'register', 'method' => 'POST', 'role'=> 'form', 'class'=>'form']) }}

		{{ Field::text('name') }}

		{{ Field::text('last_name') }}

		{{ Field::email('email') }}

		{{ Field::password('password') }}

		{{ Field::password('password_confirmation', ['placeholder' => 'Repite tu clave']) }}


<!-- 		<div>
			{{ Form::label('name', 'Nombre') }}
			{{ Form::text('name', null) }}
			{{ $errors->first('name') }}
		</div>
		<div>
			{{ Form::label('last_name', 'Apellido') }}
			{{ Form::text('last_name', null) }}
			{{ $errors->first('last_name') }}
		</div> -->
<!-- 		<div>
			{{ Form::label('email', 'Correo') }}
			{{ Form::text('email') }}
			{{ $errors->first('email') }}
		</div>
		<div>
			{{ Form::label('password', 'Clave') }}
			{{ Form::password('password', null) }}
			{{ $errors->first('password') }}
		</div>
		<div>
			{{ Form::label('password_confirmation', 'Repite tu clave') }}
			{{ Form::password('password_confirmation', null) }}
			{{ $errors->first('password_confirmation') }}
		</div> -->
		<p><input type="submit" value="Register" class="btn btn-success"></p>
		{{ Form::close() }}
	</div>
</section>
@endsection