<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Provincia;


use Illuminate\Support\Facades\Redirect;

class ProvinciaController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinciass = Provincia::orderBy('id', 'desc')->paginate(8);
        return view('otros.provincia.index')->with('provinciass',$provinciass);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('otros.provincia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

             // validate the data
        $this->validate($request, array(
                'nombre' => 'required|max:255|min:5|unique:provincia',
                            ));

        // store in the database

        $provincia = new Provincia;

        $provincia->nombre = $request->nombre;


        $provincia->save();



        return Redirect::to('#');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unaprovincia = Provincia::find($id);
        return view('otros.provincia.show')->with('unaprovincia',$unaprovincia);
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
        $unaprovincia = Provincia::find($id);
        // return the view and pass in the var we previously created
        return view('otros.provincia.edit')->with('unaprovincia',$unaprovincia);
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
        $unaprovincia = Provincia::find($id);

        $this->validate($request, array(
                'nombre' => 'required|max:255|min:5',
                            ));




        // Save the data to the database



        $unaprovincia->nombre = $request->nombre;


        $unaprovincia->save();

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
        $unaprovincia = Provincia::find($id);

        $unaprovincia::destroy($id);


         return Redirect::to('provincia');
    }
}
