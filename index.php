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
        if($prezzoBiglietto > 20){
            $this->prezzoScontato = 12;
        }else{
            $this->prezzoScontato = $prezzoBiglietto;
        }
    }
}
$film1 = new Movie("avatar2", "2022", 30, $prezzoScontato);
var_dump($film1)
?>