<?php 
use App\App;
use App\Table\Article;
use App\Table\Categorie;

$post = article::find($_GET['id']);
if($post === false){
    App::notFound();
}

$categorie = Categorie::find($post->categorie_id);
?>
<h1><?= $post->titre; ?></h1>

<p><em><?= $categorie->titre ?></em></p>

<p><?= $post->contenu; ?></p>


<p><a href="index.php?p=home">Home page</a></p>