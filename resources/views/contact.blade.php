@extends('layouts.guest')

@section('contents')
    <section class="banner-area relative about-banner" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">Contact Us</h1>
					<p class="text-white link-nav"><a href="{{ url('/') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ route('contact') }}"> Contact</a></p>
				</div>
			</div>
		</div>
	</section>

    <section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
                    <h2 class="mb-4">We would Love to Hear Form You</h2>
					<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
						<div class="row">	
                            <div class="col-lg-12 form-group mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <input name="name" placeholder="Enter name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter name'" class="common-input mb-20 form-control" required="" type="text">
                                    </div>
                                    <div class="col-6">
                                        <input name="email" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'" class="common-input mb-20 form-control" required="" type="text">
                                    </div>
                                </div>
							</div>

                            <div class="col-lg-12 form-group mb-3">
                                <input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
							</div>

                            <div class="col-lg-12 form-group mb-3">
                                <textarea name="message" id="message" class="mb-3 form-control" rows="5"></textarea>
                            </div>

							<div class="col-lg-12">
								<div class="alert-msg" style="text-align: left;"></div>
								<button class="genric-btn primary" style="float: right;">Submit</button>											
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>	
	</section>
@endsection
