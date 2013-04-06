<!DOCTYPE html>
<html lang="es">
<head>
  <?php include'templates/header.php'?>
  <title>Web Cátedra</title>
</head>
<body>
  <div id="wrapper">
    <?php include'templates/menu.php'?>
   
    <div class="container">
      <h1>Cronograma</h1>
      <table class="table table-striped table-bordered">
        <thead>
          <th>Actividad</th>
          <th>Fecha</th>
          <th>Hora</th>
          <th>Lugar</th>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p>Cronograma actualizado el: ##/##/####</p>
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
          <div>
            <label for="inputActividad">Actividad</label>
            <input type="text" id="inputActividad" name="actividad" />
          </div>
          <div>
            <label for="inputFecha">Fecha</label>
            <input type="text" id="inputFecha" placeholder="dd/mm/aaaa" name="fecha" />
          </div>
          <div>
            <label for="inputActividad">Hora</label>
            <input type="text" id="inputHora" name="actividad" />
          </div>
          <div>
            <label for="inputLugar">Lugar</label>
            <input type="text" id="inputLugar" name="lugar" />
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
</body>
</html>