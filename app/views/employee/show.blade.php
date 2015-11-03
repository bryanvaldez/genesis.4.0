@extends('layout.main.master')
@section('content')
<section class="block">
	<h3 class="title">{{ $employee->user->name .' '. $employee->user->last_name}}</h3>
	<div class="content">
		<table class="table">
			<thead>
				<tr>
					<th>Categoria</th>
					<td><a href="{{ route('category', [$employee->category->slug, $employee->category->id]) }}">{{ $employee->category->name }}</a></td>
				</tr>
				<tr>
					<th>Descripción</th>
					<td>{{ $employee->description }}</td>
				</tr>
				<tr>	
					<th>Registrado</th>
					<td>{{ $employee->created_at }}</td>
				</tr>
				<tr>
					<th>Email</th>
					<td>{{ $employee->user->email }}</td>
				</tr>
				<tr>
					<th>Website</th>
					<td><a href="{{ $employee->website_url }}">{{ $employee->website_url}}</a></td>
				</tr>
			</thead>
		</table>
	</div>
</section>