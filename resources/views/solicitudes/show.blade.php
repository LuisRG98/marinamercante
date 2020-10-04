@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;" class="mx-auto mb-3 bg-white shadow rounded py-3 px-4">
		<h1  class="display-5">Lista de Solicitudes</h1><hr>
		@include('solicitudes._solicitudes')

	<hr>
		<form action="{{route('soli.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<input class="inputfile" type="file" name="file[]" multiple="true">
			<button class="button btn-primary">Enviar</button>
		</form>
	</div>
</div>
@endsection



