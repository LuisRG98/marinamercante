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
	      <div class="col-md-4"> <label>CERTIFICADO DE REGISTRO ORIGINAL</label></div>
	      <div class="col-md-3"><textarea name="m1"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[0][value]" value="{{ old('properties[0][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[0][value]" value="{{ old('properties[0][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d1"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[1][key]" class="form-control" value="1">
	      <div class="col-md-4"> <label>CERTIFICADO DE SEGURIDAD DE LA NAVEGACIÓN ORIGINAL VIGENTE</label></div>
	      <div class="col-md-3"><textarea name="m2"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[1]" value="{{ old('properties[1]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[1]" value="{{ old('properties[1]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d2"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[2][key]" class="form-control" value="2">
	      <div class="col-md-4"> <label>CERTIFICADO DE FRANCOBORDO ORIGINAL VIGENTE</label></div>
	      <div class="col-md-3"><textarea name="m3"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[2][value]" value="{{ old('properties[2][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[2][value]" value="{{ old('properties[2][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d3"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[3][key]" class="form-control" value="3">
	      <div class="col-md-4"> <label>CERTIFICADO DE ARQUEO ORIGINAL VIGENTE</label></div>
	      <div class="col-md-3"><textarea name="m4"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[3][value]" value="{{ old('properties[3][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[3][value]" value="{{ old('properties[3][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d4"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[4][key]" class="form-control" value="4">
	      <div class="col-md-4"> <label>CERTIFICADO DE MATRICULA ORIGINAL VIGENTE (verificar número motor)</label></div>
	      <div class="col-md-3"><textarea name="m5"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[4][value]" value="{{ old('properties[4][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[4][value]" value="{{ old('properties[4][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d5"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[5][key]" class="form-control" value="5">
	      <div class="col-md-4"> <label>CERT. DE PREVENCIÓN DE LA CONTAMINACIÓN DEL MEDIO AMBIENTE ACUÁTICO</label></div>
	      <div class="col-md-3"><textarea name="m6"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[5][value]" value="{{ old('properties[5][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[5][value]" value="{{ old('properties[5][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d6"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[6][key]" class="form-control" value="6">
	      <div class="col-md-4"> <label>CERTIFICADO DE DOTACIÓN MÍNIMA DE SEGURIDAD</label></div>
	      <div class="col-md-3"><textarea name="m7"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[6][value]" value="{{ old('properties[6][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[6][value]" value="{{ old('properties[6][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d7"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[7][key]" class="form-control" value="7">
	      <div class="col-md-4"> <label>PLAN DE GESTIÓN DE BASURA, ABANDONO, CONTROL AVERÍAS, LCI, DERRAME COMB.</label></div>
	      <div class="col-md-3"><textarea name="m8"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[7][value]" value="{{ old('properties[7][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[7][value]" value="{{ old('properties[7][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d8"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[8][key]" class="form-control" value="8">
	      <div class="col-md-4"> <label>CERTIFICADO DE CALIBRACIÓN DE LA UMM.</label></div>
	      <div class="col-md-3"><textarea name="m9"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[8][value]" value="{{ old('properties[8][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[8][value]" value="{{ old('properties[8][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d9"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[9][key]" class="form-control" value="9">
	      <div class="col-md-4"> <label>CERTIFICADO DE ESTANQUEIDAD EMITIDO POR LA UMM. </label></div>
	      <div class="col-md-3"><textarea name="m10"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[9][value]" value="{{ old('properties[9][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[9][value]" value="{{ old('properties[9][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d10"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[10][key]" class="form-control" value="10">
	      <div class="col-md-4"> <label>CERTIFICADO DE ENSAYOS NO DESTRUCTIVOS EMITIDO POR LA UMM. </label></div>
	      <div class="col-md-3"><textarea name="m11"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[10][value]" value="{{ old('properties[10][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[10][value]" value="{{ old('properties[10][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d11"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[11][key]" class="form-control" value="11">
	      <div class="col-md-4"> <label>CUMPLE CON LA DOTACIÓN MINIMA DE SEGURIDAD</label></div>
	      <div class="col-md-3"><textarea name="m12"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[11][value]" value="{{ old('properties[11][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[11][value]" value="{{ old('properties[11][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d12"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[12][key]" class="form-control" value="12">
	      <div class="col-md-4"> <label>POSEE TRIPULANTE SIN CARNET DE TRIPULACIÓN</label></div>
	      <div class="col-md-3"><textarea name="m13"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[12][value]" value="{{ old('properties[12][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[12][value]" value="{{ old('properties[12][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d13"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[13][key]" class="form-control" value="13">
	      <div class="col-md-4"> <label>PERSONAL CONOCE LOS PLANES DE CONTINGENCIA</label></div>
	      <div class="col-md-3"><textarea name="m14"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[13][value]" value="{{ old('properties[13][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[13][value]" value="{{ old('properties[13][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d14"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[14][key]" class="form-control" value="14">
	      <div class="col-md-4"> <label>LIBRO DIARIO DE NAVEGACIÓN (BITACORA)</label></div>
	      <div class="col-md-3"><textarea name="m15"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[14][value]" value="{{ old('properties[14][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[14][value]" value="{{ old('properties[14][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d15"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[15][key]" class="form-control" value="15">
	      <div class="col-md-4"> <label>LIBRO DE MÁQUINAS</label></div>
	      <div class="col-md-3"><textarea name="m16"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[15][value]" value="{{ old('properties[15][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[15][value]" value="{{ old('properties[15][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d16"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[16][key]" class="form-control" value="16">
	      <div class="col-md-4"> <label>LIBRO DE DESCARGA DE BASURA</label></div>
	      <div class="col-md-3"><textarea name="m17"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[16][value]" value="{{ old('properties[16][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[16][value]" value="{{ old('properties[16][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d17"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[17][key]" class="form-control" value="17">
	      <div class="col-md-4"> <label>LIBRO DE ROL DE ZAFARRANCHOS</label></div>
	      <div class="col-md-3"><textarea name="m18"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[17][value]" value="{{ old('properties[17][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[17][value]" value="{{ old('properties[17][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d18"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[18][key]" class="form-control" value="18">
	      <div class="col-md-4"> <label>MANUAL DE PROCEDIMIENTOS DE CARGA, DESCARGA, LIMPIEZA, TRASVASE Y OTROS PARA DETECTAR FISURAS</label></div>
	      <div class="col-md-3"><textarea name="m19"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[18][value]" value="{{ old('properties[18][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[18][value]" value="{{ old('properties[18][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d19"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[19][key]" class="form-control" value="19">
	      <div class="col-md-4"> <label>MANUAL PARA LA GESTIÓN DE RESIDUOS SÓLIDOS Y LÍQUIDOS DE LAS EMBARCACIONES DE ACUERDO A LA LICENCIA AMBIENTAL</label></div>
	      <div class="col-md-3"><textarea name="m20"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[19][value]" value="{{ old('properties[19][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[19][value]" value="{{ old('properties[19][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d20"></textarea></div>
	    </div>
	    <br>
	  </div>
 	<input type="button" name="data[password]" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
	<div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>PUBLICACIONES</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[20][key]" class="form-control" value="20">
	      <div class="col-md-4"> <label>AVISO A LOS NAVEGANTES DE LA ZONA A NAVEGAR</label></div>
	      <div class="col-md-3"><textarea name="m21"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[20][value]" value="{{ old('properties[20][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[20][value]" value="{{ old('properties[20][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d21"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[21][key]" class="form-control" value="21">
	      <div class="col-md-4"> <label>CÓDIGO INTERNACIONAL DE SEÑALES</label></div>
	      <div class="col-md-3"><textarea name="m22"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[21][value]" value="{{ old('properties[21][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[21][value]" value="{{ old('properties[21][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d22"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[22][key]" class="form-control" value="22">
	      <div class="col-md-4"> <label>CARTA O MAPA DE RUTAS DE LA ZONA A NAVEGAR</label></div>
	      <div class="col-md-3"><textarea name="m23"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[22][value]" value="{{ old('properties[22][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[22][value]" value="{{ old('properties[22][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d23"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[23][key]" class="form-control" value="23">
	      <div class="col-md-4"> <label>CUADRO DE SEÑALES DE AUXILIO</label></div>
	      <div class="col-md-3"><textarea name="m24"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[23][value]" value="{{ old('properties[23][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[23][value]" value="{{ old('properties[23][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d24"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[24][key]" class="form-control" value="24">
	      <div class="col-md-4"> <label>CUADRO DE SEÑALES DE SALVAMENTO</label></div>
	      <div class="col-md-3"><textarea name="m25"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[24][value]" value="{{ old('properties[24][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[24][value]" value="{{ old('properties[24][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d25"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[25][key]" class="form-control" value="25">
	      <div class="col-md-4"> <label>CUADRO SEÑALES DE BANDERA</label></div>
	      <div class="col-md-3"><textarea name="m26"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[25][value]" value="{{ old('properties[25][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[25][value]" value="{{ old('properties[25][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d26"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[26][key]" class="form-control" value="26">
	      <div class="col-md-4"> <label>RIPA</label></div>
	      <div class="col-md-3"><textarea name="m27"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[26][value]" value="{{ old('properties[26][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[26][value]" value="{{ old('properties[26][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d27"></textarea></div>
	    </div>
	    <br>
	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
    <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
	<div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>INSTRUMENTAL DE NAVEGACIÓN Y COMUNICACIONES</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
      	<input hidden="hidden" type="text" name="properties[27][key]" class="form-control" value="27">
	      <div class="col-md-4"> <label>ANTEOJOS PRISMATICOS</label></div>
	      <div class="col-md-3"><textarea name="m28"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[27][value]" value="{{ old('properties[27][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[27][value]" value="{{ old('properties[27][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d28"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[28][key]" class="form-control" value="28">
	      <div class="col-md-4"> <label>GIROCOMPÁ</label></div>
	      <div class="col-md-3"><textarea name="m29"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[28][value]" value="{{ old('properties[28][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[28][value]" value="{{ old('properties[28][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d29"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[29][key]" class="form-control" value="29">
	      <div class="col-md-4"> <label>LIMPIA PARABRISAS</label></div>
	      <div class="col-md-3"><textarea name="m30"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[29][value]" value="{{ old('properties[29][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[29][value]" value="{{ old('properties[29][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d30"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[30][key]" class="form-control" value="30">
	      <div class="col-md-4"> <label>RADAR </label></div>
	      <div class="col-md-3"><textarea name="m31"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[30][value]" value="{{ old('properties[30][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[30][value]" value="{{ old('properties[30][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d31"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[31][key]" class="form-control" value="31">
	      <div class="col-md-4"> <label>SONDA DE MANO</label></div>
	      <div class="col-md-3"><textarea name="m32"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[31][value]" value="{{ old('properties[31][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[31][value]" value="{{ old('properties[31][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d32"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[32][key]" class="form-control" value="32">
	      <div class="col-md-4"> <label>TABLA PROCEDIMIENTOS RADIO TELEFÓNICOS </label></div>
	      <div class="col-md-3"><textarea name="m33"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[32][value]" value="{{ old('properties[32][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[32][value]" value="{{ old('properties[32][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d33"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[33][key]" class="form-control" value="33">
	      <div class="col-md-4"> <label>BATERIAS EMERGENCIA</label></div>
	      <div class="col-md-3"><textarea name="m34"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[33][value]" value="{{ old('properties[33][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[33][value]" value="{{ old('properties[33][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d34"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[34][key]" class="form-control" value="34">
	      <div class="col-md-4"> <label>EQUIPO VHF/HF/HANDIES</label></div>
	      <div class="col-md-3"><textarea name="m35"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[34][value]" value="{{ old('properties[34][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[34][value]" value="{{ old('properties[34][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d35"></textarea></div>
	    </div>
	    <br>
	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
    <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
	    <input hidden="hidden" type="text" name="properties[35][key]" class="form-control" value="35">
	      <div class="col-md-4"> <label>CÓDIGO INTERNACIONAL DE SEÑALES</label></div>
	      <div class="col-md-3"><textarea name="m36"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[35][value]" value="{{ old('properties[35][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[35][value]" value="{{ old('properties[35][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d36"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[36][key]" class="form-control" value="36">
	      <div class="col-md-4"> <label>BOCINA MECÁNICA PORTÁTIL O CUERNO DE NIEBLA</label></div>
	      <div class="col-md-3"><textarea name="m37"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[36][value]" value="{{ old('properties[36][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[36][value]" value="{{ old('properties[36][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d37"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[37][key]" class="form-control" value="37">
	      <div class="col-md-4"> <label>MARCAS DE CALADO Y FRANCOBORDO</label></div>
	      <div class="col-md-3"><textarea name="m38"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[37][value]" value="{{ old('properties[37][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[37][value]" value="{{ old('properties[37][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d38"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[38][key]" class="form-control" value="38">
	      <div class="col-md-4"> <label>FAROLES DE NAVEGACIÓN DE EMERGENCIA</label></div>
	      <div class="col-md-3"><textarea name="m39"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[38][value]" value="{{ old('properties[38][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[38][value]" value="{{ old('properties[38][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d39"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[39][key]" class="form-control" value="39">
	      <div class="col-md-4"> <label>LINTERNA DE MANO (ESTANCA)</label></div>
	      <div class="col-md-3"><textarea name="m40"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[39][value]" value="{{ old('properties[39][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[39][value]" value="{{ old('properties[39][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d40"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[40][key]" class="form-control" value="40">
	      <div class="col-md-4"> <label>MEGÁFONO</label></div>
	      <div class="col-md-3"><textarea name="m41"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[40][value]" value="{{ old('properties[40][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[40][value]" value="{{ old('properties[40][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d41"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[41][key]" class="form-control" value="41">
	      <div class="col-md-4"> <label>PITO O BOCINA</label></div>
	      <div class="col-md-3"><textarea name="m42"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[41][value]" value="{{ old('properties[41][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[41][value]" value="{{ old('properties[41][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d42"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[42][key]" class="form-control" value="42">
	      <div class="col-md-4"> <label>REFLECTOR DE LUZ</label></div>
	      <div class="col-md-3"><textarea name="m43"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[42][value]" value="{{ old('properties[42][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[42][value]" value="{{ old('properties[42][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d43"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[43][key]" class="form-control" value="43">
	      <div class="col-md-4"> <label>PABELLÓN NACIONAL DETERIORADO</label></div>
	      <div class="col-md-3"><textarea name="m44"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[43][value]" value="{{ old('properties[43][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[43][value]" value="{{ old('properties[43][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d44"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[44][key]" class="form-control" value="44">
	      <div class="col-md-4"> <label>PINTADO NOMBRE/MATRICULA</label></div>
	      <div class="col-md-3"><textarea name="m45"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[44][value]" value="{{ old('properties[44][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[44][value]" value="{{ old('properties[44][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d45"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[45][key]" class="form-control" value="45">
	      <div class="col-md-4"> <label>LUCES DE NAVEGACIÓN (BANDAS, TOPE, TODO HORIZONTE, REMOLQUE, POPA, ALCANCE, ETC)</label></div>
	      <div class="col-md-3"><textarea name="m46"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[45][value]" value="{{ old('properties[45][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[45][value]" value="{{ old('properties[45][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d46"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[46][key]" class="form-control" value="46">
	      <div class="col-md-4"> <label>APARATO GIBILAY (LANZACABOS)</label></div>
	      <div class="col-md-3"><textarea name="m47"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[46][value]" value="{{ old('properties[46][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[46][value]" value="{{ old('properties[46][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d47"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[47][key]" class="form-control" value="47">
	      <div class="col-md-4"> <label>BALSA O BOTE SALVAVIDAS (100% TRIPULACIÓN) (VENCIMIENTO)</label></div>
	      <div class="col-md-3"><textarea name="m48"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[47][value]" value="{{ old('properties[47][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[47][value]" value="{{ old('properties[47][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d48"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[48][key]" class="form-control" value="48">
	      <div class="col-md-4"> <label>CHALECOS SALVAVIDAS ADULTO Y MENORES (CON EL NOMBRE DE LA EMBARCACIÓN) </label></div>
	      <div class="col-md-3"><textarea name="m49"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[48][value]" value="{{ old('properties[48][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[48][value]" value="{{ old('properties[48][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d49"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[49][key]" class="form-control" value="49">
	      <div class="col-md-4"> <label>GUINDOLAS (CON EL NOMBRE DE LA EMBARCACIÓN)</label></div>
	      <div class="col-md-3"><textarea name="m50"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[49][value]" value="{{ old('properties[49][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[49][value]" value="{{ old('properties[49][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d50"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[50][key]" class="form-control" value="50">
	      <div class="col-md-4"> <label>BENGALAS DE MANO</label></div>
	      <div class="col-md-3"><textarea name="m51"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[50][value]" value="{{ old('properties[50][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[50][value]" value="{{ old('properties[50][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d51"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[51][key]" class="form-control" value="51">
	      <div class="col-md-4"> <label>CARTELERÍA</label></div>
	      <div class="col-md-3"><textarea name="m52"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[51][value]" value="{{ old('properties[51][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[51][value]" value="{{ old('properties[51][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d52"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[52][key]" class="form-control" value="52">
	      <div class="col-md-4"> <label>BOCAS DE INCENDIO Y VÁLVULAS (DOS BOCAS SIMULTANEAS)</label></div>
	      <div class="col-md-3"><textarea name="m53"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[52][value]" value="{{ old('properties[52][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[52][value]" value="{{ old('properties[52][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d53"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[53][key]" class="form-control" value="53">
	      <div class="col-md-4"> <label>BOMBA DE INCENDIO CAPAZ DE SERVIR A 2 LÍNEAS SIMULTANEAMENTE</label></div>
	      <div class="col-md-3"><textarea name="m54"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[53][value]" value="{{ old('properties[53][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[53][value]" value="{{ old('properties[53][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d54"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[54][key]" class="form-control" value="54">
	      <div class="col-md-4"> <label>MANGUERAS DE INCENDIO COMPLETAS </label></div>
	      <div class="col-md-3"><textarea name="m55"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[54][value]" value="{{ old('properties[54][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[54][value]" value="{{ old('properties[54][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d55"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[55][key]" class="form-control" value="55">
	      <div class="col-md-4"> <label>EXTINTORES (DOS DE 12 KG, 2 DE 6 KG)-APROBADA NORMA NFPA 10</label></div>
	      <div class="col-md-3"><textarea name="m56"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[55][value]" value="{{ old('properties[55][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[55][value]" value="{{ old('properties[55][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d56"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[56][key]" class="form-control" value="56">
	      <div class="col-md-4"> <label>EQUIPO DE BOMBEROS COMPLETO</label></div>
	      <div class="col-md-3"><textarea name="m57"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[56][value]" value="{{ old('properties[56][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[56][value]" value="{{ old('properties[56][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d57"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[57][key]" class="form-control" value="57">
	      <div class="col-md-4"> <label>EQUIPO AUTONOMO DE RESPIRACIÓN</label></div>
	      <div class="col-md-3"><textarea name="m58"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[57][value]" value="{{ old('properties[57][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[57][value]" value="{{ old('properties[57][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d58"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[58][key]" class="form-control" value="58">
	      <div class="col-md-4"> <label>TABLERO CON MATERIAL DE LUCHA CONTRA INCENDIOS</label></div>
	      <div class="col-md-3"><textarea name="m59"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[58][value]" value="{{ old('properties[58][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[58][value]" value="{{ old('properties[58][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d59"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[59][key]" class="form-control" value="59">
	      <div class="col-md-4"> <label>PLANILLA ROL DE ZAFARRANCHOS.</label></div>
	      <div class="col-md-3"><textarea name="m60"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[59][value]" value="{{ old('properties[59][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[59][value]" value="{{ old('properties[59][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d60"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[60][key]" class="form-control" value="60">
	      <div class="col-md-4"> <label>CUADRO ROL DE ZAFARRANCHO </label></div>
	      <div class="col-md-3"><textarea name="m61"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[60][value]" value="{{ old('properties[60][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[60][value]" value="{{ old('properties[60][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d61"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[61][key]" class="form-control" value="61">
	      <div class="col-md-4"> <label>PLANO DE LUCHA CONTRA INCENDIOS </label></div>
	      <div class="col-md-3"><textarea name="m62"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[61][value]" value="{{ old('properties[61][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[61][value]" value="{{ old('properties[61][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d62"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[62][key]" class="form-control" value="62">
	      <div class="col-md-4"> <label>SISTEMA DE ALARMA DE INCENDIOS (DETECTOR DE HUMOS)</label></div>
	      <div class="col-md-3"><textarea name="m63"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[62][value]" value="{{ old('properties[62][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[62][value]" value="{{ old('properties[62][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d63"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[63][key]" class="form-control" value="63">
	      <div class="col-md-4"> <label>KIT PARA CONTROL DE DERRAMES (GUANTES DE NITRILO, ANTIPARRAS DE POLICARBONATO, CUBRE CALZADO, VERMICULITA, PALA Y ESCOBILLA, PAÑO O CHORIZO ABSORBENTE, BOLSA NEGRA)</label></div>
	      <div class="col-md-3"><textarea name="m64"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[63][value]" value="{{ old('properties[63][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[63][value]" value="{{ old('properties[63][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d64"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[64][key]" class="form-control" value="64">
	      <div class="col-md-4"> <label>RECIPINETES LIMPIOS Y SECOS PARA USO EN ACOPLES Y CONEXIONES DE LAS MANGUERAS EN OPERACIONES DE CARGA Y DESCARGA DE COMBUSTIBLE)</label></div>
	      <div class="col-md-3"><textarea name="m65"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[64][value]" value="{{ old('properties[64][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[64][value]" value="{{ old('properties[64][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d65"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[65][key]" class="form-control" value="65">
	      <div class="col-md-4"> <label>CABLES Y CABOS</label></div>
	      <div class="col-md-3"><textarea name="m66"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[65][value]" value="{{ old('properties[65][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[65][value]" value="{{ old('properties[65][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d66"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[66][key]" class="form-control" value="66">
	      <div class="col-md-4"> <label>ANCLAS Y CADENA</label></div>
	      <div class="col-md-3"><textarea name="m67"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[66][value]" value="{{ old('properties[66][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[66][value]" value="{{ old('properties[66][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d67"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[67][key]" class="form-control" value="67">
	      <div class="col-md-4"> <label>BITAS, CORNAMUSAS, PASACABOS, ETC</label></div>
	      <div class="col-md-3"><textarea name="m68"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[67][value]" value="{{ old('properties[67][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[67][value]" value="{{ old('properties[67][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d68"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[68][key]" class="form-control" value="68">
	      <div class="col-md-4"> <label>DEFENSAS</label></div>
	      <div class="col-md-3"><textarea name="m69"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[68][value]" value="{{ old('properties[68][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[68][value]" value="{{ old('properties[68][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d69"></textarea></div>
	    </div>
	    <br>
	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
    <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
	<div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>MAQUINAS Y ELECTRICIDAD</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[69][key]" class="form-control" value="69">
	      <div class="col-md-4"> <label>MOTORES PROPULSORES Y AUXILIARES: ALARMAS, INSTRUMENTAL, PROTECCIÓN</label></div>
	      <div class="col-md-3"><textarea name="m70"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[69][value]" value="{{ old('properties[69][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[69][value]" value="{{ old('properties[69][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d70"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[70][key]" class="form-control" value="70">
	      <div class="col-md-4"> <label>PARADA A DISTANCIA MOTOR PROPULSOR DESDE EL PUENTE</label></div>
	      <div class="col-md-3"><textarea name="m71"></textarea></div>
	      <div class="col-md-4">
	        <input type="radio" name="properties[70][value]" value="{{ old('properties[70][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[70][value]" value="{{ old('properties[70][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d71"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[71][key]" class="form-control" value="71">
	      <div class="col-md-4"> <label>TIMÓN DE EMERGENCIA</label></div>
	      <div class="col-md-3"><textarea name="m72"></textarea></div>
	      <div class="col-md-4">
	        <input type="radio" name="properties[71][value]" value="{{ old('properties[71][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[71][value]" value="{{ old('properties[71][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d72"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[72][key]" class="form-control" value="72">
	      <div class="col-md-4"> <label>FUNCIONAMIENTO TABLERO LUCES NAVEGACIÓN</label></div>
	      <div class="col-md-3"><textarea name="m73"></textarea></div>
	      <div class="col-md-4">
	        <input type="radio" name="properties[72][value]" value="{{ old('properties[72][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[72][value]" value="{{ old('properties[72][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d73"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[73][key]" class="form-control" value="73">
	      <div class="col-md-4"> <label>FUNCIONAMIENTO SISTEMA GOBIERNO</label></div>
	      <div class="col-md-3"><textarea name="m74"></textarea></div>
	      <div class="col-md-4">
	        <input type="radio" name="properties[73][value]" value="{{ old('properties[73][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[73][value]" value="{{ old('properties[73][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d74"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[74][key]" class="form-control" value="74">
	      <div class="col-md-4"> <label>CARGADOR BATERÍAS SERVICIOS Y DE EMERGENCIA</label></div>
	      <div class="col-md-3"><textarea name="m75"></textarea></div>
	      <div class="col-md-4">
	        <input type="radio" name="properties[74][value]" value="{{ old('properties[74][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[74][value]" value="{{ old('properties[74][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d75"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[75][key]" class="form-control" value="75">
	      <div class="col-md-4"> <label>ILUMINACIÓN SALA DE MAQUINAS Y TABLERO PPAL. (HERRAMIENTAS Y PIEZAS DE RECAMBIO)</label></div>
	      <div class="col-md-3"><textarea name="m76"></textarea></div>
	      <div class="col-md-4">
	        <input type="radio" name="properties[75][value]" value="{{ old('properties[75][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[75][value]" value="{{ old('properties[75][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d76"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[76][key]" class="form-control" value="76">
	      <div class="col-md-4"> <label>TABLEROS DE ELECTRICIDAD</label></div>
	      <div class="col-md-3"><textarea name="m77"></textarea></div>
	      <div class="col-md-4">
	        <input type="radio" name="properties[76][value]" value="{{ old('properties[76][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[76][value]" value="{{ old('properties[76][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d77"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[77][key]" class="form-control" value="77">
	      <div class="col-md-4"> <label>SIRENA</label></div>
	      <div class="col-md-3"><textarea name="m78"></textarea></div>
	      <div class="col-md-4">
	        <input type="radio" name="properties[77][value]" value="{{ old('properties[77][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[77][value]" value="{{ old('properties[77][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d78"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[78][key]" class="form-control" value="78">
	      <div class="col-md-4"> <label>COMBUSTIBLE DE EMERGENCIA (TANQUE DE RESPETO)</label></div>
	      <div class="col-md-3"><textarea name="m79"></textarea></div>
	      <div class="col-md-4">
	        <input type="radio" name="properties[78][value]" value="{{ old('properties[78][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[78][value]" value="{{ old('properties[78][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d79"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[79][key]" class="form-control" value="79">
	      <div class="col-md-4"> <label>CUBIERTA PRINCIPAL Y PLANCHADA ANTIDESLIZANTE</label></div>
	      <div class="col-md-3"><textarea name="m80"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[79][value]" value="{{ old('properties[79][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[79][value]" value="{{ old('properties[79][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d80"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[80][key]" class="form-control" value="80">
	      <div class="col-md-4"> <label>CIERRES ESTANCOS (BURLETES-MANIGUETAS-AGUJEROS)</label></div>
	      <div class="col-md-3"><textarea name="m81"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[80][value]" value="{{ old('properties[80][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[80][value]" value="{{ old('properties[80][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d81"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[81][key]" class="form-control" value="81">
	      <div class="col-md-4"> <label>FISURAS (CUBIERTA-CASCO-MAMPAROS- ETC)</label></div>
	      <div class="col-md-3"><textarea name="m82"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[81][value]" value="{{ old('properties[81][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[81][value]" value="{{ old('properties[81][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d82"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[82][key]" class="form-control" value="82">
	      <div class="col-md-4"> <label>VENTANAS -OJOS DE BUEY (ESTANQUEIDAD)</label></div>
	      <div class="col-md-3"><textarea name="m83"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[82][value]" value="{{ old('properties[82][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[82][value]" value="{{ old('properties[82][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d83"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[83][key]" class="form-control" value="83">
	      <div class="col-md-4"> <label>VENTEOS (TUBOS) ARRESTA LLAMAS</label></div>
	      <div class="col-md-3"><textarea name="m84"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[83][value]" value="{{ old('properties[83][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[83][value]" value="{{ old('properties[83][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d84"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[84][key]" class="form-control" value="84">
	      <div class="col-md-4"> <label>VENTILACIÓN (SISTEMA DE CIERRE) EXTERNO</label></div>
	      <div class="col-md-3"><textarea name="m85"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[84][value]" value="{{ old('properties[84][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[84][value]" value="{{ old('properties[84][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d85"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[85][key]" class="form-control" value="85">
	      <div class="col-md-4"> <label>PROTECCIÓN PERSONAL (BARANDILLAS-ESCALERAS-ETC)</label></div>
	      <div class="col-md-3"><textarea name="m86"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[85][value]" value="{{ old('properties[85][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[85][value]" value="{{ old('properties[85][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d86"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[86][key]" class="form-control" value="86">
	      <div class="col-md-4"> <label>TABLERO CON MATERIAL DE CONTROL DE AVERIAS</label></div>
	      <div class="col-md-3"><textarea name="m87"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[86][value]" value="{{ old('properties[86][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[86][value]" value="{{ old('properties[86][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d87"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[87][key]" class="form-control" value="87">
	      <div class="col-md-4"> <label>BOTE AUXILIAR</label></div>
	      <div class="col-md-3"><textarea name="m88"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[87][value]" value="{{ old('properties[87][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[87][value]" value="{{ old('properties[87][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d88"></textarea></div>
	    </div>
	    <br>
	</div>
  	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  	<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
  <div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>PREVENCIÓN DE LA CONTAMINACIÓNL</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[88][key]" class="form-control" value="88">
	      <div class="col-md-4"> <label>HIDROCARBURO EN PIQUE PROA (PROHIBICION)</label></div>
	      <div class="col-md-3"><textarea name="m89"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[88][value]" value="{{ old('properties[88][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[88][value]" value="{{ old('properties[88][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d89"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[89][key]" class="form-control" value="89">
	      <div class="col-md-4"> <label>POSEE SISTEMA ACHIQUE AL EXTERIOR NO AUTORIZADO (SEP. LIQ)</label></div>
	      <div class="col-md-3"><textarea name="m90"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[89][value]" value="{{ old('properties[89][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[89][value]" value="{{ old('properties[89][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d90"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[90][key]" class="form-control" value="90">
	      <div class="col-md-4"> <label>EQUIPO SEPARADOR/FILTRADOR</label></div>
	      <div class="col-md-3"><textarea name="m91"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[90][value]" value="{{ old('properties[90][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[90][value]" value="{{ old('properties[90][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d91"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[91][key]" class="form-control" value="91">
	      <div class="col-md-4"> <label>EQUIPO PROTECCIÓN PERSONAL Y CONTROL DERRAME</label></div>
	      <div class="col-md-3"><textarea name="m92"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[91][value]" value="{{ old('properties[91][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[91][value]" value="{{ old('properties[91][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d92"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[92][key]" class="form-control" value="92">
	      <div class="col-md-4"> <label>AISLADOR DE COMBUSTIBLE</label></div>
	      <div class="col-md-3"><textarea name="m93"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[92][value]" value="{{ old('properties[92][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[92][value]" value="{{ old('properties[92][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d93"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[93][key]" class="form-control" value="93">
	      <div class="col-md-4"> <label>EQUIPO TRITURADOR/DESMENUZADOR</label></div>
	      <div class="col-md-3"><textarea name="m94"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[93][value]" value="{{ old('properties[93][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[93][value]" value="{{ old('properties[93][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d94"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[94][key]" class="form-control" value="94">
	      <div class="col-md-4"> <label>RÓTULOS X BASURA (RECICLADO DE BASURA)</label></div>
	      <div class="col-md-3"><textarea name="m95"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[94][value]" value="{{ old('properties[94][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[94][value]" value="{{ old('properties[94][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d95"></textarea></div>
	    </div>
	    <br>
	</div>
  	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  	<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
  <div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>SEGURIDAD DEL PERSONAL, HIGIENE Y SALUD DE LA TRIPULACIÓN </b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[95][key]" class="form-control" value="95">
	      <div class="col-md-4"> <label>EQUIPO DE PROTECCIÓN PERSONAL PARA LA TRIPULACIÓN</label></div>
	      <div class="col-md-3"><textarea name="m96"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[95][value]" value="{{ old('properties[95][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[95][value]" value="{{ old('properties[95][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d96"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[96][key]" class="form-control" value="96">
	      <div class="col-md-4"> <label>CERTIFICADO MEDICO DE LA TRIPULACIÓN</label></div>
	      <div class="col-md-3"><textarea name="m97"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[96][value]" value="{{ old('properties[96][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[96][value]" value="{{ old('properties[96][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d97"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[97][key]" class="form-control" value="97">
	      <div class="col-md-4"> <label>BOTIQUIN DE PRIMEROS AUXILIOS (PERSONAL CAPACITADO)</label></div>
	      <div class="col-md-3"><textarea name="m98"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[97][value]" value="{{ old('properties[97][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[97][value]" value="{{ old('properties[97][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d98"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[98][key]" class="form-control" value="98">
	      <div class="col-md-4"> <label>ROPA DE TRABAJO DE LA TRIPULACIÓN ES DE ALGODÓN O MATERIAL IGNIFUGO</label></div>
	      <div class="col-md-3"><textarea name="m99"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[98][value]" value="{{ old('properties[98][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[98][value]" value="{{ old('properties[98][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d99"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[99][key]" class="form-control" value="99">
	      <div class="col-md-4"> <label>PROCEDIMIENTOS PARA EVACUACION DE HERIDOS</label></div>
	      <div class="col-md-3"><textarea name="m100"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[99][value]" value="{{ old('properties[99][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[99][value]" value="{{ old('properties[99][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d100"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[100][key]" class="form-control" value="100">
	      <div class="col-md-4"> <label>TRIPULACIÓN CON CERTIFICADO DE VACUNACION DE FIEBRE AMARILLA Y TETANOS</label></div>
	      <div class="col-md-3"><textarea name="m101"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[100][value]" value="{{ old('properties[100][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[100][value]" value="{{ old('properties[100][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d101"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[101][key]" class="form-control" value="101">
	      <div class="col-md-4"> <label>TANQUE DE AGUA POTABLE PARA CONSUMO</label></div>
	      <div class="col-md-3"><textarea name="m102"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[101][value]" value="{{ old('properties[101][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[101][value]" value="{{ old('properties[101][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d102"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[102][key]" class="form-control" value="102">
	      <div class="col-md-4"> <label>ARRANCHADO DE INSTALACIONES</label></div>
	      <div class="col-md-3"><textarea name="m103"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[102][value]" value="{{ old('properties[102][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[102][value]" value="{{ old('properties[102][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d103"></textarea></div>
	    </div>
	    <br>
	</div>
  	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  	<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
  <div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>OTROS </b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[103][key]" class="form-control" value="103">
	      <div class="col-md-4"> <label>SISTEMA DE RASTREO SATELITAL</label></div>
	      <div class="col-md-3"><textarea name="m104"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[103][value]" value="{{ old('properties[103][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[103][value]" value="{{ old('properties[103][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d104"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[104][key]" class="form-control" value="104">
	      <div class="col-md-4"> <label>SALA DE MAQUINA CON ENMALLADO, BARANDAS SEGURAS Y ADECUADAS </label></div>
	      <div class="col-md-3"><textarea name="m105"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[104][value]" value="{{ old('properties[104][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[104][value]" value="{{ old('properties[104][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d105"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[105][key]" class="form-control" value="105">
	      <div class="col-md-4"> <label>SALA DE MAQUINAS Y DEPOSITO DE COMBUSTIBLE CON SEÑALIZACIÓN</label></div>
	      <div class="col-md-3"><textarea name="m106"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[105][value]" value="{{ old('properties[105][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[105][value]" value="{{ old('properties[105][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d106"></textarea></div>
	    </div>
	    <br>
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[106][key]" class="form-control" value="106">
	      <div class="col-md-4"> <label>CINTA TRANSPORTADORA </label></div>
	      <div class="col-md-3"><textarea name="m107"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[106][value]" value="{{ old('properties[106][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[106][value]" value="{{ old('properties[106][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d107"></textarea></div>
	    </div>
	    <br>
	</div>
  	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  	<input type="submit" name="submit" class="submit btn btn-success" value="Enviar" id="submit_data" />
</fieldset>