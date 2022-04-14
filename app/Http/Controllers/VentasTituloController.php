<?php

namespace App\Http\Controllers;

use App\Models\Titulo;
use App\Models\venta;
use App\Models\venta_titulo;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use \Barryvdh\DomPDF\Facade\Pdf as PDF;

class VentasTituloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo=Titulo::all();
        $venta=venta::all();
        $row=new venta_titulo();
        return view('ventast.create',['row'=>$row, 'venta'=>$venta, 'titulo'=>$titulo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row=new venta_titulo($request->all());
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

    public function imprimir(){

        $rows=venta_titulo::all();
        $pdf= PDF::loadView('pdf_ventas.ventas_listado',['rows'=>$rows])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream('listado-ventas-'.date('Ymd').'.pdf');
    }
}
