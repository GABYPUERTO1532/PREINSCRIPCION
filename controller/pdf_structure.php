<?php
    session_start();
    $pdf_info=$_SESSION['pdf_info'];
    $año_actual=date("Y")+1;
    $tmp=strtotime($pdf_info['dat_bir']);
    $edad_actual=$año_actual-(date("Y",$tmp));

    $html_structure=("
    <!DOCTYPE html>
    <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Formulario Preinscripcion</title>
            <style>
                table {
                    width: 100%;
                }
                td{
                    text-align: center;
                }
            </style>
        </head>
        <body style='font-size:15px;'>
            <div style='text-align: center'>        
                <h3>COLEGIO ITD JUAN DEL CORRAL IED</h3>
                <h2>MATRICULA AÑO ".$año_actual."</h2>
            </div>
            
            <table align='center'border='1px solid black'> with='500px'>
                <tbody>
                    
                    <tr>
                        <td>DANE</td>
                        <td>CURSO</td>
                        <td>JORNADA</td>
                        <td>EDAD</td>
                    </tr>
                    <tr>
                        <td>111001009583</td>
                        <td></td>
                        <td>Unica</td>
                        <td>".$edad_actual."</td>
                    </tr>
                </tbody>
            </table>
            <div style='text-align: center'>        
                <h3>DATOS DEL ESTUDIANTE</h3>
                
            </div>
            
            <table align='center'>
                <tbody>
                    <tr>
                        <td style='border: 1px black solid'>PRIMER APELLIDO</td>
                        <td style='border: 1px black solid'>SEGUNDO APELLIDO</td>
                        <td style='border: 1px black solid'>PRIMER NOMBRE</td>
                        <td style='border: 1px black solid'>SEGUNDO NOMBRE</td>
                    </tr>
                    <tr>
                        <td style='border: 1px black solid'>".$pdf_info['firs_sur']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['sec_sur']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['firs_nam']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['sec_nam']."</td>
                    </tr>
                </tbody>
            </table>

            <table align='center'>
                <tbody>
                    <tr>
                        <td style='border: 1px black solid'>FECHA DE NAC.</td>
                        <td style='border: 1px black solid'>CIUDAD</td>
                        <td style='border: 1px black solid'>DEPARTAMENTO</td>
                        <td style='border: 1px black solid'>TIPO DE DOC</td>
                        <td style='border: 1px black solid'>NUMERO</td>
                        <td style='border: 1px black solid'>EXPEDIDO EN</td>
                    </tr>
                    <tr>
                        <td style='border: 1px black solid'>".$pdf_info['dat_bir']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['stu_cit']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['stu_dep']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['stu_doc_typ']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['stu_doc_num']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['exp_cit']."</td>
                    </tr>
                </tbody>
            </table>

            <table align='center'>
                <tbody>
                    <tr>
                        <td style='border: 1px black solid'>DIRECCION</td>
                        <td style='border: 1px black solid'>BARRIO</td>
                        <td style='border: 1px black solid'>LOCALIDAD</td>
                        <td style='border: 1px black solid'>ESTRATO</td>
                        <td style='border: 1px black solid'>NIVEL SISBEN</td>
                    </tr>
                    <tr>
                        <td style='border: 1px black solid'>".$pdf_info['stu_add']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['stu_nei']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['stu_loc']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['stu_est']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['stu_cat']."</td>
                    </tr>
                </tbody>
            </table>

            <table align='center'>
                <tbody>
                    <tr>
                        <td style='border: 1px black solid'>TELÉFONO</td>
                        <td style='border: 1px black solid'>AFICIONES O HOBBIES</td>
                        <td style='border: 1px black solid'>CIRUGÍAS FRACTURAS O ENFERMEDADES</td>
                    </tr>
                    <tr>
                        <td style='border: 1px black solid'>".$pdf_info['stu_tel']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['stu_hob']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['stu_enf']."</td>
                    </tr>
                </tbody>
            </table>
            <table align='center'>
                <tbody>
                    <tr>
                        <td style='border: 1px black solid'>EPS</td>
                        <td style='border: 1px black solid'>ARS</td>
                        <td style='border: 1px black solid'>IPS</td>
                        <td style='border: 1px black solid'>G. SANGUÍNEO</td>
                        <td style='border: 1px black solid'>RH</td>
                    </tr>
                    <tr>
                        <td style='border: 1px black solid'>".$pdf_info['stu_eps']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['stu_ars']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['stu_ips']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['b_grp']."</td>
                        <td style='border: 1px black solid'>".$pdf_info['rh_fact']."</td>
                    </tr>
                </tbody>
            </table>
            <div style='text-align: center'>        
                <h3>DATOS DE LA MADRE</h3>
                
            </div>
            <div style='text-align: center'>        
                <h3>DATOS DEL PADRE</h3>
                
            </div>
            <div style='text-align: center'>        
                <h3>DATOS DEL ACUDIENTE</h3>
                
            </div>
            <div style='text-align: center'>        
                <h3>OTRA INFORMACIÓN</h3>
                
            </div>
            <div style='text-align: center'>        
                <h3>INFORMACIÓN EDUCATIVA</h3>
                ".$pdf_info['stu_doc_num']."              
            </div>
            
        </body>
    </html>
    ");
    $_SESSION['html_structure']=$html_structure;
    header("Location: ../view/formulario_preinscripcion.php");

?>