@extends('layouts.scaffold')

@section('main')

<h1>All Providers</h1>

<p>{{ link_to_route('providers.create', 'Add New Provider', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($providers->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Contacto</th>
				<th>Telefono</th>
				<th>Correo</th>
				<th>Direccion</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($providers as $provider)
				<tr>
					<td>{{{ $provider->nombre }}}</td>
					<td>{{{ $provider->contacto }}}</td>
					<td>{{{ $provider->telefono }}}</td>
					<td>{{{ $provider->correo }}}</td>
					<td>{{{ $provider->direccion }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('providers.destroy', $provider->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('providers.edit', 'Edit', array($provider->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no providers
@endif

@stop
