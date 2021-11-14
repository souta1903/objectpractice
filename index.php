<?php require_once('data.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Store</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="wrapper">
     <h1 class="title">Furniture Store</h1>
    <form action="check.php" method="post">
        <div class="products">
            <?php foreach($products as $product): ?>
                <div class="product">
                    <img src="<?php echo $product->getImage() ?>" alt="" class="product-image">
                    <h3 class="product-name"><?php echo $product->getName() ?></h3>
                    <p class="product-price">¥<?php echo $product->gettaxinprice() ?>(税込)</p>
                    <input type="text" value="0" name="<?php echo $product->getName() ?>">
                    <span>個</span>
                </div>
            <?php endforeach ?>
        </div>
        <input type="submit" value="注文する"> 
    </form>
    </div>
    
</body>
</html>
