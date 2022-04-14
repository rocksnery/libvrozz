@extends('layouts.plantilla')

@section('title', 'mostrar')

@section('content')

<div class="container col-md-offset-0 col-md-12">
    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">
        <div class="card-header text-center text-white" style="background-color: #000000;">Titulos de {{$row->editorial}}</div>
        <div class="card-body">
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr >
                                <th> Titulo </th>
                                <th> Nota </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($rowlib as $registro)
                                <tr>
                                    <td > {{$registro->nom_libro}} </td>
                                    <td > {{$registro->nota}} </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2"> no se encontraron libros relacionados con la editorial {{$row->editorial}} </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
        <div class="card-footer">
            <a href="{{url('editoriales')}}" class="btn btn-danger"> Regresar</a>
        </div>
    </div>
</div>

@endsection
