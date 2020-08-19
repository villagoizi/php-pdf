<?php 
namespace App\Controllers;

use Dompdf\Dompdf,
	App\Controllers\usuarioController,
	App\Controllers\ubicacionController,
	App\Controllers\idiomasController;

	class pdfController{

		public function generarPdf(){
			//Se instancia candidato controller para obtener los datos del candidato
			$candidato = new usuarioController();
			//Se cargan todos los datos del modelo
			$candidato->init();

			//Se instancian las ubicaciones
			$u = new ubicacionController();

			//Se instancian los idiomas
			$i = new idiomasController();

			$dompdf = new Dompdf(array('enable_remote' => true));
			ob_start(); 
			require_once ROOT_PATH.'app/templates/default.php';
			$html=ob_get_clean(); 
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4');
			$dompdf->render();
			$dompdf->output();
			ob_end_clean();
			$dompdf->stream('CV_'.$candidato->getNombreCompleto().'.pdf');

		}

		

}
?>
