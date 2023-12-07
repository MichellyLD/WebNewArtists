<?php
    use Newartists\Obras;
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewArtists</title>
    <link rel="stylesheet" href="<?=css('estilo')?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@300&display=swap" rel="stylesheet">
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
            <label for="chec" id="label1">
                <img src="<?=img("more.png")?>">
            </label>
        <nav>
            <ul>
                <li><a href="<?=("login")?>">Usuário</a></li>
                <li><a href="#">Notificações</a></li>
                <li><a href="#">Carrinho</a></li>
                <li><a href="#">Favoritos</a></li>
                <li><a href="#">Chat</a></li>
                <li><a href="<?=("publicar")?>">Publicar</a></li>
            </ul>
        </nav>
    </div>


  <main>
    <div class="nossosite">
      <img class="logosite" src="<?=img("nA.png")?>">

      <div class="texto">
        <p>Bem-vindo! A NewArtists é uma Editora Virtual em que artistas podem publicar suas obras, como: poemas, pinturas, livros, e vendê-las por meio da sua estante virtual. E usuários interessados nas obras, podem comprá-las, além de poder contribuir com o artista com qualquer valor por meio de uma aba chamada "Apoiar Artista".
        </p>
      </div>
    </div>

  </main>
    <main class="main1">
      <h3>
        Publique suas obras ou compre e apoie seu artista favorito!
      </h3>
       
        <div id="blocoo">
        <h2>Obras em Destaque</h2>
        <div class="destaque">
            <div class="obras">
       
                <div class="obra">
                    <div id="imagemObra">
                        <a href="./obras?i=1"><img src="<?=img("tartaglia.jpg")?>"></a>
                    </div>
                    <h3>Genshin Impact</h3>
                    <h3>R$ 150,00</h3>
                </div>

                <div class="obra">
                    <div id="imagemObra">
                        <a href="./obras?i=4"><img src="<?=img("leao.jpg")?>"></a>
                    </div>
                    <h3>Feroz</h3>
                    <h3>R$ 200,00</h3>
                </div>

                <div class="obra">
                    <div id="imagemObra">
                        <a href="./obras?i=7"><img src="<?=img("eassimqueacaba.jpg")?>"></a>
                    </div>
                    <h3>É Assim Que Acaba</h3>
                    <h3>R$ 50,00</h3>
                </div>

                <div class="obra">
                    <div id="imagemObra">
                        <a href="./obras?i=13"><img src="<?=img("HxH.jpg")?>"></a>
                    </div>
                    <h3>Hunter X Hunter</h3>
                    <h3>R$ 25,00</h3>
                </div>

                <div class="obra">
                    <div id="imagemObra">
                        <a href="./obras?i=16"><img src="<?=img("chew.jpg")?>"></a>
                    </div>
                    <h3>Chew</h3>
                    <h3>R$ 88,79</h3>
                </div>

            </div>
        </div>
        </div>
           
    <div class="artistasdestaques">
        <h2>Artistas do Mês</h2>
        <div class="artistas">
            <div class="artista">
                <div class="art">
                    <img src="<?=img("artista17.jpg")?>">
                    <h3>John Layman</h3>
                </div>
                <div class="art">
                    <img src="<?=img("artista13.jpg")?>">
                    <h3>Vinícius de Moraes</h3>
                </div>
                <div class="art">
                    <img src="<?=img("artista9.jpg")?>">
                    <h3>Pedro Salomão</h3>
                </div>
                <div class="art">
                    <img src="<?=img("artista12.jpg")?>">
                    <h3>Marta Chadd</h3>
                </div>
                <div class="art">
                    <img src="<?=img("artista11.jpg")?>">
                    <h3>Miguel Abrantes</h3>
                </div>
                    <div class="art">
                    <img src="<?=img("artista2.jpg")?>">
                    <h3>Gardner Fox</h3>
                </div>
                <div class="art">
                    <img src="<?=img("artista3.jpg")?>">
                    <h3>Anne Carson</h3>
                </div>
                <div class="art">
                    <img src="<?=img("artista4.jpg")?>">
                    <h3>Felipe Amorim</h3>
                </div>
                <div class="art">
                    <img src="<?=img("artista5.jpg")?>">
                    <h3>Marta Menegi</h3>
                </div>
                <div class="art">
                    <img src="<?=img("artista7.jpg")?>">
                    <h3>Thiago Santos</h3>
                </div>
                    <div class="art">
                    <img src="<?=img("artista6.jpg")?>">
                    <h3>Maria Caires</h3>
                </div>
                <div class="art">
                    <img src="<?=img("artista8.jpg")?>">
                    <h3>Colleen Hoover</h3>
                </div>
            </div>
        </div>
    </div>
    </main>
   
<?php componente('rodape')?> 
    