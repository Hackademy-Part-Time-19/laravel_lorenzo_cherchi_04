<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articles = [
        ['title' => 'Articolo 1', 'category' => 'categoria test 1', 'description' => 'descrizione test 1'],
        ['title' => 'Articolo 2', 'category' => 'categoria test 2', 'description' => 'descrizione test 2'],
        ['title' => 'Articolo 3', 'category' => 'categoria test 3', 'description' => 'descrizione test 3'],
        ['title' => 'Articolo 4', 'category' => 'categoria test 1', 'description' => 'descrizione test 4']
    ];


    public function index()
    {

        return view('articles/articles', ['articoli' => $this->articles, 'titolo' => 'titolo test']);
    }


    public  function show($id)
    {

        return view('/article/article', ['articolo' => $this->articles[$id]]);
    }
}
