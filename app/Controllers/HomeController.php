<?php

namespace Newartists\Controllers;

use Newartists\Core\Controller;
use Newartists\Models\DAO\UsuariosDAO;
use Newartists\models\Entities\Usuario;

class HomeController extends Controller{
    

    public function index()
    {
        $dados = ['titulo' => 'New Artists'];
        $this->view('inicial',$dados);
    }

}