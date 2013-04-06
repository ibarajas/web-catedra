<!DOCTYPE html>
<html lang="es">
<head>
  <?php include'templates/header.php'?>
  <title>Web Cátedra</title>

  <style>
    .container ul{
      margin:0;
    }

  </style>
</head>
<body>
  <div id="wrapper">
    <?php include'templates/menu.php'?>
  
    <div class="container">
      <h1>Bibliografía</h1>
      <ul>
        <li>
          <div class="media">
            <a class="pull-left" href="#">
              <img class="media-object" src="http://placehold.it/100x140&text=Image" width="100" height="140" alt="Portada" >
            </a>
            <div class="media-body">
              <h4 class="media-heading">Nombre</h4>
              <p>Descripción</p>
            </div>
          </div>
        </li><br/>
        <li>
          <div class="media">
            <a class="pull-left" href="#">
              <img class="media-object" src="http://placehold.it/100x140&text=Image" width="100" height="140" alt="Portada" >
            </a>
            <div class="media-body">
              <h4 class="media-heading">Nombre</h4>
              <p>Descripción</p>
            </div>
          </div>
        </li><br/>
      </ul>
    </div>
  
    <div id="push"></div><br/>
  </div>
  <?php include'templates/footer.php'?>
</body>
</html>