<?php

class ContaEspecial
{
    // Propriedades privadas
    private string $nomeCliente;
    private float $numeroConta;
    private float $saldoConta;
    private float $limiteConta;

    // Método público para definir os valores das propriedades
    public function __construct(string $nomeCliente, float $numeroConta, float $saldoConta, float $limiteConta)
    {
        $this->nomeCliente = $nomeCliente;
        $this->numeroConta = $numeroConta;
        $this->saldoConta = $saldoConta;
        $this->limiteConta = $limiteConta;        
    }

    public function exibirContaEspecial(): string
    {
        $mensagem = "ContaEspecial: " . $this->getNomeCliente() . "numero: " . $this->getNumeroConta() . "saldo: " . $this->getsaldoConta() . "limite: " . $this->getlimiteConta();
        return $mensagem;
    }

    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    public function getNumeroConta()
    {
        return $this->numeroConta;
    }

    public function getsaldoConta()
    {
        return $this->saldoConta;
    }

    public function getLimiteConta()
    {
        return $this->limiteConta;
    }
}


    ?>