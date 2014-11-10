<?php

class Presentationtype extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'nombre' => 'required',
		'descripcion' => 'required'
	);
}
