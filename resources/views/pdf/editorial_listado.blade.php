@extends('pdf.layout')

@section('title','Listado de Editoriales')



@section('content')
<br />
<br />
<br />
<p> Este es el listado de editoriales disponibles en el sistema</p>

			<table class="table trable-striped table-bordered">
			  <thead>
				  <tr>
					  <td> Nombre</td>
					  <td> Ciudad </td>
						<td> Estado </td>
					  
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
