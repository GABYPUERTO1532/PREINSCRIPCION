<?php

  if(isset($_SESSION['sub_lev'])){
    switch ($_SESSION['sub_lev']){
      case "lev_3":
        $route="../../..";
      break;    

      case "lev_2":
        $route="../..";
      break;
    }
  }

?>
  
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="<?php echo($route);?>/config/library/bootstrap-5.0.2-dist/js/popper.min.js">
  </script>

  <script src="<?php echo($route);?>/config/library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>

</html>