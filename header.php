<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title>Bullhost</title> 
  <?php wp_head();?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- NAVBAR-->

<div id="global-container" class="global-container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<!--- Logo custom --->
<a href="https://bullhost.com.ar"><?php 
   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?>
<img src="<?php echo $image[0]; ?>" lt="Bullhost" class="logo"></a>
<!--- Logo custom --->
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only" >(current)</span></a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link px-2" href="#">Ingresar</a>
      </li>
      <li class="nav-item dropdown px-2">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Nosotros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Politicas</a>
          <a class="dropdown-item" href="#">Servicios</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Nosotros</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link px-2" href="#">Contacto</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="¿Qué estas buscando?" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>