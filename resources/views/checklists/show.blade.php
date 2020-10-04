@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;" class="mx-auto mb-3 bg-white shadow rounded py-3 px-4">
		<h1  class="display-5">Resultados</h1>
		<div class="container col-md-12">
			@if($files->clase_tipo == 'BARCAZA CERRADA')
				@include('checklists.vistas.bmade')
			@elseif($files->clase_tipo == 'BOTE/DESLIZADOR')
				@include('checklists.vistas.emenor')
			@endif
		</div>
	</div>

</div>
@endsection
