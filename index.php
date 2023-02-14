<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Carmen Miranda</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.php" class="logo"><span>Carmem Miranda</span></a>
					</header>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<span class="image">
								<img src="images/Banner.png" alt="" />
							</span>
							<header class="major">
								<h1>Olá, olá! Me chamo Carmem Miranda!</h1>
							</header>
							<div class="content">
								<p>Neste site você pode descobrir um pouco mais sobre mim!</p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Venha me conhecer</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="	images/sobreMim.png" alt="" />
									</span>
									<header class="major">
										<h3><a href="sobre.php" class="link">Sobre mim</a></h3>
										<p>Venha me conhecer!</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/carreiraCantora.png" alt="" />
									</span>
									<header class="major">
										<h3><a href="cantora.php" class="link">Minha carreira como Cantora</a></h3>
										<p>O auge da fama!</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/carreiraAtriz.png" alt="" />
									</span>
									<header class="major">
										<h3><a href="atriz.php" class="link">Minha carreira de Atriz</a></h3>
										<p>Uma estrela do Brasil!</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/carreiraDançarina.png" alt="" />
									</span>
									<header class="major">
										<h3><a href="dancarina.php" class="link">Minha carreira de Dançarina</a></h3>
										<p>"Gosto muito dos aplausos de uma plateia, seja esta qual for!"</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/carmenAlbum.png" alt="" />
									</span>
									<header class="major">
										<h3><a href="./album/index.html" class="link">Meus álbuns</a></h3>
										<p>Os melhores!</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/galeria.png" alt="" />
									</span>
									<header class="major">
										<h3><a href="./galeria/index.html" class="link">Galeria</a></h3>
										<p>Fotos e pínturas minhas!</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/bastidoresprincipal.jpeg" alt="" />
									</span>
									<header class="major">
										<h3><a href="./bastidores.php" class="link">Bastidores</a></h3>
										<p>Bastidores da semana Paulo Freire</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/creditos.png" alt="" />
									</span>
									<header class="major">
										<h3><a href="creditos.php" class="link">Créditos</a></h3>
										<p>Conheça a equipe por trás desse site!</p>
									</header>
								</article>
							</section>
							
							<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<h3>Mande uma mensagem para nossos incríveis Devs!</h3>
								<p>Obrigado por visitar, se gostou do site ou tem algum comentário deixe seu feedback logo abaixo!</p>
								<?php 
									require("contato.php");
									escreveContato("index");
								?>
							</section>
						</div>


				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="https://www.facebook.com/etecctoficial/" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.instagram.com/etecct_oficial/" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="https://twitter.com/etectiradentes" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; 2ºDS - ETEC CT 2022-2023</li><li>Design: HTML5 UP</li>
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