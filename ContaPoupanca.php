<?php
namespace ContaPoupanca;

use DateTime;

class ContaPoupanca
{


    //atributos
    private float $numeroConta;
    //acesso/tipo/nomeAtributo
    private float $saldoConta;
    //acesso/tipo/nomeAtributo
    private DateTime $dataAniversario;
    //metodos
    public function __construct()
{

}

    public function setNumeroConta(float $numeroConta)
    {
        $this->numeroConta = $numeroConta;
    }

    public function setSaldoConta(float $saldoConta)
    {
        $this->saldoConta = $saldoConta;
    }

       public function getDataAniversaerio()
{    
    
    $dataAniversario = new DateTime();
        return $dataAniversario->format('y-m-d');
}

public function getNumeroConta()
{
    return $this->numeroConta;
}
public function getSaldoConta()
{
    return number_format($this->saldoConta, 2);  //number_format serve para colocar casas decimais
}

// Get the value of dataAniversario

public function getDataAniversario()
{
 return $this->dataAniversario->format('d/m/y');
}

public function exibirContaPoupanca(): string
{
    $mensagem = "Conta Poupança: " . $this->getNumeroConta() . ", Valor R$" . $this->getSaldoConta() . ", Data Aniversario" . $this->getDataAniversario();
    return $mensagem;
}

}

?>