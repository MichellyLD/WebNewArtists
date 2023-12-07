<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewArtists</title>
    <link rel="stylesheet" href="<?=css('estiloPublicar')?>">
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

    <main class="main4"><form class="publicar" method="POST" action="" enctype="multipart/form-data">
            <div id="formulario">
            <div id="topPub">
                <div id=topo>
                    <button >Salvar</button>
                    <input type="submit" value="Enviar Formulário">
                    <button id="res" type="reset"><img src="<?=img("x.jpg")?>"></button>
                </div>
            </div>


            <div id="latPub">
                <div id="Arquivo">
                    <input type="file" name="arquivo" id="imagem"><br>
                </div>


                <nav>

                    <p>Titulo:<input type="text" name="descrição"> <br></p>
                    <p>Descrição:</p><textarea></textarea>

                    <div id="hastags">
                        <p>Em que sua obra se enquadra?</p>
                        <input type="radio" name="hastag" value="">Livro <t>
                        <input  type="radio" name="hastag" value="">Poema <br>
                        <input  type="radio" name="hastag" value="">Mangá <t>
                        <input  type="radio" name="hastag" value="">Desenho <br>
                        <input  type="radio" name="hastag" value="">Comic <t>
                        <input  type="radio" name="hastag" value="">Pintura <t>
                        <input  type="radio" name="hastag" value="">Outro: <input type="text" name="hastag" value=""> <br>

                    </div>
                </nav>
            </div>
            <div id="Inserirpreco">
                Preço:<input type="number" name="preço" step=0.5>
            </div>

        </form></div></main>
<?php componente('rodape')?>