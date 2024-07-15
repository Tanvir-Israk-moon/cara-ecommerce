<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
<div class="form-structor">
	<div class="signup">
		<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
		
		<form action="action/signup_fetch.php" method="post">
			<div class="form-holder">
			<?php
				if (isset($_GET['error'])) {
			?>
				<div class="alert alert-error">
					<div class="icon__wrapper">
						<span class="mdi mdi-alert-outline"></span>
					</div>
					<p class="error_txt"> <?php echo $_GET['error']; ?></p>
				</div>
			<?php 
				}
			?>

				<input type="text" class="input" placeholder="Full Name" name="full_name" value="<?php if (isset($_SESSION['name'])) { echo $_SESSION['name']; } ?>">

				<input type="number" class="input" placeholder="Contact Number" name="contact_number" value="<?php if (isset($_SESSION['contact'])) { echo $_SESSION['contact']; } ?>">

				<input type="email" class="input" placeholder="Email Address" name="email_address" value="<?php if (isset($_SESSION['email'])) { echo $_SESSION['email']; } ?>">

				<input type="password" class="input" placeholder="Password" name="password" value="<?php if (isset($_SESSION['password'])) { echo $_SESSION['password']; } ?>">
				
				<input type="password" class="input" placeholder="Conform Password" name="conform_password"  value="<?php if (isset($_SESSION['con_password'])) { echo $_SESSION['con_password']; } ?>">	
			</div>
			<input type="submit" value="Sign up" class="submit-btn" name="signup">
		</form>
	</div>

<!-- login  -->

	<div class="login slide-up" id="login_section">
		<div class="center">
			<h2 class="form-title" id="login"><span>or</span>Log in</h2>
			<form action="action/login_fetch.php" method="post">
				<div class="form-holder">
					<?php
						if (isset($_SESSION["password_not_match"]) || isset($_SESSION["email_not_found"]) || isset($_SESSION["empty_email"])) {
					?>
						<div class="alert alert-error">
							<div class="icon__wrapper">
								<span class="mdi mdi-alert-outline"></span>
							</div>
							<p class="error_txt"> <?php if (isset($_SESSION["password_not_match"])){echo $_SESSION["password_not_match"];} ?></p>
							<p class="error_txt"> <?php if (isset($_SESSION["email_not_found"])){echo $_SESSION["email_not_found"];} ?></p>
							<p class="error_txt"> <?php if (isset($_SESSION["empty_email"])){echo $_SESSION["empty_email"];} ?></p>
						</div>
					<?php 
						}
					?>
					<input type="email" class="input" placeholder="Email" name="EMAIL" value="<?php if (isset($_SESSION['EMAIL'])) { echo $_SESSION['EMAIL']; } ?>">
					<input type="password" class="input" placeholder="Password" name="PASSWORD" value="<?php if (isset($_SESSION['PASSWORD'])) { echo $_SESSION['PASSWORD']; } ?>">
				</div>
				<input type="submit" value="Log in" class="submit-btn" name="login">
				
			</form>
		</div>
	</div>
</div>
  <!-- <script  src="js/login.js"></script> -->
<script>
	document.addEventListener('DOMContentLoaded', function() {
    const loginBtn = document.getElementById('login');
    const signupBtn = document.getElementById('signup');


	const targetDiv = document.getElementById('login_section');

	function getParameterByName(name, url) {
	if (!url) url = window.location.href;
	name = name.replace(/[[\]]/g, '\\$&');
	var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
			results = regex.exec(url);
		if (!results) return null;
		if (!results[2]) return '';
		return decodeURIComponent(results[2].replace(/\+/g, ' '));
	}

	const complexVarParam = getParameterByName('var');
    if (complexVarParam === 'complex' && targetDiv) {
		targetDiv.classList.remove('slide-up');
		signupBtn.parentNode.classList.add('slide-up');

	}
					


    loginBtn.addEventListener('click', function(e) {
        let parent = e.target.parentNode.parentNode;
        Array.from(e.target.parentNode.parentNode.classList).find((element) => {
            if (element !== "slide-up") {
                parent.classList.add('slide-up');
            } else {
                signupBtn.parentNode.classList.add('slide-up');
                parent.classList.remove('slide-up');
            }
        });
    });

    signupBtn.addEventListener('click', function(e) {
        let parent = e.target.parentNode;
        Array.from(e.target.parentNode.classList).find((element) => {
            if (element !== "slide-up") {
                parent.classList.add('slide-up');
            } else {
                loginBtn.parentNode.parentNode.classList.add('slide-up');
                parent.classList.remove('slide-up');
            }
        });
    });
});

</script>
</body>
</html>
