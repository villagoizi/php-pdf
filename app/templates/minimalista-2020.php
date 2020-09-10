<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Minimalista.css">
    <title>Curriculum Minimalista</title>
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
            /* border: .1mm solid black; */
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
        .c-red{
            color:red;
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
        .fw-5{
            font-weight: 500;
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
        .bg-red{
            background-color: red;
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
        .max-height{
            height:10mm;
            max-height: 10.1mm;
        }
        .max-header{
            max-height: 32.2mm;
        }
        .align-bottom{
            vertical-align: bottom;
        }
        .title-head{
            letter-spacing:5px;
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
        <tr>
            <td colspan="3"></td>
            <td colspan="3" class="p-2">
                <p class="name-profile font-title text-right"><?php echo $candidato->getNombreCompleto() ?> </p>
                <span class="fw-5 c-green font-s-3 text-right"><?php echo $candidato->__get('profesion') ?></span>
            </td>
            <td class="img-container" colspan="3" >
                <img src="<?php echo $candidato->getImagen() ?>">
            </td>
            <td colspan="3"></td>
        </tr>
        <!--DATA PROFILE-->
        <tr>
            <td colspan="4" class="p-2 font-description lh-2 text-center border-top border-bottom border-right">
                <ul class="style-none">
                    <li>Español</li>
                    <li>Ingles</li>
                    <li>Framces</li>
                </ul>
            </td>
            <td colspan="4" class="p-2 font-description lh-2 text-center border-top border-bottom border-right">
                <ul class="style-none">
                    <li><?php echo $candidato->__get('direccion') ?></li>
                    <li><?php echo $candidato->__get('email') ?></li>
                    <li><?php echo $candidato->__get('telefono') ?></li>
                </ul>
            </td>
            <td colspan="4" class="p-2 text-center lh-2 font-description border-top border-bottom">
                <p class="bold">SOFTWARE</p>
                <p class="font-description">Excel, Word, Powerpoint, Outlook,Photoshop,Illustrator,Wordpress</p>
            </td>
        </tr>
        <!--INTERESES-->
        <tr>
            <th colspan="12" class="p-2 text-uppercase title-head text-left">INTERESES</th>
        </tr>
        <tr>
            <td colspan="12" class="p-2 font-description">
                <ul class="p-l1 interes style-inside">
                    <li>Interes 1</li>
                    <li>Interes 2</li>
                    <li>Interes 3</li>
                </ul>
            </td>
        </tr>
        <!--EDUCACION-->
        <tr>
            <th class="p-2 border-top text-uppercase title-head text-left" colspan="12">Educacion</th>
        </tr>


        <?php 
            $historialaca = $candidato->getHistorialAcademico(true);
            foreach ($historialaca as $key => $value) {
                if($value['curso']!="" || !empty($value['curso'])){
        ?>
                    <tr>
                        <td colspan="3" class="t p-2">
                            <p class="font-description bold"><?php echo $value['inicio'].'-'.$value['fin'] ?></p>
                            <span class="font-description c-gray">Buenos Aires, Argentina</span>
                        </td>
                        <td colspan="9" class="t p-2">
                            <span class="exp-title font-s-3"><?php echo $value['curso'] ?></span><br>
                            <em class="c-gray font-s-3"><?php echo $value['descripcion'] ?></em>
                        </td>
                    </tr><?php
                }
            }
        ?>
        <!--EXPERIENCIAS-->
        <tr>
            <th colspan="12" class="border-top p-2 text-uppercase title-head text-left">EXPERIENCIAS PROFESIONALES</th>
        </tr>

        <?php 
            $historia = $candidato->getExperienciaLaboral(true);
            foreach ($historia as $key => $value) {
                if($value['titulo']!="" || !empty($value['titulo'])){
        ?>
                    <tr>
                        <td colspan="3" class="t p-2">
                            <p class="font-description bold"><?php echo $value['inicio'].'-'.$value['fin'] ?></p>
                            <span class="font-description c-gray">Buenos Aires, Argentina</span>
                        </td>
                        <td colspan="9" class="p-2">
                            <span class="exp-title font-s-3"><?php echo $value['titulo'] ?></span><br>
                            <span class="c-gray font-s-3"><?php echo $value['empresa'] ?></span><br>
                            <span class="font-description"><?php echo $value['descripcion'] ?></span>
                        </td>
                    </tr><?php
                }
            }
        ?>
        <!--HABILIDADES-->
        <tr>
            <th colspan="12" class="p-2 border-top text-uppercase title-head text-left">HABILIDADES</th>
        </tr>
        <tr>
            <td class="p-2 text-center-all border-right" colspan="3">Manejo del estres</td>
            <td class="p-2 text-center-all border-right" colspan="3">Correccion de textos</td>
            <td class="p-2 text-center-all" colspan="3">Trabajo en Equipo</td>
            <td class="p-2 text-center-all border-right" colspan="3">XXXXXXXXXXX</td>
        </tr>
        <tr>
            <td class="p-2 text-center-all border-right" colspan="3">XXXXXXXXXXXXX</td>
            <td class="p-2 text-center-all" colspan="3">XXXXXXXXXXXXXXXX</td>        
        </tr>
    </table>
</body>
</html>