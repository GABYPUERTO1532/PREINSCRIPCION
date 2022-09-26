<?php

    include "preinscripcion.php";

    $stu_info_int=interaccion_bd("obtener_info_estudiante",$_SESSION['a2']);
    global $stu_info_int;


?>