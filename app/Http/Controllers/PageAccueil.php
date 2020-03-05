<?php


namespace App\Http\Controllers;


class PageAccueil
{

    public function index(){
        $title = "Accueil";
        return view ('default' , ['title' => $title]);
    }

}
