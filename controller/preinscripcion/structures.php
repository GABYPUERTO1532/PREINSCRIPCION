<?php

    $departaments=['Cundinamarca','Antioquia'];

    $cities=['Bogota','Medellin'];

    $stu_doc_typ=['Registro Civil','Tarjeta de identidad','Pasaporte','Permiso de permanencia'];

    $locations=['Engativa','Chapinero'];

    $neighborhood=['Bachue II','Chapinero Alto'];

    $sisben=['A1','C16'];

    $eps=['Nueva EPS','Famisanar'];

    $ars=['CAJA DE COMPENSACION FAMILIAR CAFAM','CAJA DE 
    COMPENSACION FAMILIAR DE CORDOBA  COMFACOR'];

    $blood_group=['A','B','AB','O'];

    $rh=['+','-'];

    $fam_doc_typ=['Cedula de ciudadania','Documento de extranjeria'];

    $yes_no=['Si','No'];

    $ci=['N/A','0-4','5-19','20-34','35-54','55-69','70-84','85-99','100','101-114','115-129','130-139','140-154','155-174','175-184','185-201'];

    $grades=['Preescolar','Primero','Segundo','Tercero','Cuarto','Quinto','Sexto','Septimo','Octavo','Noveno','Decimo'];


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
                    $value=strtolower($option);
                    $value=str_replace(' ','_',$value);
                    $resultado.=("
                        <option value='$value' style='text-align:center;'>$option</option>
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
                    $value=strtolower($option);
                    $value=str_replace(' ','_',$value);
                    $resultado.=("
                        <option value='$value' style='text-align:center;'>$option</option>
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