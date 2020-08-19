<?php 

namespace App\Controllers;


class idiomasController{


	public function getIdiomas(){
		return array(
			array(
				"id" => 1,
				"nombre" => "Español",
				"activo" => 1,
			),
			array(
				"id" => 2,
				"nombre" => "Inglés",
				"activo" => 1,
			),
			array(
				"id" => 3,
				"nombre" => "Francés",
				"activo" => 1,
			),
			array(
				"id" => 4,
				"nombre" => "Portugués",
				"activo" => 1,
			),
			array(
				"id" => 5,
				"nombre" => "Alemán",
				"activo" => 1,
			),
			array(
				"id" => 6,
				"nombre" => "Chino mandarín",
				"activo" => 1,
			),
			array(
				"id" => 7,
				"nombre" => "Ruso",
				"activo" => 1,
			),
			array(
				"id" => 8,
				"nombre" => "Japonés",
				"activo" => 1,
			),
			array(
				"id" => 9,
				"nombre" => "Turco",
				"activo" => 1,
			),
			array(
				"id" => 10,
				"nombre" => "Sueco",
				"activo" => 1,
			),
		);
	}


	/*Recibe todos los idiomas, los idiomas actuales y limite de idiomasas del usuario para generar el HTML*/
	public function getStars($idiomasCandidato){
		$limiteidiomas=3;
		$todosIdiomas = self::getIdiomas();

		if(count($idiomasCandidato)==0){
			for($i=1; $i<=$limiteidiomas; $i++){ 
				echo '
				<div class="idiomas d-none" id="grupoidioma'.$i.'">
				<div class="row form-group">
				<label class="col-sm-3 label-title">Idioma'.$i.' <span class="text-danger">*</span></label>
				<div class="col-sm-9">
				<select class="form-control" name="idioma'.$i.'"   id="idioma'.$i.'" >
				<option value="" >Elije una opción</option>';
				foreach ($todosIdiomas as $key => $value) {
					echo '<option value="'.$value['id'].'"> '.$value['nombre'].'</option>';
				}
				echo '</select>
				</div>
				</div>
				<div class="row form-group rating">
				<label class="col-sm-3 label-title">Puntuación <span class="text-danger">*</span></label>
				<div class="col-sm-9">
				<div class="rating-star" >
				<div class="rating" id="estrellas'.$i.'">
				<input type="radio" id="i'.$i.'e5" name="rating'.$i.'" value="5" ><label class="full" for="i'.$i.'e5"></label>
				<input type="radio" id="i'.$i.'e4" name="rating'.$i.'" value="4"><label class="full" for="i'.$i.'e4"></label>
				<input type="radio" id="i'.$i.'e3" name="rating'.$i.'" value="3"><label class="full" for="i'.$i.'e3"></label>
				<input type="radio" id="i'.$i.'e2" name="rating'.$i.'" value="2"><label class="full" for="i'.$i.'e2"></label>
				<input type="radio" id="i'.$i.'e1" name="rating'.$i.'"" value="1"><label class="full" for="i'.$i.'e1"></label>
				</div>
				</div>
				</div>
				</div>
				</div>
				';
			}
		}else{
			for($x=0; $x<=($limiteidiomas-1); $x++){
				$div = $x+1;
				if(isset($idiomasCandidato[$x])){
					echo '
					<div class="idiomas" id="grupoidioma'.$div.'">
					<div class="row form-group">
					<label class="col-sm-3 label-title">Idioma'.$div.' <span class="text-danger">*</span></label>
					<div class="col-sm-9">
					<select class="form-control" name="idioma'.$div.'"   id="idioma'.$div.'" >
					<option value="" >Elije una opción</option>';
					foreach ($todosIdiomas as $key => $value) {

						echo '<option value="'.$value['id'].'" '; 
						if($value['id']==$idiomasCandidato[$x]['id_idioma']){
							echo 'selected';
						}
						echo' >'.$value['nombre'].'</option>';
					}
					echo '</select>
					</div>
					</div>
					<div class="row form-group rating">
					<label class="col-sm-3 label-title">Puntuación <span class="text-danger">*</span></label>
					<div class="col-sm-9">
					<div class="rating-star" >
					<div class="rating" id="estrellas'.$div.'">'; 
					for($p=5; $p>=1; $p--){
						echo '<input type="radio" id="i'.$div.'e'.$p.'" name="rating'.$div.'" value="'.$p.'"  ';
						if($idiomasCandidato[$x]['puntuacion']==$p){
							echo 'checked';
						}
						echo '><label class="full" for="i'.$div.'e'.$p.'"></label>';
					}
					echo '</div>
					</div>
					</div>
					</div><hr>
					</div>
					';
				}else{
					echo '
					<div class="idiomas d-none" id="grupoidioma'.$div.'">
					<div class="row form-group">
					<label class="col-sm-3 label-title">Idioma'.$div.' <span class="text-danger">*</span></label>
					<div class="col-sm-9">
					<select class="form-control" name="idioma'.$div.'"   id="idioma'.$div.'" >
					<option value="" >Elije una opción</option>';
					foreach ($todosIdiomas as $key => $value) {
						echo '<option value="'.$value['id'].'"> '.$value['nombre'].'</option>';
					}
					echo '</select>
					</div>
					</div>
					<div class="row form-group rating">
					<label class="col-sm-3 label-title">Puntuación <span class="text-danger">*</span></label>
					<div class="col-sm-9">
					<div class="rating-star" >
					<div class="rating" id="estrellas'.$div.'">
					<input type="radio" id="i'.$div.'e5" name="rating'.$div.'" value="5" ><label class="full" for="i'.$div.'e5"></label>
					<input type="radio" id="i'.$div.'e4" name="rating'.$div.'" value="4"><label class="full" for="i'.$div.'e4"></label>
					<input type="radio" id="i'.$div.'e3" name="rating'.$div.'" value="3"><label class="full" for="i'.$div.'e3"></label>
					<input type="radio" id="i'.$div.'e2" name="rating'.$div.'" value="2"><label class="full" for="i'.$div.'e2"></label>
					<input type="radio" id="i'.$div.'e1" name="rating'.$div.'"" value="1"><label class="full" for="i'.$div.'e1"></label>
					</div>
					</div>
					</div>
					</div><hr>
					</div>
					';
				}
			}							
		}
	}



	public function getIdiomasEstrellas($numero){
		switch ($numero) {
			case 0:
			echo '
			<img  src="'.__MEDIA__.'star2.png" >
			<img  src="'.__MEDIA__.'star2.png" >
			<img  src="'.__MEDIA__.'star2.png" >
			<img  src="'.__MEDIA__.'star2.png" >
			<img  src="'.__MEDIA__.'star2.png" >
			';
			break;

			case 1:
			echo '
			<img  src="'.__MEDIA__.'star.png" >
			<img  src="'.__MEDIA__.'star2.png" >
			<img  src="'.__MEDIA__.'star2.png" >
			<img  src="'.__MEDIA__.'star2.png" >
			<img  src="'.__MEDIA__.'star2.png" >
			';
			break;

			case 2:
			echo '
			<img  src="'.__MEDIA__.'star.png" >
			<img  src="'.__MEDIA__.'star.png" >
			<img  src="'.__MEDIA__.'star2.png" >
			<img  src="'.__MEDIA__.'star2.png" >
			<img  src="'.__MEDIA__.'star2.png" >
			';
			break;

			case 3:
			echo '
			<img  src="'.__MEDIA__.'star.png" >
			<img  src="'.__MEDIA__.'star.png" >
			<img  src="'.__MEDIA__.'star.png" >
			<img  src="'.__MEDIA__.'star2.png" >
			<img  src="'.__MEDIA__.'star2.png" >
			';
			break;

			case 4:
			echo '
			<img  src="'.__MEDIA__.'star.png" >
			<img  src="'.__MEDIA__.'star.png" >
			<img  src="'.__MEDIA__.'star.png" >
			<img  src="'.__MEDIA__.'star.png" >
			<img  src="'.__MEDIA__.'star2.png" >
			';
			break;

			case 5:
			echo '
			<img  src="'.__MEDIA__.'star.png" >
			<img  src="'.__MEDIA__.'star.png" >
			<img  src="'.__MEDIA__.'star.png" >
			<img  src="'.__MEDIA__.'star.png" >
			<img  src="'.__MEDIA__.'star.png" >
			';
			break;

			default:
			echo '
			<img  src="'.__MEDIA__.'star2.png" >
			<img  src="'.__MEDIA__.'star2.png" >
			<img  src="'.__MEDIA__.'star2.png" >
			<img  src="'.__MEDIA__.'star2.png" >
			<img  src="'.__MEDIA__.'tar2.png" >
			';
			break;
		}
	}



}


