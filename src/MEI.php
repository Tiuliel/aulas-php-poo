<?php
namespace Tabajara;

/* Classe Final
não permite entender recursos para novas subclasses,
ou seja, não permite herança */
final class MEI extends PessoaJuridica{
    private string $areaDeAtuacao;

    public function getAreaDeAtuacao(): string
    {
        return $this->areaDeAtuacao;
    }

    public function setAreaDeAtuacao(string $areaDeAtuacao): self
    {
        $this->areaDeAtuacao = $areaDeAtuacao;

        return $this;
    }
}