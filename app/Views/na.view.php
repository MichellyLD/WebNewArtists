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
</head>
<body>
    <header>
        <img id="logo" src="<?=img("NewArtists.png")?>">
             
        <div class="buscar">
            <input type="search" id="txtBusca" placeholder="Pesquisar...">
            <img src="<?=img("lupa.png")?>"id="btnBusca" alt="Buscar">
        </div>
             
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
                <li><a href="#">Usuário</a></li>
                <li><a href="#">Notificações</a></li>
                <li><a href="#">Carrinho</a></li>
                <li><a href="#">Favoritos</a></li>
                <li><a href="#">Chat</a></li>
                <li><a href="<?=("publicar")?>">Publicar</a></li>
            </ul>
        </nav>
    </div>

    <main class="main1">
        
        <div id="blocoo">
            <h2>Mangás</h2>
            <div class="destaque">
                <div class="obras">
                   <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=17"><img src="<?=img("henshin.jpg")?>"></a>
                            </div>
                            <h3>Henshin</h3>
                            <h3>R$ 24,99</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=14"><img src="<?=img("tokyoghoul.jpg")?>"></a>
                            </div>
                            <h3>Tokyo Ghoul</h3>
                            <h3>R$ 20,00</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=7"><img src="<?=img("eassimqueacaba.jpg")?>"></a>
                            </div>
                            <h3>É Assim Que Acaba</h3>
                            <h3>R$ 50,00</h3>
                    </div>
                    <div class="obra">
                        <div id="imagemObra">
                            <a href="<?=("obras")?>?i=28"><img src="<?=img("YourNameEdicaoUnica.jpg")?>"></a>
                            <h3>Your Name Edição Única</h3>
                            <h3>R$ 50,85</h3>
                        </div>
                    </div>
                    <div class="obra">
                        <div id="imagemObra">
                           <a href="<?=("obras")?>?i=29"><img src="<?=img("DemonSlayer.jpg")?>"></a>
                            <h3>Demon Slayer</h3>
                           <h3>R$ 71,55</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
       
        <div id="blocoo">
            <h2>Poemas</h2>
            <div class="destaque">
                <div class="obras">
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=11"><img src="<?=img("ovelhoeaflor.jpg")?>"></a>
                            </div>
                            <h3>O Velho E A Flor</h3>
                            <h3>R$ 5,00</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=11"><img src="<?=img("mirantedoleblon.jpg")?>"></a>
                            </div>
                            <h3>Mirante Do Leblom</h3>
                            <h3>R$ 5,00</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=9"><img src="<?=img("elatem.jpg")?>"></a>
                            </div>
                            <h3>Ela Tem</h3>
                            <h3>R$ 19,00</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=23"><img src="<?=img("Manfredo.jpg")?>"></a>
                            </div>
                            <h3>Manfredo</h3>
                            <h3>R$ 25,00</h3>
                    </div>
                </div>
            </div>
        </div>
       
        <div id="blocoo">
            <h2>Desenhos</h2>
            <div class="destaque">
                <div class="obras">
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=0"><img src="<?=img("tartaglia.jpg")?>"></a>
                            </div>
                            <h3>Genshin Impact</h3>
                            <h3>R$ 150,00</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=4"><img src="<?=img("leao.jpg")?>"></a>
                            </div>
                            <h3>Feroz</h3>
                            <h3>R$ 200,00</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=5"><img src="<?=img("olhar.jpg")?>"></a>
                            </div>
                            <h3>Olhar</h3>
                            <h3>R$ 78,00</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=26"><img src="<?=img("Olhochorando.jpg")?>"></a>
                            </div>
                            <h3>Olho Chorando</h3>
                            <h3>R$ 16,99</h3>
                </div>
                </div>
            </div>
        </div>
       
        <div id="blocoo">
            <h2>Livros</h2>
            <div class="destaque">
                <div class="obras">
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=2"><img src="<?=img("falascurtas.jpg")?>"></a>
                            </div>
                            <h3>Falas Curtas</h3>
                            <h3>R$ 30,00</h3>
                    </div>
                    <div class="obra">

                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=8"><img src="<?=img("queridocoracao.jpg")?>"></a>
                            </div>
                            <h3>Querido Coração</h3>
                            <h3>R$ 35,00</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=18"><img src="<?=img("rainhavermelha.jpg")?>"></a>
                            </div>
                            <h3>A Rainha Vermelha</h3>
                            <h3>R$ 48,00</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=19"><img src="<?=img("Orgulhoepreconceito.jpg")?>"></a>
                            </div>
                            <h3>Orgulho e Preconceito</h3>
                            <h3>R$ 64,60</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=22"><img src="<?=img("Asfloresdomal.jpg")?>"></a>
                            </div>
                            <h3>As flores do mal</h3>
                            <h3>R$ 90,88</h3>
                    </div>
                </div>
            </div>
        </div>
       
        <div id="blocoo">
            <h2>Pinturas</h2>
            <div class="destaque">
                <div class="obras">
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=20"><img src="<?=img("A noite Estrelada.jpg")?>"></a>
                            </div>
                            <h3>A noite Estrelada</h3>
                            <h3>R$ 74,60</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=21"><img src="<?=img("Garimpo.jpg")?>"></a>
                            </div>
                            <h3>Garimpo</h3>
                            <h3>R$ 141,60</h3>
                    </div>
                    <div class="obra">

                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=10"><img src="<?=img("asmeninas.jpg")?>"></a>
                            </div>
                            <h3>As Meninas</h3>
                            <h3>R$ 60,00</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=3"><img src="<?=img("osol.jpg")?>"></a>
                            </div>
                            <h3>O Sol</h3>
                            <h3>R$ 120,00</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=0"><img src="<?=img("tartaglia.jpg")?>"></a>
                            </div>
                            <h3>Genshin Impact</h3>
                            <h3>R$ 150,00</h3>
                    </div>
                </div>
            </div>
        </div>
       
        <div id="blocoo">
            <h2>Comics</h2>
            <div class="destaque">
                <div class="obras">
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=25"><img src="<?=img("OrigemII.jpg")?>"></a>
                            </div>
                            <h3>Origem II</h3>
                            <h3>R$ 40,99</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=24"><img src="<?=img("Berlinoir.jpg")?>"></a>
                            </div>
                            <h3>Berlinoir</h3>
                            <h3>R$ 70,88</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=16"><img src="<?=img("chew.jpg")?>"></a>
                            </div>
                            <h3>Chew</h3>
                            <h3>R$ 88,79</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=15"><img src="<?=img("twd.jpg")?>"></a>
                            </div>
                            <h3>The Walking Dead</h3>
                            <h3>R$ 75,99</h3>
                    </div>
                    <div class="obra">
                            <div id="imagemObra">
                                <a href="<?=("obras")?>?i=1"><img src="<?=img("ldj.jpg")?>"></a>
                            </div>
                            <h3>Liga Da Justiça</h3>
                            <h3>R$ 99,99</h3>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php componente('rodape')?>