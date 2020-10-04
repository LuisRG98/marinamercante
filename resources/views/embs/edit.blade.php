@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;" class="mx-auto mb-3">
		<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('embs.update',$emb->id)}}">
			<h1  class="display-5">Editar Datos de Embarcaciones</h1>
			@method('PUT')
			@include('embs._form')
			</form>
	</div>

</div>
@endsection
