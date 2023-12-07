<?php
     include_once("cadastro.php");
?>

        <?php

            if ( isset($_REQUEST["listar"]) ) //evitar que o procedimento seja executado sem apertar o botão
            {
                $p = new usuario(); //criar objeto da classe Produto
                $p->create($_REQUEST["nome"], $_REQUEST["email"], $_REQUEST["dtnascimento"], $_REQUEST["cidade"], $_REQUEST["senha"]);  
                echo $p->listarusuario() == true ?
                        "<p>listar usuario.</p>" :
                        "<p>Ocorreu um erro.</p>";
            }
        ?>

    </form>

    <section class="listar">

            <table>
                <tr>
                    <th>Nome</th>
                    <th>email</th>
                    <th>dtnascimento</th>
                    <th>cidade</th>
                    <th>senha</th>
                </tr>

            <?php

                $p = new cadastro();  
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

            </table>

    </section>
    
</body>
</html>