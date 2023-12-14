<?php
// $this->dd($articles);
// $this->dd($nombre)
?>

<p>Il y a <?= $nombre ?> articles sur ce blog.</p>

<?php

foreach ($articles as $billetdeblog) {

?>
    <figure>

        <figcaption>

            <h2><a href="<?= $view->path('article', [$billetdeblog->id]) ?>"><?= $billetdeblog->title ?></a></h2>

            <p>Auteur : <?= $user->findById($billetdeblog->author, 'id')->firstname . ' ' .
                            $user->findById($billetdeblog->author, 'id')->lastname ?></p>

            <p>Posté le : <?= $billetdeblog->createdAt ?></p>

        </figcaption>

    </figure>

<?php
}
?>