<?php

namespace App\Http\Controllers;

use App\Models\Editoriale;
use App\Models\Titulo;
use App\Models\autor;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class TitulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro=Titulo::cursorPaginate(3);
        return view('titulos.index', ['row'=>$registro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $editorial=Editoriale::all();
        $row=new titulo();
        return view('titulos.create',['row'=>$row, 'editorial'=>$editorial]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row=new titulo($request->all());
        $row->save();

        Flash::success("se ha registrado el titulo".$row->titulo."de forma exitosa")->important();

        return redirect('titulos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row=Titulo::find($id);
        return view('titulos.delete',['row'=>$row]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=Titulo::find($id);
        $editorial=Editoriale::all();
        return view('titulos.edit',['row'=>$row, 'editorial'=>$editorial]);
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
        $row=Titulo::find($id);
        $row->fill($request->all());
        $row->update();

        Flash::warning("Se ha modificado el titulo");
        flash("se ha modificado el titulo")->warning()->important();

        return redirect('titulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row=Titulo::find($id);
        $row->delete();

        Flash::error("Se ha eliminado el titulo")->important();

        return redirect('titulos');
    }

    public function ConsultaTitulos($id){
        $row=Titulo::find($id);
        $editorial=Editoriale::all();
        return view('titulos.show',['row'=>$row, 'editorial'=>$editorial]);
    }

    public function muestraAutoresLibro($id){

        $row=Titulo::find($id);
        return view('autores.autoresTitulo',['row'=>$row]);
    }

    public function agregarAutorTitulo($id){

        $nom_editorial=Editoriale::all();
        $autores=autor::all();

        $row=Titulo::find($id);

        return view('titulos.agregarAutorTitulo',['row'=>$row,'nom_editorial'=>$nom_editorial,"autores"=>$autores]);
    }

}
