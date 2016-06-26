@extends('layouts.default')
@section('content')
<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>SAMARPAN</h1><br>
				<h4>because</h4>
				<a class="btn btn-danger-outline">OLD IS GOLD</a>
			</div>
		</div>
	</div>		
</section>

<section id="team" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12 title-style text-center">
				<h1 class="heading">How it Works?</h1>
			</div>

			<div class="col-md-4 col-sm-12 title-style text-center">
				<h1 class="heading">Login</h1>
			</div>	
			<div class="col-md-7 col-sm-12 content fadeInUp">
				<p>Senior citizen have a wealth of experience and knowledge to pass on to younger generations. The world isn’t the same as the one they grew up in, but seniors can give first-person accounts of events that may help younger generations understand how the world became what they know now.<br>
				follow these....
				</p>
				<ol type='number'>
				<li>Create an Account and login</li>
				<li>Create a profile with your Work experience</li>
				<li>Ab sab Bagvan ke hath me hai. Just wait!!!</li>
			</div>
			<div class="col-md-4 col-sm-12 content text-center">
				<form action="#" method="post">
					<div class="md-form">
						<input name="email" type="email" class="form-control" id="email" placeholder="Email">
				  </div>
					<div class="md-form">
						<input name="password" type="password" class="form-control" id="password" placeholder="Password">
				  </div>
				  <div class="md-form">
						<input name="submit" type="submit" class="form-control" id="submit" value="Submit">
				  </div>
				</form>  
			</div>	
		</div>
	</div>
</section>

<!-- contact section -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
				<h1 class="heading">Contact Us</h1>
				<hr>
			</div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
				<form action="#" method="post">
					<div class="col-md-6 col-sm-6 md-form">
						<input name="name" type="text" class="form-control" id="name" placeholder="Name">
				  </div>
					<div class="col-md-6 col-sm-6 md-form">
						<input name="email" type="email" class="form-control" id="email" placeholder="Email">
				  </div>
					<div class="col-md-12 col-sm-12 md-form">
						<textarea name="message" rows="8" class="md-textarea form-control" id="message" placeholder="Message"></textarea>
					</div>
					<div class="md-form col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="submit" type="submit" class="form-control" id="submit" value="send message">
					</div>
				</form>
			</div>
			<div class="col-md-2 col-sm-1"></div>
		</div>
	</div>
</section>
@stop