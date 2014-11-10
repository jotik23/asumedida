@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Edit Product</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::model($product, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('products.update', $product->id))) }}

        <div class="form-group">
            {{ Form::label('nombre', 'Nombre:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('nombre', Input::old('nombre'), array('class'=>'form-control', 'placeholder'=>'Nombre')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('descripcion', 'Descripcion:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('descripcion', Input::old('descripcion'), array('class'=>'form-control', 'placeholder'=>'Descripcion')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('presentacion', 'Presentacion:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('presentacion', Input::old('presentacion'), array('class'=>'form-control', 'placeholder'=>'Presentacion')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('fevencimiento', 'Fevencimiento:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('fevencimiento', Input::old('fevencimiento'), array('class'=>'form-control', 'placeholder'=>'Fevencimiento')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('precio', 'Precio:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('precio', Input::old('precio'), array('class'=>'form-control', 'placeholder'=>'Precio')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('iva', 'Iva:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('iva', Input::old('iva'), array('class'=>'form-control', 'placeholder'=>'Iva')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('cantidad', 'Cantidad:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'cantidad', Input::old('cantidad'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('proveedor', 'Proveedor:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('proveedor', Input::old('proveedor'), array('class'=>'form-control', 'placeholder'=>'Proveedor')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('multiple', 'Multiple:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'multiple', Input::old('multiple'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('padre', 'Padre:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'padre', Input::old('padre'), array('class'=>'form-control')) }}
            </div>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit('Update', array('class' => 'btn btn-lg btn-primary')) }}
      {{ link_to_route('products.show', 'Cancel', $product->id, array('class' => 'btn btn-lg btn-default')) }}
    </div>
</div>

{{ Form::close() }}

@stop