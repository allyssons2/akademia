<?php
    include_once('./class/Usuario.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">

    <title>Akademia</title>
</head>
<body>
    <?php
        include_once('./components/header.php');
    ?>

    <main class="modalidadeFundo">
        <div class="tela-modalidades">
            <h2>Nossas modalidades</h2>
            <div class="cartoes">

            <?php
            include_once("class/Modalidade.php");
            $modalidade = new Modalidade();

                $lista = $modalidade->buscarModalidade();

                if ($lista != 0)
                {
                
                    foreach($lista as $i)
                    {
                        $imagem = $i["imagem"];
                        $nome = $i["nome"];
                        $descricao = $i["descricao"];
                        
                        echo "
                        <article class='cartao'>
                            <div class='cartao-interno'>
                                <img src='$imagem' alt='$nome'>
                                <span>$nome</span> 
                            </div>
                            <div class='cartao-texto'>
                            <p>$descricao</p>
                            </div>
                        </article>
                        ";
                    }
                }
            ?>
            </div>
        </div>
    </main>

    <?php
        include_once('./components/footer.php');
    ?>
</body>
</html>