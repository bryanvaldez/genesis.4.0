@extends('layout.main.master')
@section('content')
<section class="block">
	<h3 class="title">{{ $category->name }}</h3>
	<div class="content">
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
					<td>{{ $employee->job_type }}</td>
					<td><a href="{{ route('employee', [$employee->slug, $employee->id]) }}" class="btn-action" title="Desactivar Usuario"><span class="icon icon-right"></span></button></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div >
			<ul class="pagination">
				<li><a href="">Primero</a></li>
				<li><a href="">Anterior</a></li>
				<li class="active"><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">Siguiente</a></li>
				<li><a href="">Ultimo</a></li>
			</ul>
		</div>
	</div>
</section>