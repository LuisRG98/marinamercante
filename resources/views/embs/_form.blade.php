@csrf

<style>
.required label:after {
    color: #e32;
    content: ' *';
    display:inline;
}
</style>

<div class="form-group col-md-12 required">
	<div class="row">
	<div class="col-md-2">
		<label for="id_emb">N° de Registro:</label>
		<input
			class="form-control bg-light shadow-sm 	@error('id_emb') is-invalid @enderror border-1"
			name="id_emb"
			id="id_emb"
			readonly
			value="{{old('id_emb',$emb->id_emb ?? $reg ?? '')}}">
			@error('id_emb')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror
		<input
			class="form-control bg-light shadow-sm 	@error('user_id') is-invalid @enderror border-1"
			type="hidden"
			name="user_id"
			id="user_id"
			readonly
			value="{{old('user_id',$emb->user_id ?? auth()->user()->id)}}">
			@error('id_emb')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror


	</div>
	<div class="col-md-5">
		<label for="nom_prop">Nombre de Propietario:</label>
		<input
			class="form-control bg-light shadow-sm 	@error('nom_prop') is-invalid @enderror border-1"
			type="text"
			name="nom_prop"
			id="nom_prop"
			value="{{old('nom_prop',$emb->nom_prop ?? '')}}">
			@error('nom_prop')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror
	</div>
	<div class="col-md-5">
		<label for="nom_emb">Nombre de Embarcación:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('nom_emb') is-invalid @enderror border-1"
				type="text"
				name="nom_emb"
				id="nom_emb"
				value="{{old('nom_emb',$emb->nom_emb ?? '')}}">
				{!!$errors->first('nom_emb','<span class=error>:message</span>')!!}
			@error('nom_prop')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror
	</div>

	</div>
</div>


@if($ruta = Route::currentRouteName()=='embs.edit')
<div class="form-group col-md-12">
	<div class="row">
	<div class="col-md-12">
		<label for="ant_prop">Anterior Propietario:</label>
		<input
				class="form-control bg-light shadow-sm 	@error('ant_prop') is-invalid @enderror border-1"
				type="text"
				name="ant_prop"
				id="ant_prop"
				readonly
				value="{{old('ant_prop',$emb->ant_prop ?? '')}}">
			@error('ant_prop')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror
	</div>
	</div>
</div>

@elseif($ruta = Route::currentRouteName()=='embprev2')
<input
	class="form-control bg-light shadow-sm 	@error('user_id') is-invalid @enderror border-1"
	type="hidden"
	name="ant_prop"
	id="user_id"
	readonly
	value="{{old('ant_prop',$emb->ant_prop ??'S/D')}}">
	@error('ant_prop')
		<span class="invalid-feedback" role="alert">
			<strong>{{$message}}</strong>
		</span>
	@enderror
@endif


<div class="form-group col-md-12">
	<div class="row">
	<div class="col-md-6">
		<label for="asc_cop">Asociación Cooperativa:</label>
		<input
				class="form-control bg-light shadow-sm 	@error('asc_cop') is-invalid @enderror border-1"
				type="text"
				name="asc_cop"
				id="asc_cop"
				value="{{old('asc_cop',$emb->asc_cop ?? '')}}">
			@error('nom_prop')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror
	</div>
	<div class="col-md-6">
		<label for="num_cert">Número de Certificado:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('num_cert') is-invalid @enderror border-1"
				type="text"
				name="num_cert"
				id="num_cert"
				value="{{old('num_cert',$emb->num_cert ?? '')}}">
			@error('nom_prop')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror
	</div>
	</div>
</div>

<div class="form-group col-md-12">
	<div class="row">
	<div class="col-md-3">
		<label for="clase_tipo">Clase/Tipo:</label>
		<select
			class="form-control bg-light shadow-sm 	@error('clase_tipo') is-invalid @enderror border-1"
			name="clase_tipo"
			id="clase_tipo">
			<option value="BARCAZA CERRADA" {{ old('clase_tipo', $emb->clase_tipo) == 'BARCAZA CERRADA' ? 'selected' : '' }}>BARCAZA CERRADA</option>
			<option value="BARCAZA ABIERTA" {{ old('clase_tipo',  $emb->clase_tipo) == 'BARCAZA ABIERTA' ? 'selected' : '' }}>BARCAZA ABIERTA</option>
			<option value="LANCHA" {{ old('clase_tipo',  $emb->clase_tipo) == 'LANCHA' ? 'selected' : '' }}>LANCHA</option>
			<option value="MOTONAVE" {{ old('clase_tipo',  $emb->clase_tipo) == 'MOTONAVE' ? 'selected' : '' }}>MOTONAVE</option>
			<option value="LANCHA MULTIPROPÓSITO" {{ old('clase_tipo',  $emb->clase_tipo) == 'LANCHA MULTIPROPÓSITO' ? 'selected' : '' }}>LANCHA MULTIPROPÓSITO</option>
			<option value="CHALANA/CATRAYA" {{ old('clase_tipo',  $emb->clase_tipo) == 'CHALANA/CATRAYA' ? 'selected' : '' }}>CHALANA/CATRAYA</option>
			<option value="BOTE/DESLIZADOR" {{ old('clase_tipo',  $emb->clase_tipo) == 'BOTE/DESLIZADOR' ? 'selected' : '' }}>BOTE/DESLIZADOR</option>
			<option value="CANOA" {{ old('clase_tipo',  $emb->clase_tipo) == 'CANOA' ? 'selected' : '' }}>CANOA</option>
			<option value="KAYAK" {{ old('clase_tipo',  $emb->clase_tipo) == 'KAYAK' ? 'selected' : '' }}>KAYAK</option>
			<option value="MOTO ACUÁTICA" {{ old('clase_tipo',  $emb->clase_tipo) == 'MOTO ACUÁTICA' ? 'selected' : '' }}>MOTO ACUÁTICA</option>
			<option value="BICINAVE" {{ old('clase_tipo',  $emb->clase_tipo) == 'BICINAVE' ? 'selected' : '' }}>BICINAVE</option>
			<option value="YATE" {{ old('clase_tipo',  $emb->clase_tipo) == 'YATE' ? 'selected' : '' }}>YATE</option>
			<option value="DRAGA" {{ old('clase_tipo',  $emb->clase_tipo) == 'DRAGA' ? 'selected' : '' }}>DRAGA</option>
			<option value="CATAMARÁN" {{ old('clase_tipo',  $emb->clase_tipo) == 'CATAMARÁN' ? 'selected' : '' }}>CATAMARÁN</option>
			<option value="ALISCAFO" {{ old('clase_tipo',  $emb->clase_tipo) == 'ALISCAFO' ? 'selected' : '' }}>ALISCAFO</option>
			<option value="PEQUE-PEQUE" {{ old('clase_tipo',  $emb->clase_tipo) == 'PEQUE-PEQUE' ? 'selected' : '' }}>PEQUE-PEQUE</option>

		</select>
		@error('nom_prop')
			<span class="invalid-feedback" role="alert">
				<strong>{{$message}}</strong>
			</span>
		@enderror
	</div>
	<div class="col-md-3">
		<label for="serv_emb">Servicio:</label>
		<input
			class="form-control bg-light shadow-sm 	@error('serv_emb') is-invalid @enderror border-1"
			type="text"
			name="serv_emb"
			id="serv_emb"
			value="{{old('serv_emb',$emb->serv_emb ?? '')}}">
			@error('serv_emb')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror
	</div>
	<div class="col-md-3">
		<label for="base_op">Base Operativa:</label>
		<input
			class="form-control bg-light shadow-sm 	@error('base_op') is-invalid @enderror border-1"
			type="text"
			name="base_op"
			id="base_op"
			value="{{old('base_op',$emb->base_op ?? '')}}">
			@error('base_op')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror
	</div>
	<div class="col-md-3">
		<label for="matricula">Matrícula:</label>
		<input
			class="form-control bg-light shadow-sm 	@error('matricula') is-invalid @enderror border-1"
			type="text"
			name="matricula"
			id="matricula"
			value="{{old('matricula',$emb->matricula ?? '')}}">
			@error('matricula')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror
	</div>
	</div>
</div>

<div class="form-group col-md-12">
	<div class="row">
		<div class="col-md-2">
			<label for="eslora">Eslora:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('eslora') is-invalid @enderror border-1"
				type="number"
				step="0.01"
				name="eslora"
				id="eslora"
				value="{{old('eslora',$emb->eslora ?? '')}}">
				@error('eslora')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
		</div>
		<div class="col-md-2">
			<label for="manga">Manga:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('manga') is-invalid @enderror border-1"
				type="number"
				step="0.01"
				name="manga"
				id="manga"
				value="{{old('manga',$emb->manga ?? '')}}">
				@error('manga')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
		</div>
		<div class="col-md-2">
			<label for="puntal">Puntal:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('puntal') is-invalid @enderror border-1"
				type="number"
				step="0.01"
				name="puntal"
				id="puntal"
				value="{{old('puntal',$emb->puntal ?? '')}}">
				@error('puntal')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
		</div>
		<div class="col-md-2">
			<label for="trb">TRB:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('trb') is-invalid @enderror border-1"
				type="number"
				step="0.01"
				name="trb"
				id="trb"
				value="{{old('trb',$emb->trb ?? '')}}">
				@error('trb')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
		</div>
		<div class="col-md-2">
			<label for="trn">TRN:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('trn') is-invalid @enderror border-1"
				type="number"
				step="0.01"
				name="trn"
				id="trn"
				value="{{old('trn',$emb->trn ?? '')}}">
				@error('trn')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
		</div>
		<div class="col-md-2">
			<label for="francobordo">Francobordo:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('francobordo') is-invalid @enderror border-1"
				type="number"
				step="0.01"
				name="francobordo"
				id="francobordo"
				value="{{old('francobordo',$emb->francobordo ?? '')}}">
				@error('francobordo')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
		</div>
	</div>
</div>

<div class="form-group col-md-12">
	<div class="row">
		<div class="col-md-4">
			<label for="sist_prop">Sistema de Propulsión:</label>
			<select
			class="form-control bg-light shadow-sm 	@error('sist_prop') is-invalid @enderror border-1"
			name="sist_prop"
			id="sist_prop">
			<option value="MOTOR DE CENTRO" {{ old('sist_prop', $emb->sist_prop) == 'MOTOR DE CENTRO' ? 'selected' : '' }}>MOTOR DE CENTRO</option>
			<option value="MOTOR FUERA DE BORDA" {{ old('sist_prop',  $emb->sist_prop) == 'MOTOR FUERA DE BORDA' ? 'selected' : '' }}>MOTOR FUERA DE BORDA</option>
			<option value="A VELA" {{ old('sist_prop',  $emb->sist_prop) == 'A VELA' ? 'selected' : '' }}>A VELA</option>
			<option value="A REMO" {{ old('sist_prop',  $emb->sist_prop) == 'A REMO' ? 'selected' : '' }}>A REMO</option>
			<option value="SIN PROPULSIÓN" {{ old('sist_prop',  $emb->sist_prop) == 'SIN PROPULSIÓN' ? 'selected' : '' }}>SIN PROPULSIÓN</option>
			<option value="MOTOR DE COLA" {{ old('sist_prop',  $emb->sist_prop) == 'MOTOR DE COLA' ? 'selected' : '' }}>MOTOR DE COLA</option>
			<option value="OTROS" {{ old('sist_prop',  $emb->sist_prop) == 'OTROS' ? 'selected' : '' }}>OTROS</option>
		</select>
				@error('sist_prop')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
		</div>
		<div class="col-md-3">
			<label for="marca">Marca de motor:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('marca') is-invalid @enderror border-1"
				name="marca"
				id="marca"
				value="{{old('marca',$emb->marca ?? '')}}">
				@error('marca')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
		</div>
		<div class="col-md-3">
			<label for="num_mot">N° de motor:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('num_mot') is-invalid @enderror border-1"
				name="num_mot"
				id="num_mot"
				value="{{old('num_mot',$emb->num_mot ?? '')}}">
				@error('num_mot')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
		</div>
		<div class="col-md-2">
			<label for="php">Potencia en HP:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('php') is-invalid @enderror border-1"
				type="number"
				name="php"
				id="php"
				value="{{old('php',$emb->php ?? '')}}">
				@error('php')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
		</div>
	</div>
</div>

<div class="form-group col-md-12">
	<div class="row">
		<div class="col-md-3">
		<label for="men_pel">Mcía. Pel.:</label>
		<select
			class="form-control bg-light shadow-sm 	@error('men_pel') is-invalid @enderror border-1"
			name="men_pel"
			id="men_pel">
			<option>SI</option>
			<option>NO</option>
		</select>
			@error('nom_prop')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror
		</div>
		<div class="col-md-3">
			<label for="num_max">Max. Pax.:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('num_max') is-invalid @enderror border-1"
				type="number"
				name="num_max"
				id="num_max"
				value="{{old('num_max',$emb->num_max ?? '')}}">
				@error('num_max')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
		</div>
		<div class="col-md-3">
			<label for="material">Material:</label>
			<select
				class="form-control bg-light shadow-sm 	@error('material') is-invalid @enderror border-1"
				name="material"
				id="material">
				<option value="MADERA" {{ old('material', $emb->material) == 'MADERA' ? 'selected' : '' }}>MADERA</option>
				<option value="ACERO" {{ old('material', $emb->material) == 'ACERO' ? 'selected' : '' }}>ACERO</option>
				<option value="ALUMINIO" {{ old('material', $emb->material) == 'ALUMINIO' ? 'selected' : '' }}>ALUMINIO</option>
				<option value="FIBRA DE VIDRIO" {{ old('material', $emb->material) == 'FIBRA DE VIDRIO' ? 'selected' : '' }}>FIBRA DE VIDRIO</option>
				<option value="MADERA/FIBRA DE VIDRIO" {{ old('material', $emb->material) == 'MADERA/FIBRA DE VIDRIO' ? 'selected' : '' }}>MADERA/FIBRA DE VIDRIO</option>
				<option value="TOTORA" {{ old('material', $emb->material) == 'TOTORA' ? 'selected' : '' }}>TOTORA</option>

			</select>
				@error('material')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
		</div>
		<div class="col-md-3">
			<label for="anio">Año Cons.:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('anio') is-invalid @enderror border-1"
				type="number"
				name="anio"
				id="anio"
				value="{{old('anio',$emb->anio ?? '')}}">
				@error('anio')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
		</div>
	</div>
</div>
<button class="btn btn-primary btn-large btn-block">Guardar</button>
<br>
