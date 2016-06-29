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
			<div class="col-md-offset-1 col-md-5 col-sm-12">
				<div class="card">
					<div class="title-style text-center">
						<h1 class="heading">Create Profile</h1>
					</div>	
					<div class="content">
						<form action="/registration" method="post">
						  <div class="md-form">
								<input name="email" type="email" class="form-control" id="email" placeholder="Email">
						  </div>
						  <div class="md-form">
								<input name="mobNumber" type="number" class="form-control" id="mobNumber" placeholder="Contact Number">
						  </div>
							<div class="md-form">
								<input name="password" type="password" class="form-control" id="password" placeholder="Password">
						  </div>
						  <div class="md-form">
								<input name="rePassword" type="password" class="form-control" id="rePassword" placeholder="Confirm Password">
						  </div>
						  <div class="md-form">
								<input name="submit" type="submit" class="form-control" id="submit" value="Register">
						  </div>
						</form>
					</div>	
				</div>
			</div>

			<div class="col-md-offset-1 col-md-5 col-sm-12">
				<div class="card text-center">
					<div class="title-style">
						<h1 class="heading">Login</h1>
					</div>	
					<div class="login">
						<form action="/" method="post">
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
						<span>...or login as</span><br><br>
						<!--Facebook-->
						<button type="button" class="btn btn-fb"><i class="fa fa-facebook"></i></button>
						<!--Twitter-->
						<button type="button" class="btn btn-tw"><i class="fa fa-twitter"></i></button>
						<!--Google +-->
						<button type="button" class="btn btn-gplus"><i class="fa fa-google-plus"></i></button>
					</div>	
				</div>
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