<?php 
$title= 'Cara';
include_once('include/head.php');
?>
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="CSS/deposit.css">
</head>
<body>

    <?php
    include_once('include/header.php');
    ?>

    <div class="payment_gateway_card">
        <div class="payment_gateway_card_box">
            <div class=""></div>
            <div class="img_box">
                <img src="img/pay/bitcoin.webp" alt="">
            </div>
            <h4>Deposit with CryptoCurrency</h4>
            <p>"Shop effortlessly with cryptocurrency: fast, secure transactions with low fees. Embrace the future of ecommerce today!"</p>
            <div class="deposit_link">
                <a href="pay.php?gateway=crypto"><i class="fa-brands fa-bitcoin"> Deposit</i></a>
            </div>
        </div>
        <div class="payment_gateway_card_box">
            <div class=""></div>
            <div class="img_box">
                <img src="img/pay/bkash.webp" alt="">
            </div>
            <h4>Deposit with BKash</h4>
            <p>"Simplify your checkout process with BKash. Swift, secure transactions for seamless shopping convenience. Embrace hassle-free payments today!"</p>
            <div class="deposit_link">
                <a href="pay.php?gateway=cash"><i class="fa-solid fa-money-bill-transfer"> Deposit</i></a>
            </div>
        </div>
        <div class="payment_gateway_card_box">
            <div class=""></div>
            <div class="img_box">
                <img src="img/pay/credit-card-transparent-background-10.png" alt="">
            </div>
            <h4>Deposit with Card</h4>
            <p>"Streamline your shopping experience with card payments. Enjoy secure transactions and easy checkout for hassle-free purchases. Shop confidently today!"</p>
            <div class="deposit_link">
                <a href="pay.php?gateway=card"><i class="fa-solid fa-credit-card"> Deposit</i></a>
            </div>
        </div>
        
    </div>






    <?php
        include_once('include/footer.php');
    ?>