@extends('layouts.plantilla')

@section('title', 'Agregar Titulo')

@section('content')




<div class="container">
    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">
        <div class="card-header text-center text-white" style="background-color: #000000;">Agregar Nuevo</div>

        <div class="card-body">
            <div class="container   form-group col-md-12">
            <form  method="POST" action="{{url('titulos/'.$row->id)}}">

                <div class="row">
                  <div class="form-group col-md-3">
                    <label for="inputNombre">Nombre del titulo</label>
                    <input type="text" class="form-control" name="nom_libro" value="{{$row->nom_libro}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputprecio">Precio</label>
                    <input type="number" class="form-control" name="precio" value="{{$row->precio}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputnota">Adelanto</label>
                    <input type="number" class="form-control" name="adelanto" value="{{$row->adelanto}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputnota">Ventas totales </label>
                    <input type="number" class="form-control" name="vtas_totales" value="{{$row->vtas_totales}}">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for=inputfecha> Fecha de publicacion </label>
                    <input type="date" class="form-control" name="fecha_publicion" value="{{$row->fecha_publicion}}">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="editorial">Editorial</label>
                    <select name="id_editoriales" class="form-control">
                      <option value=""> Seleccione la editorial </option>
                      @foreach ($editorial as $ne)
                          <option value="{{ $ne->id }}" > {{$ne->editorial}} </option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group" >
                  <label for="inputnota">Nota</label>
                  <textarea placeholder="NOTA" class="form-control" name="nota"> {{$row->nota}} </textarea>
                </div>
                <input type="hidden" class="form-control" id="id" name="id" value="{{$row->id}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="row">
                    <div class="form-group" align="center">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                        <a href="{{url('titulos')}}" title="Cancelar y regresar" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
              </form>
            </div>
        </div>

    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@endsection
