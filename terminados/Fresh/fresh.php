<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="Fresh.css"> -->
    <title>Curriculum Fresh</title>

    <style>
                /*GLOBALS*/
                html{
            width: 210mm;
            height: 297mm;
            box-sizing: border-box;
        }
        body{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 8mm 8mm 8mm 8mm;
        }
        table{
            /* max-width: max-content; */
            /* width: 202mm; */
            border-collapse: collapse;
        }
        tbody{
            width:194mm;
        
        }
        td{
            min-width: 40mm;
            min-height: 30mm;
        }
        ul,li,td,table,p,h1,h2,h3,h4,h5,h6,html{
            margin: 0;
            padding:0;
        }
        tr{
            width:100%;
        }
        /**
        * @Reutils
        */
        /*Backgrounds maquetas*/
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
        /*End Backgrounds*/
        .m-0{
            margin:0;
        }
        .p-lr{
            padding: 0px 15px 0px 15px;
        }
        .p-l1{
            padding-left: 10px;
        }
        .pb-1{
            padding-bottom: 10px;
        }
        .c-gray{
            color: gray;
        }
        .p-2{
            padding:10px;
        }
        .fw-5{
            font-weight: 500;
        }
        .text-center-all > *{
            text-align: center;
        }
        .d-ib{
        display:inline-block;
        }
        
        .t{
            vertical-align: top;
        }
        .mh-2{
            min-height: 20mm;
        }
        .lh-2{
            line-height: 20px;
        }
        /*
        font-sizes:
        TITLES: 20pt
        SUBTITLES: 12pt,13pt,14pt
        DESCRIPTIONS: 10pt
        */
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
        .font-description{
            font-size: 10pt;
        }
        
        /*CUSTOMS TEMPLATES*/
        
        .title{
            color:red;
            text-align: left;
        }
        .exp-container{
            padding: 10px 0 10px 10px;
        }
        .exp-title{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 700;
        }
        .img-container{
            padding:0;
            margin:0;
            width: 40mm;
            max-width:40mm;
            height: 40mm;
            border-radius: 50%;
            position:relative;
            overflow: hidden;
        }
        .img-container img{
            padding:0;
            margin:0;
            height:100%;
            width:100%;
            /* background: red; */
        }
        .name-profile{
            vertical-align: top;
            text-transform: uppercase;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 700;
        }
.border-bottom{
    border-bottom: .3mm solid greenyellow;
}
.border-top{
    border-top: .3mm solid greenyellow;
}
.descirption{
    padding: 0 10px 10px 10px;
}
.interes{
    padding: 10px 10px 10px 20px;
}
.c-green{
    color: greenyellow;
}

    </style>
</head>
<body>
    <table> 
        <tbody>
            <!--CABECERA-->
          <tr> 
              <td class="img-container" rowspan="2" colspan="1" >
                  <img src="<?php echo $candidato->getImagen() ?>">
              </td>
              <td class="p-l1 p-2 " colspan="2"><?php echo $candidato->__get('telefono') ?></td>
              <td class="p-l1 p-2" colspan="2"><?php echo $candidato->__get('email') ?></td>
          </tr>
          <tr>
              <td colspan="4">
                <p class="name-profile font-title p-l1"><?php echo $candidato->getNombreCompleto() ?></p>
                <span class="fw-5 c-green font-s-3 p-l1"><?php echo $candidato->__get('profesion') ?></span>
              </td>
          </tr>
          <!--SOBRE MI-->
          <tr>
              <th class="c-green">SOBRE MI</th>
              <td colspan="4" class="font-description p-2 border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quia hic aspernatur suscipit perferendis deserunt. Veritatis, excepturi laboriosam commodi explicabo optio sunt expedita. Illum optio perspiciatis fugiat consequatur magni libero!</td>
          </tr>
          <!--EDUCACION-->
          <tr>
              <th class="c-green">EDUCACION</th>
              <td colspan="3" class="p-2">
                <span class="c-gray font-description"> GRADO XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</span><br>
                <em class="c-gray font-description">Universidad,Colegio o Instituto</em>
              </td>
              <td class="font-description p-2 c-green">20XX - 20XX</td>
          </tr>
          <tr>
            <td colspan="1"></td>
            <td colspan="3" class="p-2">
              <span class="c-gray font-description"> GRADO XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</span><br>
              <em class="c-gray font-description">Universidad,Colegio o Instituto</em>
            </td>
            <td class="font-description p-2 c-green">20XX - 20XX</td>
        </tr>
          

        
        <!--EXPERIENCIA-->
        <tr>
            <th class="c-green">EXPERIENCIA</th>
            <td colspan="3" class="border-top p-2">PRACTICA EN EMPRESA &#124; PUESTO OCUPADO</td>
            <td colspan="1" class="font-description border-top p-2 c-green">20XX - 20XX</td>
        </tr>
        <tr>
            <th colspan="1"></th>
            <td colspan="4" class="font-description descirption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quia hic aspernatur suscipit perferendis deserunt. Veritatis, excepturi laboriosam commodi explicabo optio sunt expedita. Illum optio perspiciatis fugiat consequatur magni libero!</td>
        </tr>

        <tr>
            <td></td>
            <td colspan="3" class="p-2">PRACTICA EN EMPRESA &#124; PUESTO OCUPADO</td>
            <td colspan="1" class="font-description p-2 c-green">20XX - 20XX</td>
        </tr>
        <tr>
            <th colspan="1"></th>
            <td colspan="4" class="font-description descirption border-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quia hic aspernatur suscipit perferendis deserunt. Veritatis, excepturi laboriosam commodi explicabo optio sunt expedita. Illum optio perspiciatis fugiat consequatur magni libero!</td>
        </tr>
        <!--IDIOMAS-->
        <tr>
            <th class="c-green">IDIOMAS</th>
            <td class="font-description p-2">Ingles</td>
            <td class="font-description p-2">Frances</td>
            <td class="font-description p-2">Aleman</td>
            <td class="font-description p-2">Español</td>
        </tr>
        <tr>
            <th colspan="1"></th>
        </tr>
        <!--INTERESES-->
        <tr>
            <th class="c-green">INTERESES</th>
            <td class="border-top interes">
                <ul>
                    <li>Interes 1</li>
                    <li>Interes 2</li>
                    <li>Interes 3</li>
                </ul>
            </td>
            <td class="border-top interes">
                <ul>
                    <li>Interes 4</li>
                    <li>Interes 5</li>
                    <li>Interes 6</li>
                </ul>
            </td>
            <td class="border-top interes">
                <ul>
                    <li>Interes 7</li>
                    <li>Interes 8</li>
                    <li>Interes 9</li>
                </ul>
            </td>
            <td class="border-top"></td>
        </tr>
        </tbody>
    </table>
</body>
</html>