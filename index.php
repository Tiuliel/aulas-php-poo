<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 5</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Herança (Super classe e sub classe)</li>
        <li>Métedos/propriedades protegidos (acessíveis apenas pela classe em que foram definidos e pelas subclasses)</li>
        <li>Classe Abstrata: não permite instâncias/pbjetos, serve apenas de modelo para subclasses.</li>
        <li>Classe Final: não permite herança, ou seja, não aceita a criação de subclasses.</li>
        
    </ul>

    <?php
    require_once "src/PessoaFisica.php";
    require_once "src/PessoaJuridica.php";
    $clientePF = new PessoaFisica;

    // colocar um nome no Cliente PF
    $clientePF->setNome("Fulano");
    $clientePF->setEmail("fulano@gmail.com");
    $clientePF->setIdade(20);
    $clientePF->setCpf("123.456.789-00");

    $clientePJ = new PessoaJuridica;

    $clientePJ->setNome("Beltrano S/A");
    $clientePJ->setEmail("blabla@gmail.com");
    $clientePJ->setAnoFundacao(2000);
    $clientePJ->setCnpj("32.088.0001/000.41");
    $clientePJ->setNomeFantasia("Bla Bla Bla informatica");



    ?>

    <pre><?=var_dump($clientePF)?></pre>
    <pre><?=var_dump($clientePJ)?></pre>

    <?php
require_once "src/MEI.php";
$clienteMei = new MEI;
$clienteMei->setNome("Panaka");
$clienteMei->setAnoFundacao(2023);
$clienteMei->setNomeFantasia("Panaka S/A");
$clienteMei->setAreaDeAtuacao("Ervas medicinais");
?>



<?php
    require_once "src/Cliente.php";
    // da erro, pois Cliente é uma classe abstrata
    $clienteGenerico = new Cliente;
    ?>

<pre><?=var_dump($clienteGenerico)?></pre>


</body>
</html>