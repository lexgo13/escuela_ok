<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
//Utilizando traits de auth por defecto........................................
	use Illuminate\Foundation\Auth\AuthenticatesUsers;
	//use Illuminate\Foundation\Auth\RegistersUsers;
//use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;
//...............................................................................
use App\Administrador;





class AdministradorController extends Controller
{



  	use AuthenticatesUsers;
    protected $guard = 'admin';
    protected $loginView = 'administradores.login';


    //public  function authenticated(){
    //    return redirect('adminprincipal');
    //}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administradoress = Administrador::orderBy('id', 'desc')->paginate(8);
        return view('administradores.index')->with('administradoress',$administradoress);
    }


    public function create(){
    	return view('administradores.register');
    }


    public function store(Request $request)
    {

             // validate the data
        $this->validate($request, array(
                'name' => 'required|max:255|min:5',
                'password' => 'required|min:6|confirmed',
                            ));

        // store in the database

        $administrador = new Administrador;

        $administrador->name = $request->name;
        $administrador->rol = $request->rol;
        $administrador->email = $request->email;
        $administrador->password = bcrypt($request->password);

        $administrador->save();



      	return view('administradores.login');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unadministrador = Administrador::find($id);
        return view('administradores.show')->with('unadministrador',$unadministrador);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the database and save as a var
        $unadministrador = Administrador::find($id);
        // return the view and pass in the var we previously created
        return view('administradores.edit')->with('unadministrador',$unadministrador);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // Validate the data
        $unadministrador = Administrador::find($id);

        $this->validate($request, array(
                'name' => 'required|max:255|min:5',
                            ));




        // Save the data to the database



        $unadministrador->name = $request->name;
        $administrador->rol = $request->rol;
        $administrador->email = $request->email;
        $administrador->password = $request->password;

        $unaadministrador->save();

        // set flash data with success message
        //Session::flash('success', 'This post was successfully saved.');

        // redirect with flash data to posts.show
        return Redirect::to('#');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unadministrador = Administrador::find($id);

        $unadministrador::destroy($id);


         return Redirect::to('admin');
    }

}
