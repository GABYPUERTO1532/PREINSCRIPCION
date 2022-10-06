<?php
    include "C://xampp/htdocs/PREINSCRIPCION/model/consultar_informacion.php";
    include "C://xampp/htdocs/PREINSCRIPCION/model/obtener_info.php";

    //Se guarda todos los datos obtenidos de la tabla "pre_stu" (Estudiantes Preinscritos)
    $consulta=consultar_informacion("consultar_listado_empleados");
    $doc_num_emp=consultar_informacion("consultar_doc_num_emp");

    if(isset($_SESSION['emp_doc_num'])){
        while($item=mysqli_fetch_assoc($doc_num_emp)){
            if(password_verify($item['doc_num'],$_SESSION['emp_doc_num'])){
                $doc_num=$item['doc_num'];
            }
        }
    }

    function listar_registros(){
        
        global $consulta;

        while($registro_individual=mysqli_fetch_assoc($consulta)){

            /*Extraccion de la informacion en variables*/
                $per_nam=$registro_individual['emp_nam'];
                $doc_num=$registro_individual['doc_num'];
                $per_land=$registro_individual['emp_land'];
                $per_pho=$registro_individual['emp_pho'];
                $per_ema=$registro_individual['emp_ema'];
                $per_char=$registro_individual['emp_char'];
            /**/

            //Generar el hash del numero de documento del estudiante
            $etc=password_hash($doc_num,PASSWORD_DEFAULT);
            $view=password_hash("true",PASSWORD_DEFAULT);
            $action=password_hash("actualizar",PASSWORD_DEFAULT);

            echo("
                <tr>
                    <td>$per_nam</td>
                    <td>$doc_num</td>
                    <td>$per_land</td>
                    <td>$per_pho</td>
                    <td>$per_ema</td>
                    <td>$per_char</td>
                    <td>
                        <a class='btn btn-danger' href='../../../controller/actions.php?emp_doc_num=$doc_num&action=eliminar_empleado' role='button'>Eliminar</a>

                        <a class='btn btn-warning' href='actualizacion_trabajadores.php?emp_doc_num=$etc&status=$view&action=$action' role='button'>Editar</a>
                    </td>
                    
                </tr>
            ");

        }
        
    }

    if(isset($doc_num)){
        $emp_inf=obtener_info("obtener_emp_info",$doc_num);
    }

    $actors=consultar_informacion("consultar_lista_actores");
    unset($actors['0'],$actors['5'],$actors['6']);

    $doc_typ=consultar_informacion("obtener_tipo_documento");
    unset($doc_typ['5'],$doc_typ['6']);

    function value_selected($col_nam){

        global $emp_inf;

        switch ($col_nam){
            
            case "emp_doc_typ":                
                return $emp_inf['doc_typ'];
            break;

            case "emp_doc_num":                
                return $emp_inf['doc_num'];
            break;

            case "emp_pass":                
                return "";
            break;

            default:
                return $emp_inf[$col_nam];
            break;

        }
    }

    function estructura($tipo_input,$titulo,$nombre_input,$array_type=null,$addons=null,$maxlength=null,$minlenght=null,$required=null){

        if(isset($required) AND $required=="desactivado"){
            $required="";
        }else{
            $required="required";
        }

        if($minlenght==null){
            $minlenght='1';
        }

        if($maxlength==null){
            $maxlength='255';
        }
        
        global $actors;
        global $doc_typ;

        $value_select=value_selected($nombre_input);
    
        switch ($tipo_input){
            case "select":
                $resultado=("
                    <div class='mb-3 col-md-3 input'>
                        <label for='$nombre_input' class='form-label'>$titulo</label>
                        <select class='form-control' name='$nombre_input''id='$nombre_input' $required>
                            <option value='' style='text-align:center;'>Seleccione</option>
                ");

                switch ($array_type){
                    
                    case "actors":
                        $options=$actors;
                    break;

                    case "doc_typ":
                        $options=$doc_typ;
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
                            class='form-control' name='$nombre_input' id='$nombre_input' 
                            maxlength='$maxlength' aria-describedby='helpId' $required  minlenght='$minlenght'
                            min='0' value='$value_select'
                            $addons>
                    </div>
                ");   
            break;
        };
    }

?>