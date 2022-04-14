<?php

namespace App\Http\Controllers;

use App\Models\Editoriale;
use Illuminate\Http\Request;

use \Barryvdh\DomPDF\Facade\Pdf as PDF;
use Laracasts\Flash\Flash;

class EditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registro=Editoriale::paginate(3);
        return view('editoriales.index',['row'=>$registro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $row=new Editoriale();
        return view('editoriales.create', ['row'=>$row]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row= new Editoriale($request->all());
        $row->save();

        Flash::success("se ha registrado la editorial" .$row->editorial. "de forma exitosa")->important();

        return redirect('editoriales');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row=Editoriale::find("$id");
        return view('editoriales.delete',['row'=>$row]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=Editoriale::find($id);
        return view('editoriales.edit',['row'=>$row]);
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
        $row=Editoriale::find($id);
        $row->fill($request->all());
        $row->update();

        Flash::warning("Se ha modificado la editorial");
        flash("se ha modificado la editorial")->warning()->important();

        return redirect(url('editoriales'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row=Editoriale::find($id);
        $row->delete();

        Flash::error("Se ha eliminado la editorial")->important();

        return redirect('editoriales');
    }

    public function ConsultaEditoriale($id){
        $row=Editoriale::find($id);
        return view('editoriales.show', ['row'=>$row]);
    }

    public function EditorialRelacionada($id){
        $row=Editoriale::find($id);
        $rowlib=$row->titulos()->cursorPaginate(3);
        return view('editoriales.editorialrelacionada', ['row'=>$row,'rowlib'=>$rowlib]);
    }


    public function imprimir(){

        $rows=Editoriale::all();
        $pdf= PDF::loadView('pdf.editorial_listado',['rows'=>$rows])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->stream('listado-editoriales-'.date('Ymd').'.pdf');
    }

}
