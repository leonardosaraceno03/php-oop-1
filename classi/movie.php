<?php
class Movie
{
    public $nome;
    public $anno;
    public $prezzoBiglietto;
    //public $prezzoScontato;
    function __construct($_nome, $_anno, $_prezzoBiglietto)
    {
        $this->nome = $_nome;
        $this->anno = $_anno;
        $this->prezzoBiglietto = $_prezzoBiglietto;
        //$this->prezzoScontato = $_prezzoScontato;

    }

    public function stampa()
    {
        echo $this->nome;
    }
 public function setprezzoScontato($prezzoScontato){
    if($this->prezzoBiglietto > 20){
        $this->prezzoBiglietto = $prezzoScontato;
    }
 }
}

?>