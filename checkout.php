<?php 
$title= 'Cara';
include_once('include/head.php');

if (!isset($_COOKIE['access_for_explore'])) {
    header("location:login.php?var=complex&id=cart");
}else{
?>

        <link rel="stylesheet" href="CSS/checkout.css">
    </head>

    <body>

        <?php
        include_once('include/header.php');
        ?>

        <section id="checkout" class="section-p1">
            <div class="all_carts">
                <div class="billing">
                    <p>Bill</p>
                    <h1>$135.00</h1>
                </div>
                <div class="carts">
                    <table>
                        <tr>
                            <td><img src="img/products/f1.jpg" alt=""></td>
                            <td>
                                <div class="product_name">
                                    <h4>t-shirts</h4>
                                </div>
                                <div class="qty">
                                    <p>Qty 1</p>
                                </div>
                            </td>
                            <td>$65.00</td>
                        </tr>
                        <tr>
                            <td><img src="img/products/f1.jpg" alt=""></td>
                            <td>
                                <div class="product_name">
                                    <h4>t-shirts</h4>
                                </div>
                                <div class="qty">
                                    <p>Qty 1</p>
                                </div>
                            </td>
                            <td>
                                <div>
                                $65.00
                                </div>
                                <div class="qty">
                                    <p>32.00 each</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><h4>Subtotal</h4></td>
                            <td>$129.00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="qty top_right_bor"><p>Shipping <br> Ground Shipping (3-5 business day)</p></td>
                            <td class="qty top_right_bor"><p>$5.00</p></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><h4>Total Due</h4></td>
                            <td>$134.00</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="pay">
                <form action="#">
                    <div class="cash">
                        <a href="#"><h4>Cash on Delivery</h4></a>
                    </div>
                    <div class="pay_card_cont">
                        <p class="pay_card">Or Pay with card</p>
                    </div>
                    
                    <div class="payment-card">
                        <h4>Shipping Information</h4>
                        <div class="email">
                            <label for="email">Email</label>
                            <div class="shipping_address">
                                <input type="email" id="email">
                                <i class="fa-solid fa-address-card"></i>
                            </div>     
                        </div>
                        <div class="address">
                            <label for="address">Shipping address</label>
                            <div class="address_details">
                                <table>
                                    <tr>                               
                                        <td><input type="text" placeholder="Name" id="address"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select>
                                                <option value="">District</option>
                                                <option value="">Khulna</option>
                                                <option value="">Dhaka</option>
                                                <option value="">Chattogram</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" placeholder="Address"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" placeholder="Number"></td>
                                    </tr>
                                </table>
                            </div>
                            <a href="#" class="map">Enter Address Manually</a>
                        </div>
                        <h4>Payment details</h4>
                        <label for="card_number">Card Information</label>
                        <div class="card_number">
                            <input type="number" placeholder="1234 1234 1234 1234" id="card_number">
                            <img src="img/pay/Accepted-Cards-US.png" alt="">
                        </div>
                        <div class="pay_date_cvc">
                            <div class="card_date">
                                <input type="date">
                            </div>
                            <div class="cvc">
                                <input type="text" placeholder="CVC">
                                <img src="img/pay/credit-card.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="bill_address">
                        <label class="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <svg viewBox="0 0 21 18">
                                <symbol id="tick-path" viewBox="0 0 21 18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.22003 7.26C5.72003 7.76 7.57 9.7 8.67 11.45C12.2 6.05 15.65 3.5 19.19 1.69" fill="none" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" />
                                </symbol>
                                <defs>
                                    <mask id="tick">
                                        <use class="tick mask" href="#tick-path" />
                                    </mask>
                                </defs>
                                <use class="tick" href="#tick-path" stroke="currentColor" />
                                <path fill="white" mask="url(#tick)" d="M18 9C18 10.4464 17.9036 11.8929 17.7589 13.1464C17.5179 15.6054 15.6054 17.5179 13.1625 17.7589C11.8929 17.9036 10.4464 18 9 18C7.55357 18 6.10714 17.9036 4.85357 17.7589C2.39464 17.5179 0.498214 15.6054 0.241071 13.1464C0.0964286 11.8929 0 10.4464 0 9C0 7.55357 0.0964286 6.10714 0.241071 4.8375C0.498214 2.39464 2.39464 0.482143 4.85357 0.241071C6.10714 0.0964286 7.55357 0 9 0C10.4464 0 11.8929 0.0964286 13.1625 0.241071C15.6054 0.482143 17.5179 2.39464 17.7589 4.8375C17.9036 6.10714 18 7.55357 18 9Z" />
                            </svg>
                            <svg class="lines" viewBox="0 0 11 11">
                                <path d="M5.88086 5.89441L9.53504 4.26746" />
                                <path d="M5.5274 8.78838L9.45391 9.55161" />
                                <path d="M3.49371 4.22065L5.55387 0.79198" />
                            </svg>
                        </label>
                        <label for="checkbox">Billing address is same as shipping</label>
                    </div>
                    <div class="submit">
                        
                    </div>
                    <div class="text-box">
                        <input type="submit" value="Pay $134.00" class="btn btn-animate">
                    </div>
                </form>
            </div>
        </section>
<?php
}
?>
    <?php
        include_once('include/footer.php');
    ?>