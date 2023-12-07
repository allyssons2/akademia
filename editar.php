<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

$p = new editar();  
$listar = $p->ListarUsuario();

foreach ($lista as $item) {
   echo "
        <tr>
            <td> " . $item["nomeusuario"] . "</td>
            <td> " . $item["email"] . "</td>
            <td> " . $item["dtnascimento"] . "</td>
            <td> " . $item["cidade"] . "</td>
            <td> " . $item["senha"] . "</td>
            <td> <a href='inserirusuario.php?pid=" . $item["idusuario"] .  "'>Excluir</a> </td>
            <td> <a href='deleteusuario.php?pid=" . $item["idusuario"] .  "'>Excluir</a> </td>
        </tr>";
   
}



?>


<form method="POST">

<label>Nome:</label>
<input type="text" name="nome" minlength="3"  .$p-> getnome() required><br><br>

<label>Email:</label>
<input type="text" name="email" minlength="3" required><br><br>

<label>Dtnascimento:</label>
<input type="text" name="dtnascimento" minlength="3" required><br><br>

<label>Cidade:</label>
<input type="text" name="cidade" minlength="3" required><br><br>

<label>Senha:</label>
<input type="text" name="senha" minlength="3" required><br><br>

<input type="submit" name="inserir" value="Cadastrar">

<input type="submit" name="inserir" value="atualizar">
