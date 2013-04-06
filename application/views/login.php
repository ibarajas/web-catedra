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
      <form class="form-horizontal">
        <fieldset>
          <legend>Datos de usuario</legend>
          <fieldset>
          <div class="control-group">
            <label class="control-label" for="inputEmail">Email</label>
            <div class="controls">
              <div class="input-append">
                <input type="text" class="input-large" id="inputEmail" placeholder="" name="email">
                <span class="add-on"><i class="icon-envelope"></i></span>
              </div>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputPassword">Contraseña</label>
            <div class="controls">
              <div class="input-append">
                <input type="password" class="input-large" id="inputPassword" placeholder="" name="contrasena">
                <span class="add-on"><i class="icon-asterisk"></i></span>
              </div>
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox"> Recordarme
              </label>
              <button type="submit" class="btn">Iniciar sesión</button>
            </div>
          </div>
        </fieldset>
      </form>
      <p>Si no está registrado en esta materia, por favor inscribase <a href="registro.php"><b>aquí</b></a>.</p> 
    </div>
  
    <div id="push"></div><br/>
  </div>
  <?php include'templates/footer.php'?>
</body>
</html>