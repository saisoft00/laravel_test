<?php
namespace App\Http\Controllers;

class PagesController extends BaseController{

    
    public function welcome(){
        
        return View::make('welcome');

    }
    public function saida(){
        
        return View::make('saida');

    }



}




?>

