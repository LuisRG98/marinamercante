@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;" class=" bg-white rounded mx-auto mb-3">
		<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('archivos.store')}}">
		@csrf
		<div class="form-group col-12">
			<h1 class="display-5">Búsqueda de Archivos</h1><hr>
			<div class="row">
				<div class="col-6">
					<p style="text-align: justify;">Ingrese el código QR, del archivo que desee buscar, de manera que lo pueda visualizar en su dispositivo</p>
					<center><br>
					<input
						class="form-control bg-light shadow-sm  border-1"
						type="search" name="search">
					<br><br>
					<button class="btn btn-lg  btn-primary">Buscar</button> <br>
					</center>
				</div>
				<div class="col-6">
					<center>
					<img width="300" class="img-fluid" src="/img/search.svg"></center>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>


@endsection
