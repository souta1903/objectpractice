<?php
require_once('lineup.php');

$chair= new Product('Chair',3000,'https://pixabay.com/images/id-2155376/');
$sofa=  new Product('sofa',10000,'light.jpeg');
$light= new Product('light',5000,'sofa.jpeg'); 
$table= new Product('table',7000,'table.jpeg');




$products =array($chair,$sofa,$light,$table);




?>