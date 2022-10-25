<!doctype html>
<html lang="es">
  <head>
    <title>Login - Trabajadores</title>
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
        margin-top: 18%;
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
          <form action="../../controller/login_empleados.php" method="post">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">BIENVENIDO TRABAJADOR</h4>

                <!--Input: emp_ema (Correo Electronico Empleado)-->
                <div class="mb-3">
                  <label for="emp_ema" class="form-label">Ingrese su correo Institucional</label>
                  <input type="email"
                    class="form-control" name="emp_ema" id="emp_ema" required>
                </div>

                <!--Input: emp_pass (Contraseña Empleado)-->
                <div class="mb-3">
                  <label for="emp_pass" class="form-label">Digite su contraseña</label>
                  <input type="password"
                    class="form-control" name="emp_pass" id="emp_pass" required minlength="8">
                </div>

                <!--Input: emp_char (Cargo del empleado dentro de la institucion)-->
                <div class="mb-3">
                  <label for="emp_char" class="form-label">Seleccione su cargo en la institución</label>
                  <select class="form-control" name="emp_char" id="emp_char">
                    <option value="" selected>Seleccione</option>
                    <option value="Docente">Docente</option>
                    <option value="Coordinacion Convivencial">Coordinación Convivencial</option>
                    <option value="Coordinacion Academica">Coordinación Académica</option>
                    <option value="Secretaria">Secretaria</option>
                    <option value="Rectoria">Rectoría</option>
                    <option value="Refrigerios">Refrigerios</option>
                    <option value="Administrador">Administrador</option>
                  </select>
                </div>

              <div class="card-footer text-muted">
                <!--Boton redireccion a login Trabajadores-->
                <a class="btn btn-primary" href="../../" role="button">Soy Padre de Familia</a>

                <!--Boton Inicio de sesion-->
                <button type="submit" class="btn btn-success">Iniciar Sesión</button>
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
