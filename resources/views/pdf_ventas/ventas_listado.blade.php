@extends('pdf.layout')

@section('title','Listado de Editoriales')



@section('content')
<br />
<br />
<br />
<p> Listado de ventas</p>

			<table class="table trable-striped table-bordered">
			  <thead>
				  <tr>
					  <td>Titulo</td>
					  <td>Cantidad</td>
					  <td>Venta</td>
				  </tr>	
			  </thead>	  
			  <tbody>
				  
				  @forelse($rows as $registro)
				    {{-- mandamos el recorrido del arreglo--}}

				    <tr>
						<td> {{ $registro->editorial }} </td>
						<td> {{ $registro->nombre }} </td>
						<td> {{ $registro->ciudad }} </td>
						
					</tr>
					
				  @empty
				      <tr>
					    <td colspan=2> No se encontraron registros</td>
					  <tr>

				  @endforelse 
				         

			  </tbody>  
		    </table>	
		

@endsection
