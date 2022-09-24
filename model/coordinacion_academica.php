<?php

    include "C://xampp/htdocs/PREINSCRIPCION/config/bd.php";

    function interaccion_bd($action){
        global $coneccionBD;

        switch ($action){

            case "consultar_listado":

                $sql="SELECT * FROM pre_stu";
                $consulta=$coneccionBD->query($sql);

                return $consulta;

            break;

        }

    }


?>