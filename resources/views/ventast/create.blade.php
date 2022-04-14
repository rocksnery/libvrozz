@extends('layouts.plantilla')

@section('title', 'Completar venta')

@section('content')

<div class="container">
  <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">
      <div class="card-header text-center text-white" style="background-color: #C62929;">Completar Venta</div>
      <div class="card-body">
          <div class="container">
          <form  method="POST" action="{{url('ventast/'.$row->id)}}">
              <div class="row">
                  <div class="form-group col-md-5">
                      <label for=inputfecha> Cantidad </label>
                      <input type="number" class="form-control" name="cantidad" value="{{$row->cantidad}}">
                  </div>
                  <div class="form-group col-md-5">
                    <label for="editorial">Titulo</label>
                    <select name="id_titulos" class="form-control"> 
                      <option value=""> Seleccione el titulo </option>
                      @foreach ($titulo as $nl)
                          <option value="{{ $nl->id }}"> {{$nl->nom_libro}} </option>
                      @endforeach  
                    </select>
                  </div>
                  <div class="form-group col-md-5">
                    <label for="editorial">Venta</label>
                    <select name="id_ventas" class="form-control"> 
                      <option value=""> Seleccione la fecha de venta </option>
                      @foreach ($venta as $fv)
                          <option value="{{ $fv->id }}"> {{$fv->fecha_venta}} </option>
                      @endforeach  
                    </select>
                  </div>
              </div>
              <input type="hidden" class="form-control" id="id" name="id" value="{{$row->id}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              
              <div class="row" align="center">
                  <div class="form-group">
                      <button type="submit" class="btn btn-success">Agregar</button>
                      <a href="{{url('ventas')}}" title="Cancelar y regresar" class="btn btn-danger">Cancelar</a>
                  </div>
              </div>
            </form>
          </div>
      </div>
  </div>
</div>

@endsection