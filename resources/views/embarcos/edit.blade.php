@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;" class="mx-auto mb-3">
		<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('usuarios.update',$user->id)}}" enctype="multipart/form-data">
			<h1 class="display-5">Editar Usuario</h1><hr>
			@method('PUT')
			@include('embarcos._form')
		</form>
	</div>
</div>
@endsection
