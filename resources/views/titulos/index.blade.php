@extends('layouts.plantilla')

@section('title', 'Titulos')

@section('content')


<div class="container">

    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem" >{{--Card start--}}
        <div class="card-header text-center text-white" style="background-color: #000000;" >Administrador de titulos</div>
        <div class="card-body" align="center">
            <p class="card-text"><a class="btn btn-warning" href="{{url('titulos/create')}}">Agregar nuevo titulo </a></p>
        </div>
    </div>

    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">{{--Card start--}}
        <div class="card-header text-center text-white" style="background-color: #000000;">Titulos en existencia</div>
            <div class="card-body">{{--CardBody start--}}
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover table-sm">
                        <thead>

                            <tr>
                                <th scope="col">Nombre de titulo</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Nota</th>
                                <th scope="col">Editoriales</th>
                                <th scope="col">Acciones</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($row as $registro)
                                <tr>
                                    <td>{{$registro->nom_libro}}</td>
                                    <td>{{$registro->precio}}</td>
                                    <td>{{$registro->nota}}</td>
                                    <td>{{$registro->editoriales->editorial}}</td>


                                    <td align="" style="width: 1px; white-space: nowrap;">
                                        <a href="{{url('titulos/'.$registro->id.'/edit')}}" class="btn btn-warning" title="Editar Titulo"> <i class="fas fa-edit"></i></a>
                                        <a href="{{url('titulos/'.$registro->id)}}" class="btn btn-danger" title="Eliminar titulo"> <i class="fas fa-trash-alt"></i></a>
                                        <a href="{{url('ConsultaTitulos/'.$registro->id)}}" class="btn btn-info" title="Buscar titulo"> <i class="fas fa-search-plus"></i></a>
                                        <a href="{{url('agregarAutorTitulo/'.$registro->id)}}" class="btn btn-info" title=" Agregar Autores "> <i class="fa-solid fa-user-plus"></i> </a>

                                    </td>
                                    <td class="info">
                                        <a href="{{url('muestraAutoresLibro/'.$registro->id) }}" title="Consultar Autores" class="btn btn-info"> <i class="fas fa-list"></i> </a>

                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan=3>No se encontraron titulos registros</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>{{--CardBody end--}}
            <br> <br> <br> <br><br> <br> <br><br> <br>  <br>
            <div class="card-footer">
                {{$row->links()}}
            </div>
    </div>{{--Card end--}}
</div>


@endsection
