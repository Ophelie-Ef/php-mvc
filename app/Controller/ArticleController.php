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
        $note = PostModel::findById($id);
        $user = new UserModel;

        $this->render('app.articles.show', [
            'note' => $note,
            'user' => $user
        ]);
    }

    public function delete($id)
    {
        PostModel::delete($id);
        $this->redirect('articles');
    }
}

// public static function count(){
//     return App::getDatabase()->aggregation("SELECT COUNT(id) FROM " . self::getTable());
// }