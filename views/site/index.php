<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="category-wrap">
                    <h3>Категории</h3>
                    <ul>
                        <?php foreach ($categories as $categoryItem): ?>
                            <li><a href="/category/<?php echo $categoryItem['id']; ?>"
                                   class="<?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>">
                                    <?php echo $categoryItem['name']; ?>
                                </a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <?php foreach ($latestProducts as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">

                                    <div class="product-item">
                                        <img src="/template/images/depositphotos_42772287-stock-illustration-isolated-beautiful-cosmetics-and-brushes.jpg" alt="" />
                                        <div class="product-list">
                                            <h3><a href="/product/<?php echo $product['id']; ?>">
                                                    <?php echo $product['name']; ?>
                                                </a></h3>
                                            <span class="price"><?php echo $product['price']; ?></span>
                                            <a href="#" data-id="<?php echo $product['id'];?>"
                                               class="btn btn-default add-to-cart button">
                                                <i class="fa fa-shopping-cart"></i>В корзину
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div><!--features_items-->

        </div>
    </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
