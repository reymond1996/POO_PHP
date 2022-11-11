<?php
class Caneta
{
    public $modelo;
    private $ponta;
    private $tampada;
    public function Caneta($m, $c, $p) //metodo Contrutor
    {
        // $this->cor = "Azul";
        // $this->tampar();
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->setTampada(true);
    }
    public function setTampada()
    {
        $this->tampada = true;
    }


    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($m)
    {
        $this->modelo = $m;
    }
    public function getPonta()
    {
        return $this->ponta;
    }
    public function setPonta($p)
    {
        $this->ponta = $p;
    }
}
