<?php

namespace App\Http\Controllers;

use App\Models\autor;
use App\Models\Titulo;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro=autor::cursorPaginate(3);
        return view('autores.index', ['row'=>$registro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autores=Titulo::all();
        $row=new autor();
        return view('autores.create',['row'=>$row, 'autores'=>$autores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row=new autor($request->all());
        $row->save();
        Flash::success("se ha registrado el autor".$row->autor."de forma exitosa")->important();

        return redirect('autores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $row=autor::find($id); 
        return view('autores.delete',['row'=>$row]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $row=autor::find($id);
        $titulos=Titulo::all();
        return view('autores.edit',['row'=>$row, 'autores'=>$titulos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $row=autor::find($id);
        $row->fill($request->all());
        $row->update();

        Flash::warning("Se ha modificado el autor");
        flash("se ha modificado el autor")->warning()->important();


        return redirect('autores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $row=autor::find($id);
        $row->delete();

        Flash::error("Se ha eliminado el autor")->important();

        return redirect('autores');
    }
}
