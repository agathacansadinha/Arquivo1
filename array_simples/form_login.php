<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8"/>
     <title> Login </title>
     <link href="stylesheet" type="text/css" href="css/estilo" />
</head>
<body>
     <fieldset>
     <legend> Login </legend>
    <?php if(isset($_GET['erro'])):?>
    <p> usuario/senha incorretos</p>
    <?php endif?>
    <form method="post" action="autenticar.php">
     <Label> Usuário:
     <input name="usuario" type="text"/>
     </label>
     <Label> Senha: 
     <input name="senha" type="password"/>
     </label>
     <BUTTON TYPE="submit">Logar</button>
</form>
    </fieldset>
    </body>
    </html>