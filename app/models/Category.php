<?php

class Category extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'nombre' => 'required',
		'descripcion' => 'required',
		'foto' => 'required',
		'padre' => 'required'
	);
}
