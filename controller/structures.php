<?php

    include "preinscripcion.php";

    $departaments=interaccion_bd("obtener_departamentos");

    $cities=interaccion_bd("obtener_ciudades");

    $stu_doc_typ=interaccion_bd("obtener_tipo_documento");
    unset($stu_doc_typ['0'],$stu_doc_typ['1'],$stu_doc_typ['2'],$stu_doc_typ['3']);

    $locations=interaccion_bd("obtener_localidades");

    $neighborhood=interaccion_bd("obtener_barrios");

    $sisben=interaccion_bd("obtener_categoria_sisben");

    $eps=interaccion_bd("obtener_eps");

    $ars=interaccion_bd("obtener_ars");

    $blood_group=interaccion_bd("obtener_grupo_sanguineo");

    $rh=interaccion_bd("obtener_factor_rh");

    $fam_doc_typ=interaccion_bd("obtener_tipo_documento");
    unset($fam_doc_typ['5'],$fam_doc_typ['6']);

    $yes_no=['Si','No'];

    $ci=['N/A','0-4','5-19','20-34','35-54','55-69','70-84','85-99','100','101-114','115-129','130-139','140-154','155-174','175-184','185-201'];

    $grades=interaccion_bd("obtener_grados");


    function estructura($tipo_input,$titulo,$nombre_input,$array_type=null,$addons=null,$maxlength='255',$minlenght='1'){
        
        global $departaments;
        global $cities;
        global $stu_doc_typ;
        global $locations;
        global $neighborhood;
        global $sisben;
        global $eps;
        global $ars;
        global $blood_group;
        global $rh;
        global $fam_doc_typ;
        global $yes_no;
        global $ci;
    
    
        switch ($tipo_input){
            case "select":
                $resultado=("
                    <div class='mb-3 col-md-3 input'>
                        <label for='$nombre_input' class='form-label'>$titulo</label>
                        <select class='form-control' name='$nombre_input''id='$nombre_input' required>
                            <option value='' selected style='text-align:center;'>Seleccione</option>
                ");

                switch ($array_type){
                    case "departaments":
                        $options=$departaments;
                    break;

                    case "cities":
                        $options=$cities;
                    break;

                    case "stu_doc_typ":
                        $options=$stu_doc_typ;
                    break;

                    case "locations":
                        $options=$locations;
                    break;

                    case "neighborhood":
                        $options=$neighborhood;
                    break;

                    case "sisben":
                        $options=$sisben;
                    break;

                    case "eps":
                        $options=$eps;
                    break;

                    case "ars":
                        $options=$ars;
                    break;

                    case "blood_group":
                        $options=$blood_group;
                    break;

                    case "rh":
                        $options=$rh;
                    break;

                    case "fam_doc_typ":
                        $options=$fam_doc_typ;
                    break;

                    case "yes_no":
                        $options=$yes_no;
                    break;

                    case "ci":
                        $options=$ci;
                    break;

                    
                }

                foreach ($options as $option){
                    $resultado.=("
                        <option value='$option' style='text-align:center;'>$option</option>
                    ");
                }

                $resultado.=("
                        </select>
                    </div>
                ");

                echo($resultado);
            break;

            default:
                echo("
                    <div class='mb-3 col-md-3 input'>
                        <label for='$nombre_input' class='form-label'>$titulo</label>
                        <input type='$tipo_input'
                            class='form-control' name='$nombre_input' id='$nombre_input' aria-describedby='helpId' required maxlength='$maxlength' minlenght='$minlenght'
                            min='0'
                            $addons>
                    </div>
                ");   
            break;
        };
    }

    function estructura2($tipo_input,$nombre_input,$array_type=null,$addons=null,$maxlength='255',$minlenght='1'){
        global $cities;
        global $grades;
    
        switch ($tipo_input){
            case "select":
                $resultado=("
                    <div class='mb-3 col-md-12 input'>
                        <select class='form-control' name='$nombre_input''id='$nombre_input' required>
                            <option value='' selected style='text-align:center;'>Seleccione</option>
                ");

                switch($array_type){
                    case "grades":
                        $options=$grades;
                    break;

                    case "cities":
                        $options=$cities;
                    break;

                }


                foreach ($options as $option){

                    $resultado.=("
                        <option value='$option' style='text-align:center;'>$option</option>
                    ");
                }

                $resultado.=("
                        </select>
                    </div>
                ");

                echo($resultado);
            break;

            default:
                echo("
                    <div class='mb-3 col-md-9 input'>
                        <input type='$tipo_input'
                            class='form-control' name='$nombre_input' id='$nombre_input' aria-describedby='helpId' required maxlength='$maxlength' minlenght='$minlenght'
                            $addons
                        >
                    </div>
                ");   
            break;
        };
    }