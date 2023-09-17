<h1><?= $title ?></h1>

     <a href="/products-to-pdf" class="btn btn-success">Download pdf</a>

  
     <?php if (isset($products)): ?>
    <?php  foreach($products as $product): ?>

    <?= $product->name ?>,
    <?= $product->getCategory()->name ?>
    
     
    <br>

    <?php endforeach ?>
    <?php else: ?>
    <p>No products available.</p>
<?php endif ?>

    