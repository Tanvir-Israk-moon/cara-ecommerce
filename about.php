<?php 
$title= 'Cara';
include_once('include/head.php');
?>
        <link rel="stylesheet" href="CSS/about.css">
    </head>

    <body>

        <?php
        include_once('include/header.php');
        ?>
    
        <section id="hero" class="hero">
            <h2>#KnowUs</h2>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </section>

        <section id="about" class="section-p1">
            <img src="img/about/a6.jpg" alt="">
            <div class="about_text">
                <h2>Who We Are?</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt nobis nisi, unde architecto, repudiandae magni ad est tempora dignissimos impedit blanditiis quaerat nihil id! Placeat saepe quos, dignissimos ab cumque molestias temporibus, sed, iure laborum mollitia est numquam ad vitae? Necessitatibus nam consectetur provident qui perspiciatis et maxime eveniet ex iusto ab eligendi quasi reprehenderit, ad quidem aliquam, tempora dolor esse saepe aspernatur iure delectus assumenda? Adipisci magnam dolorem quidem!</p>
            
                <abbr title="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dicta, quam, assumenda debitis rerum rem pariatur soluta vero!</abbr>
                <br><br>
                <marquee bgcolor="#fff" loop="-1" scrollamount="5" width="100%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dicta, quam, assumenda debitis rerum rem pariatur soluta vero!
                </marquee>
            </div>
        </section>

        <section id="about_app" class="section-p1">
            <h1>Download Our <a href="#">App</a></h1>
            <div class="video">
                <video src="img/about/1.mp4" autoplay loop muted></video>
            </div>
        </section>

        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="img/features/f1.png" alt="">
                <h6>Free Shipping</h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f2.png" alt="">
                <h6>Online Order</h6>
            </div><div class="fe-box">
                <img src="img/features/f3.png" alt="">
                <h6>Save Money</h6>
            </div><div class="fe-box">
                <img src="img/features/f4.png" alt="">
                <h6>Promotion</h6>
            </div><div class="fe-box">
                <img src="img/features/f5.png" alt="">
                <h6>Happy Sell</h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f6.png" alt="">
                <h6>Free 24/7 Support</h6>
            </div>
        </section>

        <?php
            include_once('include/newsletter.php');
        ?>
    
    <?php
        include_once('include/footer.php');
    ?>