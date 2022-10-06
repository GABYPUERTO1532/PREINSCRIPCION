<?php
require '../vendor/autoload.php';


// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola</title>
    <style>
        table {
            width: 100%;
           
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>
    <div style="text-align: center">        
        <h3>COLEGIO ITD JUAN DEL CORRAL IED</h3>
        <h2>MATRICULA AÑO {{ matricula.ano }}</h2>
    </div>
    
    <table align="center" border="1px solid black " with="500px">
        <tbody>
            
            <tr>
                <td>DANE</td>
                <td>CURSO</td>
                <td>JORNADA</td>
                <td>EDAD</td>
            </tr>
            <tr>
                <td>111001009583</td>
                <td>Cell 2x2</td>
                <td>{{ formulario.jornada }}</td>
                <td>{{ edad }}</td>
            </tr>
        </tbody>
    </table>
    <div style="text-align: center">        
        <h3>DATOS DEL ESTUDIANTE</h3>
        
    </div>
    

    <table align="center" style="border: 1px black solid">
        <tbody>
            <tr>
                <td style="border: 1px black solid">PRIMER APELLIDO</td>
                <td style="border: 1px black solid">SEGUNDO APELLIDO</td>
                <td style="border: 1px black solid">PRIMER NOMBRE</td>
                <td style="border: 1px black solid">SEGUNDO NOMBRE</td>
            </tr>
            <tr>
                <td style="border: 1px black solid">{{ user.pri_apellido }}</td>
                <td style="border: 1px black solid">{{ user.seg_apellido }}</td>
                <td style="border: 1px black solid">{{ user.pri_nombre }}</td>
                <td style="border: 1px black solid">{{ user.seg_nombre }}</td>
            </tr>
        </tbody>
    </table>

    <table align="center" style="border: 1px black solid">
        <tbody>
            <tr>
                <td style="border: 1px black solid">FECHA DE NAC.</td>
                <td style="border: 1px black solid">CIUDAD</td>
                <td style="border: 1px black solid">DEPARTAMENTO</td>
                <td style="border: 1px black solid">TIPO DE DOC</td>
                <td style="border: 1px black solid">NUMERO</td>
                <td style="border: 1px black solid">EXPEDIDO EN</td>
            </tr>
            <tr>
                <td style="border: 1px black solid">{{ user.fecha_nac }}</td>
                <td style="border: 1px black solid">{{ user.ciudad_nac }}</td>
                <td style="border: 1px black solid">{{ user.depart_nac }}</td>
                <td style="border: 1px black solid">{{ user.tipo_id }}</td>
                <td style="border: 1px black solid">{{ user.identificacion }}</td>
                <td style="border: 1px black solid">{{ user.ciudad_exp }}</td>
            </tr>
        </tbody>
    </table>

    <table align="center" style="border: 1px black solid">
        <tbody>
            <tr>
                <td style="border: 1px black solid">DIRECCION</td>
                <td style="border: 1px black solid">BARRIO</td>
                <td style="border: 1px black solid">LOCALIDAD</td>
                <td style="border: 1px black solid">ESTRATO</td>
                <td style="border: 1px black solid">NIVEL SISBEN</td>
                <td style="border: 1px black solid">PUNTAJE</td>
            </tr>
            <tr>
                <td style="border: 1px black solid">Cell 1x2</td>
                <td style="border: 1px black solid">Cell 2x2</td>
                <td style="border: 1px black solid">Cell 3x2</td>
                <td style="border: 1px black solid">Cell 4x2</td>
                <td style="border: 1px black solid">Cell 5x2</td>
                <td style="border: 1px black solid">Cell 6x2</td>
            </tr>
        </tbody>
    </table>

    <table align="center" style="border: 1px black solid">
        <tbody>
            <tr>
                <td style="border: 1px black solid">TELÉFONO</td>
                <td style="border: 1px black solid">AFICIONES O HOBBIES</td>
                <td style="border: 1px black solid">CIRUGÍAS FRACTURAS O ENFERMEDADES</td>
            </tr>
            <tr>
                <td style="border: 1px black solid">Cell 1x2</td>
                <td style="border: 1px black solid">Cell 2x2</td>
                <td style="border: 1px black solid">Cell 3x2</td>
            </tr>
        </tbody>
    </table>
    <table align="center" style="border: 1px black solid">
        <tbody>
            <tr>
                <td style="border: 1px black solid">EPS</td>
                <td style="border: 1px black solid">ARS</td>
                <td style="border: 1px black solid">IPS</td>
                <td style="border: 1px black solid">G. SANGUÍNEO</td>
                <td style="border: 1px black solid">RH</td>
            </tr>
            <tr>
                <td style="border: 1px black solid">Cell 1x2</td>
                <td style="border: 1px black solid">Cell 2x2</td>
                <td style="border: 1px black solid">Cell 3x2</td>
                <td style="border: 1px black solid">Cell 4x2</td>
                <td style="border: 1px black solid">Cell 5x2</td>
            </tr>
        </tbody>
    </table>
    <div style="text-align: center">        
        <h3>DATOS DE LA MADRE</h3>
        
    </div>
    <div style="text-align: center">        
        <h3>DATOS DEL PADRE</h3>
        
    </div>
    <div style="text-align: center">        
        <h3>DATOS DEL ACUDIENTE</h3>
        
    </div>
    <div style="text-align: center">        
        <h3>OTRA INFORMACIÓN</h3>
        
    </div>
    <div style="text-align: center">        
        <h3>INFORMACIÓN EDUCATIVA</h3>
        
    </div>
    
</body>
</html>
';

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("invoice.pdf", ["Attachment" => 0]);