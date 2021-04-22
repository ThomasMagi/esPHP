<?php
Class Prodotto {
    private $codice;
    private $descrizione;
    private $Iva;
    private $prezzoVendita;

public function __construct($codice, $descrizione, $Iva, $prezzoVendita){ 
    $this->codice = $codice; 
    $this->descrizione = $descrizione; 
    $this->Iva = $Iva;
    $this->prezzoVendita = $prezzoVendita;
    }
    public function setCodice($codice){
        $this->codice = $codice;
        return $this;
    }

    public function setDescrizione($descrizione){
        $this->descrizione = $descrizione;
        return $this;
    }

    public function setIva($Iva){
        $this->Iva = $Iva;
        return $this;
    }

    public function setPrezzoVendita($prezzoDiVendita){
        $this->prezzoDiVendita = $prezzoDiVendita;
        return $this;
    }

    public function getCodice(){
        return $this->codice;
    }

    public function getDescrizione(){
        return $this->descrizione;
    }

    public function getIva(){
        return $this->Iva;
    }

    public function getPrezzoVendita(){
        return $this->prezzoVendita;
    }
public function __toString() {
    return "Il codice è {$this->getCodice()}
    la descrizione è {$this->getDescrizione()}
    l'Iva è {$this->getIva()}
    il prezzo di vendita è {$this->getPrezzoVendita()}";
    }
}
 ?>