<?php
    $_SESSION['titulo']="Listado Preinscripciones";
    $_SESSION['sub_lev']='lev_3';
    
    include "C://xampp/htdocs/PREINSCRIPCION/view/header.php";
    include "C://xampp/htdocs/PREINSCRIPCION/controller/empleados/estructuras_rectoria.php"; 

    $action_crear=password_hash("crear",PASSWORD_DEFAULT);
    $view=password_hash("true",PASSWORD_DEFAULT);
?>
    <div class="">
        <div class="card" style="margin-top: 20px;">
            <div class="card-header">
                <h4 class="card-title">Lista de Trabajadores dentro de la institucion</h4>
            </div>
            <div class="card-body">
                <form action="" method="post">

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre Empleado</th>
                                    <th scope="col">Numero de documento</th>
                                    <th scope="col">Telefono Local</th>
                                    <th scope="col">Telefono Celular</th>
                                    <th scope="col">Correo Electronico</th>
                                    <th scope="col">Cargo</th>
                                    <th scope="col">Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php listar_registros();?>
                            </tbody>
                        </table>
                    </div>

                </form>

                <div class="card-footer text-muted">
                    <a class="btn btn-primary" href="registro_trabajadores.php?status=<?php echo($view)?>&action=<?php echo($action_crear)?>' role='button'" role="button">Crear Trabajador</a>

                    <a class="btn btn-danger" href="../" role="button">Cerrar Sesion</a>
                </div>
            </div>
        </div>
    </div>

<?php include "C://xampp/htdocs/PREINSCRIPCION/view/footer.php"?>