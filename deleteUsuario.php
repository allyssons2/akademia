<?php
    include_once("deleteUsuario.php");
    $p = new deleteUsuario();

    $p->excluircliente($_GET["pid"]);
    echo "usuario excluído";
?>



<?php

    $p = new delete();  
    $delete = $p->deleteUsuario();

    foreach ($lista as $item) {
       echo "
            <tr>
                <td> " . $item["nomeusuario"] . "</td>
                <td> " . $item["email"] . "</td>
                <td> " . $item["dtnascimento"] . "</td>
                <td> " . $item["cidade"] . "</td>
                <td> " . $item["senha"] . "</td>
                <td> <a href='deleteusuario.php?pid=" . $item["idusuario"] .  "'>Excluir</a> </td>
            </tr>";
       
    }



?>



</table>

</section>

</body>
</html>