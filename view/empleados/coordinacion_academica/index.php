<?php
    session_start();
    $_SESSION['titulo']="Listado Preinscripciones";
    
    include "C://xampp/htdocs/PREINSCRIPCION/view/empleados/header.php"; 
?>

    <div class="card">
        <div class="card-header">
            Header
        </div>
        <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Text</p>
        </div>
        <div class="card-footer text-muted">
            Footer
        </div>
    </div>

<?php include "C://xampp/htdocs/PREINSCRIPCION/view/empleados/footer.php"?>