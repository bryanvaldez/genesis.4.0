@extends('layout.main.master')
@section('content')
<section class="block">
	<h1 class="title">Main Page</h1>
	<div class="content">
		<h3>Last Employees</h3>

		@foreach($latest_employees as $category)
		<h5><a href="{{ route('category', [$category->slug, $category->id]) }}">{{ $category->name }}</a><h5>
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