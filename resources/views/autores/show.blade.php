@extends('layouts.plantilla')

@section('title', 'mostrar Autores')

@section('content')

<div class="container col-md-offset-0">
    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">
        <div class="card-header text-center text-white" style="background-color: #F1680C;">mostrar autores</div>
        <div class="card-body">
            <div class="container">
            <form  method="POST" action="{{url('autores')}}">
                <div class="row">
                    <div class="form-group col-md-3">
                      <label for="inputNombre">Nombre del Autor</label>
                      <input type="text" class="form-control" name="au_nombre" value="{{$row->au_nombre}}" disabled>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputprecio">Apellido Paterno</label>
                      <input type="text" class="form-control" name="au_ap" value="{{$row->au_ap}}" disabled>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputnota">Apellido Materno</label>
                      <input type="text" class="form-control" name="text" value="{{$row->au_am}}" disabled>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputnota"> telefono </label>
                      <input type="number" class="form-control" name="telefon" value="{{$row->vtas_telefono}}" disabled>
                    </div>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputnota">Calle</label>
                    <input type="text" class="form-control" name="calle" value="{{$row->ciudad}}" disabled>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputnota">Ciudad</label>
                    <input type="text" class="form-control" name="ciudad" value="{{$row->ciudad}}" disabled>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputnota">Estado</label>
                    <input type="text" class="form-control" name="estado" value="{{$row->estado}}" disabled>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputnota">Pais</label>
                    <input type="text" class="form-control" name="pais" value="{{$row->pais}}" disabled>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for=inputfecha> Fecha de Nacimiento </label>
                      <input type="date" class="form-control" name="fecha_nac" value="{{$row->fecha_nac}}" disabled>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="nom_libro">Libro</label>
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