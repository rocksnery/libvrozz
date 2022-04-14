@extends('layouts.plantilla')

@section('title', 'Usuarios')

@section('content')
<br><br><br>
<div class="container">
    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">
        <div class="card-header text-center text-white" style="background-color: #000000;">Mostrar Editorial</div>
        <div class="card-body">
            <div class="container   form-group col-md-12">
            <form  method="POST" action="{{url('editoriales')}}">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="inputNom">Editorial</label>
                    <input type="text" class="form-control" name="editorial" value="{{$row->editorial}}" disabled>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputAp">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{$row->nombre}}" disabled>
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputEmail">Ciudad</label>
                  <input type="texto" class="form-control" name="ciu" value="{{$row->ciudad}}" disabled>
                </div>

                <input type="hidden" class="form-control" id="id" name="id" value="{{$row->id}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="row">
                    <div class="form-group" align="center">
                        <a href="{{url('editoriales')}}" title="Cancelar y regresar" class="btn btn-dark">ATRAS</a>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@endsection
