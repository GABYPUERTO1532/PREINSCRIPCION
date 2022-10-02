<?php
    session_start();
    $_SESSION['titulo']="Listado Preinscripciones";
    
    include "C://xampp/htdocs/PREINSCRIPCION/view/empleados/header.php"; 
    include "C://xampp/htdocs/PREINSCRIPCION/controller/coordinacion_academica/estructuras_coordinador.php"; 
?>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Lista Estudiantes Preinscritos</h4>
        </div>
        <div class="card-body">
            <form action="" method="post">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tipo de documento Estudiante</th>
                                <th scope="col">Numero de documento Estudiante</th>
                                <th scope="col">Fecha y hora de la preinscripcion</th>
                                <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php listar_registros();?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
        
    </div>

<?php include "C://xampp/htdocs/PREINSCRIPCION/view/empleados/footer.php"?>