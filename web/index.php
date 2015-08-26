<?php

if (isset($_GET['p'])) {
  $p = $_GET['p'];
} else {
  $p = 'home';
}
$routes = ['home',
          'news',
          'accueil' => ['news', 'dernieres_commandes', 'vos_filleuls'],
          'outil_de_promos' => ['webservice', 'marques_blanches'],
];

ob_start();

if (preg_match('#.#', $p)) {
  $way = explode('.', $p);
  $dossier = $way[0];
  $p = $way[1];
  $niv = 1;
  $filename = '../pages/' . $dossier . '/' . $way[1] . '.php';
} else {
  $niv = 0;
  $p = $p;
  $filename = '../pages/' . $p . '.php';
}

if (in_array($p, $routes)) {

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
    require '../pages/404.php';
  }
}
else {
  require '../pages/404.php';
}

$content = ob_get_clean();

require '../pages/template/default.php';
 ?>
