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
        <div class="nossosite">
        <img class="logosite" src="<?=img("nA.png")?>">

        <div class="login">
            <div class="compras">
            <div class="divtexto"><h3>Informe seus dados:</h3></div>
               
                <form id="log" action="" method="POST">
                    <div class="dentro">
                        <label class="label">Nome completo:
                            <input type="name" size="20" name="name"  required>
                        </label>

                        <label class="label">Senha:
                            <input type="password" size="19" maxlength="19" />
                        </label>
                        
                        <label class="label">Celular:
                            <input type="" size="10" name="celular" />
                        </label>
                        
                        <label class="label">Cpf:
                            <input type="" size="11" name="cpf" />
                        </label>
                        <label class="label">Cep:
                            <input type="" size="8" name="cep" />
                        </label>
                    </div>

                        <div class="divbotao">
                            <a href=""><button>Finalizar</button></a>
                        </div>
                        <a href="<?=("NewArtist")?>">Cancelar</a>
                </form>
                </div>
        </div>
    </main>
</body>
</html>