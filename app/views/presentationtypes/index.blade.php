@extends('layouts.scaffold')

@section('main')

<h1>All Presentationtypes</h1>

<p>{{ link_to_route('presentationtypes.create', 'Add New Presentationtype', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($presentationtypes->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($presentationtypes as $presentationtype)
				<tr>
					<td>{{{ $presentationtype->nombre }}}</td>
					<td>{{{ $presentationtype->descripcion }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('presentationtypes.destroy', $presentationtype->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('presentationtypes.edit', 'Edit', array($presentationtype->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no presentationtypes
@endif

@stop
