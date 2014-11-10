<?php

class InicioController extends BaseController {

	/**
	 * Provider Repository
	 *
	 * @var Provider
	 */
	protected $begin;

	public function index()
	{
		//$begin = $this->categories->all();
		$categorias = Category::where('padre', '=', 0)->get();
		$productos = Product::all();
		return View::make('index', compact('categorias','productos'));
	}
}

?>