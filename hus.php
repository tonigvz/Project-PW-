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
		<title>Husky - Buddy</title>
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
										<h1>Husky</h1>
									</header>
									<span class="image main"><img src="images/pic11.jpg" alt="" /></span>
									  <h2>Origine</h2>
									<p>Rasa de câini Husky Siberian era folosită de tribul Chukchi de pe Râul Kolyma din Siberia, în secolul al XIX-lea. Temperamentul echilibrat al rasei poate fi atribuit probabil tratamentului blând primit de la tribul Chukchi. Cum săniile cu câini erau principalul mijloc de transport, acești husky aveau o importanță extraordinară pentru oamenii locului. Primii Husky Siberieni au sosit în Alaska la începutul secolului al XX-lea, fiind cunoscuți tot sub numele de Chukchi. Tot cam pe atunci au devenit populare cursele de sănii, iar viteza acestor câini i-a uimit și i-a inspirat pe organizatorii de curse de câini din America. Americanii au fost cei care au redenumit rasa Husky Siberian.</p>
									  <h2>Personalitate</h2>
									<p>Rasa este cunoscută pentru temperamentul ei blând, însă dragostea lor pentru oameni îi face să nu fie cei mai potriviți câini de pază. Iubesc compania și au nevoie de ea. De aceea nu ar trebui să fie lăsați singuri perioade lungi de timp, pentru că pot deveni foarte distructivi. Se vor înțelege bine cu alți câini bine adaptați, dar sunt vânători iuți și eficienți, astfel încât contactul cu alte animale din gospodărie trebuie făcut cu atenție și cu dresaj. Deși nu latră mult, urlă de cele mai multe ori doar din pură plăcere!</p>
									  <h2>Sănătate</h2>
                  <p>Husky Siberian este în general o rasă sănătoasă, rezistentă. Cu toate acestea, ca și în cazul altor rase, pot suferi de boli ereditare ale ochilor și ocazional de displazie de șold (o afecțiune care poate duce la probleme de mobilitate). De aceea, testarea ochilor și evaluarea șoldurilor câinilor înainte de împerechere sunt importante.</p>
                    <h2>Exerciții</h2>
                  <p>Această rasă are nevoie de multă mișcare, însă aceasta trebuie făcută într-o zonă sigură, închisă, sau în lesă, deoarece au o dorință puternică de a alerga dacă sunt liberi și nu poți fi sigur că se vor întoarce la comandă. O curte cu un gard solid este o necesitate și, pentru că pot sări peste orice de pe loc, înălțimea gardului este de asemenea importantă. Un Husky Siberian adult are nevoie de peste două ore de mișcare zilnic și de o ocazie bună de a alerga.</p>
                    <h2>Nutriție</h2>
									<p>Husky Siberian este în general o rasă sănătoasă, rezistentă. Cu toate acestea, ca și în cazul altor rase, pot suferi de boli ereditare ale ochilor și ocazional de displazie de șold (o afecțiune care poate duce la probleme de mobilitate). De aceea testarea ochilor și evaluarea șoldurilor câinilor înainte de împerechere sunt importante.</p>
									  <h2>Îngrijire</h2>
									<p>Îngrijirea este foarte ușoară: o perie sau un pieptene de două sau trei ori pe săptămână în mod normal, însă în perioada de năpârlire e nevoie de îngrijire zilnică. Este o rasă curată, care miroase foarte puțin sau deloc a „cățel”.</p>
                    <h2>Cele mai bune rase de câini pentru copii</h2>
                  <p>Deși majoritatea câinilor sunt considerați în mod tradițional că au un comportament frumos față de copii, toți câinii și copiii trebuie învățați să se înțeleagă și să se respecte reciproc, pentru a fi în siguranță împreună. Chiar și așa, câinii și copiii mici nu ar trebui să fie lăsați singuri împreună, iar adulții ar trebui să supravegheze toate interacțiunile dintre ei</p>
								</div>
							</section>
							<section id="two">
                <div class="inner">
                  <header class="major">
                    <h2>Vrei sa stii cati ani are animalul tau?</h2>
                  </header>
                  <p>In medie un husky traieste intre 12 si 15 ani .Foloseste calculatorul de mai jos pentru a afla cati ani are de fapt cainele tau:</p>
                  <form method="post" action="hus.php">
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
