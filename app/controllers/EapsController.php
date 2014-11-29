<?php

class EapsController extends \BaseController {

	/**
	 * Display a listing of eaps
	 *
	 * @return Response
	 */
	public function index()
	{
		$eaps = Eap::all();

		return View::make('Eaps.index', compact('eaps'));
	}

	/**
	 * Show the form for creating a new eaps
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Eaps.create');
	}

	/**
	 * Store a newly created eaps in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// $validator = Validator::make($data = Input::all(), Eap::$rules);

		// if ($validator->fails())
		// {
		// 	return Redirect::back()->withErrors($validator)->withInput();
		// }

		// $eap = new Eap();
		// $eap->nombre = Input::get('nombre');
		// $eap->codigo = Input::get('codigo');
		// $eap->save();

		Eap::create(Input::all()); //create($data);

		return Redirect::route('eaps.index');
	}

	/**
	 * Display the specified eaps.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$eaps = Eap::findOrFail($id);

		return View::make('eaps.show', compact('eaps'));
	}

	/**
	 * Show the form for editing the specified eaps.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$eaps = Eap::find($id);

		return View::make('eaps.edit', compact('eaps'));
	}

	/**
	 * Update the specified eaps in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$eaps = Eap::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Eap::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$eaps->update($data);

		return Redirect::route('eaps.index');
	}

	/**
	 * Remove the specified eaps from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Eap::destroy($id);

		return Redirect::route('eaps.index');
	}

}

