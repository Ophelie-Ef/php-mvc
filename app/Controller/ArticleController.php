<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\PostModel;

/**
 *
 */
class ArticleController extends Controller
{

    public function index()
    {
        $articles = PostModel::all();
        // $this->dd($articles);

        // $this->render('app.article.index',array(
        //     'articles'=> $articles            
        // ));
    }
}
