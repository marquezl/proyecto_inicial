<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tag;
use Laracasts\Flash\Flash;
use App\Http\Requests\TagRequest;

class TagsController extends Controller
{
    /**
	*	Display a listing of the resource.
    *
	*  @return \Illuminate\Http\Response
	*/
	public function index(Request $request)
	{
		$tags =  Tag::search($request->name)->OrderBy('id','asc')->paginate(5);
		return view('admin.tags.index')->with('tags',$tags);
	}

    /**
	*	Show the form for creating a new resource.
    *
	*  @return \Illuminate\Http\Response
	*/
	public function create()
	{
		return view('admin.tags.create');
	}

    /**
	*	Store tags newly created resource in storage.
    *
	*  @param \illuminate\Http\Reques $request
	*  @return \Illuminate\Http\Response
	*/
	public function store(TagRequest $request)
	{
		$tag = new Tag($request->all());
		$tag->save();
		
		Flash::success('El tag ' . $tag->name . ' ha sido creado con exito!');
		return redirect()->route('admin.tags.index');
		
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
		$tag = Tag::find($id);
		return view('admin.tags.edit')->with('tag',$tag);
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
		
		$tag = Tag::find($id);
		//$tag->fill($request->all());
		$tag->name  = $request->name;
		$tag->save();
		Flash::warning('El tag ' . $tag->name . ' ha sido modificado con exito!');
		return redirect()->route('admin.tags.index');
		
	}

    /**
	*	Remove the specified resource from storage.
    *
	*  @param int $id
	*  @return \Illuminate\Http\Response
	*/
	public function destroy($id)
	{
		
		$tag = Tag::find($id);
		$tag->delete();

		Flash::error('El tag ' . $tag->name . ' ha sido borrada con exito!');
		return redirect()->route('admin.tags.index');
		
	}

}

