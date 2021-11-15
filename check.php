<?php require_once('data.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>furniture store</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="order-check">
        <h2>注文内容確認</h2>
        <?php $totalpayment=0 ?>
        <?php foreach($products as $product): ?>
            <?php $ordercount=$_POST[$product->getName()];
            $product->setordercount($ordercount);
            $totalpayment += $product->getTotalprice();
            ?>
           <p class="order-amount">
            <?php echo $product->getName()?>
            ✖️
            <?php echo $ordercount ?>
            個
            <?php echo $product->getTotalprice() ?>
            円
            </p>
        <?php endforeach ?>
        <h3>合計金額: <?php echo $totalpayment ?>円</h3>
    </div>
</body>
</html>