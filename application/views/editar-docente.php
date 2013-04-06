<!DOCTYPE html>
<html lang="es">
<head>
  <?php include'templates/header.php'?>
  <link rel="stylesheet" type="text/css" href="css/bootstrap-wysihtml5.css"></link>

  <title>Web Cátedra</title>
</head>
<body>
  <div id="wrapper">
    <?php include'templates/menu.php'?>
    <div class="container">
      
      
    </div>
    <div id="push"></div><br/>
  </div>
  <?php include'templates/footer.php'?>
  <script src="js/wysihtml5-0.3.0.js"></script>  
  <script src="js/bootstrap-wysihtml5.js"></script>
  <script>
    $('.textarea').wysihtml5();
  </script>
</body>
</html>