@extends('layouts.plantilla')

@section('title', 'Eliminar titulo')

@section('content')

<div class="container col-md-offset-0">
    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">
        <div class="card-header text-center text-white" style="background-color: #C62929;">Eliminar Titulo</div>
        <div class="card-body">
            <div class="container">
            <form  method="POST" action="{{url('titulos/'.$row->id)}}">
                <div class="form-group col-md-6">
                    <label for="inputNom">Deseas borrar el Titulo:</label>
                    <input type="text" class="form-control" name="nom_libro" value="{{$row->nom_libro}}" disabled>
                </div>
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="form-group" align="center">
                        <button type="submit" class="btn btn-success">Eliminar</button>
                        <a href="{{url('titulos')}}" title="Cancelar y regresar" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>

@endsection