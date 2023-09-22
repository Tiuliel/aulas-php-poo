<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 3</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Método construtor com atribuição obrigatória de valores aos parâmetros/propriedades do objeto</li>
        <li>Uso do <code>$this</code> para acesso às propriedades dentro objeto</li>
    </ul>

<?php
require_once "src/Cliente.php";
$clienteA = new Cliente("Fulano", "fulano@gmail.com");
$clienteB = new Cliente("Sicario", "sicario@msn.com");

$clienteA->telefones = ["11-2135-5958"];
?>

<pre><?=var_dump($clienteA, $clienteB)?></pre>

</body>
</html>