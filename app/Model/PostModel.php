<?php

namespace App\Model;

// use \App\Weblitzer\Model;
use App\Weblitzer\Model as ModelMVC; // alias
use App\App;
use App\Model\UserModel;

// class PostModel extends \App\Weblitzer\Model
// class PostModel extend Model
class PostModel extends ModelMVC
{
    protected static $table = 'post';

    public static function insert($post)
    {
        // var_dump($post);
        // die;
        App::getDatabase()->prepareInsert(
            'INSERT INTO ' . self::$table .  ' (title, content, author) VALUES (?,?,?)',
            [
                $post['titre'],
                $post['contenu'],
                $post['auteur']
            ]
        );
    }
}
