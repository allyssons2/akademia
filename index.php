
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/estilo.css" rel="stylesheet">
</head>
<body>

    <h1>Cadastro</h1>
 

    <form method="POST">

        <label>Nome:</label>
        <input type="text" placeholder="Informe seu nome completo" name="nome" minlength="3" required><br><br>

        <label>Email:</label>
        <input type="text" placeholder="Informe seu e-email" minlength="3" required><br><br>

        <label>Dtnascimento:</label>
        <input type="text" placeholder="Informe sua data de nascimento" minlength="3" required><br><br>

        <label>Cidade:</label>
        <input type="text" placeholder ="Informe sua cidade" minlength="3" required><br><br>

        <label>Senha:</label>
        <input type="text" placeholder="Informe uma senha com 8 caracteres ou mais" minlength="3" required><br><br>

        <label>Senha:</label>
        <input type="text" placeholder="Repita a senha" minlength="3" required><br><br>

        <input type="submit" name="inserir" value="Cadastrar">

        
                        
<!-- 
        <?php

            if (isset($_REQUEST["Cadastrar"])) 
            {
                include_once("class/cadastrar.php");

                $p = new cadastrar(); 
                $p->create($_REQUEST["nome"], $_REQUEST["email"], $_REQUEST["dtnascimento"], $_REQUEST["cidade"], $_REQUEST["senha"]);  
                
                echo $p->cadastrar() == true ? "<p>Usuário cadastrado.</p>" : "<p>Ocorreu um erro.</p>";
            }
        ?> -->

    </form>
    
</body>
</html>