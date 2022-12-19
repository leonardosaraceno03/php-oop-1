<?php
class Movie{
    public $nome;
    public $anno;
    public $prezzoBiglietto;
    public $prezzoScontato;
    function __construct($_nome, $_anno, $_prezzoBiglietto, $_prezzoScontato){
        $this->nome = $_nome;
        $this->anno = $_anno;
        $this->prezzoBiglietto = $_prezzoBiglietto;
        $this->prezzoScontato = $_prezzoScontato;
        
    }
    public function setprezzoScontato($prezzoBiglietto,$prezzoScontato){
        if($this->prezzoBiglietto > 20){
            $this->prezzoScontato = 12;
        }else{
            $this->prezzoScontato = $this->prezzoBiglietto;
        }
    }
}

?>