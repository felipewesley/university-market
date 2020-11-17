
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
<center>
    <h1>Seus Dados Cadastrais</h1>
         <?php foreach($usuario as $data): ?>
            <form>
                Nome<input type="email" size="12" class="form-control" id="nome" readonly="true" placeholder=<?= $data->nome?> >
                Senha <input type="password" class="form-control" readonly="true" id="senha" placeholder=<?= $data->senha?>>
                email<input type="email" size="12" class="form-control" id="nome" readonly="true" placeholder=<?= $data->email?> >
                celular<input type="password" class="form-control" readonly="true" id="senha" placeholder=<?= $data->telefone?>>
                data nascimento<input type="password" class="form-control" readonly="true" id="senha" placeholder=<?= $data->nascimento?>>
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </form>
         <?php endforeach; ?>
    </center>
</body>
</html>