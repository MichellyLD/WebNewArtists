<?php


function css(string $arquivo) :string
{
    return URL_BASE."public/pastaCss/{$arquivo}.css";
}



function img(string $arquivo) :string
{
    return URL_BASE."public/imgs/{$arquivo}";
}




function componente(string $componente)
{
   require PASTA_VIEW . "componentes/{$componente}.view.php";
}



function linkrota($rota = "")
{
    return URL_BASE . "{$rota}";
}





function redireciona($rota = "")
{
    header("location: " . linkrota($rota));
    die;
}




function flash($mensagem = "", $tipo = "sucesso")
{
    if (!empty($mensagem)) {
        $_SESSION['__mensagem'] = [$mensagem, $tipo];
    } else if (empty($mensagem) && isset($_SESSION['__mensagem']))
    {
        [$mensagem, $tipo] = $_SESSION['__mensagem'];
        echo $mensagem;
        unset($_SESSION['__mensagem']);
    } else {
        return "";
    }
}





function addFormData(array $dados)
{
    $_SESSION['__form'] = $dados;
}





function limparFormData($campo = "")
{
    if($campo == ""){
        unset($_SESSION['__form']);
    }else{
        if( isset($_SESSION['__form'][$campo])){
            unset($_SESSION['__form'][$campo]);
        }
    }
}




function getValue(string $campo)
{
    $form = $_SESSION['__form'] ?? [];
    if(isset($form[$campo])){
        $valor = $form[$campo];
        limparFormData($campo);#
        return $valor;
    }else{
        return "";
    }
}