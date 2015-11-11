@extends('layout.main.master')
@section('content')
<nav>
    <div class="content">
    	@if (Auth::check())
    		<span>{{ Auth::user()->name }}</span>
    		<span><a href="{{ route('profile') }}">Editar perfil</a></span>
    		<span><a href="{{ route('account') }}">Editar usuario</a></span>
    		<span><a href="{{ route('logout') }}">Salir</a></span>
    	{{ Form::close()  }}
		
		@else
    	{{ Form::open(['route' => 'login', 'method' => 'POST', 'role'=> 'form', 'class'=>'form']) }}
    		@if (Session::has('login_error'))
    			<span>Credenciales no validas</span>
    		@endif
    		{{ Field::email('email') }}
			{{ Field::password('password') }}
			<p>{{ Form::checkbox('remember') }} Recordarme</p>
			<p><input type="submit" value="Login" ></p>
    	{{ Form::close() }}
    	@endif

    </div>
</nav>

<section class="block">
	<h1 class="title">Main Page</h1>
	<div class="content">
		<h3>Last Employees</h3>

		@foreach($latest_employees as $category)
		<h5><a href="{{ route('category', [$category->slug, $category->id]) }}">{{ $category->name }}</a><a href="{{ route('sign_up') }}">......(Registrate!)</a><h5>
		<table class="table"> 
			<thead>
				<tr>
					<th>N*</th>
					<th>Name</th>
					<th>Last Name</th>
					<th>Description</th>
					<th>Job</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($category->employees as $key => $employee)
				<tr>
					<th scope="row">{{$key+1}}</th>
					<td>{{ $employee->user->name }}</td>
					<td>{{ $employee->user->last_name }}</td>
					<td>{{ $employee->description }}</td>
					<td>{{ $employee->job_type_title }}</td>
					<td><a href="{{ route('employee', [$employee->slug, $employee->id]) }}" class="btn-action" title="Desactivar Usuario"><span class="icon icon-right"></span></button></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endforeach	


	</div>
</section>