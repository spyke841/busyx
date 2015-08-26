<?php
unset($p);
if (isset($_GET['p'])) {
  $p = $_GET['p'];
} else {
  $p = 'home';
}
$routes = ['home' => 'home',
          'accueil' => [
                      'news' => 'News',
                      'dernieres_commandes' => 'Dernières commandes',
                      'vos_filleuls' => 'Vos filleuls'
          ],
          'outils_de_promos' => [
                      'webservice' => 'Webservice',
                      'marques_blanches'
          ],
];
ob_start();

if (preg_match('#\.#', $p)) {
  $way = explode('.', $p);
  $dossier = $way[0];
  $p = $way[1];
  $niv = 1;
  $link[0] = '?p=' . $way[0];
  $link[1] = '?p=' . $way[0] . '.' . $way[1];
  $filename = '../pages/' . $dossier . '/' . $way[1] . '.php';
} else {
  $niv = 0;
  $p = $p;
  $link[0] = '?p=' . $p;
  $filename = '../pages/' . $p . '.php';
}
$ok = 0;
if ($niv == 1) {
  if (array_key_exists($p, $routes[$way[0]])) {
    $ok = 1;
  }
}
if ($niv == 0) {
  if (array_key_exists($p, $routes) || in_array($p, $routes)) {
    $ok = 1;
  }
}

if ($ok == 1) {
  if (file_exists($filename)) {
    if ($niv == 1) {
      $position = [$way[0], $way[1]];
    }
    else {
      $position = [$p];
    }
    $title = $p;
    require $filename;
  }
  else {
  $not_found = 'le fichier de la page n\'existe pas';
    require '../pages/404.php';
  }
}
else {
$not_found = $filename . ' n\'est pas dans le tableau des routes';
  require '../pages/404.php';
}

$content = ob_get_clean();

require '../pages/template/default.php';
 ?>
