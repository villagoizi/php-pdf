<html>
<head>
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            margin-left: 10px;
            margin-right: 10px;
        }
        #logo{max-width: 30%; }
        hr{ 
            margin-top: 15px;
            border: 0;
            height: 1px;
            background: #333;
            background-image: linear-gradient(to right, #ccc, #333, #ccc);
        }
        p{
            margin-top:2px; margin-bottom:2px;
        }
        #header { 
            position: fixed;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 0px;
            margin-bottom: 60px!important;
        }
        #footer { 
            position: fixed; 
            left: 0px;
            bottom: -50px; 
            right: 0px; 
            height: 30px; 
            background-color: #EEEEEE; 
            padding-bottom: 10px;
            margin: 5px;
            padding: 10px;
        }
        .right{
            float: right;;
        }
        .page-number:after { content: counter(page); }
        #img-perfil{
            width: 151px;
            height: 181px;
        }
    </style>
</head>
<body>
    <div id="footer">
        <div class="right">
            <span class="page-number">Page </span>
        </div>
       <p class="page">
            <?php echo  'Curriculum vitae de: '.$candidato->getNombreCompleto() ?> <br>
            <b>Powered by</b>  <a href="https://web.com.mx/">www.web.com.mx</a>

       </p>
       
    </div>
    <div id="content">
        <table style="width: 100%;" align="left">
            <tr>
                <td style="width: 25%; text-align: left; ">
                    <img id="img-perfil" src="<?php echo $candidato->getImagen(); ?>">
                </td>
                <td style="width: 75%; text-align: left; padding-left: 20px">
                    <h3 style="margin-top:0px; margin-bottom:0px;">
                        <?php echo $candidato->getNombreCompleto() ?>
                    </h3>
                    <h3 style="margin-top:0px; margin-bottom:0px;">
                        <?php echo $candidato->__get('profesion') ?>
                    </h3>
                    <p style="margin-top:0px; margin-bottom:0px;"><b>Nacimiento</b>:
                        <?php echo $candidato->__get('fnacimiento') ?> 
                        <b>Sexo</b>: <?php echo $candidato->getSexo() ?> 
                    </p>
                    <p style="margin-top:0px; margin-bottom:0px;"><b>Dirección</b>: 
                        <?php 
                        echo $candidato->__get('direccion').', 
                        loc.'.$u->getNomLocalidad($candidato->__get('idlocalidad')).', 
                        Mpio. '.$u->getNomMunicipio($candidato->__get('idmunicipio')).', 
                        '.$u->getNomEstado($candidato->__get('idestado'), true).
                        ' C.P. '. $candidato->__get('cp'); ?>
                    </p>
                    <p style="margin-top:0px; margin-bottom:0px;"><b>Teléfono</b>:
                        <?php echo $candidato->__get('telefono') ?>
                    </p>
                    <p style="margin-top:0px; margin-bottom:0px;"><b>Email</b>:
                        <?php echo $candidato->__get('email') ?>
                    </p>
                    <p style="margin-top:0px; padding-bottom:40px;"><b>Clave única</b>: 
                        <?php echo $candidato->__get('cui') ?>
                    </p>
                    <br>
                </td>
            </tr>
        </table> 
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <h3>Sobre mi:</h3>
        <p style="text-align:justify">
            <?php echo $candidato->getAbout() ?>
        </p>

        <h3>Historia laboral:</h3>
        <?php 
            $historia = $candidato->getExperienciaLaboral(true);
            foreach ($historia as $key => $value) {
                if($value['titulo']!="" || !empty($value['titulo'])){
                    echo '<p><b>'.$value['titulo'].'</b> en '.$value['empresa'].'</p>';
                    echo '<p><b>Periodo:</b>'.$value['inicio'].' - '. $value['fin'].'</p>';
                    echo '<p>'.$value['descripcion'].'</p>';
                    echo '<br>';
                }
                
            }
        ?>


        <h3>Historial académico:</h3>
        <?php 
            $historialaca = $candidato->getHistorialAcademico(true);
            foreach ($historialaca as $key => $value) {
                if($value['curso']!="" || !empty($value['curso'])){
                    echo '<p><b>'.$value['curso'].'</b> en '.$value['institucion'].'</p>';
                    echo '<p><b>Periodo:</b>  '.$value['inicio'].' al  '.$value['fin'].'</p>';
                    echo '<p>'.$value['descripcion'].'</p>';
                    echo '<br>';
                }
            }
        ?>

        <h3>Dominio de idiomas:</h3>
        <table style="width: 100%;" align="left">
            <tr>
            <?php 
                $idiomas = $candidato->getIdiomas();
                foreach ($idiomas as $key => $value) {
                    echo '<td style="width: 25%; text-align: left; ">';
                    echo $value['idioma'];
                     $i->getIdiomasEstrellas($value['puntuacion']);
                    echo '</td>';
                }
            ?>
            </tr>
        </table>
        <br><br>
        <h3>Información adicional:</h3>
        <p><?php echo $candidato->getInfoAdicional() ?></p>

    </div>
</body>
</html>
