<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pólux Click - Sistema de Facturas</title>
	<link rel="stylesheet" href='{{asset("css/materialize.min.css")}}'>
	<link rel="shortcut icon" href='{{asset("favicon.ico")}}'>
	<link rel="stylesheet" href='{{asset("css/styles.css")}}'>
</head>
<body class="black letras_blancas">
	<div class="row">
		<form class="col s12" action="{{url('/recibo')}}" method="GET">
			<div class="row">
				<div class="col s5">
					<div class="row">
					    <div class="input-field col s12">
				    	 	<input name="cliente" type="text" class="validate autocomplete" required>
				          	<label for="cliente">Cliente</label>
				        </div>
			      	</div>
			      	<div class="row">
				        <div class="input-field col s12">
				          	<input name="direccion" type="text" class="validate autocomplete" required>
				          	<label for="direccion">Dirección</label>
				        </div>
			      	</div>
			      	<div class="row">
				        <div class="input-field col s4">
				          	<input name="cp" type="text" class="validate autocomplete" required>
				          	<label for="cp">Código Postal</label>
				        </div>
				        <div class="input-field col s8">
				          	<input name="ciudad" type="text" class="validate autocomplete" required>
				          	<label for="ciudad">Ciudad</label>
				        </div>
			      	</div>
				</div>
				<div class="col s6 offset-s1">
					<div id="row_concepto" class="row">
						<div class="input-field col s8">
							<input name="concepto" type="text" class="validate autocomplete" required>
							<label for="concepto">Concepto</label>
						</div>
						<div class="input-field col s2">
							<input name="pu" type="number" class="validate autocomplete" required>
							<label for="pu">Precio unitario</label>
						</div>
						<div class="input-field col s2">
							<input name="cant" type="number" class="validate autocomplete" required>
							<label for="cant">Cantidad</label>
						</div>
					</div>
					<div id="row_concepto" class="row">
						<div class="input-field col s8">
							<input name="concepto2" type="text" class="validate autocomplete">
							<label for="concepto2">Concepto</label>
						</div>
						<div class="input-field col s2">
							<input name="pu2" type="number" class="validate autocomplete">
							<label for="pu2">Precio unitario</label>
						</div>
						<div class="input-field col s2">
							<input name="cant2" type="number" class="validate autocomplete">
							<label for="cant2">Cantidad</label>
						</div>
					</div>
					<div id="row_concepto" class="row">
						<div class="input-field col s8">
							<input name="concepto3" type="text" class="validate autocomplete">
							<label for="concepto3">Concepto</label>
						</div>
						<div class="input-field col s2">
							<input name="pu3" type="number" class="validate autocomplete">
							<label for="pu3">Precio unitario</label>
						</div>
						<div class="input-field col s2">
							<input name="cant3" type="number" class="validate autocomplete">
							<label for="cant3">Cantidad</label>
						</div>
					</div>
					<div class="row right-align">
						<button class="btn polux" type="submit">Terminar factura</button>
					</div>
				</div>
			</div>
	    </form>
  	</div>
	<script src='{{asset("js/jquery.min.js")}}'></script>
	<script src='{{asset("js/materialize.min.js")}}'></script>
</body>
</html>