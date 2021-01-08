@extends('layouts.header')


@section('content')

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

@endsection