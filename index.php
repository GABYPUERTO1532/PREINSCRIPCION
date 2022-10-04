<!doctype html>
<html lang="es">
  <head>
    <title>Juan Del Corral - Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>

      *>.card, input,select{
        text-align: center;
      }

      .card{
        margin-top: 15%;
      }

      label{
        font-style: italic;
        font-size: 17px;

      }

    </style>
    
  </head>
  <body>
    <div class="container">

        <div class="container col-md-3"></div>
        <div class="container col-md-6">
          <form action="controller/login_familia.php" method="post">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">BIENVENIDO AL SISTEMA DE PREINSCRIPCION</h4>

                <!--Informacion obtenida: Tipo y numero de documento del Familiar-->
                <div class="mb-3">
                  <label for="" class="form-label">Digite numero de documento</label>
                  <div class="mb-3">
                    <div class="input-group"> 
                      <div class="col-md-5">
                        <select class="form-control" name="fam_doc_typ" id="fam_doc_typ" required>
                          <option selected value="">Seleccione</option>
                          <option value="Cedula de ciudadania">Cedula de Ciudadania</option>
                          <option value="Cedula de Extranjeria">Cedula de Extranjeria</option>
                          <option value="No. de Identificacion Personal">No. de Identificacion Personal</option>
                          <option value="No. Unico de Identificacion Personal">No. Único de Identificación personal</option>
                          <option value="No. Unico de Identificacion Tributaria">No. de Identificacion Tributaria</option>
                          <option value="Pasaporte">Pasaporte</option>
                        </select>
                      </div>

                      <input type="text"
                      class="form-control" name="fam_doc_num" id="fam_doc_num" aria-describedby="helpId" maxlength="15" minlength="7">
                    </div>
                  </div>  
                </div>

                <!--Informacion obtenida: Tipo y numero de documento del estudiante-->
                <div class="mb-3">
                  <label for="" class="form-label">Digite numero de documento del estudiante</label>
                  <div class="mb-3">
                    <div class="input-group">  
                      <div class="col-md-5">
                        <select class="form-control" name="stu_doc_typ" id="stu_doc_typ" required>
                          <option selected value="">Seleccione</option>
                          <option value="Registro Civil">Registro Civil</option>
                          <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                          <option value="Pasaporte">Pasaporte</option>
                        </select>
                      </div>

                      <input type="text"
                      class="form-control" name="stu_doc_num" id="stu_doc_num" aria-describedby="helpId" maxlength="15" minlength="7">
                    </div>
                  </div>
                </div>

                <!--Informacion obtenida: Relacion entre el Familiar y el estudiante-->
                <div class="mb-3">
                  <label for="" class="form-label">Especifique su relacion con el Estudiante</label>
                  <select class="form-control" name="relation" id="relation" required>
                    <option selected value="">Seleccione</option>
                    <option value="Padre">Padre</option>
                    <option value="Madre">Madre</option>
                    <option value="Acudiente">Acudiente</option>
                  </select>
                </div>

              </div>

              <div class="card-footer text-muted">
                <!--Boton redireccion a login Trabajadores-->
                <a class="btn btn-primary" href="view/empleados" role="button">Soy Trabajador</a>

                <!--Boton Inicio de sesion-->
                <button type="submit" class="btn btn-success">Iniciar Sesion</button>
              </div>
            </div>
          </form>
        </div>
        <div class="container col-md-3"></div>  
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>
