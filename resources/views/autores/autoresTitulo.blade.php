@extends('layouts.plantilla')

@section('title', 'Opciones')

@section('content')
<br><br><br>
<div class="container ">
    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">
        <div class="card-header text-center text-white" style="background-color: #000000;">Titulos de {{$row->nom_libro}}</div>
        <div class="card-body">
            <div class="container   form-group col-md-12">

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr >
                                <th> Nombre </th>
                                <th> Apellido paterno </th>
                                <th> Apellido materno </th>
                                <th> Telefono </th>
                                <th> calle </th>
                                <th> Nota </th>

                                <th> Opciones </th>
                                <th> Relaciones </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($row->autores as $registro)
                                <tr>
                                    <td > {{$registro->au_nombre}} </td>
                                    <td > {{$registro->au_ap}} </td>
                                    <td > {{$registro->au_am}} </td>
                                    <td > {{$registro->telefono}} </td>
                                    <td > {{$registro->calle}} </td>
                                    <td > {{$registro->pivot->Nota}} </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2"> no se encontraron libros relacionados con el Autor {{$row->au_nombre}} </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
        <div class="card-footer">
            <a href="{{url('titulos')}}" class="btn btn-danger"> Regresar</a>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
