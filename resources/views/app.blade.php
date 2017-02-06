<!DOCTYPE html>
<html ng-app="pdf">
<head>
	<meta charset="utf-8">
	<title>Pólux Click - Sistema de Facturas</title>
	<link rel="stylesheet" href='<?= asset("css/materialize.min.css") ?>'>
	<link rel="shortcut icon" href='<?= asset("favicon.ico") ?>'>
	<link rel="stylesheet" href='<?= asset("css/styles.css") ?>'>
</head>
<body class="polux letras_blancas">
	<div class="row">
		<form class="col s12" action="{{url('/recibo')}}" method="GET" novalidate>
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
				<div class="col s6 offset-s1" ng-controller="ConceptosCtrl">
					<div id="row_concepto" class="row" ng-repeat="concepto in conceptos">
						<div class="input-field col s8">
							<input name="concepto" type="text" ng-model="concepto.concepto" class="validate autocomplete" required>
							<label for="concepto">Concepto</label>
						</div>
						<div class="input-field col s2">
							<input name="pu" type="number" ng-model="concepto.precio_unitario" class="validate autocomplete" required>
							<label for="pu">Precio unitario</label>
						</div>
						<div class="input-field col s2">
							<input name="cant" type="number" ng-model="concepto.cantidad" class="validate autocomplete" required>
							<label for="cant">Cantidad</label>
						</div>
					</div>
					<div class="row right-align">
						<a class="btn" ng-click="agregarConcepto()">Agregar concepto</a>
						<button class="btn" type="submit">Terminar factura</button>
					</div>
				</div>
			</div>
	    </form>
  	</div>
	<script src='<?= asset("js/jquery.min.js") ?>'></script>
	<script src='<?= asset("js/materialize.min.js") ?>'></script>
	<script src='<?= asset("js/angular.min.js") ?>'></script>
	<script src='<?= asset("js/app.js") ?>'></script>
</body>
</html>