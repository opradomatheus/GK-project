<?php

include_once('conectar.php');

if(isset($_POST['ficha'])){

    $ficha = $_POST['ficha'];
    $nome = $_POST['nome'];
    $canal = $_POST['canal'];
    $dominio = $_POST['dominio'];
    $dif = $_POST['dif'];
    $idescription = $_POST['idescription'];

$sql = $pdo->prepare("INSERT INTO historicos VALUES (null, ?, ?, ?, ?, ?, ?)");
$sql->execute(array($ficha, $nome, $canal, $dominio, $dif, $idescription));

}


$resultado = "SELECT * FROM historicos ORDER BY idhistoricos DESC";
$resultado = $pdo->prepare($resultado);
$resultado->execute();

?>

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
                <a href="history.php"><i class='bx bx-history'></i></a>
            </div>
        </header>
        <form method="post">
            <section class="container-form">
                <div class="ficha">
                    <label for="ficha">Ficha:</label>
                    <input type="number" name="ficha" id="ficha" required>
                </div>
                <div class="nome-canal">
                    <div class="nome">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" required>
                    </div>
                    <div class="canal">
                        <label for="canal">Canal:</label>
                        <select name="canal" id="canal">
                            <option value="Fone">Fone</option>
                            <option value="Whatsapp">Whatsapp</option>
                            <option value="Chat">Chat</option>
                        </select>
                    </div>
                </div>
                <div class="dominio">
                    <label for="ficha">Dominio:</label>
                    <input type="text" name="dominio" id="dominio" required>
                </div>
                <div class="dif">
                    <label for="ficha">Dificuldade:</label>
                    <input type="text" name="dif" id="dif" required>
                </div>
                <div class="desc">
                    <label for="idescription">Descrição:</label>
                    <textarea name="idescription" id="idescription" required></textarea>
                </div>
                <div class="button">
                    <input type="submit" value="Gravar histórico">
                </div>
            </section>
        </form>
    </main>
</body>

</html>
