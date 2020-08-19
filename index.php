<?php 
	
	require_once "config.php";
	
	require __DIR__.'/app/auto_load.php';

	require __DIR__.'/vendor/autoload.php';


	Use App\Controllers\pdfController;
	echo "Imprimiendo pdf";
	$pdf=new pdfController();
	$pdf->generarPdf();
 ?>