<section>
    <h3>Ajout d'un article</h3>
    <form method="POST">
        <?= $formAdd->label('Titre') ?>
        <?= $formAdd->input('Titre') ?>
        <?= $formAdd->error('Titre') ?>

        <?= $formAdd->label('Contenu') ?>
        <?= $formAdd->textarea('Contenu') ?>
        <?= $formAdd->error('Contenu') ?>

        <?= $formAdd->submit('', 'Ajouter mon article') ?>
    </form>
</section>