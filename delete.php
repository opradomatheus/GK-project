<?php
        include_once("conectar.php");

        $id = $_GET["idhistoricos"];

        $deletar = $pdo->prepare("DELETE FROM historicos WHERE idhistoricos=$id");
        $deletar->execute();

        if($deletar):
            header("Location: history.php");
        endif;
?>