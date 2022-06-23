<?php

session_start();

require "../Model/Reserva.php";
require "../Model/Cliente.php";


$reserva = unserialize($_SESSION["reserva"]);
$cliente = $reserva->getCliente();
$quarto = $reserva->getQuarto();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações da Reserva</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<header class="jumbotron jumbotron-fluid bg-primary">

    <div class="container text-white">
        <h1>Hotel? Trivago</h1>
    </div>

</header>
<main class="container">
    <div class="card">
        <div class="card-header text-success">
            Informações da Reserva
        </div>
        <div class="card-body">
            
        <p>Nome do Cliente: <?php echo $cliente->getNome() ?></p>
            
        <p>RG: <?php echo $cliente->getRg() ?></p>
        <p>Telefone: <?php echo $cliente->getTelefone() ?></p>
        <p>Email: <?php echo $cliente->getEmail()?></p>

        <hr>

        <p>Quantidade de diárias: <?php echo $reserva->getQuantidadeDiarias() ?></p>
        <p>Tipo de Acomodação: <?php echo $quarto->getNome() ?></p>

        <hr>

        <p>Preço Total: R$<?php echo $reserva->getPrecoTotalString() ?></p>

        </div>
    </div>
</main>
<footer>

</footer>

</body>
</html>
