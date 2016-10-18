<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pólux Click - Sistema de Facturas</title>
	<link rel="shortcut icon" href='{{asset("favicon.ico")}}'>
	<link rel="stylesheet" href='{{asset("css/pdf.css")}}'>
</head>
<body>
	<div id="info_polux" class="row">
		<div class="col-12">
			<img src='{{asset("logo.png")}}'>
			<table>
				<tr><td>Pólux Click - Matriz Tec</td></tr>
				<tr><td>Av. Juan de Dios Bátiz 310 Pte., ITC Edificio C</td></tr>
				<tr><td>80220</td></tr>
				<tr><td>Culiacán, Sinaloa</td></tr>
			</table>
		</div>
	</div>
	<hr>
	<div id="info_cliente" class="row">
		<div class="col-6">
			<table>
				<tr><td>{{$cliente}}</td></tr>
				<tr><td>{{$direccion}}</td></tr>
				<tr><td>{{$codigo_postal}}</td></tr>
				<tr><td>{{$ciudad}}</td></tr>
			</table>
		</div>
	</div>
	<div id="concepto" class="row">
		<div class="col-12">
			<table class="tg">
				<thead>
					<tr>
						<th width="57.5%">Concepto</th>
						<th width="10%">Precio Unitario</th>
						<th width="10%">Cantidad</th>
						<th width="10%">Precio</th>
					</tr>
				</thead>
				<tbody>
					<?php $total = 0 ?>
					@for($i = 0; $i < count($venta['conceptos']) ; $i++)
					<tr>
						<td class="tg-yw4l">{{$venta['conceptos'][$i]}}</td>
						<td class="tg-b7b8">${{$venta['precios'][$i]}}.00</td>
						<td class="tg-yw4l">{{$venta['cantidades'][$i]}}</td>
						<?php $precio = $venta['precios'][$i]*$venta['cantidades'][$i] ?>
						<td class="tg-b7b8">${{$precio}}.00</td>
					</tr>
					<?php $total = $total + $precio ?>
					@endfor
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td class="tg-yw4l">Total: </td>
						<td class="tg-b7b8">${{$total}}.00</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<footer>
		<hr>
		Este documento es sólo de carácter informativo, no tiene validez oficial como comprobante legal o fiscal.
	</footer>
</body>
</html>