<?php 
  session_start();
  $_SESSION['titulo']="Proceso Preinscripcion";
  
  include "C://xampp/htdocs/PREINSCRIPCION/view/header.php"; 
  include ("C:/xampp/htdocs/PREINSCRIPCION/controller/preinscripcion/estructuras_nuevo.php");

  $stu_doc_typ_login=$_GET['stu_doc_typ'];
  $stu_doc_num_login=$_GET['stu_doc_num'];

  $moth_doc_num_login="";
  $fath_doc_num_login="";
  $acu_doc_num_login="";

  $moth_doc_typ_login="";
  $acu_doc_typ_login="";
  $fath_doc_typ_login="";
  $acu_doc_typ_login="";


  switch ($_GET['relation']){
    case "Madre":
      $moth_doc_num_login=$_GET['fam_doc_num'];
      $moth_doc_typ_login=$_GET['fam_doc_typ'];
    break;

    case "Padre":
      $fath_doc_num_login=$_GET['fam_doc_num'];
      $fath_doc_typ_login=$_GET['fam_doc_typ'];
    break;

    case "Acudiente":
      $acu_doc_num_login=$_GET['fam_doc_num'];
      $acu_doc_typ_login=$_GET['fam_doc_typ'];
    break;
  }

?>
  <!--Contenedor principal Formulario-->
  <div class="card">
    <form action="../../controller/actions.php?action=create" method="post">
      <div class="card-body">
      <section>
        <!--Titulo seccion-->
        <h3 class="card-title text-center">Datos Estudiante</h3>

        <!--Subseccion solo para inputs-->
        <article>

          <!--SECCION 1-->

          <!--Input: Primer y segundo apellido, Primer nombre-->
          <div class="input-group">

            <!--Input: firs_sur (Primer apellido)-->
            <?php estructura("text","Primer Apellido","firs_sur")?>

            <!--Input: sec_sur (Segundo apellido)-->
            <?php estructura("text","Segundo Apellido","sec_sur")?>

            <!--Input: firs_nam (Primer Nombre)-->
            <?php estructura("text","Primer Nombre","firs_nam")?>

          </div>

          <!--SECCION 2-->

          <!--Input: Segundo nombre, Fecha de nacimiento, Departamento -->
          <div class="input-group">

            <!--Input: sec_nam (Segundo Nombre)-->
            <?php estructura("text","Segundo Nombre","sec_nam")?>

            <!--Input: date_bir (Fecha de nacimiento)-->
            <?php estructura("date","Fecha de nacimiento","dat_bir")?>

            <!--Input: stu_dep (Departamento de Origen Estudiante)-->
            <?php 
              estructura("select","Departamento","stu_dep","departaments");
            ?>

          </div>

          <!--SECCION 3-->

          <!--Input: Ciudad, Tipo de documento, Numero de documento-->
          <div class="input-group">

            <!--Input: stu_cit (Ciudad)-->
            <?php 
              estructura("select","Ciudad","stu_cit","cities");
            ?>

            <!--Input: stu_doc_typ (Tipo de documento)-->
            <?php 
              estructura("select","Tipo de documento","stu_doc_typ","stu_doc_typ","$stu_doc_typ_login");
            ?>

            <!--Input: stu_doc_num (Numero de documento)-->
            <?php estructura("text","Numero de documento","stu_doc_num","","value='$stu_doc_num_login' min=1","20")?>

          </div>

          <!--SECCION 4-->

          <!--Input: Ciudad de expedicion documento, Direccion, Localidad-->
          <div class="input-group">

            <!--Input: exp_cit (Ciudad de expedicion documento)-->
            <?php
              estructura("select","Ciudad de expedicion","exp_cit","cities");

            ?>

            <!--Input: stu_add (Direccion)-->
            <?php estructura("text","Direccion","stu_add")?>

            <!--Input: stu_loc (Localidad)-->
            <?php
              estructura("select","Localidad","stu_loc","locations");
            ?>
            
          </div>

          <!--SECCION 5-->

          <!--Input: Barrio, Estrato, Categoria Sisben-->
          <div class="input-group">

            <!--Input: stu_neig (Barrio)-->
            <?php
              estructura("text","Barrio","stu_nei");
            ?>

            <!--Input: stu_est (Estrato)-->
            <?php
              estructura("number","Estrato","stu_est",""," min='1' max='6'");
            ?>

            <!--Input: stu_cat (Categoria sisben)-->
            <?php
              estructura("select","Categoria sisben","stu_cat","sisben");
            ?>
    
          </div>

          <!--SECCION 6-->

          <!--Input: Telefono, Aficiones o Hobbies, Cirujias o enfermedades-->
          <div class="input-group">

            <!--Input: stu_tel (Telefono)-->
            <?php
              estructura("text","Telefono Celular","stu_tel","","","10");
            ?>

            <!--Input: stu_hob (Aficiones o Hobbies)-->
            <?php
              estructura("text","Aficiones o Hobbies","stu_hob");
            ?>

            <!--Input: stu_enf (Cirujuas o enfermedades)-->
            <?php
              estructura("text","Cirujias o enfermedades","stu_enf");
            ?>
            
          </div>

          <!--SECCION 7-->

          <!--Input: EPS, ARS, IPS-->
          <div class="input-group">

            <!--Input: stu_eps (EPS)-->
            <?php
              estructura("select","EPS","stu_eps","eps");
            ?>

            <!--Input: stu_ars (ARS)-->
            <?php
              estructura("text","ARS","stu_ars");
            ?>

            <!--Input: stu_ips (IPS)-->
            <?php
              estructura("text","IPS","stu_ips");
            ?>
    
          </div>

          <!--SECCION 8-->

          <!--Input: Grupo Sanguineo, RH-->
          <div class="input-group">

            <!--Input: b_grp (Grupo Sanguineo)-->
            <?php
              estructura("select","Grupo Sanguineo","b_grp","blood_group");
            ?>

            <!--Input: rh_fact (Factor Sanguineo)-->
            <?php
              estructura("select","RH","rh_fact","rh");
            ?>
    
          </div>
        </article>
      </section>

      <section>
        <!--Titulo seccion-->
        <h3 class="card-title text-center">Datos De la Madre</h3>

        <!--Subseccion solo para inputs-->
        <article>

          <!--SECCION 1-->

          <!--Input: Nombre, Tipo de documento, Cedula-->
          <div class="input-group">

            <!--Input: fam_nam_moth (Nombre)-->
            <?php estructura("text","Nombre","fam_nam_moth")?>

            <!--Input: doc_typ_moth (Tipo de documento)-->
            <?php
              estructura("select","Tipo de documento","doc_typ_moth","fam_doc_typ","$moth_doc_typ_login");
            ?>

            <!--Input: doc_num_moth (Numero de documento)-->
            <?php estructura("text","Numero de documento","doc_num_moth","","value='$moth_doc_num_login'","20")?>

          </div>

          <!--SECCION 2-->

          <!--Input: Telefono fijo, Telefono celular, Direccion-->
          <div class="input-group">

            <!--Input: fam_land_moth (Telefono fijo)-->
            <?php estructura("text","Telefono fijo","fam_land_moth","","","20")?>

            <!--Input: mob_pho_moth (Telefono Celular)-->
            <?php
              estructura("text","Celular","mob_pho_moth","","","20");
            ?>

            <!--Input: fam_add_moth (Direccion)-->
            <?php estructura("text","Direccion","fam_add_moth")?>

          </div>

          <!--SECCION 3-->

          <!--Input: Ocupacion, Correo Electronico-->
          <div class="input-group">

            <!--Input: fam_ocu_moth (Ocupacion)-->
            <?php estructura("text","Ocupacion","fam_ocu_moth")?>

            <!--Input: fam_ema_moth (Correo Electronico)-->
            <?php
              estructura("email","Correo Electronico","fam_ema_moth");
            ?>

          </div>
        </article>
      </section>

      <section>
        <!--Titulo seccion-->
        <h3 class="card-title text-center">Datos Del Padre</h3>

        <!--Subseccion solo para inputs-->
        <article>

          <!--SECCION 1-->

          <!--Input: Nombre, Tipo de documento, Cedula-->
          <div class="input-group">

            <!--Input: fam_nam_fath (Nombre)-->
            <?php estructura("text","Nombre","fam_nam_fath")?>

            <!--Input: doc_typ_fath (Tipo de documento)-->
            <?php
              estructura("select","Tipo de documento","doc_typ_fath","fam_doc_typ","$fath_doc_typ_login");
            ?>

            <!--Input: doc_num_fath (Numero de documento)-->
            <?php estructura("text","Numero de documento","doc_num_fath","","value='$fath_doc_num_login'","20")?>

          </div>

          <!--SECCION 2-->

          <!--Input: Telefono fijo, Telefono celular, Direccion-->
          <div class="input-group">

            <!--Input: fam_land_fath (Telefono fijo)-->
            <?php estructura("text","Telefono fijo","fam_land_fath","","","20")?>

            <!--Input: mob_pho_fath (Telefono Celular)-->
            <?php
              estructura("text","Celular","mob_pho_fath","","","20");
            ?>

            <!--Input: fam_add_fath (Direccion)-->
            <?php estructura("text","Direccion","fam_add_fath")?>

          </div>

          <!--SECCION 3-->

          <!--Input: Ocupacion, Correo Electronico-->
          <div class="input-group">

            <!--Input: fam_ocu_fath (Ocupacion)-->
            <?php estructura("text","Ocupacion","fam_ocu_fath")?>

            <!--Input: fam_ema_fath (Correo Electronico)-->
            <?php
              estructura("email","Correo Electronico","fam_ema_fath");
            ?>

          </div>
        </article>
      </section>

      <section>
        <!--Titulo seccion-->
        <h3 class="card-title text-center">Datos Del Acudiente</h3>

        <!--Subseccion solo para inputs-->
        <article>

          <!--SECCION 1-->

          <!--Input: Nombre, Tipo de documento, Cedula-->
          <div class="input-group">

            <!--Input: fam_nam_acu (Nombre)-->
            <?php estructura("text","Nombre","fam_nam_acu")?>

            <!--Input: doc_typ_acu (Tipo de documento)-->
            <?php
              estructura("select","Tipo de documento","doc_typ_acu","fam_doc_typ","$acu_doc_typ_login");
            ?>

            <!--Input: doc_num_acu (Numero de documento)-->
            <?php estructura("text","Numero de documento","doc_num_acu","","value='$acu_doc_num_login'","20")?>

          </div>

          <!--SECCION 2-->

          <!--Input: Telefono fijo, Telefono celular, Direccion-->
          <div class="input-group">

            <!--Input: fam_land_acu (Telefono fijo)-->
            <?php estructura("text","Telefono fijo","fam_land_acu","","","20")?>

            <!--Input: mob_pho_acu (Numero Telefonico)-->
            <?php
              estructura("text","Celular","mob_pho_acu","","","20");
            ?>

            <!--Input: fam_add_acu (Direccion)-->
            <?php estructura("text","Direccion","fam_add_acu")?>

          </div>

          <!--SECCION 3-->

          <!--Input: Ocupacion, Correo Electronico-->
          <div class="input-group">

            <!--Input: fam_ocu_moth (Ocupacion)-->
            <?php estructura("text","Ocupacion","fam_ocu_acu")?>

            <!--Input: fam_ema_moth (Correo Electronico)-->
            <?php
              estructura("email","Correo Electronico","fam_ema_acu");
            ?>

          </div>
        </article>
      </section>

      <section>
        <!--Titulo seccion-->
        <h3 class="card-title text-center">Otra Información</h3>

        <!--Subseccion solo para inputs-->
        <article>

          <!--SECCION 1-->

          <!--Input: Victima  Conclicto, Situcion de desplazamiento, Devinculado de grupos armados-->
          <div class="input-group">

            <!--Input: conf_vic (Victima de conflicto armado)-->
            <?php 
              estructura("select","Victima de conflicto armado","conf_vic","yes_no");
            ?>

            <!--Input: dis_sit (Situacion de delplazamiento)-->
            <?php 
              estructura("select","Situación de desplazamiento","dis_sit","yes_no");
            ?>

            <!--Input: dis_arm_grp (Desvinculados Grupos Armados)-->
            <?php 
            estructura("select","Desvinculados Grupos Armados","dis_arm_grp","yes_no");?>

          </div>

          <!--SECCION 2-->

          <!--Input: Hijo desmovilizado, limitaciones, Capacidades expecionales-->
          <div class="input-group">

            <!--Input: dem_son (Hijo de desmovilizado)-->
            <?php 
              estructura("select","Hijo de desmovilizado","dem_son","yes_no");
            ?>

            <!--Input: lim_stu (Limitaciones)-->
            <?php 
              estructura("text","Limitaciones","lim_stu");
            ?>

            <!--Input: exp_cap (Capacidades expecionales)-->
            <?php 

              estructura("text","Capacidades expecionales","exp_cap");
            ?>

          </div>
          
          <!--SECCION 3-->

          <!--Input: Puntaje C.I, Examen de valoracion-->
          <div class="input-group">
          
            <!--Input: iq_sco (Puntaje C.I)-->
            <?php
              estructura("select","Puntaje C.I","iq_sco","ci")
            ?>
            
            <!--Input: ass_tes (Examen de valoración)-->
            <?php
              estructura("select","Examen de valoración","ass_tes","yes_no");
            ?>

          </div>
        </article>
      </section>

      <section>
        <!--Titulo seccion-->
        <h3 class="card-title text-center">Informacion educativa</h3>

        <!--Subseccion solo para inputs-->
        <article class="col-md-12">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Grado</th>
                  <th scope="col">Año</th>
                  <th scope="col">Ciudad</th>
                  <th scope="col">Institución</th>
                </tr>
              </thead>
              
              <!--Informacion Escolar (6 Filas)-->
              <tbody>

                <!--Fila 1 -->
                <tr class="">
                  <td>
                    <!--Input: sch_grd_1 (Grado escolar 1)-->
                    <?php
                      estructura2('select','sch_grd_1',"grades");
                    ?>
                  </td>
                  <td>
                    <!--Input: sch_yea_1 (Año escolar 1)-->
                    <?php
                      estructura2('number','sch_yea_1',"","min='2004' max='2021'");
                    ?>
                  </td>
                  <td>
                    <!--Input: sch_cit_1 (Ciudad donde fue cursado 1)-->
                    <?php
                      estructura2('select','sch_cit_1',"cities","required");
                    ?>
                  </td>
                  <td>
                    <!--Input: sch_ins_1 (Instituto donde fue cursado 1)-->
                    <?php
                      estructura2('text','sch_ins_1');
                    ?>
                  </td>
                </tr>

                <!--Fila 2-->
                <tr class="">
                  <td>
                    <!--Input: sch_grd_2 (Grado escolar 2)-->
                    <?php
                      estructura2('select','sch_grd_2',"grades");
                    ?>
                  </td>
                  <td>
                    <!--Input: sch_yea_2 (Año escolar 2)-->
                    <?php
                      estructura2('number','sch_yea_2',"","min='2004' max='2021'");
                    ?>
                  </td>
                  <td>
                    <!--Input: sch_cit_2 (Ciudad donde fue cursado 2)-->
                    <?php
                      estructura2('select','sch_cit_2',"cities");
                    ?>
                  </td>
                  <td>
                    <!--Input: sch_ins_2 (Instituto donde fue cursado 2)-->
                    <?php
                      estructura2('text','sch_ins_2');
                    ?>
                  </td>
                </tr>

                <!--Fila 3-->
                <tr class="">
                  <td>
                    <!--Input: sch_grd_3 (Grado escolar 3)-->
                    <?php
                      estructura2('select','sch_grd_3',"grades");
                    ?>
                  </td>
                  <td>
                    <!--Input: sch_yea_3 (Año escolar 3)-->
                    <?php
                      estructura2('number','sch_yea_3',"","min='2004' max='2021'");
                    ?>
                  </td>
                  <td>
                    <!--Input: sch_cit_3 (Ciudad donde fue cursado 3)-->
                    <?php
                      estructura2('select','sch_cit_3',"cities");
                    ?>
                  </td>
                  <td>
                    <!--Input: sch_ins_3 (Instituto donde fue cursado 3)-->
                    <?php
                      estructura2('text','sch_ins_3');
                    ?>
                  </td>
                </tr>

                <!--Fila 4-->
                <tr class="">
                  <td>
                    <!--Input: sch_grd_4 (Grado escolar 4)-->
                    <?php
                      estructura2('select','sch_grd_4',"grades");
                    ?>
                  </td>
                  <td>
                    <!--Input: sch_yea_4 (Año escolar 4)-->
                    <?php
                      estructura2('number','sch_yea_4',"","min='2004' max='2021'");
                    ?>
                  </td>
                  <td>
                    <!--Input: sch_cit_4 (Ciudad donde fue cursado 4)-->
                    <?php
                      estructura2('select','sch_cit_4',"cities");
                    ?>
                  </td>
                  <td>
                    <!--Input: sch_ins_4 (Instituto donde fue cursado 4)-->
                    <?php
                      estructura2('text','sch_ins_4');
                    ?>
                  </td>
                </tr>

                <!--Fila 5-->
                <tr class="">
                  <td>
                    <!--Input: sch_grd_5 (Grado escolar 5)-->
                    <?php
                      estructura2('select','sch_grd_5',"grades");
                    ?>
                  </td>
                  <td>
                    <!--Input: sch_yea_5 (Año escolar 5)-->
                    <?php
                      estructura2('number','sch_yea_5',"","min='2004' max='2021'");
                    ?>
                  </td>
                  <td>
                    <!--Input: sch_cit_5 (Ciudad donde fue cursado 5)-->
                    <?php
                      estructura2('select','sch_cit_5',"cities");
                    ?>
                  </td>
                  <td>
                    <!--Input: sch_ins_5 (Instituto donde fue cursado 5)-->
                    <?php
                      estructura2('text','sch_ins_5');
                    ?>
                  </td>
                </tr>

                <!--Fila 6-->
                <tr class="">
                  <td>
                    <!--Input: sch_grd_6 (Grado escolar 6)-->
                    <?php
                      estructura2('select','sch_grd_6',"grades");
                    ?>
                  </td>
                  <td>
                    <!--Input: sch_yea_6 (Año escolar 6)-->
                    <?php
                      estructura2('number','sch_yea_6',"","min='2004' max='2021'");
                    ?>
                  </td>
                  <td>
                    <!--Input: sch_cit_6 (Ciudad donde fue cursado 6)-->
                    <?php
                      estructura2('select','sch_cit_6',"cities");
                    ?>
                  </td>
                  <td>
                    <!--Input: edu_ins_6 (Instituto donde fue cursado 6)-->
                    <?php
                    estructura2('text','sch_ins_6');
                    ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </article>
      </section>
      </div>
      <div class="card-footer text-muted text-center">
        <button type="submit" class="btn btn-success">Finalizar Proceso</button>
      </div>
    </form>
  </div>
<?php include "C://xampp/htdocs/PREINSCRIPCION/view/footer.php"?>
