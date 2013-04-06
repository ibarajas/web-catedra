<!DOCTYPE html>
<html lang="es">
<head>
  <?php include'templates/header.php'?>
  <link rel="stylesheet" type="text/css" href="css/bootstrap-wysihtml5.css"></link>
  <title>Web Cátedra</title>
  <style>
  .textarea-width-100{
    margin-right:12px;
  }
  .textarea-width-100 input{
    width: 100%;
  }
  </style>
</head>
<body>
  <div id="wrapper">
    <?php include'templates/menu.php'?>
    
    <div class="container">
      <h1>Transparente</h1>
      <table class="table table-striped table-bordered">
        <thead>
          <th>Fecha</th>
          <th>Novedad</th>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
        </table>
      </tbody>
      <a class="btn" href="#ModalNuevaEntrada" role="button" data-toggle="modal">Nueva entrada...</a>
    </div>
 
    <!-- Modal -->
    <div id="ModalNuevaEntrada" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Nueva entrada</h3>
      </div>
      <form action="editar-novedades.php" method="post">
        <div class="modal-body">
          <div class="textarea-width-100"><textarea id="inputNovedad" placeholder="" name="novedad"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary">Aceptar</button>
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
        </div>
      </form>
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