<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\PostModel;
use App\Model\UserModel;
use App\Service\Form;
use App\Service\Validation;

/**
 *
 */
class ArticleController extends Controller
{

    public function index()
    {
        $articles = PostModel::allOrder('DESC');
        $user = new UserModel;
        $nombre = PostModel::count($articles);

        $this->render('app.articles.index', [
            'articles' => $articles,
            'user' => $user,
            'nombre' => $nombre
        ]);
    }

    public function add()
    {
        $errors = [];

        // Test de validation du formulaire
        if (!empty($_POST['submitted'])) :

            $postArticle = $this->cleanXss(($_POST));

            $validerArticle = new Validation;

            $errors['titre'] = $validerArticle->textValid($postArticle['titre'], 'titre', 5, 100);
            $errors['contenu'] = $validerArticle->textValid($postArticle['contenu'], 'contenu', 10, 2000);
            // $errors['auteur'] =

            if ($validerArticle->IsValid($errors)) :
                // Insertion des données du formulaire en base de données
                PostModel::insert($postArticle);
                $this->redirect('articles');
            endif;

        endif;

        $formAdd = new Form($errors);
        $users = UserModel::all();

        $this->render('app.articles.addArticle', [
            'formAdd' => $formAdd,
            'users' => $users
        ]);
    }

    public function edit($id)
    {
        $articleEdit = $this->isArticleExist($id);
        $errors = [];

        // Test de validation du formulaire
        if (!empty($_POST['submitted'])) :

            $postArticleEdit = $this->cleanXss(($_POST));

            $validerArticleEdit = new Validation;

            $errors['titre'] = $validerArticleEdit->textValid($postArticleEdit['titre'], 'titre', 5, 100);
            $errors['contenu'] = $validerArticleEdit->textValid($postArticleEdit['contenu'], 'contenu', 10, 2000);
            // $errors['auteur'] =

            if ($validerArticleEdit->IsValid($errors)) :
                // Insertion des données du formulaire en base de données
                PostModel::update($postArticleEdit, $id);
                $this->redirect('articles');
            endif;

        endif;

        $formAddEdit = new Form($errors);

        $this->render('app.articles.editArticle', [
            'formAddEdit' => $formAddEdit,
            'articleEdit' => $articleEdit
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
