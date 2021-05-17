<?php
class cat_calc
{
  private $human_y;
  private $cat_y;
	private $early;
	private $later;
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
    $cat_y=15;
    echo $cat_y;
  }
  if($this->human_y == 2){
   $cat_y=24;
   echo $cat_y;
  }
  if($this->human_y >= 3){
		$early=24;
		$later=($this->human_y-2)*4;
   $cat_y=$early+$later;
   echo $cat_y;
  }
  }
	public function death()
	{
		$cat_y=22-$this->human_y;
		echo $cat_y;
	}

}

$dog = new cat_calc;
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
		<title>Balineză - Buddy</title>
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

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Balineză</h1>
									</header>
									<span class="image main"><img src="images/pic16.jpg" alt="" /></span>
									  <h2>Origine</h2>
									<p>Pisica Balineză este de fapt o Siameză cu părul lung. Observate pentru prima dată la începutul secolului XX, crescătorii au renunțat inițial la pisicuțele cu părul lung. După cel de-al doilea Război Mondial rasa s-a dezvoltat și după ce a fost denumită inițial „Siameza cu păr lung” a fost redenumită „Balineză” datorită asemănării pisicilor cu dansatorii eleganți din templele din Orientul Îndepărtat. În 1961 pisica Balineză a fost recunoscută în America, însă abia la jumătatea anilor 1970s rasa Balineză a fost importată în Europa.</p>
									  <h2>Personalitate</h2>
									<p>Temperamentul rasei de pisici Balineze este asemănător temperamentului Siamezelor, însă unii proprietari cred că Balineza este cumva mai liniștită. Cu toate acestea, este posibil ca pisica Balineză să fie oarecum extrovertită și să solicite atenție din partea companionilor ei umani. Pisicile Balineze sunt extrem de vocale și aproape că par să le vorbească stăpânilor lor. Au nevoie să facă parte din familie și nevoia lor de atenție înseamnă că le place compania oamenilor, nefiind potrivită cuiva care este toată ziua plecat de acasă.</p>
									  <h2>Sănătate</h2>
                  <p>Din cauza legăturilor ei cu Siamezele, rasa Balineză poate suferi de boli ereditare similare.</p>
                    <h2>Nutriție</h2>
									<p>Fiecare pisică este unică și fiecare are propriile preferințe, mofturi și nevoi când vine vorba de mâncare. Cu toate acestea, pisicile sunt carnivore și fiecare dintre ele trebuie să obțină 41 de nutrienți diferiți și specifici din alimentație. Proporția acestor nutrienți variază în funcție de vârstă, stil de viață și starea generală de sănătate, deci nu e deloc surprinzător că un pui energic aflat în creștere are nevoie de o balanță diferită de nutrienți în dietă decât o pisică adultă mai puțin activă. Alte aspecte pe care trebuie sa le ai în vedere sunt: administrarea cantității corecte de mâncare pentru a menține o formă ideală, în conformitate cu instrucțiunile de hrănire și livrarea hranei în funcție de preferințele individuale respectând rețetele de mâncare uscată sau umedă.</p>
									  <h2>Îngrijire</h2>
									<p>Pisica Balineză are de asemenea nevoie de îngrijire regulată și frecventă pentru a-și păstra blana frumoasă și fină, fără și câlți. Ca orice altă pisică, și pisica Balineză are nevoie de vaccinări regulate, deparazitare și controale de sănătate anuale.</p>
                    <h2>Potrivită pentru copii?</h2>
                  <p>Deși această rasă nu este recunoscută pe scară largă ca fiind una dintre cele mai bune rase pentru copii, toate pisicile sunt diferite și, cu familiarizarea adecvată, ar putea fi un bun companion pentru aceștia.</p>
								</div>
							</section>
							<section id="two">
                <div class="inner">
                  <header class="major">
                    <h2>Vrei sa stii cati ani are animalul tau?</h2>
                  </header>
                  <p>In medie o balineză traieste intre 18 si 22 ani .Foloseste calculatorul de mai jos pentru a afla cati ani are de fapt pisica ta:</p>
                  <form method="post" action="bal.php">
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
