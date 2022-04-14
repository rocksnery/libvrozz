@extends('layouts.plantilla')

@section('title', 'Eliminar libreria')

@section('content')
<br><br> <br>
<div class="container ">
    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">
        <div class="card-header text-center text-white" style="background-color: #C62929;">Eliminar Libreria</div>
        <div class="card-body">
            <div class="container">
            <form  method="POST" action="{{url('libreria/'.$row[0]->id)}}">
                <div class="form-group col-md-6">
                    <label for="inputNom">Deseas borrar la libreria:</label>
                    <input type="text" class="form-control" name="nombre" value="{{$row[0]->nombre}}" disabled>
                </div>
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="form-group" align="center">
                        <button type="submit" class="btn btn-danger ">Eliminar</button>
                        <a href="{{url('libreria')}}" title="Cancelar y regresar" class="btn btn-success">cancelar</a>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br>

@endsection
