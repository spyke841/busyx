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
  <link rel="stylesheet" href="/assets/css/font-awesome.min.css" media="screen">
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
        <img class="center-block" src="/assets/img/logo.png" />
      <!-- <h1 class="txt-center txt-white logo_busyx"><span class="txt-whiter"><span class="logo_B">B</span>USY</span><span class="logo_x txt-orange bg_round">X</span><span class="txt-white">.COM</span></h1> -->
    </div>
    <div class="col-xs-2">
      <div class="txt-white pull-right txt-center">
        <i class="fa fa-user fa-2"></i><br>
        connectez-vous
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
  <div class="breadcrumb">
    <ul>
      <?php foreach ($position as $key => $value): ?>
        <?php $lastPosItem = end($position); ?>
        <?php if ($key == $lastPosItem): ?>
          <li class="current"><?= $value ?></li>
        <?php else: ?>
          <li class="last"><?= $value ?></li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
  </div>
