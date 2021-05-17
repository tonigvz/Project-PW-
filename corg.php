<?php
class dog_calc
{
  private $human_y;
  private $dog_y;
  public function __construct() {
    $this->human_y = $_POST['hy'];
  }

  public function display()
  {
    echo $this -> human_y;

  }
  public function conv()
  {
   if($this->human_y == 1){
    $dog_y=15;
    echo $dog_y;
  }
  if($this->human_y == 2){
   $dog_y=24;
   echo $dog_y;
  }
  if($this->human_y >= 3){
   $dog_y=(log($this->human_y)*16)+31;
   echo $dog_y;
  }
  }
	public function death()
	{
		$dog_y=15-$this->human_y;
		echo $dog_y;
	}

}

$dog = new dog_calc;
$dog ->conv();

?>



<!DOCTYPE HTML>
<!--
	Buddy by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Welsh Corgi - Buddy</title>
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
                <li><a href="#one">Rase</a></li>
                <li><a href="survey.html">Survey</a></li>
              </ul>
              <ul class="actions stacked">
                <li><a href="register.html" class="button primary fit">Register</a></li>
                <li><a href="login.html" class="button fit">Log In</a></li>
              </ul>
            </nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Welsh Corgi</h1>
									</header>
									<span class="image main"><img src="images/pic13.jpg" alt="" /></span>
									  <h2>Origine</h2>
									<p>Înregistrările arată că rasa de câini Pembroke Welsh Corgi există încă din 920 î.e.n. Se crede că au fost creați de țesătorii flamanzi și că erau foarte populari în secolele XIV – XVIII ca și conducători ale vitelor. Corgi Cardigan și Pembroke au fost recunoscute ca rase separate în 1934.</p>
									  <h2>Personalitate</h2>
									<p>Pembroke Corgi este în general un cățel ascultător și activ. Este îndrăzneț, sociabil și prietenos – niște câini mari în corpuri mici. Sunt ascultători și loiali familiei și sunt ideali într-o familie activă, ocupată. Sunt buni câini de pază, fiind activi în casă și gata oricând să anunțe vizitatorii.</p>
									  <h2>Sănătate</h2>
                  <p>Welsh Corgi (Pembroke) este în general o rasă foarte rezistentă. Însă, ca multe alte rase, pot suferi de boli ereditare ale ochilor și de displazie de șold (o afecțiune care poate duce la probleme de mobilitate). De aceea, testarea ochilor și evaluarea șoldurilor câinilor înainte de împerechere sunt importante. Forma corpului lor îi predispune de asemenea la hernie de disc.</p>
                    <h2>Exerciții</h2>
                  <p>Deși are picioare scurte, Pembroke Corgi a fost crescut să mâne vitele și încă are multă energie și determinare. Un adult are nevoie de minim o oră de mișcare.</p>
                    <h2>Nutriție</h2>
									<p>Dieta câinelui tău trebuie să conțină o un raport echilibrat de substanțe din principalele grupe de nutrienți, inclusiv o cantitate constantă de apă proaspătă.</p>
									  <h2>Îngrijire</h2>
									<p>Blana unui Pembroke Welsh Corgi este de lungime medie, dreaptă și rezistentă la apă, cu un strat inferior dens. Această blană are nevoie de puțin timp pentru îngrijire. Câinii trebuie să fie periați pentru a îndepărta părul căzut și mort. Dacă se plimbă prin noroi e ușor să cureți murdăria după ce se usucă.</p>
                    <h2>Cele mai bune rase de câini pentru copii</h2>
                  <p>Deși majoritatea câinilor sunt considerați în mod tradițional că au un comportament frumos față de copii, toți câinii și copiii trebuie învățați să se înțeleagă și să se respecte reciproc, pentru a fi în siguranță împreună. Chiar și așa, câinii și copiii mici nu ar trebui să fie lăsați singuri împreună, iar adulții ar trebui să supravegheze toate interacțiunile dintre ei</p>
								</div>
							</section>


              <section id="two">
                <div class="inner">
                  <header class="major">
                    <h2>Vrei sa stii cati ani are animalul tau?</h2>
                  </header>
                  <p>In medie un corgi traieste intre 12 si 15 ani .Foloseste calculatorul de mai jos pentru a afla cati ani are de fapt cainele tau:</p>
                  <form method="post" action="corg.php">
                  <ul class="actions">
                    <li><input type="text" id="human_years" name="hy">
                    <li><input type="submit" value="Calculeaza"></li>
                    <li><p>Varsta animalului tau este:<p></li>
                    <li><p><?php $dog ->conv(); ?></p></li>
                    <li><p>Animalul tau va mai trai:<p></li>
                    <li><p><?php $dog ->death(); ?></p></li>
                  </ul>
                </form>
                </div>
              </section>
					</div>

					<!-- Contact -->
						<section id="contact">
							<div class="inner">
								<section>
									<form method="post" action="sendmes.php">
										<div class="fields">
											<div class="field half">
												<label for="name">Nume</label>
												<input type="text" name="namem" id="name" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="text" name="emailm" id="email" />
											</div>
											<div class="field">
												<label for="message">Mesaj</label>
												<textarea name="message" id="messagem" rows="6"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Trimite Mesaj" class="primary" /></li>
											<li><input type="reset" value="Clear" /></li>
										</ul>
									</form>
								</section>
								<section class="split">
									<section>
										<div class="contact-method">
											<span class="icon solid alt fa-envelope"></span>
											<h3>Email</h3>
											<a href="#">buddypw21@gmail.com</a>
										</div>
									</section>
									<section>
										<div class="contact-method">
											<span class="icon solid alt fa-phone"></span>
											<h3>Telefon</h3>
											<span>*4466 </span>
										</div>
									</section>
									<section>
										<div class="contact-method">
											<span class="icon solid alt fa-home"></span>
											<h3>Address</h3>
											<span>Bulevardul București 39<br />
											Ploiești, PH 100008<br />
											Romania</span>
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
