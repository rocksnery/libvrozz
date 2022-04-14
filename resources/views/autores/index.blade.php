@extends('layouts.plantilla')

@section('title', 'Autores')

@section('content')


<div class="container-fluid">

    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem" >{{--Card start--}}
        <div class="card-header text-center text-white" style="background-color: #000000;" >Lista de Autores del libro</div>
        <div class="card-body" align="center">
            <p class="card-text"><a class="btn btn-dark" href="{{url('autores/create')}}">Agregar nuevo Autor </a></p>
        </div>
    </div>

    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">{{--Card start--}}
        <div class="card-header text-center text-white" style="background-color: #000000;">Listado de Autores registrados</div>
            <div class="card-body">{{--CardBody start--}}
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido paterno</th>
                                <th scope="col">Apellido materno</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Calle</th>

                                <th scope="col">Opciones</th>
                                <th scope="col">Relacionado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($row as $registro)
                                <tr>
                                    <td>{{$registro->au_nombre}}</td>
                                    <td>{{$registro->au_ap}}</td>
                                    <td>{{$registro->au_am}}</td>
                                    <td>{{$registro->telefono}}</td>
                                    <td>{{$registro->calle}}</td>
                                    <td align="" style="width: 1px; white-space: nowrap;">
                                        <a href="{{url('autores/'.$registro->id.'/edit')}}" class="btn btn-warning" title="Editar Autor"> <i class="fas fa-edit"></i></a>
                                        <a href="{{url('autores/'.$registro->id)}}" class="btn btn-danger" title="Eliminar Autor"> <i class="fas fa-trash-alt"></i></a>
                                        <a href="{{url('muestraAutoresLibro/'.$registro->id)}}" class="btn btn-info" title="Buscar Autor"> <i class="fas fa-search-plus"></i></a>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan=3>No se encontraron Autores registros</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>{{--CardBody end--}}
            <div class="card-footer">
                {{$row->links()}}
            </div>
    </div>{{--Card end--}}
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
