@extends('layouts.plantilla')

@section('title', 'Titulos')

@section('content')
<br><br><br>

<div class="container">
    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">{{--Card start--}}
        <div class="card-header text-center text-white" style="background-color: #000000;">Listado de ventas</div>
            <div class="card-body">{{--CardBody start--}}

                <p class="card-text"><a class="btn btn-dark" href="{{url('ventas_listado')}}">Imprimir Listado</a></p>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Fecha de Venta</th>
                                <th scope="col">Libreria</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($row as $registro)
                                <tr>
                                    <td>{{$registro->fecha_venta}}</td>
                                    <td>{{$registro->libreria->nombre}}</td>

                                    <td align="" style="width: 1px; white-space: nowrap;">
                                        <a href="{{url('ventast/create')}}" class="btn btn-info" title=" Agregar Autores "> <i class="fa-solid fa-user-plus"></i> </a>
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
            <div class="card-footer">
                {{$row->links()}}
            </div>
    </div>{{--Card end--}}
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@endsection
