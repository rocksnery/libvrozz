<?php

namespace App\Http\Controllers;

use App\Models\libreria;
use App\Models\Titulo;
use App\Models\venta;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro=venta::paginate(3);
        return view('ventas.index',['row'=>$registro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libreria=libreria::all();
        $row=new venta();
        return view('ventas.create',['row'=>$row, 'libreria'=>$libreria]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row=new venta($request->all());
        $row->save();
        Flash::success("se ha una nueva venta de forma exitosa")->important();

        return redirect('libreria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function ConsultaVentas($id){
        $row=venta::find($id);
        $ventas=venta::all();
        return view('libreria.show',['row'=>$row, 'venta'=>$ventas]);
    }

    public function muestraVentasTitulo($id){

        $row=Titulo::find($id);
        return view('autores.autoresTitulo',['row'=>$row]);
    }

    public function venta_titulo($id){
        $row=venta::find($id);
        $rowven=$row->titulos()->cursorPaginate(3);
        return view('editoriales.editorialrelacionada', ['row'=>$row,'rowven'=>$rowven]);
    }


}
