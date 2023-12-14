<?php

foreach ($articles as $billetdeblog) {
?>

    <figure>

        <figcaption>

            <h2><?= $billetdeblog->title ?></h2>

            <p><?= $billetdeblog->content ?></p>

            <p>Auteur : <?= $user->findById($billetdeblog->author, 'id')->firstname . ' ' .
                            $user->findById($billetdeblog->author, 'id')->lastname ?></p>

            <p>Posté le : <?= $billetdeblog->createdAt ?></p>

            <p>Modifié le : <?= $billetdeblog->modifiedAt ?></p>

        </figcaption>

    </figure>

<?php
}
