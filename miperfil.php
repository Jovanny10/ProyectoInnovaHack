<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aliados</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/miperfil.css">
  <link rel="stylesheet" href="fontawesome-free-5.3.1-web/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="form-group">
          <div class="row col-md-12">
            <a class="navbar-brand" href="index.html" class="img-responsive"><img src="imagenes/isaac.png" class="img-responsive" width="30%"></a>
          </div>
        </div>
          <a class="navbar-brand" href="index.html"><i class="fas fa-sign-in-alt"></i> INICIO</a>
          <button class="boton navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <ul class="navbar-nav">
                  <li class="nav-item active">
                     <a class="nav-link" href="InnovaWeeKend.html"><i class="fas fa-file-alt"></i> INNOVAWEEKEND <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="InnovaHack.html"><i class="far fa-address-book"></i> INNOVAHACK</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="Agenda.php"><i class="far fa-address-book"></i> AGENDA</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="Lideres.html"><i class="fas fa-user-lock"></i> LÍDERES</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="miperfil.php"><i class="fas fa-user-plus"></i> MI PERFIL</a>
                  </li>
       
               </ul>
          </div>
       </nav>

       <div class="container-portada bg-dark">

        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="container container-login">
              <div class="row">
                <div class="col-lg-12">
                  <h1 class="text-center">Inicio de Sesión</h1>
                </div>
              </div>
              <div class="form-group">
                <div class="info">
                  
                </div>
              </div>
              <form class="miperfil" id="miperfil">
                 <div class="form-group">
                    <label for="exampleInputEmail1" class="texto text-success">Usuario</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="labsol@gmail.com">
                    </div> 
                    
                  </div>
                  <div class="form-group  ">
                    <label for="exampleInputPassword1" class="texto text-success">Contraseña</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                      </div>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresar contraseña">
                    </div>

                
                  </div>

                  <div class="row botones">
                    <div class="col-lg-12">
                     <button type="submit" class="btn btn-danger" onclick="aceptar();"><i class="fas fa-user-check"></i> ACEPTAR</button>
                     <a href="registro1.php" class="btn btn-danger" role="button" value="registrar"><i class="fas fa-user-plus"></i> REGISTRARSE</a>
                     
                    </div>
                  </div>

                  <div class="form-group text-center">
                    <span><a href="#">Olvidate tu contraseña?</a></span>
                  </div>

                  
              </form>
            </div>
          </div>


          <div class="row img-portada col-xs-12 col-lg-5 align-items-center">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                   <div class="carousel-item active">
                        <img class="" src="imagenes/labsol.png" alt="First slide">
                   </div>
                   <div class="carousel-item">
                        <img class="" src="imagenes/Principal.png" alt="Second slide">
                   </div>
                   <div class="carousel-item">
                        <img class="" src="imagenes/fondo.jpg" alt="Third slide">
                   </div>
               </div>
           </div>
          </div>
        </div>
       </div>

       <script type="text/javascript">
         function aceptar(){
          alert("Hola");
         }
       </script>
 
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>


