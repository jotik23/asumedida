<?php

class Product extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'nombre' => 'required',
		'descripcion' => 'required',
		'presentacion' => 'required',
		'fevencimiento' => 'required',
		'precio' => 'required',
		'iva' => 'required',
		'cantidad' => 'required',
		'proveedor' => 'required',
		'multiple' => 'required',
		'padre' => 'required'
	);
}
