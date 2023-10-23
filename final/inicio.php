<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="estilos.css">
    
    <title>entregable</title>
    
</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg mivavpar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/White Pink Simple Psychology Logo.gif" alt="Logo" width="130px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <button class="lista-navbar">Inicio</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./aboutus.php"><button class="lista-navbar">Quienes somos</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./services.php"><button class="lista-navbar">Servicios</button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contacto.php"><button class="lista-navbar" >Contacto</button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>


<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/2.png" class="d-block w-100" alt="..."> 
    </div>
    <div class="carousel-item">
      <img src="img/3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</head>

<footer class="mifooter d-flex justify-content-center"> 
    <div class="row">
        <div class="col-md-4 miitem">
            <h4>Eva Sandrid Sierra Medina</h4>
            <li>Psicologa</li>
        </div>
    <div class="col-md-4 miitem">
        <h4>Redes Sociales</h4>
        <li><a href="">Facebook</a></li>
        <li><a href="">Twitter</a></li>
        <li><a href="">Instagram</a></li>
        </div>
    <div class="col-md-4 miitem">
        <h4>Contactos</h4>
        <p>Cll 25f N°101-15</p>
        <p>6884525 Ext 66558</p>
    </div>
</footer>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>