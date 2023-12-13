<?php

require '../Model/Database.php';

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class ArticlesController extends Controller
{

    public function index()
    {
        $articles = 'Bienvenue sur la pages Articles';
        $post = $connexion->query('SELECT * FROM post ORDER BY id DESC')->fetchAll(PDO::FETCH_ASSOC);

        $this->render('app.articles.index', array(
            'articles' => $articles,
        ));

        $this->

    }



    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }
}