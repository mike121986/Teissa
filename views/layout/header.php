<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> -->
    <meta name="viewport"
        content="width=device-width, user-scalable=no, shrink-to-fit=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistema Pilarica</title>
    <!-- boostrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
        <link rel="stylesheet" href="<?=base_url?>assets\OulCarusel\owlcarousel\assets\owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url?>assets\OulCarusel\owlcarousel\assets\owl.theme.default.min.css">
    <!-- css stylo base -->
    <link href="<?=base_url?>assets/css/styles.css" rel="stylesheet" />
    <!-- css stylo propio -->
    <link href="<?=base_url?>assets/css/stilo.css" rel="stylesheet" />
    <!-- iconos boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- boostrap 5.0 js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <!-- jquery -->
    <script src="<?=base_url?>assets/OulCarusel/vendors/jquery.min.js"></script>
    <script src="<?=base_url?>assets/OulCarusel/owlcarousel/owl.carousel.min.js"></script>
    <!-- fontawensome -->
    <!-- <script src="https://kit.fontawesome.com/eb6d5bd588.js" crossorigin="anonymous"></script> -->


    <script src="<?=base_url?>assets/js/scripts.js"></script>
     <script src="<?=base_url?>assets/js/editableTableWidget/menu.js"></script>
    <!-- editableTableWidget this is for edita rows of the tables -->

</head>

<body class="sb-nav-fixed">
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" id="teissa"><strong>Teissa Inox</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                   <i class="bi bi-bar-chart-steps"></i>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbarText" >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item listPRod">
                            <a class="nav-link linkProd" onmouseover="toggleMenuTeiisa('SubmenulinkProd')" aria-current="page" href="#">Productos Especializados</a>
                            <ul class="SubmenulinkProd">
                              <li><a href="#">TANQUES SENCILLOS</a> </li>
                              <li><a href="#">TANQUES DE PROCESO</a> </li>
                              <li><a href="#">TANQUES DE SILO</a> </li>
                              <li><a href="#">MAXALADORAS</a> </li>
                              <li><a href="#">MARMITAS</a> </li>
                              <li><a href="#">TINAS SENCILLAS</a> </li>
                              <li><a href="#">TINAS DE PROCESO</a> </li>
                              <li><a href="#">PASTEURIZADOR LENTO</a> </li>
                              <li><a href="#">TRIBLENDER</a> </li>
                              <li><a href="#">TARJAS</a> </li>
                              <li><a href="#">PLATAFORMAS</a> </li>
                              <li><a href="#">BARANDALES</a> </li12>
                              <li><a href="#">PRENSA PARA QUESO</a> </li>
                              <li><a href="#">SISTEMAS DE AGITACION</a> </li>
                              <li><a href="#">MUEBLES</a> </li>
                              <li><a href="#">TOLVAS</a> </li>
                              <li><a href="#">TRANSPORTADORES</a> </li>
                              <li><a href="#">REFACCIONES</a> </li>
                              <li><a href="#">BOMBAS</a> </li>
                              <li><a href="#">CENTRIFUGAS</a> </li>
                            </ul>
                        </li>
                        <li class="nav-item listPRod">
                            <a class="nav-link linkProd" href="#" onmouseover="toggleMenuTeiisa('SubmenulinkLinea')">Productos de Linea</a>
                            <ul class="SubmenulinkLinea" >
                              <li><a href="#">Tubería Sanitaria</a> </li>
                              <li><a href="#">Tubería Ornamental</a> </li>
                              <li><a href="#">Tubería cuadrada PTR</a> </li>
                              <li><a href="#">Lámina</a> </li>
                              <li><a href="#">Placa</a> </li>
                              <li><a href="#">Soleras</a> </li>
                              <li><a href="#">Ángulos</a> </li>
                              <li><a href="#">Válvulas Sanitarias</a> </li>
                              <li><a href="#">Válvulas Industriales</a> </li>
                              <li><a href="#">Conexiones sanitarias</a> </li>
                              <li><a href="#">Conexiones industriales</a> </li>
                            </ul>
                          </li>
                        <li class="nav-item listPRod">
                            <a class="nav-link linkProd" href="#" onmouseover="toggleMenuTeiisa('SubmenulinkServicios')">Servicios</a>
                            <ul class="SubmenulinkServicios">
                              <li><a href="#">Tubería Sanitaria</a> </li>
                              <li><a href="#">Tubería Ornamental</a> </li>
                              <li><a href="#">Tubería cuadrada PTR</a> </li>
                              <li><a href="#">Lámina</a> </li>
                              <li><a href="#">Placa</a> </li>
                              <li><a href="#">Soleras</a> </li>
                              <li><a href="#">Ángulos</a> </li>
                            </ul>
                        </li>
                    </ul>
                    <a href="http://" class="btnContactoRedirect">Cotizacion</a>
                </div>
            </div>
        </nav>
        <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" id="teissa"><strong>Teissa Inox</strong</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-bar-chart-steps"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->
