<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewArtists</title>
    <link rel="stylesheet" href="<?=css('loginregistro')?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <a href="index.php"><img id="logo" src="<?=img("NewArtists.png")?>"></a>
      <a href="">Precisa de ajuda?</a>
    </header>
<main>
    <?flash()?>
    <div class="nossosite">
        <img class="logosite" src="<?=img("nA.png")?>">  
        <div class="login">

            <div class="divtexto"><h3>Informe seus dados:</h3></div>
            <form id="log" action="<?=linkrota('cadastrarconta')?>" method="POST">
                <div class="dentro">
                    <label class="label">Nome:
                        <input type="name" size="20" name="nome"  value="<?=getValue('nome')?>">
                    </label>

                    <label class="label">CPF:
                        <input type="name" size="20" name="nome"  value="<?=getValue('cpf')?>">
                    </label>

                    <label for="telefone">Telefone
                        <input type="tel" id="telefone" size="20"  value="<?=getValue('telefone')?>">
                    </label>

                    <label class="label">Email:
                        <input type="email" size="20" name="email"  value="<?=getValue('email')?>">
                    </label>

                    <label class="label">Senha:
                        <input type="password" size="20" maxlength="19">
                    </label>
                </div>

                <div class="divbotao">
                    <a href=""><button> Registrar </button></a>
                </div>
                    <a href="<?=("login")?>">Já possui uma conta? Entre agora!</a>
            </form>
        </div>
    </div>
</main>