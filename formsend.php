<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'buddypw21@gmail.com';
$mail->Password = '8g2uMxbZjC';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;



$mail->setFrom('private.gcode@gmail.com', 'Private');



$mail->addAddress($_POST['email']);


$mail->isHTML(true);


$mail->Subject = 'Buddy - Request -'.$_POST['cat_rasa'];


$bodyContent = '<h2>'.$_POST['name'].'</h2> <h3>doreste sa prezinte un animal din rasa<h3> <h2>'.$_POST['cat_rasa'].'</h2>';
$bodyContent .= '<h2>Desciere:</h2>'.'<h3>'.$_POST['message'];
$mail->Body    = $bodyContent;


if(!$mail->send()) {
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
} else {
    echo 'Message has been sent.';
}

?>

<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Formular - Buddy by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo"><strong>Buddy</strong></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

          <!-- Menu -->
  					<nav id="menu">
  						<ul class="links">
  							<li><a href="index.html">Home</a></li>
  							<li><a href="index.html#one">Rase</a></li>
  							<li><a href="survey.html">Sondaj</a></li>
                <li><a href="table.html">Tabel</a></li>
  						</ul>
  						<ul class="actions stacked">
  							<li><a href="register.html" class="button primary fit">Register</a></li>
  							<li><a href="login.html" class="button fit">Log In</a></li>
  						</ul>
  					</nav>

				<!-- Main -->
					<div id="main" class="alt">
            <h1>Multumim!</h1>
            <p>Aceasta este informatia pe care tocmai ai trimis-o:</p>
            <ol><li><em>Nume:</em> <?php echo $_POST["name"]?></li>
            <li><em>Email:</em> <?php echo $_POST["email"]?></li>
            <li><em>Rasa:</em> <?php echo $_POST["cat_rasa"]?></li>
            <li><em>Descriere:</em> <?php echo $_POST["message"]?></li>
            </ol>
					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="sendmes.php">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="namem" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="emailm" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="messagem" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">information@untitled.tld</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(000) 000-0000 x12387</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Address</h3>
										<span>1234 Somewhere Road #5432<br />
										Nashville, TN 00000<br />
										United States of America</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
