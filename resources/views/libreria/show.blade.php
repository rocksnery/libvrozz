@extends('layouts.plantilla')

@section('title', 'mostrar')

@section('content')

<div class="container col-md-offset-0">
    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">
        <div class="card-header text-center text-white" style="background-color: #000000;">mostrar titulo</div>
        <div class="card-body">
            <div class="container">
            <form  method="POST" action="{{url('titulos')}}">
              <div class="row">
                <div class="form-group col-md-3">
                  <label for="inputNombre">Nombre del titulo</label>
                  <input type="text" class="form-control" name="nom_libro" value="{{$row->nom_libro}}" disabled >
                </div>
                <div class="form-group col-md-3">
                  <label for="inputprecio">Precio</label>
                  <input type="number" class="form-control" name="precio" value="{{$row->precio}}" disabled>
                </div>
                <div class="form-group col-md-3">
                  <label for="inputnota">Adelanto</label>
                  <input type="number" class="form-control" name="adelanto" value="{{$row->adelanto}}" disabled>
                </div>
                <div class="form-group col-md-3">
                  <label for="inputnota">Ventas totales </label>
                  <input type="number" class="form-control" name="vtas_totales" value="{{$row->vtas_totales}}" disabled>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for=inputfecha> Fecha de publicacion </label>
                  <input type="date" class="form-control" name="fecha_publicion" value="{{$row->fecha_publicion}}" disabled>
                </div>
                <div class="form-group col-md-6">
                  <label for="editorial">Editorial</label>
                  <select name="id_editoriales" class="form-control" disabled>
                    <option value=""> Seleccione la editorial </option>
                    @foreach ($editorial as $ne)
                        <option value="{{ $ne->id }}" @if($ne->id == $row->id_editoriales) selected @endif > {{$ne->editorial}} </option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group" >
                <label for="inputnota">Nota</label>
                <textarea placeholder="NOTA" class="form-control" name="nota" disabled> {{$row->nota}} </textarea>
              </div>

                <input type="hidden" class="form-control" id="id" name="id" value="{{$row->id}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="row>
                    <div class="form-group" align="center">
                        <a href="{{url('titulos')}}" title="Cancelar y regresar" class="btn btn-danger">ATRAS</a>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>

@endsection
