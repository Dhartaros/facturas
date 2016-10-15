<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pólux Click - Sistema de Facturas</title>
	<link rel="stylesheet" href='{{asset("css/materialize.min.css")}}'>
	<style>
		body {
			color: white;
		}
	</style>
</head>
<body class="black">
	<div class="row">
		<form class="col s12" action="{{url('/factura')}}" method="GET">
			<div class="row">
				<div class="col s5">
					<div class="row">
					    <div class="input-field col s12">
				    	 	<input name="cliente" type="text" class="validate autocomplete">
				          	<label for="cliente">Cliente</label>
				        </div>
			      	</div>
			      	<div class="row">
				        <div class="input-field col s12">
				          	<input name="direccion" type="text" class="validate autocomplete">
				          	<label for="direccion">Dirección</label>
				        </div>
			      	</div>
			      	<div class="row">
				        <div class="input-field col s4">
				          	<input name="cp" type="text" class="validate autocomplete">
				          	<label for="cp">Código Postal</label>
				        </div>
				        <div class="input-field col s8">
				          	<input name="ciudad" type="text" class="validate autocomplete">
				          	<label for="ciudad">Ciudad</label>
				        </div>
			      	</div>
				</div>
				<div class="col s6 offset-s1">
					<div class="row">
						<div class="input-field col s8">
							<input name="concepto" type="text" class="validate autocomplete">
				          	<label for="concepto">Concepto</label>
						</div>
						<div class="input-field col s2">
							<input name="pu" type="text" class="validate autocomplete">
				          	<label for="pu">Precio unitario</label>
						</div>
						<div class="input-field col s2">
							<input name="cant" type="text" class="validate autocomplete">
				          	<label for="cant">Cantidad</label>
						</div>
					</div>
					<div class="row right-align">
						<a class="waves-effect waves-light btn">Añadir concepto</a>
						<button class="btn waves-effect waves-light" type="submit">Terminar factura</button>
					</div>
				</div>
			</div>
	    </form>
  	</div>
	<script src='{{asset("js/jquery.min.js")}}'></script>
	<script src='{{asset("js/materialize.min.js")}}'></script>
</body>
</html>