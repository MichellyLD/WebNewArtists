<?php

namespace Newartists\Controllers;

use Newartists\Core\Controller;
use Newartists\Models\Entities\Usuario;

class ObraController extends Controller{
    


    public function NewArtist()
    {
        $dados = ['titulo' => 'NewArtist'];
        $this->view('na',$dados);
    }
    
    public function index()
    {
        $dados = ['titulo' => 'Obra'];
        $this->view('obra',$dados);
    }

    public function Publicar()
    {
        $dados = ['titulo' => 'Publicar'];
        $this->view('publicar',$dados);
    }

    public function Apoiar()
    {
        $dados = ['titulo' => 'Apoiar'];
        $this->view('apoiar',$dados);
    }

    public function Compras()
    {
        $dados = ['titulo' => 'Compras'];
        $this->view('compras',$dados);
    }

    
}