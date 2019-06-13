<?php
//Inicia a sessão
session_start();

//Verifico se o usuário esta logado, ou seja, se existe a variável de sessão
//autenticado, caso não (!) exista (isset) redireciono (header location) 
//para a pagina de login.

if(!isset($_SESSION ['autenticado'])) {
    header("location: form_login.php");
}

//Caso o usuário clique no link sair, destro a sessão e redireciono para a página
//de login.

if(isset($_GET['sair'])){
   session_destroy();
   header("location: form_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8"/>
     <title>Login</title>
     <link rel="stylesheel" type="text/css" href="css/estilo.php"/>
     </head>
     <body>
           <h1>
              Sou protegido!
              <a href="protegido.php?sair=true">sair</a>
           </h1>
</body>
</html>