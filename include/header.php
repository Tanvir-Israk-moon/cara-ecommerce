<section id="header">
    <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
    <div>
        <ul id="navbar">
            <li><a href="home.php" class="active1">Home</a></li>
            <li><a href="shop.php" class="active2">Shop</a></li>
            <li><a href="blog.php" class="active3">Blog</a></li>
            <li><a href="about.php" class="active4">About</a></li>
            <li><a href="contact.php" class="active5">Contact Us</a></li>
            <li>
                <a href="<?php if (isset($_COOKIE['access_for_explore'])){ echo 'profile.php';}else{ echo 'login.php';}  ?>"><?php if (isset($_COOKIE['access_for_explore'])){ echo 'Profile/Logout';}else{ echo 'Login/Register';}  ?></a>
                <?php if (isset($_COOKIE['access_for_explore'])){  ?>
                    
                <div class="profile-card">
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
                    <link rel="stylesheet" href="CSS/profile.css">
                    <div class="card">				
                        <div class="top-container">		
                            <div class="profile-image" style="background-image: url('https://images.unsplash.com/photo-1618641986557-1ecd230959aa?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D');"></div>	
                            <div class="profile-details">
                                <h5 class="name">Clarke Jeffery</h5>
                                <p class="mail">clark@zmail.com</p>
                            </div>
                        </div>
                        <div class="middle-container">
                            <div class="dollar-div">
                                <div class="round-div"><i class="fa fa-dollar dollar"></i></div>
                            </div>
                            <div class="Amount-box">
                                <span class="current-balance">Current Balance</span>
                                <span class="amount"><span class="dollar-sign">$</span>1476</span>
                            </div>
                        </div>
                        <div class="recent-border">
                            <span class="recent-orders">View Profile</span>
                        </div>
                        <div class="wishlist-border">
                            <span class="wishlist">Wishlist</span>
                        </div>
                        <div class="fashion-studio-border">
                            <span class="fashion-studio deposit"><a href="deposit.php">Deposit/Withdraw</a></span>
                        </div>
                        <div class="logout">
                            <a href="logout.php">Log Out</a>
                        </div>		
                    </div>
                </div>

                <?php } ?>
            </li>
            <li id="lg-bag"><a href="cart.php" class="active6"><i class="far fa-shopping-bag"></i></a></li>
            <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="modile">
        <a href="cart.php" class="active6"><i class="far fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
  
</section>

