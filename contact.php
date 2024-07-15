<?php 
$title= 'Cara';
include_once('include/head.php');
?>
        <link rel="stylesheet" href="CSS/contact.css">
    </head>

    <body>

        <?php
        include_once('include/header.php');
        ?>
    
        <section id="hero" class="hero">
            <h2>#Lat's_Talk</h2>
            <p>Leave a massage, We love to hear from you!</p>
        </section>

        <section id="contact" class="section-p1">
            <div class="contact_details">
                <span>GET IN TOUCH</span>
                <h2>Visit one of our agency location or contact us today</h2>
                <h3>Head Office</h3>
                <div class="">
                    <li>
                        <i class="fal fa-map"></i>
                        <p>56 Glassford Street Glassgow G1 1UL New York</p>
                    </li>
                    <li>
                        <i class="far fa-envelope"></i>
                        <p>honufaakter779@gmail.com</p>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <p>+8801840585430</p>
                    </li>
                    <li>
                        <i class="far fa-clock"></i>
                        <p>Monday to Saturday: 9.00am to 16.00pm</p>
                    </li>
                </div>
                
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6014.945896171743!2d89.52914046872866!3d22.849655675571938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9af34485533f%3A0x49ccc11f344e5476!2sBangladesh%20Noubahini%20School%20%26%20College!5e0!3m2!1sen!2sbd!4v1707489799484!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <section id="contact_form">
            <form action="#">
                <span>LEAVE A MASSAGE</span>
                <h2>We love to hear from you</h2>
                <input type="text" placeholder="Your Name">
                <input type="email" placeholder="E-mail">
                <input type="text" placeholder="Subject">
                <textarea cols="30" rows="10" placeholder="Your Massage"></textarea>
                <button class="normal">Submit</button>
            </form>
            <div class="all_people">
                <div class="people">
                    <div>
                        <img src="img/people/1.png" alt="">
                        <p><span>John Doe</span> Senior Marketing Manager <br> Phone:+880 184 058 54 30 <br>Email: abc@example.com</p>
                    </div>
                    <div>
                        <img src="img/people/2.png" alt="">
                        <p><span>John Doe</span> Senior Marketing Manager <br> Phone:+880 184 058 54 30 <br>Email: abc@example.com</p>
                    </div>
                    <div>
                        <img src="img/people/3.png" alt="">
                        <p><span>John Doe</span> Senior Marketing Manager <br> Phone:+880 184 058 54 30 <br>Email: abc@example.com</p>
                    </div>
                </div>
            </div>
        </section>

        <?php
            include_once('include/newsletter.php');
        ?>
    
    <?php
        include_once('include/footer.php');
    ?>