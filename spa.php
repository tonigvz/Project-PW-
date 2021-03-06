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
									<p>Rasa de c??ini Cocker Spaniel Englez este una dintre cele mai vechi rase de spaniel de p??m??nt. Ea ????i are originile ??n secolul al XIV-lea ??n Spania. ??nainte de anii 1600 toate tipurile de spaniel au fost categorisite laolalt??; cele mai mari erau folosite pentru a alerga v??natul, iar cele mai mici pentru a scoate sitarii din ascunz??tori. De aici au derivat numele Springer ??i Cocker. ??n 1892, organiza??ia Kennel Club din Marea Britanie a consemnat separat cele dou?? rase. De cealalt?? parte a Atlanticului, americanii foloseau acela??i fond de ??mperechere pentru a dezvolta un Cocker u??or diferit, cunoscut acum drept Cockerul Spaniel American.</p>
									  <h2>Personalitate</h2>
									<p>Ace??ti c??ini agita??i, prieteno??i, ador?? compania oamenilor, iar tot ce-??i doresc este s?? le fac?? pl??cere st??p??nilor lor. Sunt animale de companie ideale acolo unde sunt copii ??i se ??n??eleg bine cu celelalte animale din gospod??rie. Cockerii Spaniel sunt o ras?? foarte fericit??, care dau tot timpul din coad?? ??i fac ???cadouri" tuturor. Sunt u??or de dresat, fiind dornici s?? ??nve??e ??i s?? bucure.</p>
									  <h2>S??n??tate</h2>
                  <p>Unele dintre cele mai frecvente probleme ??nt??lnite la Cockerul Spaniel Englez sunt infec??iile urechii, cauzate de urechile lor mari ??i at??rnate. Ca majoritatea raselor, ??i ace??tia pot suferi de diverse boli ereditare ale ochilor ??i de displazie de ??old (o boal?? care poate duce la probleme de mobilitate). De aceea verificarea ochilor ??i evaluarea ??oldurilor c??inilor ??nainte de ??mperechere sunt importante.</p>
                    <h2>Exerci??ii</h2>
                  <p>Ace??ti c??ini se adapteaz?? f??r?? efort la situa??ia familiei, ??ns?? aminte??te-??i c?? c?? sunt c??ini de v??n??toare ??i, ca atare, ar trebui s?? fac?? mult?? mi??care ??? minimum o or?? pe zi, de preferat mai mult. Le place s?? ??noate, a??a c?? trebuie s?? ai grij?? c??nd e??ti ??n preajma apei, pentru a le asigura siguran??a. Las??-le timp s?? se joace f??r?? les??, pentru a-??i consuma energia.</p>
                    <h2>Nutri??ie</h2>
									<p>Dieta c??inelui t??u trebuie s?? con??in?? un echilibru corect de substan??e din principalele grupe de nutrien??i, inclusiv o cantitate constant?? de ap?? proasp??t??. Este important s?? ??l analizezi constant pentru a te asigura c?? e ??ntr-o form?? bun??. Hr??ne??te-l de cel pu??in 2 ori pe zi, ??in??nd cont de ghidul s??u de hr??nire.</p>
									  <h2>??ngrijire</h2>
									<p>Blana lor trebuie periat?? de mai multe ori pe s??pt??m??n??, iar urechile verificate regulat, pentru a te asigura c?? sunt curate ??i s??n??toase. Ar trebui s?? fie tun??i de 3 sau 4 ori pe an de un specialist, ??ns?? po??i ??nv????a ??i tu cum s?? faci asta.</p>
                    <h2>Cele mai bune rase de c??ini pentru copii</h2>
                  <p>De??i majoritatea c??inilor sunt considera??i ??n mod tradi??ional c?? au un comportament frumos fa???? de copii, to??i c??inii ??i copiii trebuie ??nv????a??i s?? se ??n??eleag?? ??i s?? se respecte reciproc, pentru a fi ??n siguran???? ??mpreun??. Chiar ??i a??a, c??inii ??i copiii mici nu ar trebui s?? fie l??sa??i singuri ??mpreun??, iar adul??ii ar trebui s?? supravegheze toate interac??iunile dintre ei</p>
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
											<span>Bulevardul Bucure??ti 39<br />
											Ploie??ti, PH 100008<br />
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
