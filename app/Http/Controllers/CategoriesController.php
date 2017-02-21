<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use Laracasts\Flash\Flash;
use App\Http\Requests\CategoryRequest;


class CategoriesController extends Controller
{
    /**
	*	Display a listing of the resource.
    *
	*  @return \Illuminate\Http\Response
	*/
	public function index()
	{
		$categories =  Category::OrderBy('id','asc')->paginate(5);
		return view('admin.categories.index')->with('categories',$categories);
	}

    /**
	*	Show the form for creating a new resource.
    *
	*  @return \Illuminate\Http\Response
	*/
	public function create()
	{
		return view('admin.categories.create');
	}

    /**
	*	Store a newly created resource in storage.
    *
	*  @param \illuminate\Http\Reques $request
	*  @return \Illuminate\Http\Response
	*/
	public function store(CategoryRequest $request)
	{
		$category = new Category($request->all());
		$category->save();
		
		Flash::success("La categoria " . $category->name . " a sido editada exito!");
		return redirect()->route('admin.categories.index');
		
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
		$category = Category::find($id);
		return view('admin.categories.edit')->with('category',$category);
		
		Flash::error('La categoria ' . $category->name . ' a sido borrada de forma exitosa!');
		return redirect()->route('admin.categories.index');
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
		
		$category = Category::find($id);
		//$category->fill($request->all());
		$category->name  = $request->name;
		$category->save();
		Flash::warning('La categoria ' . $category->name . ' ha sido modificada con exito!');
		return redirect()->route('admin.categories.index');
		
	}

    /**
	*	Remove the specified resource from storage.
    *
	*  @param int $id
	*  @return \Illuminate\Http\Response
	*/
	public function destroy($id)
	{
		
		$category = Category::find($id);
		$category->delete();

		Flash::error('La categoria ' . $category->name . ' ha sido borrada con exito!');
		return redirect()->route('admin.categories.index');
		
	}

}

