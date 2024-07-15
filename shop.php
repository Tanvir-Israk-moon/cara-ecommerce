<?php 
$title= 'Cara';
include_once('include/head.php');

$product_query = "SELECT * FROM `products` ORDER BY RAND()";
$product_query_insert = $conn -> query($product_query);

?>
        <link rel="stylesheet" href="CSS/shop.css">
    </head>

    <body>

        <?php
        include_once('include/header.php');
        ?>
    
        <section id="hero">
            <h2>#StayHome</h2>
            <p>Save more with coupons & up to 70% off!</p>
        </section>
    
        <section id="product1">
            <h2>Featured Products</h2>
            <p>Summer Collection New Modern Design</p>
            <div class="pro-container section-p1">

                <?php while ($shop_products = mysqli_fetch_assoc($product_query_insert)) {   ?>             

                <div class="pro" onclick="window.location.href='sproduct.php?proid=<?php echo  $shop_products['ID']; ?>'">
                    <img src="img/added_products/<?php echo  $shop_products['Photo1'];?>" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5><?php echo $shop_products['Name'] ?></h5>
                        <div class="star_price_cart">
                            <div class="star_price">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$<?php echo $shop_products['Price'] ; ?></h4>
                            </div>
                            <div class="cart">
                                <a href="cart.php"><i class="fal fa-shopping-cart cart_icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>

                
            </div>
        </section>

        <section id="pagination" class="section-p1">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
        </section>

        <?php
            include_once('include/newsletter.php');
        ?>
    
    <?php
        include_once('include/footer.php');
    ?>