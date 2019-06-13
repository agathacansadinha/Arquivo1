<?php 
session_start();
//Pegando o usuário e senha digitados:
$usuario_digitado = $_REQUEST['usuario'];
$senha_digitada = $_REQUEST['senha'];

//Definindo quais são os usuário e senha corretos:
$usuario="aluno";
$senha="123";

//Comparando o certo com o digitado
if($usuario_digitado == $usuario && $senha_digitada == $senha){
    $_SESSION['autenticado'] =true;
    header("location: protegido.php");
} else{
//Caso o usuário ou senha estejam, qualquer um do dois
//incorretos, ele é redirecionado para a página d login 
//novamente. Também será exibida uma mensagem de usuário 
//e senha inválidos.
    header("location: form_login.php?erro=1");
}

?>