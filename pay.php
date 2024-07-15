<?php 
$title= 'Cara';
include_once('include/head.php');
?>
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="CSS/pay.css">
</head>
<body>

    <?php
    include_once('include/header.php');
    ?>
</head>
<body>

<?php if (isset($_GET['gateway']) && $_GET['gateway']== 'crypto') { ?>

  <div class="crypto-wallet-card">
    <div class="crypto-wallet-header">
      <h2 class="crypto-name">Deposit CryptoCurrency</h2>
    </div>
    <p class="wallet-address">Our Wallet Address:</p>
    <div class="crypto-wallet-info">
      <input type="text" id="walletAddress" value="1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa" readonly>
      <button class="copy-button" onclick="copyAddress()"><i class="fa-solid fa-copy"></i></button>     
    </div>
      <p class="center">or Scan the QR Code:</p>
      <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRoKXeWtmk63D4wpooVbdMTds8XWgYaSbU5AZsa7s0q5FLdNpb9" alt=""  class="qr_code">
    <div class="deposit_details">
    <p style="margin-bottom:10px;">Enter your transaction details</p>
    <form action="action/deposit_fetch.php?gateway=<?php echo $_GET['gateway'] ?>" method="post">
        <label for="transaction">Transaction code</label>
        <input type="text" placeholder="Enter your transaction Code" required name="txd_id">
        <label for="transaction">Transaction Amount</label>
        <input type="text" placeholder="Enter your transaction Amount" required name="amount">
        <div class="text-box btn">
          <input type="submit" value="deposit" class="btn btn-animate" name="crypto_submit">
        </div>
    </form>
  </div>
  </div>
  
  <script>
    function copyAddress() {
  /* Get the text field */
  var walletAddress = document.getElementById("walletAddress");

  /* Select the text field */
  walletAddress.select();
  walletAddress.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied address */
  alert("Copied the address: " + walletAddress.value);
  }
  </script>

<?php } ?>
<?php if (isset($_GET['gateway']) && $_GET['gateway']== 'cash') { ?>

  <div class="crypto-wallet-card">
    <h2 class="crypto-name">Deposit your money</h2>
    <img src="img/pay/Bkash-Payment-QR-Code-Creative-Tech-Park-1.jpg" alt="" class="bkash_img">
    <div class="deposit_details">
    <p style="margin-bottom:10px;">Enter your transaction details</p>

    <form action="action/deposit_fetch.php?gateway=<?php echo $_GET['gateway'] ?>" method="post">
        <label for="transaction">Transaction code</label>
        <input type="text" placeholder="Enter your transaction Code" required name="txd_id">
        <label for="transaction">Transaction Amount</label>
        <input type="text" placeholder="Enter your transaction Amount" required name="amount">
        <div class="text-box btn">
          <input type="submit" value="deposit" class="btn btn-animate" name="crypto_submit">
        </div>
    </form>
  </div>
  </div>

<?php } ?>

<?php if (isset($_GET['gateway']) && $_GET['gateway']== 'card') { ?>

  <div class="crypto-wallet-card bank_card">
    <div class="crypto-wallet-header">
      <h2 class="crypto-name">Deposit using Card</h2>
    </div>
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
      <div class="text-box btn">
        <input type="submit" value="deposit" class="btn btn-animate">
      </div>
  </div>

<?php } ?>



<?php
  include_once('include/footer.php');
?>
