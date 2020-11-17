
<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Formulário de Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="/content/css/login/login.css">
</head>
<body>
  <div class="container" >

    <?php if($this->session->flashdata('success')) :?>
        <p ><?= $this->session->flashdata('success')?></p>
      <?php endif ?>
  
      <?php if($this->session->flashdata('danger')) :?>
        <p><?= $this->session->flashdata('danger')?></p>
      <?php endif ?>
    <div class="content"> 
      

      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action="/Login/conf_login"> 

          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Seu nome</label>
            <input id="nome_login" name="nome_login" required="required" type="text" autocomplete="off"/>
          </p>
           
          <p> 
            <label for="email_login">Sua senha</label>
            <input id="senha_login" name="senha_login" required="required" type="password" autocomplete="off"/> 
          </p> 
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
          Não tem login? <a href="/Login/fazerCad">Clique aqui</a>
          <a href="/Login/Perfil">.</a>
        </form>
      </div>
 
    </div>
  </div>  
</body>
</html>