<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antique Furniture</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="lineup">
    <h1 class="title">Antique Furniture</h1>

        <div class="product-names">
        <?php foreach ($products as $product): ?>
          <div class="prodcut-item">
            <img src="<?php echo $product->getImage() ?>" class="prodcut-item-image">
            <h3 class="product-item-name"><?php echo $product->getName() ?></h3>
            <p class="price">¥<?php echo $product->getTaxIncludedPrice() ?>（税込）</p>
        </div>
        <?php endforeach ?>

</div>
    
</body>

</html>