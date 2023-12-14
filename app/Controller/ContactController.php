<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class ContactController extends Controller
{

    public function index()
    {
        $titreContact = 'Bienvenue sur la page contact';

        $persons = [
            'nom' => 'Onizuka',
            'prenom' => 'Eikichi',
            'age' => 22
        ];

        $this->render('app.contact.index',[
            'titrePage' => $titreContact,
            'persons' => $persons
        ]);
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
