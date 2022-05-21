<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form method="post">
        <h4>Formulário</h4>
        <input type="text" name="nome" placeholder= "Nome"><br>
        <input type="text" name="sobrenome" placeholder= "Sobrenome"><br>
        <input type="date" name="nascimento"><br>
    <hr><button type="submit">Enviar</button>
</form>
<?php
       if (isset($_POST['nome'])&& isset($_POST['sobrenome'])&& isset($_POST['nascimento'])) {
        $nome = limpaPost($_POST['nome']);
        $sobrenome = limpaPost($_POST['sobrenome']);
        $nascimento= ($_POST['nascimento']);
       
        echo "<h3>Nome: $nome <hr> Sobrenome: $sobrenome <hr> Data de Nascimento: $nascimento</h3>";
       }

       function limpaPost($valor){
       $valor = trim($valor);
       $valor = stripslashes($valor);
       $valor = htmlspecialchars($valor);
       return $valor;
    }
?>

</body>
</html>