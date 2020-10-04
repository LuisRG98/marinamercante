<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<style>
	table.example-table, .example-table
	td { border: 1px solid black; border-collapse: collapse; text-align: center; font-size: 8; }
	th { border: 1px solid black; border-collapse: collapse;font-size: 8; width: 33% ; }
</style>

<style >
	th.col{background-color: #76adbc;}
</style>

<body>



<div style="background-image: url('./img/bol.png'); background-repeat: no-repeat;background-position: center;">
<img src="./storage/img/img.png" width="150" style="float: left;  background-size: contain;">

<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ESTADO PLURINACIONAL DE BOLIVIA</h3>
<h3>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	MINISTERIO DE DEFENSA
</h3>
<h3>DIRECCIÓN GENERAL DE INTERESES MARÍTIMOS</h3>
<h3>&nbsp;&nbsp;&nbsp;FLUVIALES, LACUSTRE Y MARINA MERCANTE</h3>
</div>

<table  style="float: right;border: 1px solid black;font-size: 9;text-align: center;">
	<tr style="background-color: #76adbc;">
		<td>N° REGISTRO</td>
	</tr>
	<tr>
		<td>{{$emb->id_emb}}</td>
	</tr>
</table>
<br><br>
<h3 style="text-align: center;">CERTIFICADO DE SEGURIDAD DE LA NAVEGACIÓN</h3>
<p style="text-align: center; font-size: 9" >
	EXPEDIDO EN CUMPLIMIENTO AL D.S. N° 3073 <br>
	REGLAMENTO TÉCNICO A LA LEY N° 165 GENERAL DE TRANSPORTE<br>
	MODALIDAD DE TRANSPORTE ACUÁTICO, TÍTULO TERCERO, CAPÍTULO SEGUNDO ART. 21
</p>


<table>
	<tr>
		<td>PROPIETARIO(S)</td>
		<td> &nbsp;&nbsp;&nbsp;&nbsp;{{$emb->nom_prop}}</td>
	</tr>
	<tr>
		<td>ANTERIOR PROPIERTARIO</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;{{$emb->ant_prop}}</td>
	</tr>
	<tr>
		<td>FECHA DE INSPECCIÓN</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;{{$emb->created_at}}</td>
	</tr>
	<tr>
		<td>LUGAR DE INSPECCIÓN</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;{{$emb->base_op}}</td>
	</tr>
	<tr>
		<td>BASE DE OPERACIONES</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;{{$emb->base_op}}</td>
	</tr>
</table>

<table class="example-table" width="100%">
	<tr>
		<th  class="col" COLSPAN="2">NOMBRE DE LA EMBARCACIÓN</th>
		<th  class="col" COLSPAN="2">MATRÍCULA</th>
		<th  class="col" COLSPAN="2">INDICATIVO DE LLAMADA</th>
	</tr>
	<tr>
		<td COLSPAN="2">{{$emb->nom_emb}}</td>
		<td COLSPAN="2">{{$emb->matricula }}</td>
		<td COLSPAN="2">{{$emb->num_cert }}</td>
	</tr>
	<tr>
		<th  class="col" COLSPAN="2">SERVICIOS DE LA EMBARCACIÓN</th>
		<th  class="col" COLSPAN="2">TIPO</th>
		<th  class="col" COLSPAN="2">AÑO DE CONSTRUCCIÓN</th>
	</tr>
	<tr>
		<td COLSPAN="2">{{$emb->serv_emb}} </td>
		<td COLSPAN="2">{{$emb->clase_tipo}}</td>
		<td COLSPAN="2">{{$emb->serv_emb}}</td>
	</tr>
	<tr>
		<th  class="col">ESLORA</th>
		<th  class="col">MANGA</th>
		<th  class="col">PUNTAL</th>
		<th  class="col">ARQUEO BRUTO</th>
		<th  class="col">ARQUEO NETO</th>
		<th  class="col">FRANCOBORDO</th>
	</tr>
	<tr>
		<td>{{$emb->eslora}}</td>
		<td>{{$emb->manga}}</td>
		<td>{{$emb->puntal}}</td>
		<td>{{$emb->trb}}</td>
		<td>{{$emb->trn}}</td>
		<td>{{$emb->francobordo}}</td>
	</tr>
	<tr>
		<th  class="col"  COLSPAN="2">TIPO Y MARCA DE MOTOR</th>
		<th  class="col" >NUMERO DE MOTOR</th>
		<th  class="col" >POTENCIA PROPULSIVA TOTAL</th>
		<th  class="col"  COLSPAN="2">POTENCIA ELÉCTRICA NOMINAL TOTAL</th>
	</tr>
	<tr>
		<td COLSPAN="2">TIPO Y MARCA DE MOTOR</td>
		<td>NUMERO DE MOTOR</td>
		<td>POTENCIA PROPULSIVA TOTAL</td>
		<td COLSPAN="2">POTENCIA ELÉCTRICA NOMINAL TOTAL</td>
	</tr>
	<tr>
		<th  class="col" COLSPAN="2">MATERIAL DEL CASCO</th>
		<th  class="col" >PESO Y ALTURA DE COBERTURA</th>
		<th  class="col" >MERCANCÍAS PELIGROSAS</th>
		<th  class="col" COLSPAN="2">NÚMERO MÁXIMO DE PASAJEROS</th>
	</tr>
	<tr>
		<td COLSPAN="2">{{$emb->sist_prop}}<br>{{$emb->marca}}</td>
		<td>{{$emb->num_mot}}</td>
		<td>{{$emb->php}}</td>
		<td COLSPAN="2"></td>
	</tr>
</table>

<p><b>SE CERTIFICA:</b></p>
<p style="text-align: justify;" >
	QUE LA EMBARCACIÓN, HA SIDO OBJETO DE INSPECCIONES DE CONFORMIDAD CON LO
	PRESCRITO EN EL REGLAMENTO DE INSPECCIONES PARA EMBARCACIONES MERCANTES Y QUE
	DICHA INSPECCIÓN, HA PUESTO DE MANIFIESTO QUE EL ESTADO DE CASCO, LA ESTRUCTURA
	MAQUINAS Y EL EQUIPO ES SATISFACTORIO Y QUE LA EMBARCACIÓN CUMPLE CON LAS
	PRESCRIPCIONES PERTINENTES EN LAS REGLAMENTACONES VIGENTES.
</p>
</body>
</html>