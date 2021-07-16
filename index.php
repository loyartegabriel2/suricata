<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bullhost</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>


<body class="home blog logged-in admin-bar no-customize-support custom-background wp-custom-logo">

<!-- NAVBAR-->

<div id="global-container" class="global-container">
<nav class="navbar navbar-dark bg-dark">
<!--- Logo custom --->
<a href="https://bullhost.com.ar"><?php 
   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?>
<img src="<?php echo $image[0]; ?>" lt="Bullhost" class="logo"></a>
<!--- Logo custom --->


	<!--- Termiba navbar --->

			
			

	<?php get_sidebar();?>	
<?php get_footer();?>