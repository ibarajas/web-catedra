<!DOCTYPE html>
<html lang="es">
<head>
  <?php include'templates/header.php'?>
  <title>Web Cátedra</title>

  <style>
    .container ul{
      margin:0;
    }
.input-append select {
border-radius: 3px 0 0 3px;
float: left;
}

  </style>
</head>
<body>
  <div id="wrapper">
    <?php include'templates/menu.php'?>
  
    <div class="container">
      <form class="form-horizontal">
        <fieldset>
          <legend>Registro de nuevo usuario</legend>
          <fieldset>
          <div class="control-group">
            <label class="control-label" for="inputAño">Año</label>
            <div class="controls">
              <div class="input-append">
                <span class="input-large">
                  <select id="inputAño" placeholder="" name="ano">
                    <option>2013</option>
                    
                  </select>
                </span>
                <span class="add-on"><i class="icon-calendar"></i></span>
              </div>
              
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputNombre">Nombre</label>
            <div class="controls">
              <div class="input-append">
                <input type="text" class="input-large" id="inputNombre" placeholder="" name="nombre">
                <span class="add-on"><i class="icon-user"></i></span>
              </div>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputApellido">Apellido</label>
            <div class="controls">
              <div class="input-append">
                <input type="text" class="input-large" id="inputApellido" placeholder="" name="apellido">
                <span class="add-on"><i class="icon-user"></i></span>
              </div>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputTelefono">Teléfono</label>
            <div class="controls">
              <div class="input-append">
                <input type="text" class="input-large" id="inputTelefono" placeholder="" name="telefono">
                <span class="add-on"><i class="icon-calendar"></i></span>
              </div>
            </div>
          </div>
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
            <label class="control-label" for="inputPassword2">Confirmar contraseña</label>
            <div class="controls">
              <div class="input-append">
                <input type="password" class="input-large" id="inputPassword2" placeholder="" name="contrasena2">
                <span class="add-on"><i class="icon-asterisk"></i></span>
              </div>
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn">Registrar</button>
            </div>
          </div>
        </fieldset>
      </form> 
    </div>
  
    <div id="push"></div><br/>
  </div>
  <?php include'templates/footer.php'?>
</body>
</html>