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
		$cat_y=15-$this->human_y;
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
		<title>British Shorthair - Buddy</title>
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
										<h1>British Shorthair</h1>
									</header>
									<span class="image main"><img src="images/pic14.jpg" alt="" /></span>
									  <h2>Origine</h2>
									<p>Pisica British Shorthair este una dintre cele mai populare rase cu pedigree. De??i exist?? ??nregistr??ri scrise legate de British Shorthair doar de la ??nceputul secolului, rasa exist?? de c??teva sute de ani. Au fost exportate ??n num??r mare ??n Lumea Nou?? (America), unde au devenit foarte populare. Diversitatea de culori ??i modele ale bl??nii disponibile ast??zi a ap??rut ca urmare a cre??terii selective a celor mai bune pisici maidaneze ??n secolul al XIX-lea ??i a planurilor atente de cre??tere men??inute p??n?? ??n prezent.</p>
									  <h2>Personalitate</h2>
									<p>Unii consider?? c?? pisicile British Shorthair sunt ???uria??ii bl??nzi??? ai lumii pisicilor. Sunt iubitoare ??i afectuoase cu oamenii ??i cu alte animale. Pisicile British Shorthair nu solicit?? aten??ie uman?? continu??, sunt mai t??cute dec??t corespondentele lor orientale ??i nici nu au firea curioas?? care le bag?? ??n bucluc pe multe dintre pisicile orientale!</p>
									  <h2>S??n??tate</h2>
                  <p>Pisicile British Shorthair sunt ??n general o ras?? robust??, f??r?? prea multe probleme. Deoarece au fost crescute ??mpreun?? cu pisicile persane ??n trecut, exist?? o mic?? ??ans?? s?? fie dezvolte afec??iunea rinichilor polichistici. Aceast?? boal?? provoac?? probleme la rinichi din cauza chisturilor sau a cavit????ilor care apar progresiv. Exist?? un test genetic disponibil, prin urmare merit?? ??ntreba??i cresc??torii cu privire la starea pisicilor lor ??? cresc??torii buni ar trebui s?? ??tie despre el.</p>
                    <h2>Nutri??ie</h2>
									<p>Fiecare pisic?? este unic?? ??i fiecare are propriile preferin??e, mofturi ??i nevoi c??nd vine vorba de m??ncare. Cu toate acestea, pisicile sunt carnivore ??i fiecare dintre ele trebuie s?? ob??in?? 41 de nutrien??i diferi??i ??i specifici din alimenta??ie. Propor??ia acestor nutrien??i variaz?? ??n func??ie de v??rst??, stil de via???? ??i starea general?? de s??n??tate, deci nu e deloc surprinz??tor c?? un pui energic aflat ??n cre??tere are nevoie de o balan???? diferit?? de nutrien??i ??n diet?? decat pisic?? adult?? mai pu??in activ??. Alte aspecte pe care trebuie sa le ai ??n vedere sunt: administrarea cantit????ii corecte de m??ncare pentru a men??ine o form?? ideal??, ??n conformitate cu instruc??iunile de hr??nire ??i livrarea hranei ??n func??ie de preferin??ele individuale respect??nd re??etele de m??ncare uscat?? sau umed??.</p>
									  <h2>??ngrijire</h2>
									<p>Unul dintre motivele pentru care pisica British Shorthair a devenit at??t de popular?? ??n ultimul secol este c?? avea nevoie de pu??in?? ??ngrijire. Blana este scurt?? ??i deas??, iar pisica o poate ??ngriji singur?? cu u??urin????. Ca ??n cazul tuturor pisicilor, se recomand?? vaccinarea ??i deparazitarea regulat??.</p>
                    <h2>Potrivit?? pentru copii?</h2>
                  <p>De??i aceast?? ras?? nu este recunoscut?? pe scar?? larg?? ca fiind una dintre cele mai bune rase pentru copii, toate pisicile sunt diferite ??i, cu familiarizarea adecvat??, ar putea fi un bun companion pentru ace??tia.</p>
								</div>
							</section>
							<section id="two">
                <div class="inner">
                  <header class="major">
                    <h2>Vrei sa stii cati ani are animalul tau?</h2>
                  </header>
                  <p>In medie o British Shorthair traieste 15 ani .Foloseste calculatorul de mai jos pentru a afla cati ani are de fapt pisica ta:</p>
                  <form method="post" action="bri.php">
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
