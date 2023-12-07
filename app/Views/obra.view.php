<?php
    namespace Newartists\Obras;
    #$obras = include "../../../5NA/obras.php";
    $obras = include "obras.php";

    if(isset($_GET["i"])){
        $i = $_GET["i"];
        $f = $obras[$i];
    }else{
        header("location: index.php");
        die;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewArtists</title>
    <link rel="stylesheet" href="<?=css('estilo')?>">
</head>
<body>
    <header>
        <img id="logo" src="<?=img("NewArtists.png")?>">

        <ul id="opcoes">
          <li><a href="index.php">Início</a></li>
          <li><a href="<?=("NewArtist")?>">Obras</a></li>
          <li><a href="">Perguntas</a></li>
          <li><a href="">Sobre nós</a></li>

        </ul>

        <div id="login">
          <a href="<?=("login")?>"><button>Login</button></a>
        </div>
  </header>


    <div id="lateral">
        <input type="checkbox" id="chec">
            <label for="chec">
                <img src="<?=img("more.png")?>">
            </label>
        <nav>
            <ul>
                <li><a href="#">Usuário</a></li>
                <li><a href="#">Notificações</a></li>
                <li><a href="#">Carrinho</a></li>
                <li><a href="#">Favoritos</a></li>
                <li><a href="#">Chat</a></li>
                <li><a href="<?=("publicar")?>">Publicar</a></li>
            </ul>
        </nav>
    </div>


    <main class="main2">
        <div class="obra2">
            <div class="foto">
                <img src="<?=img($f["foto"])?>" alt="<?=$f["nome"]?>" >
            </div>
            <div class="info">
                <div class="info2">
                    <h3 class="nome"><?=$f["nome"]?></h3>
                    <h4><?=$f["valor"]?></h4>
                    <p><?=$f["descricao"]?></p>
                </div>
                
                <div class="botoes">
                    <div id="botao">
                        <a href="<?=("compras")?>"><button>Comprar</button></a>
                    </div>
                    <div id="botao">
                        <a href="<?=("apoiar")?>"><button>Apoiar Artista</button></a>
                    </div>
                </div>
            </div>
         </div>
        <div class="autor1">
            <div class="autor2">
                <img src="<?=img($f["fotoartista"])?>">
                <h4><?=$f["artista"]?></h4>
            </div>
            <div class="sobre">
                <h4><?=$f["sobre"]?></h4>
            </div>
           
            
        </div>
       
        
       
    </main>
<?php componente('rodape')?>