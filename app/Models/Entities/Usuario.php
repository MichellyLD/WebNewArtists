<?php

namespace Newartists\Models\Entities;

use Newartists\Core\Entity;

class Usuario extends Entity{
    
    protected ?int $id;
    protected ?string $nome;
    protected ?string $cpf;
    protected ?string $telefone;
    protected ?string $email;
    protected ?string $senha;
    
    public function setSenha($valor)
    {
        $this->senha = password_hash($valor,PASSWORD_DEFAULT);
    }

    public static function getRegras(): array
    {
        return [
            'nome' => 'obrigatorio|maiorque:4',
            'cpf' => 'obrigatorio',
            'telefone' => 'obrigatorio',
            'email' => 'obrigatorio|email',
            'senha' => 'obrigatorio|maiorque:6'
        ];
    }
}
