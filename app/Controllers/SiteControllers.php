<?php
/**
 * Created by PhpStorm.
 * User: ÁàéíàçàğÑ
 * Date: 18.02.2020
 * Time: 17:37
 */

namespace Controllers;


use Core\_Apstracts\Controller;
use Models\Books;

class SiteControllers extends Controller
{
    function index(){
        Books::insert([
            'name' => 'Test book'
        ]);
        return $this->render('index');
    }
}