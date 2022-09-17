<?php
    
    include "post.php";
    if(!isset($_SESSION)){
        header("Location: ../");
    }

    $coneccionBD=mysqli_connect("localhost","root","","preinscripcion");

?>