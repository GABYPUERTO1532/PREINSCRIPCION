<?php
    $_SESSION['titulo']="Proceso Registro Empleado";
    $_SESSION['sub_lev']="lev_3";

    include "C://xampp/htdocs/PREINSCRIPCION/view/header.php";
    include "C://xampp/htdocs/PREINSCRIPCION/controller/preinscripcion/estructuras_nuevo.php";

?>
<div class="card">
    <form action="" method="post">
        <div class="card-header">
            <h4 class="card-title">Registro de Nuevos trabajadores</h4>
        </div>
        <div class="card-body">
            <?php estructura("text","Nombre Completo","emp_nam")?>
            <?php estructura("select","Tipo de Documento","emp_doc_typ","fam_doc_typ")?>
        </div>
        <div class="card-footer text-muted">
            <button type="submit" class="btn btn-success">Completar Registro</button>
        </div>
    </form>
</div>