<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 8</title>
</head>

<body>
    <h1>PHP com POO - Exemplo 8</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>

        <li>Propriedades e métodos estáticos</li>
        <li>acesso direto sem necessidade de objetos/instâncias</li>
        <li>Uso do <code>self</code> para acesso (dentro da classe) aos recursos estáticos</li>
    </ul>

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