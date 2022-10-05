<?php

    echo("contraseña Inicial:".$_POST['emp_pass']."<br>");
    echo("Contraseña Hash:".password_hash($_POST['emp_pass'],PASSWORD_DEFAULT));
?>