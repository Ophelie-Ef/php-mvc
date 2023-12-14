<section>
    <h3><?= $note->title ?></h3>
    <p>Auteur : <?= $user->findById($note->author, 'id')->firstname . ' ' .
                    $user->findById($note->author, 'id')->lastname ?></p>
    <p><?= $note->content ?></p>
    <p>Publié le : <?= $note->createdAt ?></p>
    <p>Modifié le : <?= $note->modifiedAt ?></p>
    <p>
        <a href="<?= $view->path('delete', [$note->id]) ?>">
            Supprimer
        </a>
    </p>
</section>