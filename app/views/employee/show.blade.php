@extends('layout.main.master')
@section('content')
<section class="block">
	<h3 class="title">{{ $employee->user->name .' '. $employee->user->last_name}}</h3>
	<div class="content">
		<table class="table">
			<thead>
				<tr>
					<th>N*</th>
				</tr>
				<tr>
					<th>Name</th>
				</tr>
				<tr>	
					<th>Last Name</th>
				</tr>
				<tr>
					<th>Description</th>
				</tr>
				<tr>
					<th>Job</th>
				</tr>
				<tr>
					<th>Acciones</th>
				</tr>
			</thead>
		</table>
	</div>
</section>