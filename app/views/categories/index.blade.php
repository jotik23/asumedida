@extends('layouts.scaffold')

@section('main')

<h1>All Categories</h1>

<p>{{ link_to_route('categories.create', 'Add New Category', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($categories->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Foto</th>
				<th>Padre</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($categories as $category)
				<tr>
					<td>{{{ $category->nombre }}}</td>
					<td>{{{ $category->descripcion }}}</td>
					<td>{{{ $category->foto }}}</td>
					<td>{{{ $category->padre }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('categories.destroy', $category->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('categories.edit', 'Edit', array($category->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no categories
@endif

@stop
