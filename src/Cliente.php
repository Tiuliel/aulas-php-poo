<?php
class Cliente{

    
    public string $nome;
    public string $email;
    public string $senha;
    public array $telefones;
    
    /* Método construtor permite configurar a forma de inicialização
    do objeto, exigindo a atribuição de dados no momento de criar o 
    objeto/instância. O construtor é sempre chamado de forma automático assim que o objeto é criado. */

    public function __construct(string $nome, string $email){
     /* Atribuindo os valores dos parâmetros às propriedades. 
     Usamos o $this para acessar as propriedades desta Classe. */
        $this->nome = $nome;
        $this->email = $email;
    }
    
}