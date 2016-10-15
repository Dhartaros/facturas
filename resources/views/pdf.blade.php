<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pólux Click - Sistema de Facturas</title>
	<link rel="shortcut icon" href='{{asset("favicon.ico")}}'>
	<link rel="stylesheet" href='{{asset("css/styles.css")}}'>
</head>
<body>
	<div id="info_polux">
		<img src='{{asset("logo.png")}}'><span>Pólux Click</span>
		<table>
			<tr><td>Pólux Click - Matriz Tec</td></tr>
			<tr><td>Av. Juan de Dios Bátiz 310 Pte., ITC Edificio C</td></tr>
			<tr><td>80220</td></tr>
			<tr><td>Culiacán, Sinaloa</td></tr>
		</table>
	</div>
	<hr>
	<div id="info_cliente">
		<table>
			<tr><td>{{$cliente}}</td></tr>
			<tr><td>{{$direccion}}</td></tr>
			<tr><td>{{$codigo_postal}}</td></tr>
			<tr><td>{{$ciudad}}</td></tr>
		</table>
	</div>
	<div id="concepto">
		<?php $precio1 = $precio2 = $precio3 = 0 ?>
		<table>
			<thead>
				<tr>
					<td width="57.5%">Concepto</td>
					<td width="10%">Precio Unitario</td>
					<td width="10%">Cantidad</td>
					<td width="10%">Precio</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$concepto['concepto1']['concepto']}}</td>
					<td>${{$concepto['concepto1']['precio_unitario']}}.00</td>
					<td>{{$concepto['concepto1']['cantidad']}}</td>
					<?php $precio1 = $concepto['concepto1']['precio_unitario']*$concepto['concepto1']['cantidad'] ?>
					<td>${{$precio1}}.00</td>
				</tr>
				@if($concepto['concepto2']['concepto'] != "")
				<tr>
					<td>{{$concepto['concepto2']['concepto']}}</td>
					<td>${{$concepto['concepto2']['precio_unitario']}}.00</td>
					<td>{{$concepto['concepto2']['cantidad']}}</td>
					<?php $precio2 = $concepto['concepto2']['precio_unitario']*$concepto['concepto2']['cantidad'] ?>
					<td>${{$precio2}}.00</td>
				</tr>
				@endif
				@if($concepto['concepto3']['concepto'] != "")
				<tr>
					<td>{{$concepto['concepto3']['concepto']}}</td>
					<td>${{$concepto['concepto3']['precio_unitario']}}.00</td>
					<td>{{$concepto['concepto3']['cantidad']}}</td>
					<?php $precio3 = $concepto['concepto3']['precio_unitario']*$concepto['concepto3']['cantidad'] ?>
					<td>${{$precio3}}.00</td>
				</tr>
				@endif
			</tbody>
		</table>
	</div>
	<div id="costo">
		<?php $total = $precio1+$precio2+$precio3 ?>
		<p>Total: ${{$total}}.00</p>
	</div>
</body>
</html>