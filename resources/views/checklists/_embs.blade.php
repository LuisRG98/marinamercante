<table class="table" id="table">
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
				<a href="{{route('checklists.edit',$emb)}}">Inspección</a>
				<a href="{{view('checklists._form')}}">Editar</a>
			</td>
		</tr>
		@endforeach
	</tbody>
	<tr></tr>
</table>