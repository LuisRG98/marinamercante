@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;" class="mx-auto mb-3">
		<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('embs.store')}}">
			<h1 class="display-5">Registrar Embarcación</h1><hr>
			@csrf
			@include('embs._form',['emb'=> new App\Emb])
		</form>
	</div>
</div>
@endsection
