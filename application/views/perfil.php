
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/content/css/login/perfil.css">
    <title>Document</title>
</head>
<body>
<center>
    <h1>Seus Dados Cadastrais</h1>
    <div class="container-fluid">
        <h3><?php $this->session->userdata('username'); ?></h3>
    </div>
    </center>
</body>
</html>