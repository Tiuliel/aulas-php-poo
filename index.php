<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 10</title>
</head>

<body>
    <h1>PHP com POO - Exemplo 10</h1>
        <hr>
        <h2>Assuntos abordados:</h2>
        <ul>

            <li>Composer: gerenciador de dependência PHP</li>
            <li>Configurar o projeto com Composer usando <code>Composer.json</code></li>
            <li>Autoload de classes evitando muitos requires e/ou require manuais</li>
        </ul>


        <?php


        use Fornecedor\Pagamento;
        use Prestador\Pagamento as PrestadorPagamento;
        use Tabajara\{Escola, MEI, PessoaFisica, PessoaJuridica};

        require_once "vendor/autoload.php";



        $pagamentoFornecedor = new Pagamento;
        $pagamentoPrestador = new PrestadorPagamento;

        ?>

        <?php


        $clientePF = new PessoaFisica;
        $clientePJ = new PessoaJuridica;
        $clienteMEI = new MEI;

        $clientePF->setNome("Tiuliel");
        $clientePF->setIdade(25);

        $clientePJ->setNomeFantasia("Casseta e Planeta");
        $clientePJ->setAnoFundacao(1986);

        $clienteMEI->setAreaDeAtuacao("Humor");
        $clienteMEI->setCnpj("987.654.321-0001-23");

        ?>

        <h2> Nome: <?= $clientePF->getNome() ?></h2>
        <h2> Idade: <?= $clientePF->getIdade() ?></h2>

        <h2> Nome: <?= $clientePJ->getNomeFantasia() ?></h2>
        <h2> Idade: <?= $clientePJ->getAnoFundacao() ?></h2>

        <h2> Nome: <?= $clienteMEI->getAreaDeAtuacao() ?></h2>
        <h2> Idade: <?= $clienteMEI->getCnpj() ?></h2>

        <pre><?= var_dump($pagamentoFornecedor) ?></pre>
        <pre><?= var_dump($pagamentoPrestador) ?></pre>

        <hr>

        <?php
        $escola = new Escola;
        var_dump($escola);
        ?>
        

      

</body>

</html>