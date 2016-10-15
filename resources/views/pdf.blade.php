<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pólux Click - Sistema de Facturas</title>
	<style>
		img { max-width: 8em; }
		table { border-collapse:collapse;border-spacing:0; }
		#concepto table { width: 90%;}
		#concepto table td {
			font-family:Arial, sans-serif;
			font-size:14px;padding:10px 20px;
			border-style:solid;border-width:1px;
			overflow:hidden;
			word-break:normal;
		}
		#concepto table th {
			font-family:Arial, sans-serif;
			font-size:14px;
			font-weight:normal;
			padding:10px 20px;
			border-style:solid;
			border-width:1px;
			overflow:hidden;
			word-break:normal;
		}
	</style>
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
					<td>{{$concepto}}</td>
					<td>${{$precio_unitario}}.00</td>
					<td>{{$cantidad}}</td>
					<?php $precio = $precio_unitario*$cantidad ?>
					<td>${{$precio}}.00</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="costo">
		
	</div>

</body>
</html>