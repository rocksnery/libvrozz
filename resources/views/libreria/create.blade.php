@extends('layouts.plantilla')

@section('title', 'Agregar Libreria')

@section('content')


<br><br><br>

<div class="container "">
    <div class="card card-border-warning mb-2" style="max-width: 100rem; margin-top: 1rem">
        <div class="card-header text-center text-white" style="background-color: #000000;">Agregar Libreria</div>
        <div class="card-body">
            <div class="container">
            <form  method="POST" action="{{url('libreria')}}">

                <div class="row">
                  <div class="form-group col-md-3">
                    <label for="inputNombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" value="">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputprecio">Ciudad:</label>
                    <input type="text" class="form-control" name="ciudad" value="">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputnota">Calle:</label>
                    <input type="text" class="form-control" name="calle" value="">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                    <label for="inputnota">Pais:</label>
                    <input type="text" class="form-control" name="pais" value="">
                  </div>

                  <div class="form-group col-md-3">
                    <label for="inputnota">C.P:</label>
                    <input type="number" class="form-control" name="cp" value="">
                  </div>

                </div>
                <input type="hidden" class="form-control" id="id" name="id" value="">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="row">
                    <div class="form-group" align="center">
                        <button type="submit" class="btn btn-success">Agregar</button>
                        <a href="{{url('libreria')}}" title="Cancelar y regresar" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
