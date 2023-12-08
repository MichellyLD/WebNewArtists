<?php

namespace Newartists\Controllers;

use Newartists\Core\Controller;
use Newartists\Models\DAO\UsuariosDAO;
#use Newartists\Models\Entities\Usuario;
use Newartists\Core\Usuario;

class TesteController extends Controller
{
    public function teste()
    {
        $usuario = new Usuario();
        $usuario->nome = "Mariana";
        $usuario->cpf = "99900099900";
        $usuario->telefone = "77888888888";
        $usuario->email = "mariana@email.com";
        $usuario->senha = "mari22";
        
       
       UsuariosDAO::inserir( $usuario );
    }
    
    public function teste2()
    {
        
        $usuario = UsuariosDAO::getAll();
        
        foreach($usuarios as $usuario){
            echo $usuario->nome;
            echo "<hr>";
        }
    }
    
    public function teste3()
    {
        
        $usuario = UsuariosDAO::getById(10);
        echo "<pre>";
        var_dump($usuario);
    }
    
    public function teste4()
    {
        
        $usuario = UsuariosDAO::getById(7);
        
        $usuario->nome = "Jamille";
        $usuario->email = "jamille@gmail.com";
        $usuario->senha = "jam22";
        
        UsuariosDAO::editar($usuario);
        
        echo "<pre";
        var_dump($usuario);
    }
    
    public function teste5()
    {
        
        $usuario = UsuariosDAO::getById(23);
        
        if($usuario){
            UsuariosDAO::excluir($usuario);
            echo "Usuário excluído com sucesso!";
        }else {
            echo "Usuário não existe";
        }
    }
    
    public function teste6()
    {
        $usuario = new Usuario(
            [
                'nome' => 'Julia',
                'cpf' => '99933399933',
                'telefone' => '77888882222',
                'email' => 'julia@gmail.com',
                'senha' => '1234'
            ]
        );   
       
        echo "<pre>";
        var_dump($usuario->getProps());
    }
}