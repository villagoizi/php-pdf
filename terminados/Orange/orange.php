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
        .border-bottom{
            border-bottom: .3mm solid gray;
        }
        .style-none{
            list-style-type: none;
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
        .bg-orange{
            background-color: orange;
        }
        .bg-white{
          background: white;
        }
        .img-container{
            width: 32.20mm;
            max-width: 32.20mm;
            height: 32.20mm;
            max-height: 32.20mm;
            position: relative;
            border-radius: 50%;
            /* display:inline-block; */
            overflow: hidden;
        }
        .border-radius{
          border-radius: 50%;
        }
        .img-container img{
            width:100%;
            height:100%;
        }
        .m-h{
          min-height: 32.20mm;
        }
        .max-h{
          max-height: 32.20mm;
        }
        .visible-none{
            visibility: hidden;
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
            <td class="bg-orange"></td>
            <td colspan="2" class="bg-orange pt-1 img-container">
                <img src="<?php echo $candidato->getImagen() ?>" alt="">
            </td>
            <td colspan="5" class="p-2 bg-orange text-top c-white">
                <p class="font-title"><?php echo $candidato->getNombreCompleto() ?></p>
                <p class="font-s-4"><?php echo $candidato->__get('profesion') ?></p>
            </td>
            <td colspan="4" class="p-2 text-top bg-orange c-white">
                <ul class="font-s-4 text-right style-none">
                    <li><?php echo $candidato->__get('telefono') ?></li>
                    <li><?php 
                echo $candidato->__get('direccion').', 
                loc.'.$u->getNomLocalidad($candidato->__get('idlocalidad')).', 
                Mpio. '.$u->getNomMunicipio($candidato->__get('idmunicipio')).', 
                '.$u->getNomEstado($candidato->__get('idestado'), true).
                ' C.P. '. $candidato->__get('cp'); ?></li>
                    <li><?php echo $candidato->__get('email') ?></li>
                    <li>Perfil de linkedin</li>
                </ul>
            </td>
        </tr>
        <tr>
          <td colspan="12" class="bg-white"></td>
        </tr>
        <!--SOBRE MI-->
        <tr>
            <td colspan="12" class="font-description p-2">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, neque sed. Ipsam, accusantium corporis fugiat beatae, cumque vero dolor nam libero consequuntur, voluptas odio necessitatibus nostrum corrupti eum. Placeat, molestias.Ratione veniam omnis nulla, voluptas quo placeat, cumque quia tenetur ullam vitae nesciunt repudiandae porro accusamus nam itaque. Quia natus, at sed nam ratione ducimus optio hic sunt? Voluptate, vero.
            </td>
        </tr>
        <!--HABILIDADES E IDIOMA-->
        <tr>
            <td></td>
            <td colspan="10" class="font-s-3 bold text-uppercase border-bottom p-2">Habilidades e Idiomas</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="4" class="p-2">
                <ul class="style-none font-description">
                    <li>Manejo de Estres</li>
                    <li>Correccion de textos</li>
                    <li>Trabajo en equipo</li>
                </ul>
            </td>
            <td colspan="3" class="p-2">
                <ul class="style-none font-description">
                    <li>Español</li>
                    <li>Ingles</li>
                    <li>Aleman</li>
                </ul>
            </td>
            <td colspan="3" class="font-description p-2">
                <p>Software: Excel,Word, PowerPoint, Outlook, Photoshop, Illustrator, Wordpress</p>
            </td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td colspan="10" class="font-s-3 bold text-uppercase border-bottom p-2">educacion</td>
            <td></td>
        </tr>
        <!--HISTORIAL ACADEMICO-->

        <?php 
        $historialaca = $candidato->getHistorialAcademico(true);
        foreach ($historialaca as $key => $value) {
            if($value['curso']!="" || !empty($value['curso'])){
        ?>

                <tr>
                    <td></td>
                    <td colspan="4" class="p-2 font-description text-top">
                        <p><?php echo $value['inicio'].'-'.$value['fin'] ?></p>
                        <p>Ciudad, Pais</p>
                    </td>
                    <td colspan="6" class="p-2 font-description text-top">
                        <p class="bold"><?php echo $value['curso'] ?></p>
                        <p class="cursive"><?php echo $value['institucion'] ?></p>
                    </td>
                    <td></td>
                </tr><?php
                }
            }
        ?>
        
        <tr>
            <td></td>
            <td colspan="4" class="p-2 font-description text-top">
                <p>20XX - 20XX</p>
                <p>Ciudad, Pais</p>
            </td>
            <td colspan="6" class="p-2 font-description text-top">
                <p class="bold">GRADO XXXXXXXXX XXXXXXXXXX XXXXXXXXXXX XXXXXXXXXXXXX</p>
                <p class="cursive">Universidad,Colegio,Instituto</p>
            </td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td colspan="10" class="font-s-3 bold text-uppercase border-bottom p-2">experiencia</td>
            <td></td>
        </tr>
        <!--EXPERIENCIA -->
        <?php 
            $historia = $candidato->getExperienciaLaboral(true);
            foreach ($historia as $key => $value) {
                if($value['titulo']!="" || !empty($value['titulo'])){
        ?>
                    <tr>
                        <td></td>
                        <td colspan="4" class="p-2 font-description text-top">
                            <p><?php echo $value['inicio'].'-'.$value['fin'] ?></p>
                            <p>Ciudad, Pais</p>
                        </td>
                        <td colspan="6" class="font-description p-2 text-top">
                            <p class="font-s-4 bold"><?php echo $value['empresa'] ?></p>
                            <p><?php echo $value['titulo'] ?></p>
                            <p><?php echo $value['descripcion'] ?></p>
                        </td>
                        <td></td>
                    </tr><?php
                }
            }
        ?>

        <tr>
            <td></td>
            <td colspan="10" class="font-s-3 bold text-uppercase border-bottom p-2">intereses</td>
            <td></td>
        </tr>
        <!--INTERESES-->
        <tr>
            <td></td>
            <td colspan="10" class="p-2 text-top">
                <ul class="style-none font-description ">
                    <li>Interes 1</li>
                    <li>Interes 2</li>
                    <li>Interes 3</li>
                </ul>
            </td>
            <td></td>
        </tr>
    </table>
</body>
</html>
<!--TERMINADO-->