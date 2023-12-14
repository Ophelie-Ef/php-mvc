<nav>
    <ul>
        <li><a href="<?= $view->path('home'); ?>">Home</a></li>
        <li><a href="<?= $view->path('articles'); ?>">Articles</a></li>
        <li><a href="<?= $view->path('contact'); ?>">Contact</a></li>
        <li><a href="<?= $view->path('about'); ?>">About</a></li>
        <li><a href="<?= $view->path('single', array(12)); ?>">Single</a></li>
        <li><a href="<?= $view->path('single2', array(12, 'dedede')); ?>">Single2</a></li>
    </ul>
</nav>