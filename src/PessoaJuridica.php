<?php
require_once "Cliente.php";
class PessoaJuridica extends Cliente{
    private int $anoFundacao;
    private string $cnpj;
    private string $nomeFantasia;

    public function __construct()
    {
        // Acessando o método setter PROTEGIDO (existente em Cliente)
        $this->setSituacao("em análise");
    }

    
    public function getAnoFundacao()
    {
        return $this->anoFundacao;
    }

    
    public function setAnoFundacao($anoFundacao): self
    {
        $this->anoFundacao = $anoFundacao;

        return $this;
    }

    
    public function getCnpj()
    {
        return $this->cnpj;
    }

    
    public function setCnpj($cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    
    public function setNomeFantasia($nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }
}
?>