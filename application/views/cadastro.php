<!--?php defined('BASEPATH') OR exit('No direct script access allowed'); ?-->
<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Formulário de Cadastro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="/content/css/login/cadastro.css">
</head>
<body>
  <div class="container" >    
    <div class="content">      
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="login">
        <form method="post" action="/Login/save_cad"> 
          <h1>Cadastro</h1>
          <p> 
            <label for="nome_login">Nome</label>
            <input id="nome_login" name="nome_cad" required="required" type="text" autocomplete="off"/>
          </p>
           
          <p> 
            <label for="email_login">Senha</label>
            <input id="senha_login" name="senha_cad" required="required" type="password" autocomplete="off" /> 
          </p>

          <p> 
            <label for="email_login">Email</label>
            <input id="senha_login" name="email_cad" required="required" type="email" autocomplete="off" /> 
          </p>

          <p> 
            <label for="email_login">Numero para Contato</label>
            <input id="senha_login" name="cel_cad" required="required" type="number" autocomplete="off" /> 
          </p>
          <p> 
            <label for="email_login">Data de nascimento</label>
            <input id="senha_login" name="nasc_cad" required="required" type="date" autocomplete="off" /> 
          </p> 
          <p> 
            <input type="submit" value="cadastrar" /> 
          </p>
           Já tem um login? <a href="/Login/fazerLogin">Clique aqui</a>
        </form>
      </div>
 
    </div>
  </div>  
</body>
</html>