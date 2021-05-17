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
		<title>Cocker Spaniel - Buddy</title>
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
										<h1>Cocker Spaniel englez</h1>
									</header>
									<span class="image main"><img src="images/pic12.jpg" alt="" /></span>
									  <h2>Origine</h2>
									<p>Rasa de câini Cocker Spaniel Englez este una dintre cele mai vechi rase de spaniel de pământ. Ea își are originile în secolul al XIV-lea în Spania. Înainte de anii 1600 toate tipurile de spaniel au fost categorisite laolaltă; cele mai mari erau folosite pentru a alerga vânatul, iar cele mai mici pentru a scoate sitarii din ascunzători. De aici au derivat numele Springer și Cocker. În 1892, organizația Kennel Club din Marea Britanie a consemnat separat cele două rase. De cealaltă parte a Atlanticului, americanii foloseau același fond de împerechere pentru a dezvolta un Cocker ușor diferit, cunoscut acum drept Cockerul Spaniel American.</p>
									  <h2>Personalitate</h2>
									<p>Acești câini agitați, prietenoși, adoră compania oamenilor, iar tot ce-și doresc este să le facă plăcere stăpânilor lor. Sunt animale de companie ideale acolo unde sunt copii și se înțeleg bine cu celelalte animale din gospodărie. Cockerii Spaniel sunt o rasă foarte fericită, care dau tot timpul din coadă și fac „cadouri" tuturor. Sunt ușor de dresat, fiind dornici să învețe și să bucure.</p>
									  <h2>Sănătate</h2>
                  <p>Unele dintre cele mai frecvente probleme întâlnite la Cockerul Spaniel Englez sunt infecțiile urechii, cauzate de urechile lor mari și atârnate. Ca majoritatea raselor, și aceștia pot suferi de diverse boli ereditare ale ochilor și de displazie de șold (o boală care poate duce la probleme de mobilitate). De aceea verificarea ochilor și evaluarea șoldurilor câinilor înainte de împerechere sunt importante.</p>
                    <h2>Exerciții</h2>
                  <p>Acești câini se adaptează fără efort la situația familiei, însă amintește-ți că că sunt câini de vânătoare și, ca atare, ar trebui să facă multă mișcare – minimum o oră pe zi, de preferat mai mult. Le place să înoate, așa că trebuie să ai grijă când ești în preajma apei, pentru a le asigura siguranța. Lasă-le timp să se joace fără lesă, pentru a-și consuma energia.</p>
                    <h2>Nutriție</h2>
									<p>Dieta câinelui tău trebuie să conțină un echilibru corect de substanțe din principalele grupe de nutrienți, inclusiv o cantitate constantă de apă proaspătă. Este important să îl analizezi constant pentru a te asigura că e într-o formă bună. Hrănește-l de cel puțin 2 ori pe zi, ținând cont de ghidul său de hrănire.</p>
									  <h2>Îngrijire</h2>
									<p>Blana lor trebuie periată de mai multe ori pe săptămână, iar urechile verificate regulat, pentru a te asigura că sunt curate și sănătoase. Ar trebui să fie tunși de 3 sau 4 ori pe an de un specialist, însă poți învăța și tu cum să faci asta.</p>
                    <h2>Cele mai bune rase de câini pentru copii</h2>
                  <p>Deși majoritatea câinilor sunt considerați în mod tradițional că au un comportament frumos față de copii, toți câinii și copiii trebuie învățați să se înțeleagă și să se respecte reciproc, pentru a fi în siguranță împreună. Chiar și așa, câinii și copiii mici nu ar trebui să fie lăsați singuri împreună, iar adulții ar trebui să supravegheze toate interacțiunile dintre ei</p>
								</div>
							</section>
							<section id="two">
                <div class="inner">
                  <header class="major">
                    <h2>Vrei sa stii cati ani are animalul tau?</h2>
                  </header>
                  <p>In medie un Cocker Spaniel traieste intre 12 si 15 ani .Foloseste calculatorul de mai jos pentru a afla cati ani are de fapt cainele tau:</p>
                  <form method="post" action="spa.php">
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
											<a href="#">information@buddy.com</a>
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
