<?php
    class Fattura{
        private $ragioneSociale;
        private $indirizzoCompleto;
        private $partitaIva;
        private $prodotti;
        private $numeroElementi;
    
        public function __construct($ragioneSociale , $indirizzoCompleto, $partitaIva){
            $this->ragioneSociale = $ragioneSociale;
            $this->indirizzoCompleto = $indirizzoCompleto;
            $this->partitaIva = $partitaIva;
            $this->numeroElementi = 0;
            $this->prodotti = [];
        }

        public function getProdotto($index){
            if(array_key_exists($index, $this->prodotti)===true)
                return $this->prodotti[$index]["prodotto"];
            else 
                return -1;
        }
    
        public function setProdotto($prodotto, $quantita){
            foreach($this->prodotti as $value){
                if($value["prodotto"]==$prodotto){
                    $value["quantita"] += $quantita;
                    return $this;
                }
            }
            $this->prodotti[$this->numeroElementi]= [
                "prodotto" => $prodotto,
                "quantita" => $quantita
            ];
            $this->numeroElementi++;
            return $this;
        }

        
        public function eliminaProdotto($prodotto){
            foreach($this->prodotti as $value){
                if($value["prodotto"] == $prodotto){
                    $value["quantita"] = 0;
                    return 0;
                }
            }
            return -1;
        }
        public function __toString(){
            $out = "La ragione sociale è $this->ragioneSociale, l'indirizzo è $this->indirizzoCompleto e la partita iva è $this->partitaIva <br>";//<table border='1'><tr><td>Prodotto</td><td>Quantita</td></tr>";
            foreach($this->prodotti as $key => $value){
                if($value["quantita"]!=0){
                    $out .= $value["prodotto"]->__toString()." x".$value["quantita"]."<br>";
                }
            }
            return $out;
        }

        public function totaleImponibile(){
            $prezzo=0;
            foreach($this->prodotti as $value){
                $prezzo += $value["prodotto"]->getPrezzoVendita() * $value["quantita"];
            }
            return $prezzo;
        }

        public function importoIva(){
            $prezzo=0;
            foreach($this->prodotti as $value){
                $prezzo += $value["prodotto"]->getPrezzoVendita() * $value["quantita"] * $value["prodotto"]->getIva() / 100;
            }
            return $prezzo;
        }
    
        public function totaleFattura(){
            return $this->totaleImponibile() + $this->importoIva();
        }

    }
?>