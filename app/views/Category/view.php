
<div class="breadcrumbs">
    <div class="container brdcrb">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
            <?= $breadcrumbs;?>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 content">
        <div class="row">

            <?php if(!empty($products)): ?>

                <?php foreach ($products as $product): ?>
                    <div class="col-md-4 product product-search">
                        <div class="product-img">
                            <a href="product/<?= $product->alias;?>"><img src="img/<?= $product->img;?>" height="218" alt="">
                                <span class="glyphicon glyphicon-eye-open review"></span>
                            </a>

                        </div>
                        <div class="product-footer">
                            <a href="product/<?= $product->alias;?>"><h5><?= $product->title;?></h5></a>
                            <span class="cat">
                            <?= $product->content;?>
                            </span>
                        </div>
                        <div class="bottom-panel">

                            <span class="price"><?= $product->price;?> € </span>
                            <?php if($product->old_price): ?>
                                <span class="price price-old"><small><del><?= $product->old_price?> €</del></small></span>

                                <span class="price price-old"><small>-<?= round((1-($product->price)/($product->old_price))*100, 0); ?>%</small></span>
                            <?php endif; ?>

                            <a href="cart/add?id=<?=$product->id;?>" class="add-to-card-link" data-id="<?=$product->id;?>"><span class="glyphicon glyphicon-shopping-cart"></span>Kaufen</a>
                        </div>
                    </div>
                <?php endforeach; ?>

            <?php else: ?>
            <h3 style="display: block; margin: 20px 40px; ">In dieser Kategorie gibt es derzeit keine Produkte.</h3>
            <?php endif; ?>

        </div>
    </div>
</div>
<div class="text-center">
    <p style="margin-top: 10px;">(<?=count($products)?> Produkt(e) aus <?=$total;?>)</p>
    <?php if($pagination->countPages > 1): ?>
        <?=$pagination;?>
    <?php endif; ?>
</div>