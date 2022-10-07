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
                h3{
                    margin: 0px 0px 0px 0px;
                }
                h2{
                    margin: 10px 0px 10px 0px;
                }
                .compromiso{
                    font-size:10px;
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
                        <td><b>DANE</b></td>
                        <td><b>CURSO</b></td>
                        <td><b>JORNADA</b></td>
                        <td><b>EDAD</b></td>
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
                        <td style='border: 1px black solid'><b>PRIMER APELLIDO</b></td>
                        <td style='border: 1px black solid'><b>SEGUNDO APELLIDO</b></td>
                        <td style='border: 1px black solid'><b>PRIMER NOMBRE</b></td>
                        <td style='border: 1px black solid'><b>SEGUNDO NOMBRE</b></td>
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
                        <td style='border: 1px black solid'><b>FECHA DE NAC.</b></td>
                        <td style='border: 1px black solid'><b>CIUDAD</b></td>
                        <td style='border: 1px black solid'><b>DEPARTAMENTO</b></td>
                        <td style='border: 1px black solid'><b>TIPO DE DOC</b></td>
                        <td style='border: 1px black solid'><b>NUMERO</b></td>
                        <td style='border: 1px black solid'><b>EXPEDIDO EN</b></td>
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
                        <td style='border: 1px black solid'><b>DIRECCION</b></td>
                        <td style='border: 1px black solid'><b>BARRIO</b></td>
                        <td style='border: 1px black solid'><b>LOCALIDAD</b></td>
                        <td style='border: 1px black solid'><b>ESTRATO</b></td>
                        <td style='border: 1px black solid'><b>NIVEL SISBEN</b></td>
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
                        <td style='border: 1px black solid'><b>TELÉFONO</b></td>
                        <td style='border: 1px black solid'><b>AFICIONES O HOBBIES</b></td>
                        <td style='border: 1px black solid'><b>CIRUGÍAS FRACTURAS O ENFERMEDADES</b></td>
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
                        <td style='border: 1px black solid'><b>EPS</b></td>
                        <td style='border: 1px black solid'><b>ARS</b></td>
                        <td style='border: 1px black solid'><b>IPS</b></td>
                        <td style='border: 1px black solid'><b>G. SANGUÍNEO</b></td>
                        <td style='border: 1px black solid'><b>RH</b></td>
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
                <table align='center'>
                    <tbody>
                        <tr>
                            <td style='border: 1px black solid'><b>NOMBRE COMPLETO</b></td>
                            <td style='border: 1px black solid'><b>TIPO DOCUMENTO</b></td>
                            <td style='border: 1px black solid'><b>NUMERO DE DOCUMENTO</b></td>
                            <td style='border: 1px black solid'><b>TELEFONO FIJO</b></td>
                        </tr>
                        <tr>
                            <td style='border: 1px black solid'>".$pdf_info['fam_nam_moth']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['doc_typ_moth']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['doc_num_moth']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['fam_land_moth']."</td>
                        </tr>
                    </tbody>
                </table>

                
                <table align='center'>
                    <tbody>
                        <tr>
                            <td style='border: 1px black solid'><b>DIRECCION</b></td>
                            <td style='border: 1px black solid'><b>OCUPACION</b></td>
                            <td style='border: 1px black solid'><b>CORREO</b></td>
                        </tr>
                        <tr>
                            <td style='border: 1px black solid'>".$pdf_info['fam_add_moth']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['fam_ocu_moth']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['fam_ema_moth']."</td>
                        </tr>
                    </tbody>
                </table>
            </div>
                
            <div style='text-align: center'>        
                <h3>DATOS DEL PADRE</h3>
                <table align='center'>
                    <tbody>
                        <tr>
                            <td style='border: 1px black solid'><b>NOMBRE COMPLETO</b></td>
                            <td style='border: 1px black solid'><b>TIPO DOCUMENTO</b></td>
                            <td style='border: 1px black solid'><b>NUMERO DE DOCUMENTO</b></td>
                            <td style='border: 1px black solid'><b>TELEFONO FIJO</b></td>
                        </tr>
                        <tr>
                            <td style='border: 1px black solid'>".$pdf_info['fam_nam_fath']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['doc_typ_fath']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['doc_num_fath']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['fam_land_fath']."</td>
                        </tr>
                    </tbody>
                </table>

                <table align='center'>
                    <tbody>
                        <tr>
                            <td style='border: 1px black solid'><b>DIRECCION</b></td>
                            <td style='border: 1px black solid'><b>OCUPACION</b></td>
                            <td style='border: 1px black solid'><b>CORREO</b></td>
                        </tr>
                        <tr>
                            <td style='border: 1px black solid'>".$pdf_info['fam_add_fath']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['fam_ocu_fath']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['fam_ema_fath']."</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style='text-align: center'>        
                <h3>DATOS DEL ACUDIENTE</h3>
                <table align='center'>
                    <tbody>
                        <tr>
                            <td style='border: 1px black solid'><b>NOMBRE COMPLETO</b></td>
                            <td style='border: 1px black solid'><b>TIPO DOCUMENTO</b></td>
                            <td style='border: 1px black solid'><b>NUMERO DE DOCUMENTO</b></td>
                            <td style='border: 1px black solid'><b>TELEFONO FIJO</b></td>
                        </tr>
                        <tr>
                            <td style='border: 1px black solid'>".$pdf_info['fam_nam_acu']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['doc_typ_acu']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['doc_num_acu']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['fam_land_acu']."</td>
                        </tr>
                    </tbody>
                </table>

                <table align='center'>
                    <tbody>
                        <tr>
                            <td style='border: 1px black solid'><b>DIRECCION</b></td>
                            <td style='border: 1px black solid'><b>OCUPACION</b></td>
                            <td style='border: 1px black solid'><b>CORREO</b></td>
                        </tr>
                        <tr>
                            <td style='border: 1px black solid'>".$pdf_info['fam_add_acu']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['fam_ocu_acu']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['fam_ema_acu']."</td>
                        </tr>
                    </tbody>
                </table>
                
            </div>

            <div style='text-align: center'>        
                <h3>OTRA INFORMACIÓN</h3>

                <table align='center'>
                    <tbody>
                        <tr>
                            <td style='border: 1px black solid'><b>VICTIMA C/A</b></td>
                            <td style='border: 1px black solid'><b>S. DESPLAZAMIENTO</b></td>
                            <td style='border: 1px black solid'><b>DESVINCULADOS G. ARMADOS</b></td>
                            <td style='border: 1px black solid'><b>HIJO DE DESMOVILIZADO</b></td>
                        </tr>
                        <tr>
                            <td style='border: 1px black solid'>".$pdf_info['conf_vic']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['dis_sit']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['dis_arm_grp']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['dem_son']."</td>
                        </tr>
                    </tbody>
                </table>

                <table align='center'>
                    <tbody>
                        <tr>
                            <td style='border: 1px black solid'><b>LIMITACIONES</b></td>
                            <td style='border: 1px black solid'><b>CAPACIDADES EXCEPCIONALES</b></td>
                            <td style='border: 1px black solid'><b>PUNTAJE C.I.</b></td>
                            <td style='border: 1px black solid'><b>EXAMEN DE VAL.</b></td>
                        </tr>
                        <tr>
                            <td style='border: 1px black solid'>".$pdf_info['lim_stu']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['exp_cap']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['iq_sco']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['ass_tes']."</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div style='text-align: center'>        
                <h3>INFORMACIÓN EDUCATIVA</h3>

                <table align='center'>
                    <tbody>
                        <tr>
                            <td style='border: 1px black solid'><b>GRADO</b></td>
                            <td style='border: 1px black solid'><b>AÑO</b></td>
                            <td style='border: 1px black solid'><b>CIUDAD</b></td>
                            <td style='border: 1px black solid'><b>INSTITUCION</b></td>
                        </tr>
                        <tr>
                            <td style='border: 1px black solid'>".$pdf_info['sch_grd_1']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_yea_1']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_cit_1']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_ins_1']."</td>
                        
                        </tr>

                        <tr>

                            <td style='border: 1px black solid'>".$pdf_info['sch_grd_2']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_yea_2']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_cit_2']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_ins_2']."</td>

                        </tr>

                        <tr>

                            <td style='border: 1px black solid'>".$pdf_info['sch_grd_3']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_yea_3']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_cit_3']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_ins_3']."</td>

                        </tr>

                        <tr>

                            <td style='border: 1px black solid'>".$pdf_info['sch_grd_4']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_yea_4']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_cit_4']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_ins_4']."</td>

                        </tr>

                        <tr>

                            <td style='border: 1px black solid'>".$pdf_info['sch_grd_5']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_yea_5']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_cit_5']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_ins_5']."</td>

                        </tr>

                        <tr>

                            <td style='border: 1px black solid'>".$pdf_info['sch_grd_6']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_yea_6']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_cit_6']."</td>
                            <td style='border: 1px black solid'>".$pdf_info['sch_ins_6']."</td>

                        </tr>
                    </tbody>
                </table>
                <table align='center'>
                    <tbody>
                        <tr>
                            <td style='border: 1px black solid' class='compromiso'>Al firmar la presente matrícula aceptamos el PEI del colegio, nos comprometemos a acatar las normas estipuladas en el manual de convivencia, cumplir los
                            principios juancorralinos, respetar la filosofía del colegio y asumir las reponsabilidades constitucionales de la familia en la educación de los hijos.</td>
                        </tr>
                    </tbody>
                </table>              
            </div>

            <div>
                <table align='center' class='firmas'>
                    <tbody>
                        <tr>
                            <td>__________________________</td>
                            <td>______________________________________________</td>
                        </tr>
                        <tr>
                            <td>FIRMA ALUMNO</td>
                            <td>FIRMA DEL PADRE, MADRE O ACUDIENTE</td>
                        </tr>

                        <tr>
                            <td>__________________________</td>
                            <td>_________________________________</td>
                        </tr>
                        <tr>
                            <td>FIRMA RECTOR</td>
                            <td>FIRMA DE LA SECRETARIA</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </body>
    </html>
    ");
    $_SESSION['html_structure']=$html_structure;
    header("Location: ../view/formulario_preinscripcion.php");

?>