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
										<h1>Welsh Corgi</h1>
									</header>
									<span class="image main"><img src="images/pic13.jpg" alt="" /></span>
									  <h2>Origine</h2>
									<p>??nregistr??rile arat?? c?? rasa de c??ini Pembroke Welsh Corgi exist?? ??nc?? din 920 ??.e.n. Se crede c?? au fost crea??i de ??es??torii flamanzi ??i c?? erau foarte populari ??n secolele XIV ??? XVIII ca ??i conduc??tori ale vitelor. Corgi Cardigan ??i Pembroke au fost recunoscute ca rase separate ??n 1934.</p>
									  <h2>Personalitate</h2>
									<p>Pembroke Corgi este ??n general un c????el ascult??tor ??i activ. Este ??ndr??zne??, sociabil ??i prietenos ??? ni??te c??ini mari ??n corpuri mici. Sunt ascult??tori ??i loiali familiei ??i sunt ideali ??ntr-o familie activ??, ocupat??. Sunt buni c??ini de paz??, fiind activi ??n cas?? ??i gata oric??nd s?? anun??e vizitatorii.</p>
									  <h2>S??n??tate</h2>
                  <p>Welsh Corgi (Pembroke) este ??n general o ras?? foarte rezistent??. ??ns??, ca multe alte rase, pot suferi de boli ereditare ale ochilor ??i de displazie de ??old (o afec??iune care poate duce la probleme de mobilitate). De aceea, testarea ochilor ??i evaluarea ??oldurilor c??inilor ??nainte de ??mperechere sunt importante. Forma corpului lor ??i predispune de asemenea la hernie de disc.</p>
                    <h2>Exerci??ii</h2>
                  <p>De??i are picioare scurte, Pembroke Corgi a fost crescut s?? m??ne vitele ??i ??nc?? are mult?? energie ??i determinare. Un adult are nevoie de minim o or?? de mi??care.</p>
                    <h2>Nutri??ie</h2>
									<p>Dieta c??inelui t??u trebuie s?? con??in?? o un raport echilibrat de substan??e din principalele grupe de nutrien??i, inclusiv o cantitate constant?? de ap?? proasp??t??.</p>
									  <h2>??ngrijire</h2>
									<p>Blana unui Pembroke Welsh Corgi este de lungime medie, dreapt?? ??i rezistent?? la ap??, cu un strat inferior dens. Aceast?? blan?? are nevoie de pu??in timp pentru ??ngrijire. C??inii trebuie s?? fie peria??i pentru a ??ndep??rta p??rul c??zut ??i mort. Dac?? se plimb?? prin noroi e u??or s?? cure??i murd??ria dup?? ce se usuc??.</p>
                    <h2>Cele mai bune rase de c??ini pentru copii</h2>
                  <p>De??i majoritatea c??inilor sunt considera??i ??n mod tradi??ional c?? au un comportament frumos fa???? de copii, to??i c??inii ??i copiii trebuie ??nv????a??i s?? se ??n??eleag?? ??i s?? se respecte reciproc, pentru a fi ??n siguran???? ??mpreun??. Chiar ??i a??a, c??inii ??i copiii mici nu ar trebui s?? fie l??sa??i singuri ??mpreun??, iar adul??ii ar trebui s?? supravegheze toate interac??iunile dintre ei</p>
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
