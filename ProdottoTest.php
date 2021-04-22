<?php
    require_once("Prodotto.php");
?>
<html>
    <head>
    <title>
        Test Prodotto
    </title>
    </head>
    <body>
        <h1>Thomas Magi</h1>
        <p>
            <?php
                $prodotto = new Prodotto("457354", "lattina", "22%", "0.50 Euro");
                echo $prodotto->__toString()."<br>";
                echo $prodotto->getCodice()."<br>";
                echo $prodotto->getDescrizione()."<br>";
                echo $prodotto->getIva()."<br>";
                echo $prodotto->getPrezzoVendita()."<br>";
            ?>
        </p>
    </body>
</html>   

