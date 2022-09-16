<?php

    $array=['Bogota','Medellin'];

    function estructura($tipo_input,$titulo,$nombre_input,$array_type=null,$addons=null,$maxlength='255',$minlenght='1'){

        switch ($tipo_input){

            case "select":

                $estructura="
                    <div class='mb-3'>
                        <label for='' class='form-label'>City</label>
                        <select class='form-control' name='' id=''>
                        <option value='$value'>$option</option>
                ";

                foreach ($options as $option){
                    $value=strtolower($option);
                    $estructura.="
                        <option value='$value'>$option</option>
                    ";
                }

            break;
        }
            
    };

    