<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\PostModel;
use App\Model\UserModel;

/**
 *
 */
class ArticleController extends Controller
{

    public function index()
    {
        $articles = PostModel::all();
        $user = new UserModel;
        $nombre = PostModel::count($articles);

        $this->render('app.articles.index', [
            'articles' => $articles,
            'user' => $user,
            'nombre' => $nombre
        ]);
    }

    public function show($id)
    {
        $note = $this->isArticleExist($id);
        $user = new UserModel;

        $this->render('app.articles.show', [
            'note' => $note,
            'user' => $user
        ]);
    }

    public function delete($id)
    {
        $articleDelete = $this->isArticleExist($id);
        PostModel::delete($id);
        $this->redirect('articles');
    }

    public function isArticleExist($id)
    {
        $article = PostModel::findById($id);

        // if (empty($article)) :
        //     $this->Abort404();  --> Très verbeux. Voir ternaire ci-dedssous
        // endif;

        // return $article;

        return (empty($article)) ? $this->Abort404() : $article; // Moins verbeux, une seule ligne !
    }
}