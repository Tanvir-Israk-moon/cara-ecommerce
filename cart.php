<?php 
if (!isset($_COOKIE['access_for_explore'])) {
    header("location:login.php?var=complex&id=cart");
    }
$title= 'Cara';
include_once('include/head.php');

?>
        <link rel="stylesheet" href="CSS/cart.css">
    </head>

    <body>

        <?php
        include_once('include/header.php');
        ?>
    
        <section id="hero" class="hero">
            <h2>#Keep_Shopping</h2>
            <p>Enjoy your shopping, We love to serve you!</p>
        </section>

        <section id="cart" class="section-p1">
            <table>
                <thead>
                    <tr>
                        <td>Remove</td>
                        <td>Image</td>
                        <td>product</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Subtotal</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                        <td><img src="img/products/f1.jpg" alt=""></td>
                        <td>Cotton Astronaut T-Shirts</td>
                        <td>$118.19</td>
                        <td><input type="number" value="1"></td>
                        <td>View Details</td>
                    </tr>
                    <tr>
                        <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                        <td><img src="img/products/f1.jpg" alt=""></td>
                        <td>Cotton Astronaut T-Shirts</td>
                        <td>$118.19</td>
                        <td><input type="number" value="1"></td>
                        <td>View Details</td>
                    </tr>
                    <tr>
                        <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                        <td><img src="img/products/f1.jpg" alt=""></td>
                        <td>Cotton Astronaut T-Shirts</td>
                        <td>$118.19</td>
                        <td><input type="number" value="1"></td>
                        <td>View Details</td>
                    </tr>
                </tbody>
            </table>
        </section>     
        
        <section id="cart_add" class="section-p1">
            <div class="coupon">
                <h3>Apply Coupon</h3>
                <div class="">
                    <input type="text" placeholder="Enter Your Coupon">
                    <button class="normal">Apply</button>
                </div>
            </div>
            <div class="subtotal">
                <h3>Cart Totals</h3>
                <table>
                    <tr>
                        <td>Cart Subtotal</td>
                        <td>$335</td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>$335</strong></td>
                    </tr>
                </table>
                <button class="normal">Proceed to checkout</button>
            </div>
        </section>
   
        <?php
        include_once('include/footer.php');
    ?>