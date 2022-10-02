<?php
    $stu_doc_num_cont=$_SESSION['stu_doc_num_cont'];

    include "C://xampp/htdocs/PREINSCRIPCION/model/consultar_informacion.php";
    
    include "C://xampp/htdocs/PREINSCRIPCION/model/obtener_info.php";

    $consulta=consultar_informacion("obtener_stu_doc_num");

    while($itmes_consulta=mysqli_fetch_assoc($consulta)){
        if(password_verify($itmes_consulta['doc_num'],$stu_doc_num_cont)){
            $stu_doc_num=$itmes_consulta['doc_num'];
        }
    }

    $departaments=consultar_informacion("obtener_departamentos");

    $cities=consultar_informacion("obtener_ciudades");

    $stu_doc_typ=consultar_informacion("obtener_tipo_documento");
    unset($stu_doc_typ['0'],$stu_doc_typ['1'],$stu_doc_typ['2'],$stu_doc_typ['3']);

    $locations=consultar_informacion("obtener_localidades");

    $sisben=consultar_informacion("obtener_categoria_sisben");

    $eps=consultar_informacion("obtener_eps");

    $blood_group=consultar_informacion("obtener_grupo_sanguineo");

    $rh=consultar_informacion("obtener_factor_rh");

    $fam_doc_typ=consultar_informacion("obtener_tipo_documento");
    unset($fam_doc_typ['5'],$fam_doc_typ['6']);

    $yes_no=['Si','No'];

    $ci=['N/A','0-4','5-19','20-34','35-54','55-69','70-84','85-99','100','101-114','115-129','130-139','140-154','155-174','175-184','185-201'];

    $actions=['Aceptada/Confirmada','Rechaza/Negada'];

    $grades=consultar_informacion("obtener_grados");

    $stu_info=obtener_info("obtener_info_estudiante",$stu_doc_num);   

    $moth_info=obtener_info("obtener_info_familiar",$stu_doc_num,"Madre");
    
    $fath_info=obtener_info("obtener_info_familiar",$stu_doc_num,"Padre");

    $acu_info=obtener_info("obtener_info_familiar",$stu_doc_num,"Acudiente");

    $oth_inf=obtener_info("obtener_other_inf",$stu_doc_num);

    $edu_inf_1=obtener_info("obtener_edu_info",$stu_doc_num,"edu_inf_1");

    $edu_inf_2=obtener_info("obtener_edu_info",$stu_doc_num,"edu_inf_2");

    $edu_inf_3=obtener_info("obtener_edu_info",$stu_doc_num,"edu_inf_3");

    $edu_inf_4=obtener_info("obtener_edu_info",$stu_doc_num,"edu_inf_4");

    $edu_inf_5=obtener_info("obtener_edu_info",$stu_doc_num,"edu_inf_5");

    $edu_inf_6=obtener_info("obtener_edu_info",$stu_doc_num,"edu_inf_6");
    
    function seleccionar_col_array($array,$col_nam){

        global $stu_info;
        global $moth_info;
        global $fath_info;
        global $acu_info;
        global $oth_inf;
        global $edu_inf_1;
        global $edu_inf_2;
        global $edu_inf_3;
        global $edu_inf_4;
        global $edu_inf_5; 
        global $edu_inf_6;

        switch ($array){
            
            case "estudiante":
                switch ($col_nam){
                    case "stu_doc_typ":
                        $resultado=$stu_info['doc_typ'];        
                        return $resultado;
                    break;

                    case "stu_doc_num":
                        $resultado=$stu_info['doc_num'];        
                        return $resultado;
                    break;
                }

                return $stu_info[$col_nam];
                
            break;

            case "oth_inf":
                return $oth_inf[$col_nam];

            break;

            case "edu_inf_1":
                $col_nam=substr($col_nam,0,-2);
                return $edu_inf_1[$col_nam];
            break;

            case "edu_inf_2":
                $col_nam=substr($col_nam,0,-2);
                return $edu_inf_2[$col_nam];
            break;

            case "edu_inf_3":
                $col_nam=substr($col_nam,0,-2);
                return $edu_inf_3[$col_nam];
            break;

            case "edu_inf_4":
                $col_nam=substr($col_nam,0,-2);
                return $edu_inf_4[$col_nam];
            break;

            case "edu_inf_5":
                $col_nam=substr($col_nam,0,-2);
                return $edu_inf_5[$col_nam];
            break;

            case "edu_inf_6":
                $col_nam=substr($col_nam,0,-2);
                return $edu_inf_6[$col_nam];
            break;

            case "madre" OR "padre" OR "acudiente":

                if($array=="madre"){
                    $col_nam=substr($col_nam,0,-5);
                    return $moth_info[$col_nam];

                }elseif($array=="padre"){
                    $col_nam=substr($col_nam,0,-5);
                    return $fath_info[$col_nam];

                }elseif($array=="acudiente"){ 
                    $col_nam=substr($col_nam,0,-4);
                    return $acu_info[$col_nam];

                }

            break;

        }
    }


    function estructura($tipo_input,$titulo,$nombre_input,$array_type=null,$array_bd=null,$addons=null,$maxlength='255',$minlenght='1'){
        
        global $departaments;
        global $cities;
        global $stu_doc_typ;
        global $locations;
        global $sisben;
        global $eps;
        global $ars;
        global $blood_group;
        global $rh;
        global $fam_doc_typ;
        global $yes_no;
        global $ci;
        global $actions;

        $value_select=seleccionar_col_array($array_bd,$nombre_input);
    
        switch ($tipo_input){
            case "select":
                $resultado=("
                    <div class='mb-3 col-md-3 input'>
                        <label for='$nombre_input' class='form-label'>$titulo</label>
                        <select class='form-control' name='$nombre_input''id='$nombre_input' required>
                            <option value='' style='text-align:center;'>Seleccione</option>
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

                    case "actions":
                        $options=$actions;
                    break;

                    
                }

                foreach ($options as $option){

                    if ($option==$value_select){
                        $resultado.=("
                            <option value='$option' style='text-align:center;' selected>$option</option>
                        ");
                    }else{
                        $resultado.=("
                            <option value='$option' style='text-align:center;'>$option</option>
                        ");
                    }

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
                            min='0' value='$value_select'
                            $addons>
                    </div>
                ");   
            break;
        };
    }

    function estructura2($tipo_input,$nombre_input,$array_type=null,$array_bd=null,$addons=null,$maxlength='255',$minlenght='1'){
        global $cities;
        global $grades;

        $value_select=seleccionar_col_array($array_bd,$nombre_input);
    
        switch ($tipo_input){
            case "select":
                $resultado=("
                    <div class='mb-3 col-md-12 input'>
                        <select class='form-control' name='$nombre_input' id='$nombre_input' $addons>
                            <option value=''style='text-align:center;'>Seleccione</option>
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

                    if ($option==$value_select){
                        $resultado.=("
                            <option value='$option' style='text-align:center;' selected>$option</option>
                        ");
                    }else{
                        $resultado.=("
                            <option value='$option' style='text-align:center;'>$option</option>
                        ");
                    }
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
                            class='form-control' name='$nombre_input' id='$nombre_input' aria-describedby='helpId' maxlength='$maxlength' minlenght='$minlenght' value='$value_select'
                            $addons
                        >
                    </div>
                ");   
            break;
        };
    }