<?php
include_once __DIR__ . '/db/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet-Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1>Pet-Shop Puppis</h1>
            </div>
        </div>
        <div class="row justify-content-between">
            <?php foreach ($products as $product) { ?>
                <div class="col-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="./img/<?php echo $product->getProductPicture()?>" alt="Product image">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $product->getProductName()?></h5>
                            <p class="card-text"><?php echo $product->getProductPrice()?></p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-primary">View Product</a>
                                <div>
                                    <i class="icon mx-2"><?php echo $product->category->getCategoryIcon()?></i>
                                    <i class="icon mx-2"><?php echo get_class($product)::$icon?></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>    
</body>
</html>