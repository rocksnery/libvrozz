@extends('layouts.plantilla')

@section('title', 'Agregar Autor')

@section('content')




<div class="container col-md-offset-0">
    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">
        <div class="card-header text-center text-white" style="background-color: #C62929;">Agregar Autor</div>
        <div class="card-body">
            <div class="container">
            <form  method="POST" action="{{url('autores/'.$row->id)}}">

                <div class="row">
                  <div class="form-group col-md-3">
                    <label for="">Nombre del Autor</label>
                    <input type="text" class="form-control" name="au_nombre" value="{{$row->au_nombre}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="">Apellido Paterno</label>
                    <input type="text" class="form-control" name="au_ap" value="{{$row->au_ap}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="">Apellido Materno</label>
                    <input type="text" class="form-control" name="au_am" value="{{$row->au_am}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="">Telefono </label>
                    <input type="number" class="form-control" name="telefono" value="{{$row->telefono}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="">Calle </label>
                    <input type="text" class="form-control" name="calle" value="{{$row->calle}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="">Ciudad </label>
                    <input type="text" class="form-control" name="ciudad" value="{{$row->ciudad}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="">Estado </label>
                    <input type="text" class="form-control" name="estado" value="{{$row->estado}}">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="">País </label>
                    <input type="text" class="form-control" name="pais" value="{{$row->pais}}">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for=inputfecha> Fecha de Nacimiento </label>
                    <input type="date" class="form-control" name="fecha_nac" value="{{$row->fecha_nac}}">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="titulos">Libro</label>
                    <select name="id_titulos" class="form-control">
                      <option value=""> Seleccione el libro </option>
                      @foreach ($autores as $ne)
                          <option value="{{ $ne->id }}" > {{$ne->nom_libro}} </option>
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
                        <a href="{{url('autores')}}" title="Cancelar y regresar" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>

@endsection
