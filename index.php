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
    require_once "src/fornecedores/Pagamento.php";
    require_once "src/prestadores/Pagamento.php";

    // Forma 1 de usar classes com namespaces
    $pagamentoFornecedor = new Fornecedor\Pagamento;
    $pagamentoPrestador = new Prestador\Pagamento;

    
    ?>

    <pre><?=var_dump($pagamentoFornecedor)?></pre>
    <pre><?=var_dump($pagamentoPrestador)?></pre>

    <?php
    require_once "src/PessoaFisica.php";
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