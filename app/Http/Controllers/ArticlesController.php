<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ArticleRequest;


class ArticlesController extends Controller
{
    /**
	*	Display a listing of the resource.
    *
	*  @return \Illuminate\Http\Response
	*/
	public function index(Request $request)
	{
		$articles =  Article::Search($request->title)->OrderBy('id','DESC')->paginate(5);
		$articles->each(function($articles){
			$articles->category;
			$articles->user;
		});

		return view('admin.articles.index')
			->with('articles',$articles);
	}
    /**
	*	Show the form for creating a new resource.
    *
	*  @return \Illuminate\Http\Response
	*/
	public function create()
	{
		$categories = Category::orderBy('name','ASC')->pluck('name','id');
		$tags = Tag::orderBy('name','ASC')->pluck('name','id');
		return view('admin.articles.create')
			->with('categories',$categories)
			->with('tags',$tags);
	}

    /**
	*	Store a newly created resource in storage.
    *
	*  @param \illuminate\Http\Reques $request
	*  @return \Illuminate\Http\Response
	*/
	public function store(ArticleRequest $request)
	{

		# Manipilación de Imagenes
		if ($request->file('image'))
		{
			$file = $request->file('image');
			$name = 'sistema_' . time() . '.' . $file->getClientOriginalExtension();
			$path = public_path() . '\images\articles';
			$file->move($path,$name);
		}
		$article = new Article($request->all());
		$article->user_id =\Auth::user()->id ;

		$article->category_id = $request->category_id;
		$article->save();

		$article->tags()->sync($request->tags);

		$image = new Image();
		$image->name = $name;
		$image->article()->associate($article);
		$image->save();
		
		Flash::success("El articulo " . $article->name . " ha sido editado con exito!");
		return redirect()->route('admin.articles.index');
		
	}

    /**
	*	Show the form for editing the specified resource.
    *
	*  @param int $id
	*  @return \Illuminate\Http\Response
	*/
	public function edit($id) 
	{
		$article 	= Article::find($id);
		$article->category;
		$categories = Category::orderBy('name','DESC')->pluck('name','id');
		$tags 		= Tag::orderBy('name','DESC')->pluck('name','id');

		$my_tags = $article->tags->pluck('id')->ToArray();
		return view('admin.articles.edit')
			->with('categories',$categories)
			->with('article',$article)
			->with('tags',$tags)
			->with('my_tags',$my_tags);
		
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
		
		$article = Article::find($id);
		$article->fill($request->all());
		$article->save();
		$article->tags()->sync($request->tags);
		Flash::warning('El artículo  ' . $article->title . ' ha sido modificado con exito!');
		return redirect()->route('admin.articles.index');
		
	}

    /**
	*	Remove the specified resource from storage.
    *
	*  @param int $id
	*  @return \Illuminate\Http\Response
	*/
	public function destroy($id)
	{
		
		$article = Article::find($id);
		$article->delete();

		Flash::error('El articulo ' . $article->title . ' ha sido borrado con exito!');
		return redirect()->route('admin.articles.index');
		
	}

}
