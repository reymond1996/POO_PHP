<?php
class Caneta
{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rasbicar()
    {
        if ($this->tampada == true) {
            echo "<p>Erro Não posso rabiscar</p>";
        } else {
            echo "<p>Estou Rasbicando</p>";
        }
    }
    function tampar()
    {
        $this->tampada = true;
    }
    function destampar()
    {
        $this->tampada =  false;
    }
}
