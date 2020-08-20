<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html{
            margin: 0;
            width: 210mm;
            height: 297mm;
            box-sizing: border-box;
        }
        table{
            /* max-width: max-content; */
            /* width: 202mm; */
            border-collapse: collapse;
        }
        tbody{
            width:202mm;

        }
        
        body{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 8mm 8mm 8mm 8mm;
        }
        /*GLOBALS*/
        .w-3{
            width: 70mm;
        }
        table{
            padding:0;
            margin:0;
        }
        .exp{
            background: red;
            text-align: left;
        }
        .c1{
            background: red;
        }
        .c2{
            background: blue;
        }
        .c3{
            background: yellow;
        }
        .c4{
            background: pink;
        }
        .m-0{
            margin:0;
        }
        ul,li{
            margin: 0;
        }
        .p-lr{
            padding: 0px 15px 0px 15px;
        }
/*
h-1 = 100%:
h-2 = 50%;
h-3 = 33%;
h-4 = 25%;
h-5 = 20%;
h-6 = 12%;
*/
/*customs*/
.w-2{
    width:105mm;
}
.img-container{
  padding:0;
  margin:0;
  width: 40mm;
  height:40mm;
  position:relative;
}
.h-60{
    height: 40mm;
}
.img-container img{
    width:100%;
    height:100%;
    padding:0;
    margin:0;
    /* background: red; */
}
.name-profile{
    font-weight: 700;
    font-size: 24px;
    vertical-align: top;
    padding:10px 0 0 10px;
    text-transform: uppercase;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.vacant-profile{
    font-weight: 500;
    font-size: 18px;
}
.data-profile{
    vertical-align: top;
    padding-top:4px;
}
td{
    padding:0;
    margin:0;
}
tr{
    width:100%;
}
.blue{
    background-color: #3b83bd;
    color: #3b83bd;
}
.bg-titles{
    background: #3b83bd;
}
.exp-title{
    color: #ffffff;
    padding:15px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: 700;
}
.c-titles{
    color: #3b83bd;
    padding: 0 15px 0px 15px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: 700;
}
.exp-bussines{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 16px;
    letter-spacing: -1px;
}
.d-ib{
    display:inline-block;
}
.exp-vacant{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: #3b83bd;
    font-size:16px;
}
.exp-date{
    color: #c0c0c0;
}
.exp-container{
    vertical-align: top;
    padding: 10px 0 10px 10px;
}
.exp-container .description{
    font-size:14px;
}
.le-1{
    line-height: 20px;
}
.info-container{
    text-align:center;
}
</style>
<title>Curriculum Vitae</title>
</head>
<body>
    <table>
        <!--Cabecera-->
        <tbody>
            <tr>
                <td class="img-container" rowspan="3" colspan="2">
                    <img id="img-perfil" src="<?php echo $candidato->getImagen(); ?>">
                </td>
                <td class="name-profile" rowspan="2" colspan="3">
                   <?php echo $candidato->getNombreCompleto() ?>
               </td>
               <td class="data-profile" rowspan="3" colspan="3">
                <b>Telefono:</b> <?php echo $candidato->__get('telefono') ?> <br>
                <b>Email: </b> <?php echo $candidato->__get('email') ?><br>
                <b>Dirección:</b> <?php 
                echo $candidato->__get('direccion').', 
                loc.'.$u->getNomLocalidad($candidato->__get('idlocalidad')).', 
                Mpio. '.$u->getNomMunicipio($candidato->__get('idmunicipio')).', 
                '.$u->getNomEstado($candidato->__get('idestado'), true).
                ' C.P. '. $candidato->__get('cp'); ?><br>
                <hr class="blue">
                Twitter<br>
                Skype<br>
                Linkedin<br>
            </td>
        </tr>
        <tr><td></td></tr>
        <tr>
            <td class="vacant-profile" colspan="3">
                <?php echo $candidato->__get('profesion') ?>        
            </td>
        </tr>
        <!--EXPERIENCIA LABORAL-->
        <tr>
            <td class="exp-title bg-titles" colspan="8"> EXPERIENCIA </td>
        </tr>
        

        <?php 
            $historia = $candidato->getExperienciaLaboral(true);
            foreach ($historia as $key => $value) {
                if($value['titulo']!="" || !empty($value['titulo'])){
        ?>
        <tr>
                    <td  class="exp-container" colspan="2">
                        <h3 class="m-0 exp-bussines" >
                            <?php echo $value['empresa'] ?>
                        </h3>
                        <p class="m-0 exp-date" >
                            <?php echo $value['inicio'].'-'.$value['fin'] ?>
                        </p>
                    </td>
                    <td class="exp-container" colspan="2">
                        <span class="exp-vacant"><?php echo $value['titulo'] ?></span>
                    </td>
                    <td colspan="4" class="exp-container">
                        <?php echo $value['descripcion'] ?>
                    </td>
        </tr>

        <?php
                }
                
            }
        ?>
            
        
        

        <!--FORMACION-->
        <tr>
            <td colspan="8" class="exp-title bg-titles">FORMACION</td>
        </tr>
        <?php 
            $historialaca = $candidato->getHistorialAcademico(true);
            foreach ($historialaca as $key => $value) {
                if($value['curso']!="" || !empty($value['curso'])){
        ?>

                <tr>
                    <td class="exp-container" colspan="4">
                        <em class="m-0"><?php echo $value['institucion'] ?></em>
                        <p class="m-0"><?php echo $value['inicio'].'-'.$value['fin'] ?></p>
                    </td>
                    <td class="exp-container le-1" colspan="4">
                        <h3 class="exp-bussines m-0"><?php echo $value['curso'] ?></h3>
                        <p class="m-0">
                            <?php echo $value['descripcion'] ?>
                        </p>
                    </td>
                </tr>

        <?php
                }
            }
        ?>
        
        <!--CURSOS-->
        <tr>
            <td colspan="8" class="c-titles">CURSOS</td>
        </tr>
        <tr>
            <td class="exp-container" colspan="4">
                <p class="m-0">Sep. 20XX - Jul. 20XX</p>
            </td>
            <td class="exp-container le-1" colspan="4">
                <h3 class="exp-bussines m-0">Nombre del curso</h3>
                <p class="m-0">Institucion Academica</p>
            </td>
        </tr>
        
        <!--IDIOMAS-->
        <tr>
            <td colspan="8" class="exp-title bg-titles">IDIOMAS</td>
        </tr>
        <tr>
            <td class="p-lr" colspan="8">Español: <em>Nativo</em></td>
        </tr>
        <tr>
            <td class="p-lr" colspan="8">Ingles: <em>Avanzado</em></td>
        </tr>
        <tr>
            <td class="p-lr" colspan="8">Francés: <em>Intermedio</em></td>
        </tr>
        <!--INFORMATICA-->
        <tr>
            <td colspan="8" class="exp-title bg-titles">INFORMATICA</td>
        </tr>
        <tr class="info-container">
            <td colspan="2">1</td>
            <td colspan="4">1</td>
            <td colspan="2">1</td>
        </tr>
        <!--INTERESES-->
    </tbody>
    <tfoot>
        <tr>
            <td colspan="8" class="exp-title bg-titles">INTERESES</td>
        </tr>
        <tr>
            <td colspan="8">
                <ul>
                    <li>Viajar: Europa,etc</li>
                    <li>Deportes: Futbol</li>
                </ul>
            </td>
        </tr>
    </tfoot>
</table>

</body>
</html>