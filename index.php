<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 9</title>
</head>

<body>
    <h1>PHP com POO - Exemplo 9</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>

        <li>Namespaces: agrupamento e organização de recursos (classes, funções, constantes)</li>
        <li>Prevenção de conflitos entre classes de mesmo nome</li>
        <li>Configurar e usar <code>namespaces</code> e <code>alias</code></li>
    </ul>


    <?php
    /*  Só de fazer require/importação das classes (SEM NAMESPACE), já dá erro no servidor devido a terem o mesmo nome. */

use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento;


/* 
Use individual (Um pra cada classe)
use Tabajara\MEI;
use Tabajara\PessoaFisica;
use Tabajara\PessoaJuridica; 
*/


// Use com uma lista de classes
use Tabajara\{MEI, PessoaFisica, PessoaJuridica};
    require_once "src/fornecedores/Pagamento.php";
    require_once "src/prestadores/Pagamento.php";

    // Forma 1 de usar classes com namespaces
    //$pagamentoFornecedor = new Fornecedor\Pagamento;
    //$pagamentoPrestador = new Prestador\Pagamento;

    // Forma 2 de usar classes com namespaces
//use Fornecedor\Pagamento;
//use Prestador\Pagamento as PrestadorPagamento; // ALIAS (APELIDO)

//$pagamentoFornecedor = new Pagamento;
//$pagamentoPrestador = new PrestadorPagamento; // objeto através de alias

$pagamentoFornecedor = new Pagamento;
$pagamentoPrestador = new PrestadorPagamento;

?>

<?php

require_once "src/PessoaFisica.php";
require_once "src/PessoaJuridica.php";
require_once "src/MEI.php";

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

 <h2> Nome: <?=$clientePF->getNome()?></h2>
 <h2> Idade: <?=$clientePF->getIdade()?></h2>

 <h2> Nome: <?=$clientePJ->getNomeFantasia()?></h2>
 <h2> Idade: <?=$clientePJ->getAnoFundacao()?></h2>

 <h2> Nome: <?=$clienteMEI->getAreaDeAtuacao()?></h2>
 <h2> Idade: <?=$clienteMEI->getCnpj()?></h2>

    <pre><?=var_dump($pagamentoFornecedor)?></pre>
    <pre><?=var_dump($pagamentoPrestador)?></pre>

    <?php
    //require_once "src/PessoaFisica.php";
    $cliente1 = new PessoaFisica;
    $cliente1->setNome("Astrogildo");
    $cliente1->setIdade(75);

    $cliente2 = new PessoaFisica;
    $cliente2->setNome("Noah");
    $cliente2->setIdade(15);

    require_once "src/Utilitarios.php";
    Utilitarios::obterData();

    ?>

    <h2>Atendimento do dia:
        <?= Utilitarios::$dataAtual ?> </h2>

        <h3>Cliente: <?=$cliente1->getNome()?></h3>
        <p>Tipo de Atendimento:
            <?=Utilitarios::definirAtendimento($cliente1->getIdade())?>
        </p>

        <h3>Cliente: <?=$cliente2->getNome()?></h3>
        <p>Tipo de Atendimento:
            <?=Utilitarios::definirAtendimento($cliente2->getIdade())?>
        </p>
        
</body>

</html>