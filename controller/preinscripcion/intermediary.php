<?php

    include "preinscripcion.php";

    $stu_info_int=crear_actualizar("obtener_info_estudiante",$_SESSION['stu_doc_num_int']);
    global $stu_info_int;


?>