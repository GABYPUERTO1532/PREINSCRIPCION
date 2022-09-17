<?php 
    include "../config/bd.php";

    function validar_preinscripcion(){
        if(isset($_SESSION['status']) and $_SESSION['user_typ']=='familiar'){
            header("Location: ../../");
        }
    }
?>

