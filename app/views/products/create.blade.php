@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Create Product</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::open(array('route' => 'products.store', 'class' => 'form-horizontal')) }}

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
              {{ Form::select('presentacion', Presentationtype::lists('nombre', 'id'), Input::old('presentacion'), array('class'=>'form-control', 'placeholder'=>'Presentacion')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('fevencimiento', 'Fevencimiento:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
                {{ Form::macro('date', function(){
                    return  ' <input type="date" name="fevencimiento" id="fevencimiento" class="form-control" placeholder="Fevencimiento">';
                }); }}
                {{ Form::date() }}
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
              {{ Form::select('proveedor', Provider::lists('nombre', 'id'), Input::old('proveedor'), array('class'=>'form-control', 'placeholder'=>'Proveedor')) }}
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
      {{ Form::submit('Create', array('class' => 'btn btn-lg btn-primary')) }}
    </div>
</div>

{{ Form::close() }}

@stop


