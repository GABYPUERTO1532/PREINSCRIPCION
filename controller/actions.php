<?php
    include "../model/crear_actualizar.php";
    include "../config/post.php";

    if(isset($_GET['stu_doc_num'])){
        $stu_doc_num=$_GET['stu_doc_num'];   
    }else{
        $stu_doc_num="";   
    }

    if(isset($_GET['stu_typ'])){
        $stu_typ=$_GET['stu_typ'];
    }else{
        $stu_typ="Nuevo";   
    }

    $stu_typ=$_GET['stu_typ'];
    
    if(isset($_GET['action'])){
        $post_action=$_GET['action'];
    }

    /*

        Solicitud: Se requeire la creacion de una funcion la cual centralice y facilite la gestion de las operaciones en la base de datos, para esto, esta obtiene todos los valores post y debera realizar la operacion solicitada por la correspondiente vista.

        Explicacion: La funcion debera estar preparada para recibir la informacion sobre aquella operacion que se desea realizar, dicha informacion puede provenir de dos formas distintas:

            1. Variable $_GET: Estos valores son obtenidos desde la URL con la cual se ha llamado al archivo contenedor de la funcion. Este metodo de obtenicion esta presente en las vistas "preinscripcion_antiguo.php" y "preinscripcion_nuevo.php", ya que estas solo requieren realizar una unica operacion en la base de datos.
            
            2. Valor POST: Este valor es obtenido al traer informacion POST, la cual sera suministrada en la vista sobre aquella operacion que debe realizar. Dicho metodo de obtencion de la informacion se encuntra presente el la vista "revision_preinscripcion.php" ya que esta tiene la capacidad de solicitar dos operaciones distintas en la base de datos.
    */
    switch($post_action){
        
        //Metodo vista "preinscripcion_nuevos.php"
        case "create":
            crear_actualizar("create");
            header("Location: ../");
        break;

        //Metodo vista "preinscripcion_antiguos.php"
        case "update":
            crear_actualizar("update",$stu_doc_num,"","","",$stu_typ);
            header("Location: ../");
        break;

        //Metodo vista "revision_preinscripcion.php" caso "Confirmar o Aceptar Preinscripcion"
        case "Aceptada/Confirmada":

            /*
                Antecedente: Como se ha mencionado en el modelo "crear_actualizar.php", este debe permitir actualizar los numeros de documento tanto del estudiante como de los familiares, sin embargo, esto requiere que el controlador "actions.php", posea los numeros de documento originales, y los use como argumento antes de actualizarlos.

                Explicacion: Para solucionar el problema anterior, la solucion planteada es que a la hora de que la vista "revision_preinscripcion.php" redirja al archivo actions, esta enviara como parametro GET (Es decir, informacion por URL), los numeros de documentos del estudiante, Madre, Padre y Acudiente.

                Dichos valores GET seran recepcionado, para posteriormente ser guaardados en variables de nombre similar.

                Luego de esto se ejecutan los siguientes funciones:

                    1. crear_actualizar("update",$stu_doc_num) -> Donde $stu_doc_num es el numero orginal del documento del estudiante del cual se hara la sobreescritura o actualizacion de su informacion.
                    
                    2. crear_actualizar("confirmar_preinscripcion",$stu_doc_num,$doc_num_moth,$doc_num_fath,$doc_num_acu) -> Donde $stu_doc_num, $doc_num_moth, $doc_num_fath, $doc_num_acu, son los numeros de documento originales de los estudiantes y sus familiares.

                    Dichos numeros de documentos orginial son imprescindibles en caso de que se haya requiera realizar cambios en estos valores dentro de la base de datos, todo esto ya que la funcion buscara todos los registros que contengan la infromacion antigua y esta la reescribe por la nueva.
            
            */
            $doc_num_moth=$_GET['doc_num_moth'];
            $doc_num_fath=$_GET['doc_num_fath'];
            $doc_num_acu=$_GET['doc_num_acu'];
        
            crear_actualizar("update",$stu_doc_num);
            crear_actualizar("confirmar_preinscripcion",$stu_doc_num,$doc_num_moth,$doc_num_fath,$doc_num_acu);
            header("Location: ../view/empleados/coordinacion_academica/");
        break;

        //Metodo vista "revision_preinscripcion.php" caso "Rechazar o Negar Preinscripcion"
        case "Rechaza/Negada":
            
            $doc_num_moth=$_GET['doc_num_moth'];
            $doc_num_fath=$_GET['doc_num_fath'];
            $doc_num_acu=$_GET['doc_num_acu'];
            crear_actualizar("update",$stu_doc_num);
            crear_actualizar("rechazar_preinscripcion",$stu_doc_num,$doc_num_moth,$doc_num_fath,$doc_num_acu);
            header("Location: ../view/empleados/coordinacion_academica/");
        break;
    }
?>