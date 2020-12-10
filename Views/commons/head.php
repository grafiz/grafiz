<!DOCTYPE html>
<!-- 'has-navbar-fixed-top' rajoute une marge au dessus du logo-->
<html lang='fr-fr' class='has-navbar-fixed-top'>
<head>
  <meta charset='utf-8'>
  <title><?= $this->title;?></title>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <meta http-equiv='x-ua-compatible' content='ie=edge'>
  <meta name='description' content="<?= $this->metaDescription;?>">

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css' integrity='sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp' crossorigin='anonymous'>

  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Patua+One&family=Signika+Negative:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='<?= ASSETS; ?>/css/main.css'>

    <!-- la favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href=<?= ASSETS. '/img/OPTIMIZED/favicon/apple-icon-57x57.png';?>>
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href=<?= ASSETS. '/img/OPTIMIZED/favicon/android-icon-192x192.png'; ?>>
  <link rel="icon" type="image/png" sizes="32x32" href=<?= ASSETS. '/img/OPTIMIZED/favicon/favicon-32x32.png';?>>
  <link rel="icon" type="image/png" sizes="96x96"  href=<?= ASSETS. '/img/OPTIMIZED/favicon/favicon-96x96.png';?>>
  <link rel="icon" type="image/png" sizes="16x16" href=<?= ASSETS. '/img/OPTIMIZED/favicon/favicon-16x16.png';?>>
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content=<?= ASSETS. '/img/OPTIMIZED/favicon/ms-icon-144x144.png' ?>>
  <meta name="theme-color" content="#ffffff">

  
  <!-- <script defer src='https://kit.fontawesome.com/7447399213.js' crossorigin='anonymous'></script> -->
  <script src='<?= ASSETS; ?>/lib/utilities.js'></script>
  
</head>
<body>