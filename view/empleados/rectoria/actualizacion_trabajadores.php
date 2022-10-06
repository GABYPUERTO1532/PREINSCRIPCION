<?php

    if(
        !isset($_GET['status']) or 
        !isset($_GET['action']) or
        password_verify($_GET['status'],"true") or
        password_verify($_GET['action'],"actualizar") or
        !isset($_GET['emp_doc_num'])
    )
    {
        header("Location: ../../../");
    }
    
    $_SESSION['titulo']="Listado Preinscripciones";
    $_SESSION['sub_lev']='lev_3';
    $_SESSION['emp_doc_num']=$_GET['emp_doc_num'];
    
    include "C://xampp/htdocs/PREINSCRIPCION/view/header.php";
    include "C://xampp/htdocs/PREINSCRIPCION/controller/empleados/estructuras_rectoria.php"; 

?>

<div class="card col-md-10 formulario_mini">
    <form action="../../../controller/actions.php" method="post">
        <div class="card-header">
            <h4 class="card-title">Actualizacion Informacion Trabajadores</h4>
        </div>
        <div class="card-body">

            <!--Input: Nombre Empleado, Tipo y Numero de documento-->
            <div class="input-group">

                <!--Input: emp_nam (Nombre Empleado)-->
                <?php estructura("text","Nombre Completo","emp_nam")?>

                <!--Input: emp_doc_typ (Tipo de documento Empleado)-->
                <?php estructura("select","Tipo de Documento","emp_doc_typ","doc_typ")?>

                <!--Input: emp_doc_typ (Numero de documento empleado)-->
                <?php estructura("text","Numero de Documento","emp_doc_num","","","20")?>
            </div>

            <!--Input: Telefono Local, Celular y Direccion del Emplado-->
            <div class="input-group">

                <!--Input: emp_land (Telefono Fijo)-->
                <?php estructura("text","Telefono Fijo","emp_land","","","11")?>

                <!--Input: emp_pho (Telefono Celular)-->
                <?php estructura("text","Telefono Celular","emp_pho","","","13")?>

                <!--Input: emp_add (Direccion de vivienda)-->
                <?php estructura("text","Direccion de Vivienda","emp_add")?>
            </div>
            
            <!--Input: Telefono Local, Celular y Direccion del Emplado-->
            <div class="input-group">

                <!--Input: emp_char (Cargo Institucional)-->
                <?php estructura("select","Cargo Institucional","emp_char","actors")?>

                <!--Input: emp_ema (Correo Electronico)-->
                <?php estructura("email","Correo Electronico","emp_ema")?>

                <!--Input: emp_pass (Contraseña Empleado)-->
                <?php estructura("password","Contraseña Empleado","emp_pass","","","",)?>
            </div>

        </div>
        <div class="card-footer text-muted">
            <button type="submit" class="btn btn-success">Completar Registro</button>
        </div>
    </form>
</div>