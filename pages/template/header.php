<?php
if (isset($title)) {
  $title = $title;
} else {
  $title = 'pas de titre';
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <base href="/"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="/assets/css/normalize.css" media="screen">
  <link rel="stylesheet" href="/assets/css/main.css" media="screen">
  <link rel="stylesheet" href="/assets/css/bootstrap.css" media="screen">
  <link rel="stylesheet" href="/assets/css/table.css" media="screen">
  <link rel="stylesheet" href="/assets/css/font-awesome.min.css" media="screen">
  <link rel="stylesheet" href="/assets/css/syntax/atelier-heath.light.css">
  <?php if (isset($stylesheet) && is_array($stylesheet)): ?>
    <?php foreach ($stylesheet as $key => $value): ?>
      <link rel="stylesheet" href="/assets/css/<?= $value ?>.css">
    <?php endforeach; ?>
  <?php endif; ?>

  <link rel="stylesheet" href="/assets/css/style.css" media="screen">
  <title>Busyx | <?= $title ?></title>
</head>
<body>
  <nav class="mainNav bg_orange">
    <div class="col-xs-2">
      <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="col-xs-8 mainLogo">
      <!-- <img class="center-block" src="/assets/img/logo_busyx.jpg" /> -->
        <a href="?p=home"><img class="center-block" src="/assets/img/logo.png" /></a>
      <!-- <h1 class="txt-center txt-white logo_busyx"><span class="txt-whiter"><span class="logo_B">B</span>USY</span><span class="logo_x txt-orange bg_round">X</span><span class="txt-white">.COM</span></h1> -->
    </div>
    <div class="col-xs-2">
      <div class="txt-white pull-right txt-center">
        <i class="fa fa-user fa-2"></i><br>
        <span class="hidden-xs">connectez-vous</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </nav>
  <nav class="subNav bg_white">
    <div class="col-xs-12">
      <div class="pull-right">
        <a href="#">Qui sommes-nous ?</a> <a href="?p=faq">F.A.Q</a>
      </div>
    </div>
    <div class="clearfix"></div>
  </nav>

  <?php if ($position): ?>
  <div class="container">
    <div class="row">
      <small>
        vous êtes ici :
      </small>
      <ul class="breadcrumb">
        <?php foreach ($position as $key => $value): ?>
          <?php $firstPosItem = array_values($array)[0]; ?>
          <?php if ($key == $firstPosItem): ?>
            <li class="first"><a href="<?= $link[$key] ?>"><?= ucfirst(str_replace('_', ' ', $value)) ?></a></li>
          <?php else: ?>
            <li class="current"><a href="<?= $link[$key] ?>"><?= ucfirst(str_replace('_', ' ', $value)) ?></a></li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
  <?php endif; ?>
