<fieldset>
	<div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>DOCUMENTACIÓN Y ELEMENTOS VARIOS</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	      <input hidden="hidden" type="text" name="properties[0][key]" class="form-control" value="0">
	      <input hidden="hidden" type="text" name="m[0][key]" class="form-control" value="CERTIFICADO DE REGISTRO ORIGINAL">
	      <div class="col-md-4"> <label>CERTIFICADO DE REGISTRO ORIGINAL</label></div>
	      <div class="col-md-3"><textarea name="m[0][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[0][value]" value="{{ old('properties[0][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[0][value]" value="{{ old('properties[0][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d[1]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[1][key]" class="form-control" value="1">
	    <input hidden="hidden" type="text" name="m[1][key]" class="form-control" value="CERTIFICADO DE SEGURIDAD DE LA NAVEGACIÓN ORIGINAL VIGENTE">
	      <div class="col-md-4"> <label>CERTIFICADO DE SEGURIDAD DE LA NAVEGACIÓN ORIGINAL VIGENTE</label></div>
	      <div class="col-md-3"><textarea name="m[1][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[1][value]" value="{{ old('properties[1][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[1][value]" value="{{ old('properties[1][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[2]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[2][key]" class="form-control" value="CERTIFICADO DE FRANCOBORDO ORIGINAL VIGENTE">
	    <input hidden="hidden" type="text" name="m[2][key]" class="form-control" value="2">
	      <div class="col-md-4"> <label>CERTIFICADO DE FRANCOBORDO ORIGINAL VIGENTE</label></div>
	      <div class="col-md-3"><textarea name="m[2][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[2][value]" value="{{ old('properties[2][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[2][value]" value="{{ old('properties[2][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[3]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[3][key]" class="form-control" value="3">
	    <input hidden="hidden" type="text" name="m[3][key]" class="form-control" value="CERTIFICADO DE ARQUEO ORIGINAL VIGENTE">
	      <div class="col-md-4"> <label>CERTIFICADO DE ARQUEO ORIGINAL VIGENTE</label></div>
	      <div class="col-md-3"><textarea name="m[3][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[3][value]" value="{{ old('properties[3][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[3][value]" value="{{ old('properties[3][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[4]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[4][key]" class="form-control" value="4">
	    <input hidden="hidden" type="text" name="m[4][key]" class="form-control" value="CERTIFICADO DE MATRICULA ORIGINAL VIGENTE (verificar número motor)">
	      <div class="col-md-4"> <label>CERTIFICADO DE MATRICULA ORIGINAL VIGENTE (verificar número motor)</label></div>
	      <div class="col-md-3"><textarea name="m[4][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[4][value]" value="{{ old('properties[4][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[4][value]" value="{{ old('properties[4][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[5]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[5][key]" class="form-control" value="5">
	    <input hidden="hidden" type="text" name="m[5][key]" class="form-control" value="CERT. DE PREVENCIÓN DE LA CONTAMINACIÓN DEL MEDIO AMBIENTE ACUÁTICO">
	      <div class="col-md-4"> <label>CERT. DE PREVENCIÓN DE LA CONTAMINACIÓN DEL MEDIO AMBIENTE ACUÁTICO</label></div>
	      <div class="col-md-3"><textarea name="m[5][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[5][value]" value="{{ old('properties[5][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[5][value]" value="{{ old('properties[5][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[6]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[6][key]" class="form-control" value="6">
	    <input hidden="hidden" type="text" name="m[6][key]" class="form-control" value="LICENCIA MEDIO AMBIENTAL PARA TRANSPORTE DE SUSTANCIAS PELIGROSAS">
	      <div class="col-md-4"> <label>LICENCIA MEDIO AMBIENTAL PARA TRANSPORTE DE SUSTANCIAS PELIGROSAS</label></div>
	      <div class="col-md-3"><textarea name="m[6][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[6][value]" value="{{ old('properties[6][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[6][value]" value="{{ old('properties[6][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[7]"></textarea></div>
	    </div>
	    <br>
	  </div>
 	<input type="button" name="data[password]" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
	<div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>ELEMENTOS DE SEÑALAMIENTO / LUCES Y MARCAS</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[7][key]" class="form-control" value="7">
	    <input hidden="hidden" type="text" name="m[7][key]" class="form-control" value="PINTADO NOMBRE/MATRICULA">
	      <div class="col-md-4"> <label>PINTADO NOMBRE/MATRICULA</label></div>
	      <div class="col-md-3"><textarea name="m[7][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[7][value]" value="{{ old('properties[7][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[7][value]" value="{{ old('properties[7][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[8]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[8][key]" class="form-control" value="8">
	    <input hidden="hidden" type="text" name="m[8][key]" class="form-control" value="MARCAS DE FRANCOBORDO">
	      <div class="col-md-4"> <label>MARCAS DE FRANCOBORDO</label></div>
	      <div class="col-md-3"><textarea name="m[8][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[8][value]" value="{{ old('properties[8][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[8][value]" value="{{ old('properties[8][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[9]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[9][key]" class="form-control" value="9">
	    <input hidden="hidden" type="text" name="m[9][key]" class="form-control" value="LUCES DE NAVEGACIÓN">
	      <div class="col-md-4"> <label>LUCES DE NAVEGACIÓN</label></div>
	      <div class="col-md-3"><textarea name="m[9][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[9][value]" value="{{ old('properties[9][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[9][value]" value="{{ old('properties[9][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[10]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[10][key]" class="form-control" value="10">
	    <input hidden="hidden" type="text" name="m[10][key]" class="form-control" value="LETREROS DE PRECAUCIÓN (PELIGRO INFLAMABLE, NO FUMAR, MANTÉNGASE ALEJADO, ETC)">
	      <div class="col-md-4"> <label>LETREROS DE PRECAUCIÓN (PELIGRO INFLAMABLE, NO FUMAR, MANTÉNGASE ALEJADO, ETC) </label></div>
	      <div class="col-md-3"><textarea name="m[10][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[10][value]" value="{{ old('properties[10][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[10][value]" value="{{ old('properties[10][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[11]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[11][key]" class="form-control" value="11">
	    <input hidden="hidden" type="text" name="m[11][key]" class="form-control" value="PORTA PLAQUETAS PARA COLOCAR LOS ROMBOS Y RECTÁNGULOS DE LOS PRODUCTOS">
	      <div class="col-md-4"> <label>PORTA PLAQUETAS PARA COLOCAR LOS ROMBOS Y RECTÁNGULOS DE LOS PRODUCTOS </label></div>
	      <div class="col-md-3"><textarea name="m[11][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[11][value]" value="{{ old('properties[11][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[11][value]" value="{{ old('properties[11][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[12]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	   	<input hidden="hidden" type="text" name="properties[12][key]" class="form-control" value="12">
	   	<input hidden="hidden" type="text" name="m[12][key]" class="form-control" value="PLACAS DEL NUMERO DE RIESGOS DE LA ONU PARA CADA PRODUCTO TRANSPORTADO">
	      <div class="col-md-4"> <label>PLACAS DEL NUMERO DE RIESGOS DE LA ONU PARA CADA PRODUCTO TRANSPORTADO</label></div>
	      <div class="col-md-3"><textarea name="m[12][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[12][value]" value="{{ old('properties[12][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[12][value]" value="{{ old('properties[12][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[13]"></textarea></div>
	    </div>
	    <br>
	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
    <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
	<div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>ELEMENTOS DE SALVAVIDAS</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[13][key]" class="form-control" value="13">
	    <input hidden="hidden" type="text" name="m[13][key]" class="form-control" value="GUINDOLAS CON EL NOMBRE DE LA EMBARCACIÓN O ARTEFACTO NAVAL">
	      <div class="col-md-4"> <label>GUINDOLAS CON EL NOMBRE DE LA EMBARCACIÓN O ARTEFACTO NAVAL</label></div>
	      <div class="col-md-3"><textarea name="m[13][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[13][value]" value="{{ old('properties[13][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[13][value]" value="{{ old('properties[13][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[14]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[14][key]" class="form-control" value="14">
	    <input hidden="hidden" type="text" name="m[14][key]" class="form-control" value="CHALECOS SALVAVIDAS">
	      <div class="col-md-4"> <label>CHALECOS SALVAVIDAS</label></div>
	      <div class="col-md-3"><textarea name="m[14][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[14][value]" value="{{ old('properties[14][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[14][value]" value="{{ old('properties[14][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[15]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[15][key]" class="form-control" value="15">
	    <input hidden="hidden" type="text" name="m[15][key]" class="form-control" value="CARTELERÍA RESTRICTIVA">
	      <div class="col-md-4"> <label>CARTELERÍA RESTRICTIVA</label></div>
	      <div class="col-md-3"><textarea name="m[15][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[15][value]" value="{{ old('properties[15][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[15][value]" value="{{ old('properties[15][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[16]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[16][key]" class="form-control" value="16">
	    <input hidden="hidden" type="text" name="properties[16][key]" class="form-control" value="BOMBA DE ACHIQUE">
	      <div class="col-md-4"> <label>BOMBA DE ACHIQUE</label></div>
	      <div class="col-md-3"><textarea name="m[16][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[16][value]" value="{{ old('properties[16][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[16][value]" value="{{ old('properties[16][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[17]"></textarea></div>
	    </div>
	    <br>
	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
    <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
	<div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>ELEMENTOS DE LUCHA CONTRA INCENDIO Y DERRAME DE COMBUSTIBLE</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[17][key]" class="form-control" value="17">
	    <input hidden="hidden" type="text" name="m[17][key]" class="form-control" value="MANGUERAS DE INCENDIO COMPLETAS">
	      <div class="col-md-4"> <label>MANGUERAS DE INCENDIO COMPLETAS</label></div>
	      <div class="col-md-3"><textarea name="m[17][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[17][value]" value="{{ old('properties[17][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[17][value]" value="{{ old('properties[17][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[18]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[18][key]" class="form-control" value="18">
	    <input hidden="hidden" type="text" name="m[18][key]" class="form-control" value="EXTINTORES">
	      <div class="col-md-4"> <label>EXTINTORES</label></div>
	      <div class="col-md-3"><textarea name="m[18][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[18][value]" value="{{ old('properties[18][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[18][value]" value="{{ old('properties[18][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[19]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[19][key]" class="form-control" value="19">
	    <input hidden="hidden" type="text" name="m[19][key]" class="form-control" value="PLANO DE LUCHA CONTRA INCENDIOS<">
	      <div class="col-md-4"> <label>PLANO DE LUCHA CONTRA INCENDIOS</label></div>
	      <div class="col-md-3"><textarea name="m[19][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[19][value]" value="{{ old('properties[19][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[19][value]" value="{{ old('properties[19][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[20]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[20][key]" class="form-control" value="20">
	    <input hidden="hidden" type="text" name="m[20][key]" class="form-control" value="KIT PARA CONTROL, DE DERRAMES DE COMBUSTIBLE">
	      <div class="col-md-4"> <label>KIT PARA CONTROL, DE DERRAMES DE COMBUSTIBLE</label></div>
	      <div class="col-md-3"><textarea name="m[20][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[20][value]" value="{{ old('properties[20][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[20][value]" value="{{ old('properties[20][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[21]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[21][key]" class="form-control" value="21">
	    <input hidden="hidden" type="text" name="m[21][key]" class="form-control" value="TABLERO DE LUCHA CONTRA INCENDIOS">
	      <div class="col-md-4"> <label>TABLERO DE LUCHA CONTRA INCENDIOS</label></div>
	      <div class="col-md-3"><textarea name="m[21][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[21][value]" value="{{ old('properties[21][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[21][value]" value="{{ old('properties[21][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[22]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[22][key]" class="form-control" value="22">
	    <input hidden="hidden" type="text" name="m[22][key]" class="form-control" value="TABLERO DE CONTROL DE AVERÍAS">
	      <div class="col-md-4"> <label>TABLERO DE CONTROL DE AVERÍAS</label></div>
	      <div class="col-md-3"><textarea name="m[22][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[22][value]" value="{{ old('properties[22][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[22][value]" value="{{ old('properties[22][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[23]"></textarea></div>
	    </div>
	    <br>
	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
    <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
	<div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>ELEMENTOS DE AMARRE Y FONDEO</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[23][key]" class="form-control" value="23">
	    <input hidden="hidden" type="text" name="m[23][key]" class="form-control" value="CABLES Y CABOS">
	      <div class="col-md-4"> <label>CABLES Y CABOS</label></div>
	      <div class="col-md-3"><textarea name="m[23][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[23][value]" value="{{ old('properties[23][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[23][value]" value="{{ old('properties[23][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[24]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[24][key]" class="form-control" value="24">
	    <input hidden="hidden" type="text" name="m[24][key]" class="form-control" value="DEFENSAS">
	      <div class="col-md-4"> <label>DEFENSAS</label></div>
	      <div class="col-md-3"><textarea name="m[24][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[24][value]" value="{{ old('properties[24][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[24][value]" value="{{ old('properties[24][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[25]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[25][key]" class="form-control" value="25">
	    <input hidden="hidden" type="text" name="m[25][key]" class="form-control" value="BITAS, CORNAMUSAS, PASACABOS, ETC">
	      <div class="col-md-4"> <label>BITAS, CORNAMUSAS, PASACABOS, ETC</label></div>
	      <div class="col-md-3"><textarea name="m[25][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[25][value]" value="{{ old('properties[25][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[25][value]" value="{{ old('properties[25][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[26]"></textarea></div>
	    </div>
	    <br>
	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
    <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
  <div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>INTEGRIDAD ESTRUCTURAL</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[26][key]" class="form-control" value="26">
	    <input hidden="hidden" type="text" name="m[26][key]" class="form-control" value="CASCO LIBRE DE FILTRACIONES, CALAFATEADO.">
	      <div class="col-md-4"> <label>CASCO LIBRE DE FILTRACIONES, CALAFATEADO.</label></div>
	      <div class="col-md-3"><textarea name="m[26][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[26][value]" value="{{ old('properties[26][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[26][value]" value="{{ old('properties[26][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[27]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[27][key]" class="form-control" value="27">
	    <input hidden="hidden" type="text" name="m[27][key]" class="form-control" value="CABLEADO DE SEGURIDAD CON TESADORES">
	      <div class="col-md-4"> <label>CABLEADO DE SEGURIDAD CON TESADORES</label></div>
	      <div class="col-md-3"><textarea name="m[27][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[27][value]" value="{{ old('properties[27][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[27][value]" value="{{ old('properties[27][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[28]"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[28][key]" class="form-control" value="28">
	    <input hidden="hidden" type="text" name="m[28][key]" class="form-control" value="PROTECCIÓN PERSONAL (BARANDILLAS)">
	      <div class="col-md-4"> <label>PROTECCIÓN PERSONAL (BARANDILLAS)</label></div>
	      <div class="col-md-3"><textarea name="m[28][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[28][value]" value="{{ old('properties[28][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[28][value]" value="{{ old('properties[28][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[29]"></textarea></div>
	    </div>
	    <br>
	</div>
  	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  	<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>


<fieldset >
  <div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>PREVENCIÓN DE LA CONTAMINACIÓN</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[29][key]" class="form-control" value="HIDROCARBURO EN LA BARCAZA (PROHIBICIÓN)">
	    <input hidden="hidden" type="text" name="m[29][key]" class="form-control" value="29">
	      <div class="col-md-4"> <label>HIDROCARBURO EN LA BARCAZA (PROHIBICIÓN)</label></div>
	      <div class="col-md-3"><textarea name="m[29][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[29][value]" value="{{ old('properties[29][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[29][value]" value="{{ old('properties[29][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[30]"></textarea></div>
	    </div>
	    <br>
	</div>
  	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  	<input type="submit" name="submit" class="submit btn btn-success" value="Enviar" id="submit_data" />
</fieldset>

