<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="columns.css"> -->
    <title>Tablas</title>
    <style>
        
        /* COLUMNS */
        html{
            width: 210mm;
            height: 297mm;
            box-sizing: border-box;
        }
        body{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 8mm 8mm 8mm 8mm;
            padding:0;
            box-sizing: inherit;
        }
        table{
            border-collapse: collapse;
            width: 194mm;
            max-width:194mm;
        }
        td{
            max-width: 16.10mm;
            width: 16.10mm;
            min-width: 16.10mm;
            border: .1mm solid black;
        }
        tbody{
            width: 194mm;
        }
        ul,li,td,table,p,h1,h2,h3,h4,h5,h6,html,div{
            margin: 0;
            padding:0;
        }
        .d-ib{
            display:inline-block;
            vertical-align: top;
        }

        tr{
            width:100%;
        }
        .col-4{
            width: 43.52mm;
            max-width:43.52mm;
            min-width:43.52mm;
        }
        .parent-one{
            width: 65.33mm;
            max-width:65.33mm;
            min-width:65.33mm;
        }
        
        .col-8{
            /* 130.66 colspan="8"*/
            /* col-1 10.88mm */

            width:83.106mm;
            max-width:83.106mm;
            min-width:83.106mm;
        }
        .bold{
            font-weight: bold;
        }
        .font-title{
            font-size: 20pt;
        }
        .font-s-1{
            font-size: 14pt;
        }
        .font-s-2{
            font-size: 13pt;
        }
        .font-s-3{
            font-size: 12pt;
        }
        .font-s-4{
            font-size: 11pt;
        }
        .font-description{
            font-size: 10pt;
        }
        .text-center{
            text-align: center;
        }
        .text-left{
            text-align: left;
        }
        .text-right{
            text-align: right;
        }
        .text-top{
            vertical-align: top;
        }
        .text-uppercase{
            text-transform: uppercase;
        }
        .lh-2{
            line-height: 20px;
        }
        .p-2{
            padding:10px;
        }
        .pt-1{
            padding-top: 10px;
        }
        .pl-1{
            padding-left: 10px;
        }
        .pb-1{
            padding-bottom: 10px;
        }
        .c-gray{
            color: gray;
        }
        .c-black{
            color:black;
        }
        .c-white{
            color: white;
        }
        .border-bottom{
            border-bottom: .3mm solid gray;
        }
        .style-none{
            list-style-type: none;
        }
        .style-inside{
            list-style: inside;
        }
        .cursive{
            font-style: italic;
        }

        /* CUSTOMS */
        .column1, .column2{
            position:relative;
        }
        .p-absolute{
            position: absolute;
        }
        .h-100{
            height:100%;
        }
        .relative{
            position:relative;
        }
        .bg-blue{
            background-color: blue;
        }
        .bg-white{
          background: white;
        }
        .img-container{
            width: 48.20mm;
            max-width: 48.20mm;
            height: 48.20mm;
            max-height: 48.20mm;
            position: relative;
            /* display:inline-block; */
            overflow: hidden;
        }
        .img-container img{
            width:100%;
            height:100%;
        }
        .m-h{
          min-height: 48.20mm;
        }
        .max-h{
          max-height: 48.20mm;
        }
        .visible-none{
            visibility: hidden;
        }
        .divider{
            border: .2mm solid blue;
            border-style: dashed;
            background-color: white;

        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td class="visible-none" colspan="1">1</td>
            <td class="visible-none" colspan="1">2</td>
            <td class="visible-none" colspan="1">3</td>
            <td class="visible-none" colspan="1">4</td>
            <td class="visible-none" colspan="1">5</td>
            <td class="visible-none" colspan="1">6</td>
            <td class="visible-none" colspan="1">7</td>
            <td class="visible-none" colspan="1">8</td>
            <td class="visible-none" colspan="1">9</td>
            <td class="visible-none" colspan="1">10</td>
            <td class="visible-none" colspan="1">11</td>
            <td class="visible-none" colspan="1">12</td>
        </tr>
    <!--CABECERA-->
        <tr class="m-h">
            <td colspan="3" class="img-container text-top">
                <img src="<?php echo $candidato->getImagen() ?>" alt="">
            </td>
            <td colspan="5" class="p-2 text-left">
                <p class="font-title"><?php echo $candidato->getNombreCompleto() ?></p><br><br>
                <p class="font-s-4"><?php echo $candidato->__get('profesion') ?></p>
            </td>
            <td colspan="4" class="p-2 text-top">
                <ul class="font-s-4 style-none">
                    <li><?php echo $candidato->__get('telefono') ?></li>
                    <li><?php echo $candidato->__get('email') ?></li>
                    <li><?php 
                        echo $candidato->__get('direccion').', 
                        loc.'.$u->getNomLocalidad($candidato->__get('idlocalidad')).', 
                        Mpio. '.$u->getNomMunicipio($candidato->__get('idmunicipio')).', 
                        '.$u->getNomEstado($candidato->__get('idestado'), true).
                        ' C.P. '. $candidato->__get('cp'); ?>
                </li>
                <hr class="divider">
                </ul>
                <ul class="font-s-4 text-left style-none">
                    <li>Twitter</li>
                    <li>Skype</li>
                    <li>Linkedin</li>
                </ul>
            </td> 
    </tr>

    <!--EXPERIENCIA-->
    <tr>
        <td colspan="12" class="p-2 c-white bg-blue text-uppercase font-s-3">EXPERIENCIA PROFESIONAL</td>
    </tr>
    <?php 
            $historia = $candidato->getExperienciaLaboral(true);
            foreach ($historia as $key => $value) {
                if($value['titulo']!="" || !empty($value['titulo'])){
        ?>
                    <tr>
                        <td colspan="5" class="p-2 text-top font-description">
                            <p><?php echo $value['empresa'] ?> &#124;</p>
                            <p><?php echo $value['inicio'].'-'.$value['fin'] ?></p>
                        </td>
                        <td colspan="7" class="p-2 text-top font-description">
                            <p class="bold"><?php echo $value['titulo'] ?></p>
                            <p><?php echo $value['descripcion'] ?></p>
                        </td>
                    </tr><?php
                }
            }
        ?>
    <!--FORMACION ACADEMICA-->
    <tr>
        <td colspan="12" class="p-2 c-white bg-blue text-uppercase font-s-3">Formacion academica</td>
    </tr>
    
    <?php 
            $historialaca = $candidato->getHistorialAcademico(true);
            foreach ($historialaca as $key => $value) {
                if($value['curso']!="" || !empty($value['curso'])){
    ?>

                <tr>
                    <td colspan="5" class="p-2 text-top font-description">
                        <p class="d-ib" ><?php echo $value['institucion'] ?></span>
                        <p><?php echo $value['inicio'].'-'.$value['fin'] ?></p>
                    </td>
                    <td colspan="7" class="p-2 text-top">
                        <p class="font-s-4 bold"><?php echo $value['curso'] ?></p>
                        <p class="font-description"><?php echo $value['descripcion'] ?></p>
                    </td>
                </tr><?php
                }
            }
    ?>
    <!--IDIOMAS-->
    <tr>
        <td colspan="12" class="p-2 c-white bg-blue text-uppercase font-s-3">Idiomas</td>
    </tr>
    <tr>
        <td colspan="12" class="p-2 font-description">
            <ul class="style-none">
                <li>Idioma1</li>
                <li>Idioma2</li>
                <li>Idioma3</li>
            </ul>
        </td>
    </tr>
    <!--INFORMATICA-->
    <tr>
        <td colspan="12" class="p-2 c-white bg-blue text-uppercase font-s-3">Informatica</td>
    </tr>
    <tr>
        <td colspan="4" class="text-top p-2">Excel</td>
        <td colspan="4" class="text-top p-2">Word</td>
        <td colspan="4" class="text-top p-2">PowerPoint</td>
    </tr>
    <!--INTERESES-->
    <tr>
        <td colspan="12" class="p-2 c-white bg-blue text-uppercase font-s-3">INTERESES</td>
    </tr>
    <tr>
        <td colspan="12" class="p-2 font-description">
            <ul class="p-l1 style-inside">
                <li>Interes 1</li>
                <li>Interes 2</li>
                <li>Interes 3</li>
            </ul>
        </td>
    </tr>
    
    </table>
</body>
</html>
<!--TERMINATED-->