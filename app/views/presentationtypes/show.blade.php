@extends('layouts.scaffold')

@section('main')

<h1>Show Presentationtype</h1>

<p>{{ link_to_route('presentationtypes.index', 'Return to All presentationtypes', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Nombre</th>
				<th>Descripcion</th>
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
