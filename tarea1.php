<?php
	if(isset($_POST["importeTotalVendido"]) && isset($_POST["cantidadHijos"])) {
		$importeTotalVendido = $_POST["importeTotalVendido"];
		$cantidadHijos = $_POST["cantidadHijos"];

		$Lacomision = $importeTotalVendido * 0.075;
		$Labonificacion = $cantidadHijos * 50;
		$ElsueldoBasico = 600;
		$ElsueldoBruto = $ElsueldoBasico + $Lacomision + $Labonificacion;
		$Eldescuento = $ElsueldoBruto * 0.11;
		$ElsueldoNeto = $ElsueldoBruto - $Eldescuento;

		echo "<h3>Resultados:</h3>";
		echo "LaComisión: S/." . $Lacomision . "<br>";
		echo "LaBonificación: S/." . $Labonificacion . "<br>";
		echo "ElSueldo bruto: S/." . $ElsueldoBruto . "<br>";
		echo "ElDescuento: S/." . $Eldescuento . "<br>";
		echo "ElSueldo neto: S/." . $ElsueldoNeto;
	}
	?>