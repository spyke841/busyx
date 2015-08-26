<?php
if (isset($_GET['p'])) {
  $p = $_GET['p'];
} else {
  $p = 'home';
}
$routes = ['home','news',];
ob_start();

if (in_array($p, $routes)) {
  $filename = '../pages/' . $p . '.php';
  if (file_exists($filename)) {
    $title = $p; 
    require $filename;
  }
  else {
    require '../pages/404.php';
  }
}
else {
  require '../pages/404.php';
}

$content = ob_get_clean();
require '../pages/template/default.php';
 ?>
