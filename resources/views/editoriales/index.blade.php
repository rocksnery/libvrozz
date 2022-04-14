@extends('layouts.plantilla')

@section('title', 'Usuarios')

@section('content')


<div class="container">

    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem" >{{--Card start--}}
        <div class="card-header text-center text-white" style="background-color: #000000;" >Administrador de Editoriales</div>
        <div class="card-body" align="center">
            <p class="card-text"><a class="btn btn-dark" href="{{url('editoriales/create')}}">Agregar nueva </a></p>

            <p class="card-text"><a class="btn btn-dark" href="{{url('editorial_listado')}}" target="_blank" >Imprimir Listado</a></p>

        </div>
    </div>

    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">{{--Card start--}}
        <div class="card-header text-center text-white" style="background-color: #000000;">Listado de usuarios registrados</div>
            <div class="card-body">{{--CardBody start--}}
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Editorial</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Acciones</th>
                                <th scope="col">Opciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($row as $registro)
                                <tr>
                                    <td>{{$registro->editorial}}</td>
                                    <td>{{$registro->nombre}}</td>
                                    <td>{{$registro->ciudad}}</td>
                                    <td align="" style="width: 1px; white-space: nowrap;">
                                        <a href="{{url('editoriales/'.$registro->id.'/edit')}}" class="btn btn-warning"> <i class="fas fa-edit"></i></a>
                                        <a href="{{url('editoriales/'.$registro->id)}}" class="btn btn-danger"> <i class="fas fa-trash-alt"></i></a>
                                        <a href="{{url('ConsultaEditoriale/'.$registro->id)}}" class="btn btn-info"> <i class="fas fa-search-plus"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{url('EditorialRelacionada/'.$registro->id)}}" class="btn btn-primary" title="cons" > <i class="fas fa-list"></i> </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan=3>No se encontraron registros</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>{{--CardBody end--}}
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="card-footer">
                {{$row->links()}}
            </div>
    </div>{{--Card end--}}
</div>



@endsection
