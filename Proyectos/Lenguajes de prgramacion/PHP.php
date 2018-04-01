<?php
	// Este codigo ha sido generado por el modulo psexport 20160506-w32 de PSeInt.
	// Es posible que el codigo generado no sea completamente correcto. Si encuentra
	// errores por favor reportelos en el foro (http://pseint.sourceforge.net).

	$stdin = fopen('php://stdin','r');
	$a = 0;
	$b = 0;
	$r = 0;
	fscanf($stdin,"%f",$a);
	fscanf($stdin,"%f",$b);
	$r = $a+$b;
	echo $r,PHP_EOL;
?>
