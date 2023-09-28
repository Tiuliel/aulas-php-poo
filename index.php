<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 6</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 6</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        
        
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

   <h2>Saída de dados</h2>
<!-- Saída dp cliente PessoaFisica -->
   <section><?=$clientePF->exibirDados()?></section>

   <!-- Saída dp cliente PessoaJuridica -->
   <section><?=$clientePJ->exibirDados()?></section>
       
</body>
</html>