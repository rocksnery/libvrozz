@extends('layouts.plantilla')

@section('title', 'Usuarios')

@section('content')
<br><br>



<div class="container ">
    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">
        <div class="card-header text-center text-white" style="background-color: #000000;">Modificar Editorial</div>
        <div class="card-body">
            <div class="container   form-group col-md-12">
            <form  method="POST" action="{{url('editoriales/'.$row->id)}}">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="inputNom">Editorial</label>
                    <input type="text" class="form-control" name="editorial" value="{{$row->editorial}}">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputAp">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{$row->nombre}}">
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail">Ciudad</label>
                  <input type="ciudad" class="form-control" name="ciudad" value="{{$row->ciudad}}">
                </div>
                <input type="hidden" class="form-control" id="id" name="id" value="{{$row->id}}">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="row">
                    <div class="form-group" align="center">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                        <a href="{{url('editoriales')}}" title="Cancelar y regresar" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
