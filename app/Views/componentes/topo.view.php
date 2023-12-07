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