<?php

namespace Newartists\Models\DAO;

use Newartists\Core\DAO;
use Newartists\Models\Entities\Usuario;

class UsuariosDAO extends DAO{
    
    protected static string $tabela = "usuarios";
    protected static string $classe = Usuario::class;

}