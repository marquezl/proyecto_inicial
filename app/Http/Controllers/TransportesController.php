<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Transporte;
use Laracasts\Flash\Flash;
use App\Http\Requests\TransporteRequest;

class TransportesController extends Controller
{
    /**
	*	Display a listing of the resource.
    *
	*  @return \Illuminate\Http\Response
	*/
	public function index(Request $request)
	{
		$transportes =  Transporte::OrderBy('id','asc')->paginate(5);
		return view('admin.transportes.index')->with('transportes',$transportes);
	}
    /**
	*	Show the form for creating a new resource.
    *
	*  @return \Illuminate\Http\Response
	*/
	public function create()
	{
		return view('admin.transportes.create');
	}

    /**
	*	Store a newly created resource in storage.
    *
	*  @param \illuminate\Http\Reques $request
	*  @return \Illuminate\Http\Response
	*/
	public function store(transporteRequest $request)
	{
		$transporte = new Transporte($request->all());
		$transporte->save();
		
		Flash::success("Se ha registrado el " . $transporte->nombre_transporte .  " de forma exitosa!");
		return redirect()->route('admin.transportes.index');
		
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
		$transporte = Transporte::find($id);
		return view('admin.transportes.edit')->with('transporte',$transporte);
		
		Flash::error('El transporte ' . $transporte->nombre_transporte  . ' a sido modificado con exito!');
		return redirect()->route('admin.transportes.index');
	}

    /**
	*	Update the specified resource in storage.
    *
	*  @param \illuminate\Http\Reques $request
	*  @param int $id
	*  @return \Illuminate\Http\Response
	*/

	public function update(TransporteRequest $request, $id)
	{
		
		$transporte = Transporte::find($id);
		$transporte->fill($request->all());
		$transporte->save();
		Flash::warning('El transporte ' . $transporte->nombre_transporte . ' ha sido modificado con exito!');
		return redirect()->route('admin.transportes.index');
		
	}

    /**
	*	Remove the specified resource from storage.
    *
	*  @param int $id
	*  @return \Illuminate\Http\Response
	*/
	public function destroy($id)
	{
		
		$transporte = Transporte::find($id);
		$transporte->delete();

		Flash::error('El transporte ' . $transporte->nombre_transporte .  '  ha sido borrado con exito!');
		return redirect()->route('admin.transportes.index');
		
	}


}
