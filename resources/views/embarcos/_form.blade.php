@csrf
<style>
.required label:after {
    color: #e32;
    content: ' *';
    display:inline;
}
</style>

<div class="container col-md-12">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">

				@if($user->id)
					<label for="avatar">Foto de Perfil:</label><br>
					<center>
					<img width="168px" src="{{Storage::url($user->avatar)}}">
					<input
						type="file"
						name="avatar"
						id="avatar"
						value="{{old('avatar',$user->avatar ?? '')}}">
					</center>
				@else
					<label for="avatar">Foto de Perfil:</label><br>
					<center>
					<img width="168px" src="{{Storage::url('/img/profilespics/user.png')}}">
					<input
						type="file"
						name="avatar"
						id="avatar"
						value="{{old('avatar',$user->avatar ?? '')}}">
					</center>
				@endif


			</div>
			<div class="form-group required">
			<label for="name">Nombre:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('name') is-invalid @enderror border-1"
				type="text"
				name="name"
				id="name"
				placeholder="Nombre..."
				value="{{old('name',$user->name ?? '')}}">
				@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>

			<div class="form-group required">
			<label for="lastname1">Apellido Paterno:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('lastname1') is-invalid @enderror border-1"
				type="text"
				name="lastname1"
				id="lastname1"
				placeholder="Apellido Paterno..."
				value="{{old('lastname1',$user->lastname1 ?? '')}}">
				@error('lastname1')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>

			<div class="form-group required">
			<label for="lastname2">Apellido Materno:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('lastname2') is-invalid @enderror border-1"
				type="text"
				name="lastname2"
				id="lastname2"
				placeholder="Apellido Materno..."
				value="{{old('lastname2',$user->lastname2 ?? '')}}">
				@error('lastname2')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>
			<div class="row form-group required">
			<div class="col-md-3">
				<label for="w">Peso:</label>
				<input
					class="form-control bg-light shadow-sm 	@error('w') is-invalid @enderror border-1"
					type="number"
					step="0.01"
					name="w"
					id="w"
					placeholder="Kg..."
					value="{{old('w',$user->w ?? '')}}">
					@error('w')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
			</div>
			<div class="col-md-3">
				<label for="h">Altura:</label>
				<input
					class="form-control bg-light shadow-sm 	@error('h') is-invalid @enderror border-1"
					type="number"
					step="0.01"
					name="h"
					id="h"
					placeholder="Mts..."
					value="{{old('h',$user->h ?? '')}}">
					@error('h')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
			</div>
			<div class="col-md-3">
				<label for="o">Ojos:</label>
				<input
					class="form-control bg-light shadow-sm 	@error('o') is-invalid @enderror border-1"
					type="text"
					name="o"
					id="o"
					placeholder="Color..."
					value="{{old('o',$user->o ?? '')}}">
					@error('o')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
			</div>
			<div class="col-md-3">
				<label for="c">Cabello:</label>
				<input
					class="form-control bg-light shadow-sm 	@error('c') is-invalid @enderror border-1"
					type="text"
					name="c"
					id="c"
					placeholder="Color..."
					value="{{old('c',$user->c ?? '')}}">
					@error('lastname2')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
			</div>

			</div>

		</div>
		<div class="col-md-6">
			<div class="form-group required">
			<label for="sexo">Sexo:</label>
			<select
				class="form-control bg-light shadow-sm 	@error('sexo') is-invalid @enderror border-1"
				name="sexo"
				id="sexo">
					<option value="Masculino" {{ old('sexo', $user->sexo) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
					<option value="Femenino" {{ old('sexo', $user->sexo) == 'Femenino' ? 'selected' : '' }}>Femenino</option>
				@error('sexo')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
				</select>
			</div>

			<div class="form-group required">
			<label for="sangre">Sangre:</label>
			<select
				class="form-control bg-light shadow-sm 	@error('sangre') is-invalid @enderror border-1"
				name="sangre"
				id="sangre">
				<option value="	A+" {{ old('sangre', $user->sangre) == '	A' ? 'selected' : '' }}>	A+</option>
				<option value="	B+" {{ old('sangre', $user->sangre) == '	B' ? 'selected' : '' }}>	B+</option>
				<option value="	AB+" {{ old('sangre', $user->sangre) == '	AB' ? 'selected' : '' }}>	AB+</option>
				<option value="O+" {{ old('sangre', $user->sangre) == 'O' ? 'selected' : '' }}>O</option>
				<option value="A-" {{ old('sangre', $user->sangre) == 'A-' ? 'selected' : '' }}>A-</option>
				<option value="	B-" {{ old('sangre', $user->sangre) == '	B-' ? 'selected' : '' }}>	B-</option>
				<option value="	AB-" {{ old('sangre', $user->sangre) == '	AB-' ? 'selected' : '' }}>	AB-</option>
				<option value="	O-" {{ old('sangre', $user->sangre) == '	O-' ? 'selected' : '' }}>	O-</option>
				@error('rango')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
				</select>
			</div>

			<div class="form-group required">
			<label for="ln">Lugar de Nacimiento:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('ln') is-invalid @enderror border-1"
				type="text"
				name="ln"
				id="ln"
				placeholder="País y Ciudad..."
				value="{{old('ln',$user->ln ?? '')}}">
				@error('ln')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			<label for="fn">Fecha de Nacimiento:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('fn') is-invalid @enderror border-1"
				type="date"
				name="fn"
				id="fn"
				placeholder="Correo Electrónico..."
				value="{{old('fn',$user->fn ?? '')}}">
				@error('fn')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>

			<div class="form-group ">
			<label for="sp">Señas Particulares:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('sp') is-invalid @enderror border-1"
				type="text"
				name="sp"
				id="sp">
				@error('sp')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>

			@unless($user->id)
			<div class="form-group required">
			<label for="estc">Estado Civil:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('estc') is-invalid @enderror border-1"
				type="text"
				name="estc"
				id="estc">
				@error('estc')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>
			<div class="form-group required">
			<label for="ni">Número de Identidad:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('ni') is-invalid @enderror border-1"
				type="number"
				name="ni"
				id="ni">
				@error('ni')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>
				@endunless
		</div>

	</div>
</div>


<button class="btn btn-primary btn-large btn-block">Guardar</button>