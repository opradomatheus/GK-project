<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/main.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>GK - History tool</title>
</head>

<body>
    <main>
        <header>
            <div>
                <h1>
                   GK - History tool
                </h1>
                <p>
                    Registre aqui seu histórico
                </p>
            </div>
            <div>
                <a href="index.php"><i class='bx bxs-arrow-from-right' ></i></a>
            </div>
        </header>

        <section class="container-form">
        <?php
        include_once('conectar.php');

        $resultado = "SELECT * FROM historicos ORDER BY idhistoricos DESC";
        $resultado = $pdo->prepare($resultado);
        $resultado->execute();

        while($user = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "<div class='cardcli'>";
            echo "<div class='idcli'><strong>Ficha: </strong>".$user["ficha"]."</div>";
            echo "<div><a class='bin' href='delete.php?idhistoricos=$user[idhistoricos]'><i class='bx bxs-x-circle' ></i></a></div>";
            echo "<div><strong>Nome: </strong>".$user["nome"]."</div>";
            echo "<div><strong>Canal: </strong>".$user["canal"]."</div>";
            echo "<div><strong>Dominio: </strong>".$user["dominio"]."</div>";
            echo "<div><strong>Dificuldade: </strong>".$user["dif"]."</div>";
            echo "<br>";
            echo "<div class='desc2'>";
            echo "<div onclick='copiarTexto()'><i class='bx bxs-copy'></i></div>";
            echo "<div>".$user["idescription"]."</div>";
            echo "</div>";
            echo "</div>";
        }

         ?>
         </section>
    </main>
    <script src="src/scripts/main.js"></script>
</body>

</html>