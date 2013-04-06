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
      <h1>Información general</h1>
      <ul class="nav nav-tabs">
        <li class="active"><a href="#programa" data-toggle="tab">Programa</a></li>
        <li><a href="#reglamento" data-toggle="tab">Reglamento</a></li>
        <li><a href="#docentes" data-toggle="tab">Docentes</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="programa">
          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
          <a class="btn" href="editar-programa.php">Editar</a>
        </div>
        <div class="tab-pane fade" id="reglamento">
          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
          <a class="btn" href="editar-reglamento.php">Editar</a>
        </div>
        <div class="tab-pane fade" id="docentes">
          <ul>
            <li>
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="http://placehold.it/150x150&text=Image" width="150" height="150" alt="Foto" >
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Nombre</h4>
                  <p>Descripción</p>
                  <a href="#">Eliminar</a>
                </div>
              </div>
            </li><br/>
            <li>
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="http://placehold.it/150x150&text=Image" width="150" height="150" alt="Foto" >
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Nombre</h4>
                  <p>Descripción</p>
                  <a href="#">Eliminar</a>
                </div>
              </div>
            </li><br/>
            <li>
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="http://placehold.it/150x150&text=Image" width="150" height="150" alt="Foto" >
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Nombre</h4>
                  <p>Descripción</p>
                  <a href="#">Eliminar</a>
                </div>
              </div>
            </li><br/
          </ul>
          <a class="btn" href="editar-docente.php">Nuevo docente</a>
        </div>
      </div>  
    </div>
    <div id="push"></div><br/>
  </div>  
  <?php include'templates/footer.php'?>
  
  <script src="js/wysihtml5-0.3.0.js"></script>  
  <script src="js/bootstrap-wysihtml5.js"></script>
  <script>
    $('#ModalNuevaEntrada textarea').wysihtml5();
  </script>
</body>
</html>