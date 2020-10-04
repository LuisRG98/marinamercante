@extends('layout')

@section('content')
<div style="overflow-x:auto;" class="div-sm mx-auto mb-3 bg-white shadow rounded py-3 px-4">
	<h1 style="text-align: center">Embarcación {{$emb->id_emb}}</h1><hr>
	<div class="container col-md-12">

		<div class="row">
			<div class="col-md-3"><h5><b>Nombre de Embarcación:</b></h5></div>
			<div class="col-md-9"><h5>{{$emb->nom_emb}}</h5></div>
		</div>

		<div class="row">
			<div class="col-md-3"><h5><b>Nombre de Propietario:</b></h5></div>
			<div class="col-md-9"><h5>{{$emb->nom_prop}}</h5></div>
		</div>

		<div class="row">
			<div class="col-md-3"><h5><b>Nombre del Anterior Propietario:</b></h5></div>
			<div class="col-md-9"><h5>{{$emb->ant_prop}}</h5></div>
		</div>

		<div class="row">
			<div class="col-md-3"><h5><b>Asociación Cooperativa:</b></h5></div>
			<div class="col-md-3"><h5>{{$emb->asc_cop}}</h5></div>
			<div class="col-md-3"><h5><b>Número de Certificado:</b></h5></div>
			<div class="col-md-3"><h5>{{$emb->num_cert}}</h5></div>
		</div>

		<div class="row">
			<div class="col-md-3"><h5><b>Clase/Tipo:</b></h5></div>
			<div class="col-md-3"><h5>{{$emb->clase_tipo}}</h5></div>
			<div class="col-md-3"><h5><b>Servicio:</b></h5></div>
			<div class="col-md-3"><h5>{{$emb->serv_emb}}</h5></div>
		</div>

		<div class="row">
			<div class="col-md-3"><h5><b>Base Operativa:</b></h5></div>
			<div class="col-md-3"><h5>{{$emb->base_op}}</h5></div>
			<div class="col-md-3"><h5><b>Matrícula:</b></h5></div>
			<div class="col-md-3"><h5>{{$emb->matricula}}</h5></div>
		</div>

		<div class="row">
			<div class="col-md-3"><h5><b>Sistema de Propulsión:</b></h5></div>
			<div class="col-md-3"><h5>{{$emb->sist_prop}}</h5></div>
			<div class="col-md-3"><h5><b>Material:</b></h5></div>
			<div class="col-md-3"><h5>{{$emb->material}}</h5></div>
		</div>

		<div class="row">
			<div class="col-md-3"><h5><b>Mercancías Peligrosas:</b></h5></div>
			<div class="col-md-3"><h5>{{$emb->men_pel}}</h5></div>
			<div class="col-md-3"><h5><b>Año de Construcción</b></h5></div>
			<div class="col-md-3"><h5>{{$emb->anio}}</h5></div>
		</div>

		<br>
		<div class="row">
			<div class="col-md-2"><h5><b>Eslora:</b>{{$emb->eslora}} mts.</h5></div>
			<div class="col-md-2"><h5><b>Manga:</b>{{$emb->manga}} mts.</h5></div>
			<div class="col-md-2"><h5><b>Puntal:</b>{{$emb->puntal}} mts.</h5></div>
			<div class="col-md-2"><h5><b>TRB:</b>{{$emb->trb}} mts.</h5></div>
			<div class="col-md-2"><h5><b>TRN:</b>{{$emb->trn}} mts.</h5></div>
			<div class="col-md-2"><h5><b>Franc.:</b>{{$emb->francobordo}} mts.</h5></div>
		</div>
		<br><hr>

		@if($i>=1)
		<label hidden>{{$name='/storage/'.$v[0]}}</label>
		<div class="container col-md-12">
			<center>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img  class="d-block w-85" src="{{$name}}" >
			    </div>

			    @for($c=1;$c<$i;$c++)
			    <label hidden>{{$name='/storage/'.$v[$c]}}</label>
			    <div class="carousel-item">
			      <img   class="d-block w-85"  src="{{$name}}" >
			    </div>
			    @endfor

			  </div>
			  <a style="background-color: black" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span  class="sr-only">Previous</span>
			  </a>
			  <a style="background-color: black" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
		<br>
		@endif

		<div class="container col-md-12">
			<div class="row">
				<div class="col-md-6">
					<a style="text-align: center;" href="{{route('archivos.show',$emb->id)}}">Ver Archivos</a>
				</div>
				<div class="col-md-6">
					<form action="{{route('files.store')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="emb_id" id="emb_id" value="{{$emb->id}}">
						<input class="inputfile" type="file" name="file[]" multiple="true">
						<button class="button btn-primary">Enviar</button>
					</form>
				</div>
			</div>
		</div>
		</center>
	</div>


</div>
<script type="text/javascript">
    $(document).ready( function () {
    $('table').DataTable();
    } );
  </script>
@endsection
