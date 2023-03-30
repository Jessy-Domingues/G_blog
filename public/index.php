<?php
require '../app/Autoloader.php';
App\Autoloader::register();

if(isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}



ob_start(); //tu stocke tout ce qu'il en ressort dans une variable, ici $content
if($p === 'home'){
    require '../pages/home.php';
} elseif ($p === 'article'){
    require '../pages/single.php';
}elseif ($p === 'categorie'){
    require '../pages/categorie.php';
}

$content = ob_get_clean();
require '../pages/Template/default.php';
?>