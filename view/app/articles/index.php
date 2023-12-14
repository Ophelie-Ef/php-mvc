<?php

// $this->dd($articles);

foreach ($articles as $billetdeblog)  {
    ?>

    <figure>

        <figcaption>
            <h2><?=$billetdeblog->title?></h2>
            <p><?=$billetdeblog->content?></p>
            <p>Posté le : <?=$billetdeblog->createdAt?></p>
        </figcaption>

    </figure>

    <?php
}
