<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-BR">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adriano - Portfólio</title>

	<!--CSS FILES -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/styleadr.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<!-- JS FILES -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/notify.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/retina.min.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/main.js"></script>
</head>

<body>
	<!-- Notificação de Bem vindo -->
	<script>
		$.notify("Bem vindo!", "success");
	</script>
	<!-- Header Section -->
	<section class="banner" role="banner">
		<!-- Navigation Section -->
		<header id="header">
			<div class="header-content clearfix"> <a class="logo" href="index.php">ADRIANO</a>
				<nav class="navigation" role="navigation">
					<ul class="primary-nav">
						<li><a href="#introduction">Sobre Mim</a></li>
                        <li><a href="#experience">Experiência</a></li>
						<li><a href="#works">Principais Conhecimentos</a></li>
						<li><a href="#contact">Contato</a></li>
					</ul>
				</nav>
				<a href="#" class="nav-toggle">Menu<span></span></a> </div>
		</header>
		<!-- Navigation Section -->
		<!-- Banner Section -->
		<div class="container">
			<div class="col-md-7 banner-inner-wrapper">
				<div class="banner-text">
					<h1>Eu sou Adriano. Desenvolvedor Full-Stack</h1>
					<p>Portfolio One Page feito em Html, Css, Bootstrap, JavaScript e Php.</p>
					<a href="#introduction" class="btn">Descubra mais</a> </div>
				<!-- banner text -->
			</div>
		</div>
		<!-- Banner Section -->
	</section>
	<!-- Header Section -->
	<!-- Intro Section -->
	<section id="introduction" class="section introduction">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-6">
					<div class="intro-content">
						<h1>Sobre mim
						</h1>
					</div>
				</div>
				<div class="col-md-8 col-sm-12">
					<div class="intro-content">
						<h2>Bacharel em Ciência da Computação</h2>
						<h4>Universidade Nove de Julho - Uninove</h4>
                        <p>Formado em Ciência da Computação pela Universidade de Julho, tenho certificado de Design Gráfico pela Micro+ Informática, recentemente atuei na finalização de uma revista com o Adobe InDesign e leves edições de imagens no Photoshop.
                        Durante meu período de estudos na faculdade, atuei como programador Php aos sábados como parte de um projeto durante 6 meses, nada muito avançado, somente comandos mais básicos e integração com o banco mysql, utilizando o phpmyadmin.
                        Atualmente curso pela Udemy de forma Online, desenvolvimento em linguagem Ruby com o uso do framework Ruby on Rails, busco ingressar na área de desenvolvimento mesmo que seja um cargo júnior para poder iniciar e poder crescer seguindo esta carreira.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="intro-content">
						<h4>Certificados / Certificações</h4>
						<ul>
							<li> - Ruby on Rails - Udemy (Cursando) </li>
							<li> - Design Gráfico - Micro+ Informática </li>
							<li> - Html5 e Css3 - Curso em vídeo</li>
							<li> - PHP Básico - Curso em vídeo</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro Section -->
    <hr>
    <!-- Experience Section -->
    <section id="experience" class="section experience">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="intro-content">
                        <h1>Experiência
                        </h1>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="intro-content">
                        <p>Programador PHP - Universidade Nove de Julho</p>
                        <p>Analista Suporte Jr. - Sitel do Brasil</p>
                        <p>Web Design - SOESP (Sindicato dos Odontologistas do Estado de São Paulo)</p>
                        <p></p>
                    </div>
                </div>
                <!-- Lista caso necessária
                <div class="col-md-3 col-sm-6">
                    <div class="intro-content">
                        <h4>Certificados / Certificações</h4>
                        <ul>
                            <li> - Ruby on Rails - Udemy (Cursando) </li>
                            <li> - Design Gráfico - Micro+ Informática </li>
                            <li> - Html5 e Css3 - Curso em vídeo</li>
                            <li> - PHP Básico - Curso em vídeo</li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Experience Section -->

	<!-- work section -->
	<section id="works" class="works section no-padding">
		<div class="container-fluid">
			<div class="row no-gutter">
				<div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-1.jpg" class="work-box"> <img src="images/work-1.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay -->
        </a> </div>
				<div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-2.jpg" class="work-box"> <img src="images/work-2.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay -->
        </a> </div>
				<div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-3.jpg" class="work-box"> <img src="images/work-3.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay -->
        </a> </div>
				<div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-4.jpg" class="work-box"> <img src="images/work-4.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay -->
        </a> </div>
				<div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-5.jpg" class="work-box"> <img src="images/work-5.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay -->
        </a> </div>
				<div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-6.jpg" class="work-box"> <img src="images/work-6.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay -->
        </a> </div>
				<div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-7.jpg" class="work-box"> <img src="images/work-7.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay -->
        </a> </div>
				<div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-8.jpg" class="work-box"> <img src="images/work-8.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay -->
        </a> </div>
				<div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-9.jpg" class="work-box"> <img src="images/work-9.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay -->
        </a> </div>
				<div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-10.jpg" class="work-box"> <img src="images/work-10.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay -->
        </a> </div>
				<div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-11.jpg" class="work-box"> <img src="images/work-11.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay -->
        </a> </div>
				<div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-12.jpg" class="work-box"> <img src="images/work-12.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x"></i></p>
          </div>
        </div>
        <!-- overlay -->
        </a> </div>
			</div>
		</div>
	</section>
	<!-- work section -->

	<!-- footer section -->
	<footer id="contact" class="footer">
		<div class="container">

			<!--	Form	-->
			<div class="col-md-5">
				<h4 class="text-center">Contato direto por e-mail</h4>
				<form action="mail_send.php" method="post">
					<fieldset>
						<p><label for="email">E-mail: </label>
							<input required name="email" placeholder="E-Mail" type="email"></p>
					</fieldset>
					<fieldset>
						<p><label for="assunto">Assunto: </label>
							<input required name="assunto" placeholder="Assunto" type="assunto"></p>
					</fieldset>
					<fieldset>
						<p><label for="mensagem">Mensagem: </label><br/>
							<textarea required name="mensagem" placeholder="Digite sua mensagem"></textarea></p>
					</fieldset>
					<fieldset>
						<p><button type="submit">Enviar</button>
							<button type="reset">Limpar</button></p>
					</fieldset>
				</form>
			</div>
			<!--	end form	-->
			<div class="col-md-4">
				<h4>Informações de Contato</h4>
				<p>Celular: (11) 97339-2693 <br> Recado: (11) 3283-2482 <br> Email : <a href="mailto:adriano.andrade.silva@hotmail.com"> adriano.andrade.silva@hotmail.com </a></p>
			</div>
			<div class="col-md-3">
				<h4>Redes Sociais</h4>
				<ul class="footer-share">
					<li><a href="http://www.facebook.com/AdrianoASilva"><i class="fa fa-facebook"></i>Facebook</a></li><br>
					<li><a href="http://www.twitter.com/AdrianAndrad"><i class="fa fa-twitter"></i>Twitter</a></li><br>
					<li><a href="http://www.linkedin.com/in/AdrianoA1/"><i class="fa fa-linkedin"></i>Linkedin</a></li><br>
					<li><a href="https://github.com/Adriano0106"><i class="fa fa-git"></i>Github</a></li><br>
				</ul>
				<!-- <p></p> -->
			</div>

		</div>

		<div id="rodape">
			<p>© 2015 All rights reserved. All Rights Reserved Made with <i class="fa fa-heart pulse"></i> by <a href="http://www.designstub.com/">Designstub</a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer">
					<img style="border:0;width:88px;height:31px"
					src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
					alt="CSS válido!" />
			</a></p>
		</div>
	</footer>
	<!-- footer section -->

</body>

</html>
