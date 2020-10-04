<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" defer></script>
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<div class="table-responsive">
<table id="example" class="table-bordered shadow" style="width:100%">
	<thead>
		<tr>
			<th>Número de registro</th>
			<th>Nombre de embarcación</th>
			<th>Clase/Tipo</th>
			<th>Acción</th>
		</tr>
	</thead>
	<tbody>
		@foreach($embs as $emb)
		<tr>
			<td>{{$emb->id_emb  }}</td>
			<td>{{$emb->nom_emb }}</td>
			<td>{{$emb->clase_tipo}}</td>
			<td>
				<center>
				@if($name = Route::currentRouteName()=='embs.index')
					<a href="{{route('embs.show',$emb)}}"><i class="fas fa-eye"></i></a>
				@elseif($name = Route::currentRouteName()=='checklists.index')
					<a href="{{route('checklists.edit',$emb->id)}}">Inspeccionar</a>
					<a href="{{route('check',$emb->id)}}">Historial </a>
				@elseif($name = Route::currentRouteName()=='soli.edit')
					<a href="{{route('solic',array($emb->id, $i))}}">Asignar</a>
				@elseif($name = Route::currentRouteName()=='historics.index')
					<a href="{{route('historics.show',$emb->id)}}"><i class="fas fa-eye"></i></a>
				@else
					<a href="{{route('embs.edit',$emb->id)}}"><i class="fas fa-pencil-alt"></i></a>
				@endif
				</center>
			</td>
		</tr>
		@endforeach
	</tbody>
	<tr></tr>
</table>
</div>
