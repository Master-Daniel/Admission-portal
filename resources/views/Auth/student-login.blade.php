@extends('layouts.guest')

@section('contents')
    <section class="banner-area relative about-banner" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">Admission Status</h1>
					<p class="text-white link-nav"><a href="{{ url('/') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ route('application') }}"> Application</a></p>
				</div>
			</div>
		</div>
	</section>

    <section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
                    <h4 class="mb-4">Enter Your Login Details</h4>
					<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
						<div class="row">	
							<div class="col-lg-12 form-group mb-3">
								<input name="email" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'" class="common-input mb-20 form-control" required="" type="text">
									
								<input name="password" placeholder="Enter password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'" class="common-input mb-20 form-control" required="" type="password">
							</div>

							<div class="col-lg-12">
								<div class="alert-msg" style="text-align: left;"></div>
								<button class="genric-btn primary" style="float: right;">Login</button>											
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>	
	</section>
@endsection
