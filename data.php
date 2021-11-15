<?php 
require_once('lineup.php');

$table=new Product('TABLE',5000,'tabel.jpeg');
$chair=new Product('CHAIR',3000,'chair.jpeg');
$light=new Product('LIGHT',4000,'light.jpeg');
$bed=new Product('BED',10000,'sofa.jpeg');

$products=array($table,$chair,$light,$bed);

?>