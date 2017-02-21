<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Transporte;
use App\Persona;
use Laracasts\Flash\Flash;
use App\Http\Requests\PersonaRequest;

class PersonasController extends Controller
{
    /**
	*	Display a listing of the resource.
    *
	*  @return \Illuminate\Http\Response
	*/
	public function index(Request $request)
	{
		$personas =  Persona::OrderBy('id','asc')->paginate(5);
		return view('admin.personas.index')->with('personas',$personas);
	}
    /**
	*	Show the form for creating a new resource.
    *
	*  @return \Illuminate\Http\Response
	*/
	public function create()
	{
		return view('admin.personas.create');
	}

    /**
	*	Store a newly created resource in storage.
    *
	*  @param \illuminate\Http\Reques $request
	*  @return \Illuminate\Http\Response
	*/
	public function store(PersonaRequest $request)
	{
		$persona = new Persona($request->all());
		$persona->save();
		
		// Flash::success("Se ha registrado " . $persona->primer_nombre . ' ' . $persona->primer_apellido . " de forma exitosa!");
		return redirect()->route('admin.personas.index');
		
	}

    /**
	*	Display the specified resource.
    *
	*  @return \Illuminate\Http\Response
	*/

	public function Show($id)
	{
		//
	}

    /**
	*	Show the form for editing the specified resource.
    *
	*  @param int $id
	*  @return \Illuminate\Http\Response
	*/
	public function edit($id)
	{
		$persona = Persona::find($id);
		return view('admin.personas.edit')->with('persona',$persona);
		
		Flash::error('La persona ' . $persona->primer_nombre . $persona->primer_apellido . ' a sido editada de forma exitosa!');
		return redirect()->route('admin.personas.index');
	}

    /**
	*	Update the specified resource in storage.
    *
	*  @param \illuminate\Http\Reques $request
	*  @param int $id
	*  @return \Illuminate\Http\Response
	*/

	public function update(Request $request, $id)
	{
		$persona = Persona::find($id);
		$persona->fill($request->all());
		$persona->save();
		Flash::warning('El usuario  ' . $persona->primer_nombre . ' ' . $persona->primer_apellido . ' ha sido modificado con exito!');
		return redirect()->route('admin.personas.index');
	}

    /**
	*	Remove the specified resource from storage.
    *
	*  @param int $id
	*  @return \Illuminate\Http\Response
	*/
	public function destroy($id)
	{
		
		$persona = Persona::find($id);
		$persona->delete();

		Flash::error('El usuario ' . $persona->primer_nombre . ' ' . $persona->primer_apellido . '  ha sido borrado de forma exitosa!');
		return redirect()->route('admin.personas.index');
		
	}


}
