<?php
       include ("./Celular.php"); 
       $iphone = new Celular("iPhone 6", "Apple", "5", "64", "4", "4999.99");
       
       echo "Nome: ";
       echo $iphone -> getNome();
       echo "<br />Marca: ";
       echo $iphone -> getMarca();
       echo "<br />Tamanho: ";
       echo $iphone -> getTam_tel();
       echo "<br />HD: ";
       echo $iphone -> getHd();
       echo "<br />RAM: ";
       echo $iphone -> getRam();
       echo "<br />Preço: ";
       echo $iphone -> getPreco();
?>
    