@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;" class="mx-auto mb-3">
		<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('embprev2')}}">
			@csrf
			<h1 class="display-5">Requisitos</h1><hr>
			<div class="container col-md-12">
				<div class="row">
					<div class="col-md-6">
						<label for="clase_tipo">Cuenca:</label>
						<select
							class="form-control bg-light shadow-sm border-1"
							name="cuenca"
							id="cuenca">
							<option value="P">PLATA</option>
							<option value="A">AMAZONAS</option>
							<option value="L">LACUSTRE</option>
						</select>
					</div>
					<div class="col-md-6">
						<label for="clase_tipo">Tipo de Registro:</label>
						<select
							class="form-control bg-light shadow-sm border-1"
							name="registro"
							id="registro">
							<option>PROVISIONAL</option>
							<option>PERMANENTE</option>
							<option>ESPECIAL</option>
							<option>DUAL</option>
						</select>
					</div>
				</div>
				<br>
				<table class="table table-sm table-bordered" style="text-align: center">
					<thead>
						<tr>
							<th>Requisito</th>
							<th>Si</th>
							<th>No</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="text-align: left">Solicitud de Cotización</td>
							<td><input class="col-md-3" type="radio" name="r1" value="si" required></td>
							<td><input class="col-md-3" type="radio" name="r1" value="no"></td>
						</tr>
						<tr>
							<td style="text-align: left">Solicitud de Registro dirigida a la Autoridad Marítima</td>
							<td><input class="col-md-3" type="radio" name="r2" value="si" required></td>
							<td><input class="col-md-3" type="radio" name="r2" value="no"></td>
						</tr>
						<tr>
							<td style="text-align: left">Documentos Adjuntos Completos</td>
							<td><input class="col-md-3" type="radio" name="r3" value="si" required></td>
							<td><input class="col-md-3" type="radio" name="r3" value="no"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<button class="btn btn-primary btn-large btn-block">Registrar</button>
		</form>
	</div>

</div>
@endsection
