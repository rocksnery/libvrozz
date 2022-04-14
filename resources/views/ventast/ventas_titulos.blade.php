@extends('layouts.plantilla')

@section('title', 'Opciones')

@section('content')

<div class="container">
    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">
        <div class="card-header text-center text-white" style="background-color: #C62929;">Agregar Venta</div>
        <div class="card-body">
            <div class="container">
            <form  method="POST" action="{{url('ventas/'.$row->id)}}">
                <div class="row">
                    <div class="form-group col-md-5">
                        <label for=inputfecha> Fecha de Venta </label>
                        <input type="date" class="form-control" name="fecha_venta" value="{{$row->fecha_venta}}">
                    </div>
                    <div class="form-group col-md-5">
                      <label for="editorial">Libreria</label>
                      <select name="id_librerias" class="form-control"> 
                        <option value=""> Seleccione la libreria </option>
                        @foreach ($libreria as $nl)
                            <option value="{{ $nl->id }}"> {{$nl->nombre}} </option>
                        @endforeach  
                      </select>
                  </div>
                </div>
                <input type="hidden" class="form-control" id="id" name="id" value="{{$row->id}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="row" align="center">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Agregar</button>
                        <a href="{{url('libreria')}}" title="Cancelar y regresar" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
  </div>

@endsection