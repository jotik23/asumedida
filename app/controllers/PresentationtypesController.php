<?php

class PresentationtypesController extends BaseController {

	/**
	 * Presentationtype Repository
	 *
	 * @var Presentationtype
	 */
	protected $presentationtype;

	public function __construct(Presentationtype $presentationtype)
	{
		$this->presentationtype = $presentationtype;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$presentationtypes = $this->presentationtype->all();

		return View::make('presentationtypes.index', compact('presentationtypes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('presentationtypes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Presentationtype::$rules);

		if ($validation->passes())
		{
			$this->presentationtype->create($input);

			return Redirect::route('presentationtypes.index');
		}

		return Redirect::route('presentationtypes.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$presentationtype = $this->presentationtype->findOrFail($id);

		return View::make('presentationtypes.show', compact('presentationtype'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$presentationtype = $this->presentationtype->find($id);

		if (is_null($presentationtype))
		{
			return Redirect::route('presentationtypes.index');
		}

		return View::make('presentationtypes.edit', compact('presentationtype'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Presentationtype::$rules);

		if ($validation->passes())
		{
			$presentationtype = $this->presentationtype->find($id);
			$presentationtype->update($input);

			return Redirect::route('presentationtypes.show', $id);
		}

		return Redirect::route('presentationtypes.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->presentationtype->find($id)->delete();

		return Redirect::route('presentationtypes.index');
	}

}
