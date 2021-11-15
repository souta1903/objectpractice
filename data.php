<?php 
require_once('lineup.php');

$table = new Product('TABLE',5000,'asset/table.jpeg');
$chair = new Product('CHAIR',3000,'asset/chair.jpeg');
$light = new Product('LIGHT',4000,'asset/light.jpeg');
$bed = new Product('BED',10000,'asset/sofa.jpeg');

$products = [$table,$chair,$light,$bed];
?>