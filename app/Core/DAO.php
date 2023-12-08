<?php

namespace Newartists\Core;

abstract class DAO
{

    protected static string $tabela = "";
    protected static string $classe = \stdClass::class;
    
    

    public static function inserir(Entity $entidade)
{
    $db = new Database;
    $tabela = static::$tabela;
    $sql = "INSERT INTO {$tabela}";

    $campos = [];
    $coringas = [];
    $dados = [];
    $mapeamento = [
        'nome' => 'nome',
        'cpf' => 'cpf',
        'telefone' => 'telefone',
        'email' => 'email',
        'senha' => 'senha',
        // Adicione outros campos conforme necessário
    ];

    foreach ($mapeamento as $propriedadeEntidade => $colunaBanco) {
        $valor = $entidade->$propriedadeEntidade;

        if ($valor !== null) {
            array_push($campos, $colunaBanco);
            array_push($dados, $valor);
            array_push($coringas, '?');
        }
    }

    $campos = implode(',', $campos);
    $coringas = implode(',', $coringas);
    $sql .= " ({$campos}) VALUES ({$coringas})";

    return $db->execute($sql, $dados);
}
    



    
    public static function getAll()
    {
        $db = new Database;
        $tabela = static::$tabela;
        $sql = "SELECT * FROM {$tabela}";
        $db->execute($sql);
        
        return $db->getAll(static::$classe );
    }
    




    public static function getById($id)
    {
        $db = new Database;
        $tabela = static::$tabela;
        $sql = "SELECT * FROM {$tabela} WHERE id = ?";
        
        $db->execute($sql,[$id]);
        
        return $db->get(static::$classe);
    }
    





    public static function excluir(Entity $entidade)
    {
        $db = new Database;
        $tabela = static::$tabela;
        $sql = "DELETE FROM {$tabela} WHERE id = ?";
        
        return $db->execute($sql,[$entidade->id]);
    }
}