@extends('layouts.plantilla')

@section('title', 'Usuarios')

@section('content')
<br><br>
<div class="container ">
    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">
        <div class="card-header text-center text-white" style="background-color: #C62929;">Eliminar Editorial</div>
        <div class="card-body">
            <div class="container">
            <form  method="POST" action="{{url('editoriales/'.$row->id)}}">
                <div class="form-group col-md-6">
                    <label for="inputNom">Estas por borrar la editorial:</label>
                    <input type="text" class="form-control" name="editorial" value="{{$row->editorial}}" disabled>
                </div>
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="form-group" align="center" style="padding: 1rem">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        <a href="{{url('editoriales')}}" title="Cancelar y regresar" class="btn btn-success">Cancelar</a>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
