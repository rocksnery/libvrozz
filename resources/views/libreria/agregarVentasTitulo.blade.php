@extends('layouts.plantilla')

@section('title', 'Agregar Venta')

@section('content')




<div class="container col-md-offset-0">
    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">
        <div class="card-header text-center text-white" style="background-color: #000000;">Agregar Venta</div>
        <div class="card-body">
            <div class="container">
            <form  method="POST" action="{{url('ventas/'.$row->id)}}">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for=inputfecha> Fecha de Venta </label>
                        <input type="date" class="form-control" name="fecha_publicion" value="{{$row->fecha_publicion}}">
                      </div>
                  <div class="form-group col-md-6">
                    <label for="editorial">Ventas</label>
                    <select name="id_editoriales" class="form-control">
                      <option value=""> Seleccione la cantidad </option>
                      @foreach ($nombre as $ne)
                          <option value="{{ $ne->id }}" > {{$ne->venta}} </option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <input type="hidden" class="form-control" id="id" name="id" value="{{$row->id}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="row">
                    <div class="form-group" align="center">
                        <button type="submit" class="btn btn-success">Agregar</button>
                        <a href="{{url('librerias')}}" title="Cancelar y regresar" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>

@endsection
