<?php
    require_once("Prodotto.php");
    require_once("Fattura.php");
?>
<html>
    <head>
    <title>
        Test Fattura
    </title>
    </head>
    <body>
        <h1>Thomas Magi</h1>
        <p>
            <?php
                $prodotto = new Prodotto (1, "prodotto1", 22, 70);
                $fattura = new Fattura ("ABCD", "via lazzerini","18490379585");
                echo $fattura->__toString()."<br>";
                $fattura->setProdotto($prodotto,4);
                $prodotto = new Prodotto (2, "prodotto2", 22, 50);
                $fattura->setProdotto($prodotto,1);
                echo $fattura->__toString()."<br>";
                echo $fattura->getProdotto(0)."<br>";
                $fattura->eliminaProdotto($prodotto);
                echo $fattura->__toString()."<br>";
                echo "il totale imponibile è {$fattura->totaleImponibile()}<br>";
                echo "l importo Iva è è {$fattura->importoIva()}<br>";
                echo "il totale fattura è {$fattura->totaleFattura()}<br>";
            ?>
        </p>
    </body>
</html>

            

