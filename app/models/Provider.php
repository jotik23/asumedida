<?php

class Provider extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'nombre' => 'required',
		'contacto' => 'required',
		'telefono' => 'required',
		'correo' => 'required',
		'direccion' => 'required'
	);
}
