@extends('layout.main.master')
@section('content')
<section class="block">
	<div class="content">
		<h1>Edita tu cuenta</h1>
		{{ Form::model($user, ['route' => 'update_account', 'method' => 'PUT', 'role'=> 'form', 'class'=>'form', 'novalidate']) }}
		{{ Field::text('name') }}
		{{ Field::text('last_name') }}
		{{ Field::email('email') }}
		{{ Field::password('password') }}
		{{ Field::password('password_confirmation', ['placeholder' => 'Repite tu clave']) }}
		<p><input type="submit" value="Register" class="btn btn-success"></p>
		{{ Form::close() }}
	</div>
</section>
@endsection