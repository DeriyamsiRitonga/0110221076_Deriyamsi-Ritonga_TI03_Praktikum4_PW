<?php
require_once "class_persegipanjang.php";

$persegipanjang1 = new PersegiPanjang(6,3);
$persegipanjang2 = new PersegiPanjang(12,6);

echo "<br>Luas Persegi Panjang I : ".$persegipanjang1->getLuas();
echo "<br>Luas Persegi Panjang II : ".$persegipanjang2->getLuas();
echo "<br>Keliling Persegi Panjang I : ".$persegipanjang1->getKeliling();
echo "<br>Keliling Persegi Panjang II : ".$persegipanjang2->getKeliling();
?>