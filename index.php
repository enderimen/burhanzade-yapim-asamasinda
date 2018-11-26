<!DOCTYPE html>
<html lang="en">
<head>
	<title>Burhanzade</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact3" style="background-image: url('images/unsplash.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<?php if(isset($_GET['state'])) { if ($_GET['state'] == "true") { ?>
					<div class="alert alert-success alert-dismissible">
					  	<strong class="align-center">Mesajınız İletildi!</strong>
					</div>
				<?php } else { ?>
					<div class="alert alert-danger alert-dismissible">
					  	<strong class="text-center">Üzgünüz mesajınız iletilemedi! <br> Dilerseniz tekrar deneyebilirsiniz.</strong>
					</div>
				<?php } }?>
				<form class="contact3-form validate-form" method="POST" action="config.php">
					<span class="contact3-form-title">
						<h4>Yapım <br>aşamasındayız!</h4>
						<i class="fa fa-hourglass-o fa-x space"></i>
						<h4 class="white">İletişim</h4>
					</span>

					<div class="wrap-input3 validate-input" data-validate="İsim alanı gerekli!">
						<input class="input3" type="text" name="name" placeholder="Adınız">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate="Soyadı alanı gerekli!">
						<input class="input3" type="text" name="surname" placeholder="Soyadınız">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Mail adresi gerekli: ornek@mail.com">
						<input class="input3" type="email" name="email" placeholder="E-mail adresiniz">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Konu başlığı gerekli!">
						<input class="input3" type="text" name="subject" placeholder="Konu başlığı">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Mesaj alanı gerekli!">
						<textarea class="input3" name="message" placeholder="Mesajınızı giriniz..."></textarea>
						<span class="focus-input3"></span>
					</div>

					<div class="container-contact3-form-btn pull-right">
						<input type="submit" class="contact3-form-btn" value="Gönder">
					</div>
				</form>
				<p>© Copyright burhanzade.com</p>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  	$(document).ready(function() {
    
    setTimeout(function() {
        $(".alert").alert('close');
    }, 3000);
});
</script>

</body>
</html>
