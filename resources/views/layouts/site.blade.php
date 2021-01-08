<!DOCTYPE html>
<html>
<head>
	<title>Portifolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="/resources/sass/style.css"> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('sass/style.css') }}">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
	<div class="scroll-up-btn">
		<i class="fas fa-angle-up"></i>	
	</div>
	<nav class="navbar">
		<div class="max-width">
			<div class="logo"><a href="#">Port<span>folio.</span></a></div>
			<ul class="menu">
					<li><a href="{{route('site.home')}}">Home</a></li>
					<li><a href="{{route('site.products')}}">About</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#skills">Skills</a></li>
					<li><a href="{{route('site.contact')}}">Contact</a></li>
			</ul>
			<div class="menu-btn">
				<i class="fas fa-bars"></i>
			</div>			
		</div>
	</nav>
	<!-- home section start -->
	<section class="home" id="home">
		<div class="max-width">
			<div class="home-content">
				<div class="text-1">Meu portifólio</div>
				<div class="text-2">Leo C. Dem</div>
				<div class="text-3">Canal<span>YouTuber</span></div>
				<a href="#">ligue</a>
			</div>
		</div>
	</section>

	<!-- about section start -->
	<section class="about" id="about">
		<div class="max-width">
			<h2 class="title">Sobre min</h2>
			<div class="about-content">
				<div class="column left">
					<img src="img/perfil.jpg" alt="foto de perfil">
				</div>
				<div class="right">
					<div class="text">Eu sou um desenvolvedor<span>YouTuber</span></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, quo eos? Deleniti eligendi quam molestias, alias fuga quis ab laborum aspernatur nulla quos tempora magnam provident saepe, voluptatum vitae. Minima tempora rerum, similique eveniet voluptates repellendus quia inventore debitis deleniti facere eum nihil doloribus dolor a voluptatum eligendi praesentium omnis officiis. Sequi blanditiis ipsam ipsum eaque iure culpa dicta ducimus!</p>
					<a href="#">Dowload CV</a>
				</div>
				
			</div>
		</div>
	</section>

	<!-- services section start -->
	<section class="services" id="services">
		<div class="max-width">
			<h2 class="title">My services</h2>
			<div class="services-content">
				<div class="card">
					<div class="box">
					<i class="fas fa-paint-brush"></i>
					<div class="text">Web desig</div>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus minus, porro molestiae molestias laborum exercitationem!</p>
					</div>
				</div>

				<div class="card">
					<div class="box">
					<i class="fas fa-code"></i>
					<div class="text">My git</div>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus minus, porro molestiae molestias laborum exercitationem!</p>
					</div>
				</div>

				<div class="card">
					<div class="box">
					<i class="fas fa-paint-brush"></i>
					<div class="text">Web desig</div>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus minus, porro molestiae molestias laborum exercitationem!</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- skills section start -->
	<section class="skills" id="skills">
		<div class="max-width">
			<h2 class="title">My skills</h2>
			<div class="skills-content">
				<div class="column left">
					<div class="text">My creative & experiences</div>
					<p>Mussum Ipsum, cacilds vidis litro abertis. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. Leite de capivaris, leite de mula manquis sem cabeça. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget.</p>
					<a href="#">Read more</a>
				</div>
				<div class="column right">
					<div class="bars">
						<div class="info">
							<span>Html</span>
							<span>90%</span>
						</div>
						<div class="line html"></div>
					</div>
					<div class="bars">
						<div class="info">
							<span>CSS</span>
							<span>90%</span>
						</div>
						<div class="line css"></div>
					</div>
					<div class="bars">
						<div class="info">
							<span>JS</span>
							<span>75%</span>
						</div>
						<div class="line js"></div>
					</div>
					<div class="bars">
						<div class="info">
							<span>PHP</span>
							<span>70%</span>
						</div>
						<div class="line css"></div>
					</div>
					<div class="bars">
						<div class="info">
							<span>NODE</span>
							<span>70%</span>
						</div>
						<div class="line node"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- frase section start -->
	<section class="phrase" id="phrase">
		<div class="max-width">
			<h2 class="title">Frase que inspira</h2>	
				<div class="phrase-content">
					<blockquote>				
					<p>"Verdadeiros artistas criam coisas reais e que serão usadas."</p>						
					</blockquote>	
					<cite>Steve Jobs</cite>
				</div>
		
		</div>
	</section>

	<!-- contact section start -->
	<section class="contact" id="contact">
		<div class="max-width">
			<h2 class="title">Contato</h2>	
				<div class="contact-content">
					<div class="column left">
						<div class="text">Get in Touch</div>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus incidunt accusantium assumenda praesentium voluptatibus minus harum similique, consequuntur quo atque!</p>
						<div class="icons">
							<div class="row">
								<i class="fas fa-user"></i>
								<div class="info">
									<div class="head">Name</div>
									<div class="sub-title">Leopoldo C. Demetrio</div>
								</div>
							</div>
							<div class="row">
								<i class="fas fa-map-marker-alt"></i>
								<div class="info">
									<div class="head">Adress</div>
									<div class="sub-title">Leopoldo C. Demetrio</div>
								</div>
							</div>
							<div class="row">
								<i class="fas fa-envelope"></i>
								<div class="info">
									<div class="head">Email</div>
									<div class="sub-title">leocdemetrio@gmail.com</div>
								</div>
							</div>
						</div>
					</div>
					<div class="column right">
						<div class="text">Message Leo</div>
						<form action="#">
							<div class="fields">
								<div class="field name">
									<input type="text"  placeholder="name" required>
								</div>
								<div class="field email">
									<input type="email" placeholder="email" required>
								</div>								
							</div>
							<div class="field">
								<input type="text" placeholder="subject" required>
							</div>
							<div class="field textarea">
								<textarea name="" id="" cols="30" rows="10" placeholder="Mensagem" required></textarea>
							</div>
							<div class="button">
								<button type="submit">Enviar</button>
							</div>
						</form>
					</div>
				</div>		
		</div>
	</section>
	<div>
</div>
	<!-- footer section start -->

	<footer>
		<span>Created By<a href="#"> Leopoldo</a> | <span class="far fa-copyright"></span>2020 all rights reserved</span>
	</footer>

	<script src="{{asset('js/script.js')}}"></script>
</body>
</html>