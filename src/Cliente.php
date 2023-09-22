<?php
class Cliente{

    private string $nome;
    private string $email;
    private string $senha;
    
    // métodos getters e setters
    public function setNome(string $nome):void{
        $this->nome = $nome;
    }

    public function getNome():string{
        return $this->nome;
    }
}