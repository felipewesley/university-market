<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style type="text/css">
body{
    background-color:#ffffff;
    padding-top: 55px;
    color:rgb(0, 0, 0);
    font-size: 150%;
    font-style:initial;
    font-family: sans-serif;
}
h1{
    color: #3d9db3;
}
div{
    color:black;
    font-size: 70%;
    font-style:initial;
    font-family: sans-serif;
}
a{
    color:black;
    font-size: 15px;
    font-style:initial;
    font-family: sans-serif;
}
.tg  {
    border-collapse:collapse;
    border-spacing:0;
    border-color:#3d9db3;
}
.tg td{
    font-family:Arial, sans-serif;
    font-size:14px;
    padding:10px 5px;
    border-style:solid;
    border-width:1px;
    overflow:hidden;
    word-break:normal;
    border-color:#3d9db3;rgb(61, 157, 179)
    color:#444;
    background-color:#EBF5FF;
}
.tg th
{font-family:Arial, sans-serif;
    font-size:14px;
    font-weight:normal;
    padding:10px 5px;
    border-style:solid;
    border-width:1px;
    overflow:hidden;
    word-break:normal;
    border-color:#9ABAD9;
    color:#fff;
    background-color:#405c60;
}
.tg .tg-0lax{
    text-align:left;
    vertical-align:top
}
.tg .tg-kaf5{
    font-size:12px;
    font-family:"Comic Sans MS", cursive, sans-serif !important;
    ;text-align:left;
    vertical-align:top
}

</style>    
    <title>Document</title>
</head>
<body>
<center>
    <h1>Seus Dados Cadastrais</h1>
        <?php foreach($usuario as $usuario): ?>
    <div id="login">
        <form method="post" action="/Login/conf_login">  
          <p> 
            <label for="nome_login">Seu nome cadastrado</label>
            <input id="nome_login" name="nome_login" required="required" type="text" autocomplete="off" placeholder="<?= $usuario->nome ?>" />
          </p>
           
          <p> 
            <label for="email_login">Sua senha cadastrada</label>
            <input id="senha_login" name="senha_login" required="required" type="password" autocomplete="off" placeholder="<?= $usuario->senha ?>" /> 
          </p> 
        </form>
         <?php endforeach; ?>
      </div>
    </center>
</body>
</html>