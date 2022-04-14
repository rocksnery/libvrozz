<?php

namespace App\Http\Controllers;


use App\Models\libreria;
use App\Models\Titulo;
use App\Models\venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;

class LibreriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $registro = DB::table('librerias')->get();
        $registro = DB::table('librerias')->paginate(5);
        $registro = DB::table('librerias')->pluck('nombre');

        $totlib = DB::table('librerias')->count();

        $registro = DB::table('librerias')->select('id','nombre','calle','ciudad')->get();

        return view('libreria.index',['row'=>$registro,'totlib'=>$totlib]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libreria.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre = $request->input('nombre');
        $calle = $request->input('calle');
        $ciudad = $request->input('ciudad');
        $pais = $request->input('pais');
        $cp = $request->input('cp');

        DB::table('librerias')->insert(['nombre'=> $nombre, 'calle'=> $calle, 'ciudad' => $ciudad, 'pais' => $pais, 'cp' => $cp]);

        Flash::success("se ha registrado el libreria de forma exitosa")->important();

        return redirect('librerias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\libreria  $libreria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = DB::select('select * from librerias where id = ?',[$id]);

        $row = DB::table('librerias')->select('id','nombre','calle','ciudad','pais','cp')
         ->where('id', $id)
         ->get();

         return view('libreria.delete',['row'=>$row]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\libreria  $libreria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = DB::select('select * from librerias where id= ?',[$id]);

        return view('libreria.edit',['row'=>$row]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\libreria  $libreria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nombre = $request->input('nombre');
        $calle = $request->input('calle');
        $ciudad = $request->input('ciudad');
        $pais = $request->input('pais');
        $cp = $request->input('cp');

        /*
        DB::update('update librerias set nombre= ?,calle=?,ciudad=?,pais=?,cp=? where id =?',[$nombre,$calle,$ciudad,$pais,$cp,$id]);
        */
        DB::table('librerias')
            ->where('id',$id)
            ->update(['nombre'=> $nombre, 'calle'=> $calle, 'ciudad'=> $ciudad, 'pais'=> $pais, 'cp'=> $cp]);


        Flash::warning("Se ha modificado la libreria");
        flash("se ha modificado la libreria")->warning()->important();

        return redirect('libreria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\libreria  $libreria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from librerias where id=?' ,[$id]);

        Flash::error("Se ha eliminado la libreria")->important();

        return redirect('libreria');
    }

    public function muestraVentasTitulos($id){

        $row=venta::find($id);
        return view('ventas.ventas_titulos',['row'=>$row]);
    }




}
