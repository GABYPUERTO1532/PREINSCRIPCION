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

    </style>

  </head>
  <body>
      
    <div class="container">
        <div class="container col-md-3"></div>

        <div class="container col-md-6">
          <form action="controller/login.php" method="post">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Bienvenido al sistema de Preinscripcion</h4>

                <div class="mb-3">
                  <label for="" class="form-label">Digite numero de documento</label>
                  <div class="mb-3">
                    <div class="input-group">  
                      <div class="col-md-4">
                        <select class="form-control" name="fam_doc_typ" id="fam_doc_typ" required>
                          <option selected value="">Seleccione</option>
                          <option value="CC">Cedula de ciudadania</option>
                          <option value="CE">Cedula de Extranjeria</option>
                          <option value="PA">Pasaporte</option>
                        </select>
                      </div>
                      <input type="text"
                      class="form-control" name="fam_doc_num" id="fam_doc_num" aria-describedby="helpId" maxlength="15" minlength="7">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="fam_ema" class="form-label">Ingrese su correo electronico</label>
                    <input type="email"
                      class="form-control" name="fam_ema" id="fam_ema" aria-describedby="helpId" placeholder="" required>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Digite numero de documento del estudiante</label>
                  <div class="mb-3">
                    <div class="input-group">  
                      <div class="col-md-4">
                        <select class="form-control" name="stu_doc_typ" id="stu_doc_typ" required>
                          <option selected value="">Seleccione</option>
                          <option value="RC">Registro Civil</option>
                          <option value="T.I">Tarjeta de Identidad</option>
                          <option value="PA">Pasaporte</option>
                        </select>
                      </div>
                      <input type="text"
                      class="form-control" name="stu_doc_num" id="stu_doc_num" aria-describedby="helpId" maxlength="15" minlength="7">
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Especifique su relacion con el Estudiante</label>
                  <select class="form-control" name="relation" id="relation" required>
                    <option selected value="">Seleccione</option>
                    <option value="PADRE">Padre</option>
                    <option value="MADRE">Madre</option>
                    <option value="ACUDIENTE">Acudiente</option>
                  </select>
                </div>
              </div>
              <div class="card-footer text-muted">
                <button type="submit" class="btn btn-primary">Consultar</button>
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
