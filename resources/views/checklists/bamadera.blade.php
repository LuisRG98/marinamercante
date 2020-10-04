{{-- modificado --}}
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
	      <input hidden="hidden" type="text" name="m[0][key]" class="form-control" value="0">
	      <input hidden="hidden" type="text" name="d[0][key]" class="form-control" value="0">
	      <div class="col-md-4"> <label>CERTIFICADO DE REGISTRO ORIGINAL. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[0][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[0][value]" value="{{ old('properties[0][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[0][value]" value="{{ old('properties[0][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d[0][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[1][key]" class="form-control" value="1">
	    <input hidden="hidden" type="text" name="m[1][key]" class="form-control" value="1">
	    <input hidden="hidden" type="text" name="d[1][key]" class="form-control" value="1">
	      <div class="col-md-4"> <label>CERTIFICADO DE SEGURIDAD DE LA NAVEGACIÓN ORIGINAL VIGENTE. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[1][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[1][value]" value="{{ old('properties[1][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[1][value]" value="{{ old('properties[1][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[1][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[2][key]" class="form-control" value="2">
	    <input hidden="hidden" type="text" name="m[2][key]" class="form-control" value="2">
	    <input hidden="hidden" type="text" name="d[2][key]" class="form-control" value="2">
	      <div class="col-md-4"> <label>CERTIFICADO DE FRANCOBORDO ORIGINAL VIGENTE. (ER)</label></div>
	      <div class="col-md-3"><textarea name="m[2][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[2][value]" value="{{ old('properties[2][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[2][value]" value="{{ old('properties[2][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[2][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[3][key]" class="form-control" value="3">
	      <div class="col-md-4"> <label>CERTIFICADO DE ARQUEO ORIGINAL VIGENTE. (ER)</label></div>
	      <div class="col-md-3"><textarea name="m3"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[3][value]" value="{{ old('properties[3][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[3][value]" value="{{ old('properties[3][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d3"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[4][key]" class="form-control" value="4">
	    <input hidden="hidden" type="text" name="m[4][key]" class="form-control" value="4">
	    <input hidden="hidden" type="text" name="d[4][key]" class="form-control" value="4">
	      <div class="col-md-4"> <label>CERT. DE PREVENCIÓN DE LA CONTAMINACIÓN DEL MEDIO AMBIENTE ACUÁTICO VIGENTE. (ER)</label></div>
	      <div class="col-md-3"><textarea name="m[4][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[4][value]" value="{{ old('properties[4][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[4][value]" value="{{ old('properties[4][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[4][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[5][key]" class="form-control" value="5">
	    <input hidden="hidden" type="text" name="m[5][key]" class="form-control" value="5">
	    <input hidden="hidden" type="text" name="d[5][key]" class="form-control" value="5">
	      <div class="col-md-4"> <label>CERTIFICADO DE MATRICULA ORIGINAL VIGENTE (verificar número motor). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[5][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[5][value]" value="{{ old('properties[5][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[5][value]" value="{{ old('properties[5][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[5][value]"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[6][key]" class="form-control" value="6">
	    <input hidden="hidden" type="text" name="m[6][key]" class="form-control" value="6">
	    <input hidden="hidden" type="text" name="d[6][key]" class="form-control" value="6">
	      <div class="col-md-4"> <label>LETREROS DE PRECAUCION (PELIGRO INFLAMABLE, NO FUMAR, MANTENGASE ALEJADO, ETC.). (ER)</label></div>
	      <div class="col-md-3"><textarea name="m[6][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[6][value]" value="{{ old('properties[6][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[6][value]" value="{{ old('properties[6][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[6][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[7][key]" class="form-control" value="7">
	    <input hidden="hidden" type="text" name="m[7][key]" class="form-control" value="7">
	    <input hidden="hidden" type="text" name="d[7][key]" class="form-control" value="7">
	      <div class="col-md-4"> <label>MARCAS DE FRANCOBORDO. (ER)</label></div>
	      <div class="col-md-3"><textarea name="m[7][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[7][value]" value="{{ old('properties[7][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[7][value]" value="{{ old('properties[7][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[7][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[8][key]" class="form-control" value="8">
	    <input hidden="hidden" type="text" name="m[8][key]" class="form-control" value="8">
	    <input hidden="hidden" type="text" name="d[8][key]" class="form-control" value="8">
	      <div class="col-md-4"> <label>LINEAS DEL TIPO REFLECTIVA PARA PASO DE VEHICULOS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[8][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[8][value]" value="{{ old('properties[8][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[8][value]" value="{{ old('properties[8][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[8][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[9][key]" class="form-control" value="9">
	    <input hidden="hidden" type="text" name="d[9][key]" class="form-control" value="9">
	    <input hidden="hidden" type="text" name="m[9][key]" class="form-control" value="9">
	      <div class="col-md-4"> <label>CAPACIDAD DE CARGA. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[9][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[9][value]" value="{{ old('properties[9][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[9][value]" value="{{ old('properties[9][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[9][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[10][key]" class="form-control" value="10">
	    <input hidden="hidden" type="text" name="d[10][key]" class="form-control" value="10">
	    <input hidden="hidden" type="text" name="m[10][key]" class="form-control" value="10">
	      <div class="col-md-4"> <label>PINTADO DE LINEA DE FRANCOBORDO (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[10][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[10][value]" value="{{ old('properties[10][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[10][value]" value="{{ old('properties[10][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[10][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[11][key]" class="form-control" value="11">
	    <input hidden="hidden" type="text" name="d[11][key]" class="form-control" value="11">
	    <input hidden="hidden" type="text" name="m[11][key]" class="form-control" value="11">
	      <div class="col-md-4"> <label>PINTADO NOMBRE/MATRICULA. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[11][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[11][value]" value="{{ old('properties[11][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[11][value]" value="{{ old('properties[11][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[11][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[12][key]" class="form-control" value="12">
	    <input hidden="hidden" type="text" name="d[12][key]" class="form-control" value="12">
	    <input hidden="hidden" type="text" name="m[12][key]" class="form-control" value="12">
	      <div class="col-md-4"> <label>LUCES DE NAVEGACIÓN (BANDAS, TOPE, TODO HORIZONTE, REMOLQUE, POPA). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[12][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[12][value]" value="{{ old('properties[12][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[12][value]" value="{{ old('properties[12][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[12][value]"></textarea></div>
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
	    <input hidden="hidden" type="text" name="m[13][key]" class="form-control" value="13">
	    <input hidden="hidden" type="text" name="d[13][key]" class="form-control" value="13">
	      <div class="col-md-4"> <label>CHALECOS SALVAVIDAS (CON EL NOMBRE DE LA EMBARCACIÓN). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[13][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[13][value]" value="{{ old('properties[13][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[13][value]" value="{{ old('properties[13][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[13][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[14][key]" class="form-control" value="14">
	    <input hidden="hidden" type="text" name="m[14][key]" class="form-control" value="14">
	    <input hidden="hidden" type="text" name="d[14][key]" class="form-control" value="14">
	      <div class="col-md-4"> <label>GUINDOLAS (CON EL NOMBRE DE LA EMBARCACIÓN). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[14][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[14][value]" value="{{ old('properties[14][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[14][value]" value="{{ old('properties[14][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[14][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[15][key]" class="form-control" value="15">
	    <input hidden="hidden" type="text" name="m[15][key]" class="form-control" value="15">
	    <input hidden="hidden" type="text" name="d[15][key]" class="form-control" value="15">
	      <div class="col-md-4"> <label>BOMBAS DE ACHUIQUE. (ER)</label></div>
	      <div class="col-md-3"><textarea name="m[15][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[15][value]" value="{{ old('properties[15][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[15][value]" value="{{ old('properties[15][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[15][value]"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[16][key]" class="form-control" value="16">
	    <input hidden="hidden" type="text" name="m[16][key]" class="form-control" value="16">
	    <input hidden="hidden" type="text" name="d[16][key]" class="form-control" value="16">
	      <div class="col-md-4"> <label>MANGUERAS DE INCENDIO COMPLETAS (una por boca de incendio de longitud no menor a 15 mts y no mayor a 25 mts). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[16][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[16][value]" value="{{ old('properties[16][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[16][value]" value="{{ old('properties[16][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[16][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[17][key]" class="form-control" value="17">
	    <input hidden="hidden" type="text" name="m[17][key]" class="form-control" value="17">
	    <input hidden="hidden" type="text" name="d[17][key]" class="form-control" value="17">
	      <div class="col-md-4"> <label>EXTINTORES (DOS DE 12 KG, DOS DE 6 KG)-APROBADA SEGÚN NORMA NFPA 10. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[17][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[17][value]" value="{{ old('properties[17][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[17][value]" value="{{ old('properties[17][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[17][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[18][key]" class="form-control" value="18">
	    <input hidden="hidden" type="text" name="d[18][key]" class="form-control" value="18">
	    <input hidden="hidden" type="text" name="m[18][key]" class="form-control" value="18">
	      <div class="col-md-4"> <label>TABLERO CON MATERIAL DE LUCHA CONTRA INCENDIOS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[18][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[18][value]" value="{{ old('properties[18][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[18][value]" value="{{ old('properties[18][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[18][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[19][key]" class="form-control" value="19">
	    <input hidden="hidden" type="text" name="d[19][key]" class="form-control" value="19">
	    <input hidden="hidden" type="text" name="m[19][key]" class="form-control" value="19">
	      <div class="col-md-4"> <label>PLANO DE LUCHA CONTRA INCENDIOS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[19][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[19][value]" value="{{ old('properties[19][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[19][value]" value="{{ old('properties[19][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[19][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[20][key]" class="form-control" value="20">
	    <input hidden="hidden" type="text" name="d[20][key]" class="form-control" value="20">
	    <input hidden="hidden" type="text" name="m[20][key]" class="form-control" value="20">
	      <div class="col-md-4"> <label>KIT PARA CONTROL DE DERRAMES (GUANTES DE NITRILO, ANTIPARRAS DE POLICARBONATO, CUBRE CALZADO, VERMICULITA, PALA Y ESCOBILLA, PAÑO O CHORIZO ABSORBENTE, BOLSA NEGRA). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[20][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[20][value]" value="{{ old('properties[20][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[20][value]" value="{{ old('properties[20][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[20][value]"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[21][key]" class="form-control" value="21">
	    <input hidden="hidden" type="text" name="m[21][key]" class="form-control" value="21">
	    <input hidden="hidden" type="text" name="d[21][key]" class="form-control" value="21">
	      <div class="col-md-4"> <label>CABLES Y CABOS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[21][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[21][value]" value="{{ old('properties[21][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[21][value]" value="{{ old('properties[21][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[21][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[22][key]" class="form-control" value="22">
	    <input hidden="hidden" type="text" name="m[22][key]" class="form-control" value="22">
	    <input hidden="hidden" type="text" name="d[22][key]" class="form-control" value="22">
	      <div class="col-md-4"> <label>INMOVILIZADOR DE RUEDAS. (ER)</label></div>
	      <div class="col-md-3"><textarea name="m[22][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[22][value]" value="{{ old('properties[22][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[22][value]" value="{{ old('properties[22][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[22][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[23][key]" class="form-control" value="23">
	    <input hidden="hidden" type="text" name="m[23][key]" class="form-control" value="23">
	    <input hidden="hidden" type="text" name="d[23][key]" class="form-control" value="23">
	      <div class="col-md-4"> <label>BITAS, CORNAMUSAS, PASA CABOS, ETC. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[23][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[23][value]" value="{{ old('properties[23][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[23][value]" value="{{ old('properties[23][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[23][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[24][key]" class="form-control" value="24">
	    <input hidden="hidden" type="text" name="d[24][key]" class="form-control" value="24">
	    <input hidden="hidden" type="text" name="m[24][key]" class="form-control" value="24">
	      <div class="col-md-4"> <label>DEFENSAS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[24][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[24][value]" value="{{ old('properties[24][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[24][value]" value="{{ old('properties[24][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[24][value]"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[25][key]" class="form-control" value="25">
	    <input hidden="hidden" type="text" name="m[25][key]" class="form-control" value="25">
	    <input hidden="hidden" type="text" name="d[25][key]" class="form-control" value="25">
	      <div class="col-md-4"> <label>CASCO LIBRE DE FILTRACIONES, CALFATEADO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[25][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[25][value]" value="{{ old('properties[25][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[25][value]" value="{{ old('properties[25][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[25][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[26][key]" class="form-control" value="26">
	    <input hidden="hidden" type="text" name="m[26][key]" class="form-control" value="26">
	    <input hidden="hidden" type="text" name="d[26][key]" class="form-control" value="26">
	      <div class="col-md-4"> <label>(CUBIERTA-CASCO-MAMPAROS- ETC.). LIBRE DE FISURAS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[26][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[26][value]" value="{{ old('properties[26][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[26][value]" value="{{ old('properties[26][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[26][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[27][key]" class="form-control" value="27">
	    <input hidden="hidden" type="text" name="m[27][key]" class="form-control" value="27">
	    <input hidden="hidden" type="text" name="d[27][key]" class="form-control" value="27">
	      <div class="col-md-4"> <label>CABLE DE SEGURIDAD CON TESADORES. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[27][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[27][value]" value="{{ old('properties[27][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[27][value]" value="{{ old('properties[27][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[27][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[28][key]" class="form-control" value="28">
	    <input hidden="hidden" type="text" name="m[28][key]" class="form-control" value="28">
	    <input hidden="hidden" type="text" name="d[28][key]" class="form-control" value="28">
	      <div class="col-md-4"> <label>PROTECCIÓN PERSONAL (BARANDILLAS-ESCALERAS-ETC). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[28][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[28][value]" value="{{ old('properties[28][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[28][value]" value="{{ old('properties[28][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[28][value]"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[29][key]" class="form-control" value="29">
	    <input hidden="hidden" type="text" name="m[29][key]" class="form-control" value="29">
	    <input hidden="hidden" type="text" name="d[29][key]" class="form-control" value="29">
	      <div class="col-md-4"> <label>HIDROCARBURO EN LA BARCAZA. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[29][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[29][value]" value="{{ old('properties[29][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[29][value]" value="{{ old('properties[29][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[29][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[30][key]" class="form-control" value="30">
	    <input hidden="hidden" type="text" name="m[30][key]" class="form-control" value="30">
	    <input hidden="hidden" type="text" name="d[30][key]" class="form-control" value="30">
	      <div class="col-md-4"> <label>BASUREROS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[30][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[30][value]" value="{{ old('properties[30][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[30][value]" value="{{ old('properties[30][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[30][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[31][key]" class="form-control" value="31">
	    <input hidden="hidden" type="text" name="m[31][key]" class="form-control" value="31">
	    <input hidden="hidden" type="text" name="d[31][key]" class="form-control" value="31">
	      <div class="col-md-4"> <label>ELEMENTOS ABSORBENTES. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[31][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[31][value]" value="{{ old('properties[31][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[31][value]" value="{{ old('properties[31][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[31][value]"></textarea></div>
	    </div>
	    <br>

	</div>
  	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  	<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
  <div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>SEGURIDAD DEL PERSONAL, HIGIENE Y SALUD DE LA TRIPULACIÓN</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[32][key]" class="form-control" value="32">
	    <input hidden="hidden" type="text" name="m[32][key]" class="form-control" value="32">
	    <input hidden="hidden" type="text" name="d[32][key]" class="form-control" value="32">
	      <div class="col-md-4"> <label>INDUMENTARIA ADECUADA DE LA TRIPULACIÓN. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[32][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[32][value]" value="{{ old('properties[32][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[32][value]" value="{{ old('properties[32][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[32][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[33][key]" class="form-control" value="33">
	    <input hidden="hidden" type="text" name="m[33][key]" class="form-control" value="33">
	    <input hidden="hidden" type="text" name="d[33][key]" class="form-control" value="33">
	      <div class="col-md-4"> <label>BOTIQUÍN DE PRIMEROS AUXILIOS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[33][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[33][value]" value="{{ old('properties[33][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[33][value]" value="{{ old('properties[33][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[33][value]"></textarea></div>
	    </div>
	    <br>

	</div>
  	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  	<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
	<div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>MÁQUINAS Y ELECTRICIDAD</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[34][key]" class="form-control" value="34">
	    <input hidden="hidden" type="text" name="m[34][key]" class="form-control" value="34">
	    <input hidden="hidden" type="text" name="d[34][key]" class="form-control" value="34">
	      <div class="col-md-4"> <label>MAQUINAS PRINCIPALES EN BUEN ESTADO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[34][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[34][value]" value="{{ old('properties[34][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[34][value]" value="{{ old('properties[34][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[34][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[35][key]" class="form-control" value="35">
	    <input hidden="hidden" type="text" name="m[35][key]" class="form-control" value="35">
	    <input hidden="hidden" type="text" name="d[35][key]" class="form-control" value="35">
	      <div class="col-md-4"> <label>CAJA DE HERRAMIENTAS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[35][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[35][value]" value="{{ old('properties[35][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[35][value]" value="{{ old('properties[35][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[35][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[36][key]" class="form-control" value="36">
	    <input hidden="hidden" type="text" name="m[36][key]" class="form-control" value="36">
	    <input hidden="hidden" type="text" name="d[36][key]" class="form-control" value="36">
	      <div class="col-md-4"> <label>TANQUE DE COMBUSTIBLE EN BUEN ESTADO (NO PRESENTA FUGAS). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[36][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[36][value]" value="{{ old('properties[36][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[36][value]" value="{{ old('properties[36][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[36][value]"></textarea></div>
	    </div>
	    <br>

	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  	<input type="submit" name="submit" class="submit btn btn-success" value="Enviar" id="submit_data" />
</fieldset>
