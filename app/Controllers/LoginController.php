<?php

namespace Newartists\Controllers;

use Newartists\Core\Controller;
use Newartists\Core\Validator;
use Newartists\Models\DAO\UsuariosDAO;
use Newartists\Models\Entities\Usuario;



class LoginController extends Controller{
    


    public function login()
    {
        $this->view('login',['pagina' => "LOGIN"]);
    }
    


    public function criarconta()
    {
        $this->view('conta');
    }
    


    public function cadastrarconta()
    {
        $houveerro = Validator::execute(Usuario::getRegras(), $this->post());
        
        if ($houveerro) {
            addFormData($this->post());
            flash(Validator::getListaErros(), 'erro');
        }

        $usuario = new Usuario($this->post());

        if (UsuariosDAO::inserir($usuario)) {
            flash("Usuário {$usuario->nome} foi cadastrado com sucesso!");
            redireciona('login');
        }
    }
}