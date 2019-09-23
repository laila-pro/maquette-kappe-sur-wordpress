<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="author" lang="fr" content="Leila Provost & Antoni Salomon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
     <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="<?php //bloginfo('stylesheet_url'); ?>"> -->
  <?php  wp_head(); ?>
  <link rel="icon" type="image/png" href="img/development.png">
<!-- menu -->
  <div class="logo-box">
    <a href="https://premiumlayers.net/demo/wp/kappewp" id="logo" class="logo">
      <img src="http://premiumlayers.net/demo/wp/kappewp/wp-content/uploads/2014/02/logo.png" alt="Kappe - Full Screen Portfolio &amp; Blog WP Theme" id="logo-image">
    </a>
  </div>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<?php
wp_nav_menu();
?>
<!-- button info and <nav> -->
<span style="cursor:pointer;z-index: 3;" id="hamburger" onclick="openNav()">&#9776;</span>
<span class="info-box"  style="cursor:pointer;z-index: 3;">
  <div class="popup">🛈
    <span class="popuptext" id="myPopup"><p>🏠<strong>Adresse:</strong> 7bis Rue du 13e de Ligne, 58000 Nevers<br>✆<strong>Tel:</strong> +33(0)3 84 76 52 44<br>📧<strong>Email:</strong> projet@onlineformapro.com</p></span>
  </div>
</span>
<!-- fin button -->
</head>

<body>
