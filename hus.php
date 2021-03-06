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
									<p>Rasa de c??ini Husky Siberian era folosit?? de tribul Chukchi de pe R??ul Kolyma din Siberia, ??n secolul al XIX-lea. Temperamentul echilibrat al rasei poate fi atribuit probabil tratamentului bl??nd primit de la tribul Chukchi. Cum s??niile cu c??ini erau principalul mijloc de transport, ace??ti husky aveau o importan???? extraordinar?? pentru oamenii locului. Primii Husky Siberieni au sosit ??n Alaska la ??nceputul secolului al XX-lea, fiind cunoscu??i tot sub numele de Chukchi. Tot cam pe atunci au devenit populare cursele de s??nii, iar viteza acestor c??ini i-a uimit ??i i-a inspirat pe organizatorii de curse de c??ini din America. Americanii au fost cei care au redenumit rasa Husky Siberian.</p>
									  <h2>Personalitate</h2>
									<p>Rasa este cunoscut?? pentru temperamentul ei bl??nd, ??ns?? dragostea lor pentru oameni ??i face s?? nu fie cei mai potrivi??i c??ini de paz??. Iubesc compania ??i au nevoie de ea. De aceea nu ar trebui s?? fie l??sa??i singuri perioade lungi de timp, pentru c?? pot deveni foarte distructivi. Se vor ??n??elege bine cu al??i c??ini bine adapta??i, dar sunt v??n??tori iu??i ??i eficien??i, astfel ??nc??t contactul cu alte animale din gospod??rie trebuie f??cut cu aten??ie ??i cu dresaj. De??i nu latr?? mult, url?? de cele mai multe ori doar din pur?? pl??cere!</p>
									  <h2>S??n??tate</h2>
                  <p>Husky Siberian este ??n general o ras?? s??n??toas??, rezistent??. Cu toate acestea, ca ??i ??n cazul altor rase, pot suferi de boli ereditare ale ochilor ??i ocazional de displazie de ??old (o afec??iune care poate duce la probleme de mobilitate). De aceea, testarea ochilor ??i evaluarea ??oldurilor c??inilor ??nainte de ??mperechere sunt importante.</p>
                    <h2>Exerci??ii</h2>
                  <p>Aceast?? ras?? are nevoie de mult?? mi??care, ??ns?? aceasta trebuie f??cut?? ??ntr-o zon?? sigur??, ??nchis??, sau ??n les??, deoarece au o dorin???? puternic?? de a alerga dac?? sunt liberi ??i nu po??i fi sigur c?? se vor ??ntoarce la comand??. O curte cu un gard solid este o necesitate ??i, pentru c?? pot s??ri peste orice de pe loc, ??n??l??imea gardului este de asemenea important??. Un Husky Siberian adult are nevoie de peste dou?? ore de mi??care zilnic ??i de o ocazie bun?? de a alerga.</p>
                    <h2>Nutri??ie</h2>
									<p>Husky Siberian este ??n general o ras?? s??n??toas??, rezistent??. Cu toate acestea, ca ??i ??n cazul altor rase, pot suferi de boli ereditare ale ochilor ??i ocazional de displazie de ??old (o afec??iune care poate duce la probleme de mobilitate). De aceea testarea ochilor ??i evaluarea ??oldurilor c??inilor ??nainte de ??mperechere sunt importante.</p>
									  <h2>??ngrijire</h2>
									<p>??ngrijirea este foarte u??oar??: o perie sau un pieptene de dou?? sau trei ori pe s??pt??m??n?? ??n mod normal, ??ns?? ??n perioada de n??p??rlire e nevoie de ??ngrijire zilnic??. Este o ras?? curat??, care miroase foarte pu??in sau deloc a ???c????el???.</p>
                    <h2>Cele mai bune rase de c??ini pentru copii</h2>
                  <p>De??i majoritatea c??inilor sunt considera??i ??n mod tradi??ional c?? au un comportament frumos fa???? de copii, to??i c??inii ??i copiii trebuie ??nv????a??i s?? se ??n??eleag?? ??i s?? se respecte reciproc, pentru a fi ??n siguran???? ??mpreun??. Chiar ??i a??a, c??inii ??i copiii mici nu ar trebui s?? fie l??sa??i singuri ??mpreun??, iar adul??ii ar trebui s?? supravegheze toate interac??iunile dintre ei</p>
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
