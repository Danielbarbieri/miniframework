<?php


namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action{
    

    public function __construct()
    {
        $this->view = new \stdClass();
    }
    public function index()
    {
        $this->view->dados = array('Sofa', 'cadeira', 'cama');
        $this->render('index');
    }

    public function sobreNos()
    {
        $this->view->dados = array('Notebook', 'Smartphone', 'Tv Smart');
        $this->render('sobreNos');
    }

    
}



?>