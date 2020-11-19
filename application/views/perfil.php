
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/content/css/login/perfil.css">
    <title>Perfil</title>
</head>
<body>

     
        <p class="h3">Seus Dados Cadastrais</p>
        <div class="container-main">
            <?php foreach($usuario as $data): ?>
                <form method="post" action="/Login/update_cad"> 
                <div class="form-group">
                <label for="nome">
                    <p class="h5">Nome:</p>
                </label>
                <input type="name" class="form-control" name="nome_atualizar"  disabled placeholder=<?= $data->nome?>>
                
                </div>
                <div class="form-group">
                <label for="senha">
                     <p class="h5">Senha:</p>
                </label>
                <input type="password" class="form-control" name="senha_atualizar"  placeholder=<?= $data->senha?>>
                </div>
                <div class="form-group">
                <label for="nome">
                    <p class="h5">Email:</p>
                </label>
                <input type="name" class="form-control" name="email_atualizar" placeholder=<?= $data->email?>>
                
                </div>
                <div class="form-group">
                <label for="nome">
                    <p class="h5">Telefone:</p>
                </label>
                <input type="number" class="form-control" name="telefone_atualizar" placeholder=<?= $data->telefone?>>
                
                </div>
                <div class="form-group">
                <label for="nome">
                    <p class="h5">Data de nascimento:</p>
                </label>
                <input type="name" class="form-control" name="nascimento_atualizar" disabled placeholder=<?= $data->nascimento?>>
                
                </div>
                <button type="submit" class="btn btn-primary" >Atualizar</button>
                </form>
            <?php endforeach; ?>
        </div>
  
</body>
</html>