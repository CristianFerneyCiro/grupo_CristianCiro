<?php
	// Este codigo ha sido generado por el modulo psexport 20150822-w32 de PSeInt.
	// Es posible que el codigo generado no sea completamente correcto. Si encuentra
	// errores por favor reportelos en el foro (http://pseint.sourceforge.net).

	$stdin = fopen('php://stdin','r');
	// Para leer variables de texto se utiliza una $x=rtrim(fgets($stdin) porque el string
	// que lee fgets incluye el caracter de fin de linea (entonces se usa rtrim para
	// quitarlo); y la alternativa fscanf($stdin,"%s",$x) solo lee una palabra (lo cual
	// no sería equivalente a la instrucción Leer del pseudocódigo).
	
	function sup($dinero) {
		global $stdin;
		echo 'Hola, estee s su banco amigo, ¿díganos qué desea?',PHP_EOL;
		echo '',PHP_EOL;
		echo 'Digite 1 para consultar',PHP_EOL;
		echo 'Digite 2 para retirar',PHP_EOL;
		echo 'Digite 3 para consignar',PHP_EOL;
		$digito=rtrim(fgets($stdin),PHP_EOL);
		if ($digito==1) {
			echo 'Su dinero en este momento está en: ',$dinero,PHP_EOL;
		}
		if ($digito==2) {
			echo 'Escriba el valor a retirar sin puntos ',PHP_EOL;
			fscanf($stdin,"%f",$valor);
			$dinero = $dinero-$valor;
			echo 'Su transacción se ha hecho con éxito',PHP_EOL;
		}
		if ($digito==3) {
			echo 'Escriba el valor a Consignar sin puntos ',PHP_EOL;
			fscanf($stdin,"%f",$valor);
			$dinero = $dinero+$valor;
			echo 'Su transacción se ha hecho con éxito',PHP_EOL;
		}
		sup($dinero);
	}

	$dinero = 1000000;
	sup($dinero);
?>
