<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;


class UsersController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
	*	Display a listing of the resource.
    *
	*  @return \Illuminate\Http\Response
	*/
	public function index()
	{
		$users =  User::OrderBy('id','asc')->paginate(5);
		return view('admin.users.index')->with('users',$users);
	}

    /**
	*	Show the form for creating a new resource.
    *
	*  @return \Illuminate\Http\Response
	*/
	public function create()
	{
		return view('admin.users.create');
	}

    /**
	*	Store a newly created resource in storage.
    *
	*  @param \illuminate\Http\Reques $request
	*  @return \Illuminate\Http\Response
	*/
	public function store(UserRequest $request)
	{
		$user = new User($request->all());
		$user->password = bcrypt($request->password);
		$user->save();
		
		Flash::success("Se ha registrado " . $user->name . " de forma exitosa!");
		return redirect()->route('admin.users.index');
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
		$user = User::find($id);
		return view('admin.users.edit')->with('user',$user);
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
		$user = User::find($id);
		$user->fill($request->all());
		$user->save();
		Flash::warning('El usuario  ' . $user->name . ' ha sido modificado con exito!');
		return redirect()->route('admin.users.index');
	}

    /**
	*	Remove the specified resource from storage.
    *
	*  @param int $id
	*  @return \Illuminate\Http\Response
	*/
	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();
		Flash::warning('El usuario ' . $user->name . ' ha sido borrado de forma exitosa!');
		return redirect()->route('admin.users.index');
	}

}

