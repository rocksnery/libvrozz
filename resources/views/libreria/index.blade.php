@extends('layouts.plantilla')

@section('title', 'Titulos')

@section('content')


<div class="container">

    <div class="card border-warning mb-2" style="max-width: 100rem; margin-top: 1rem" >{{--Card start--}}
        <div class="card-header text-center text-white" style="background-color: #000000;" >Administrador de Librerias</div>
        <div class="card-body" align="center">
            <p class="card-text"><a class="btn btn-dark" href="{{url('libreria/create')}}">Agregar nueva Libreria </a></p>

            <p class="card-text"><a class="btn btn-dark" href="{{url('editorial_listado')}}">Imprimir Listado</a></p>
        </div>
    </div>

    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">{{--Card start--}}
        <div class="card-header text-center text-white" style="background-color: #000000;">Listado de Librerias registradas</div>
            <div class="card-body">{{--CardBody start--}}
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Calle</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Opciones</th>
                                <th scope="col">Ventas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($row as $registro)
                                <tr>
                                    <td>{{$registro->nombre}}</td>
                                    <td>{{$registro->calle}}</td>
                                    <td>{{$registro->ciudad}}</td>


                                    <td align="" style="width: 1px; white-space: nowrap;">
                                        <a href="{{url('libreria/'.$registro->id.'/edit')}}" class="btn btn-warning" title="Editar Libreria"> <i class="fas fa-edit"></i></a>
                                        <a href="{{url('libreria/'.$registro->id)}}" class="btn btn-danger" title="Eliminar Libreria"> <i class="fas fa-trash-alt"></i></a>
                                    </td>

                                    <td class="info">
                                        <a href="{{url('ventas')}}" title="Consultar ventas" class="btn btn-info"> <i class="fas fa-list"></i> </a>
                                        <a href="{{url('ventas/create')}}" class="btn btn-info" title=" Agregar Ventas "> <i class="fa-solid fa-user-plus"></i> </a>

                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan=3>No se encontraron titulos registros</td>
                                </tr>
                            @endforelse

                            <th class="info">
                                <th>Total de Librerias</th>
                                <td>{{$totlib}}</td>

                            </th>

                        </tbody>
                    </table>
                </div>
            </div>{{--CardBody end--}}
            <div class="card-footer">

            </div>
    </div>{{--Card end--}}
</div>
<br><br><br><br><br><br><br><br> <br>



@endsection
