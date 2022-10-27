@extends('layouts.guest')

@section('contents')
    <section class="banner-area relative about-banner" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">Admission Application</h1>
					<p class="text-white link-nav"><a href="{{ url('/') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ route('application') }}"> Application</a></p>
				</div>
			</div>
		</div>
	</section>

    <section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
                    <h4 class="mb-4">Kindly Fill The Form To Continue</h4>
					<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
						<div class="row">	
							<div class="col-lg-6 form-group mb-3">
								<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
									
								<select name="department" id="department" required class="common-input mb-20 form-control">
									<option selected disabled>Select Department</option>
									<option value="Computer Science">Computer Science</option>
									<option value="Computer Science">Accounting</option>
									<option value="Computer Science">Engineering</option>
								</select>	
								
							</div>

							<div class="col-lg-6 form-group mb-3">
								<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
									
								<select class="common-input mb-20 form-control" required id="exam">
                                    <option selected disabled>Select Result Type</option>
                                    <option value="UTME">UTME</option>
                                    <option value="WASSCE">WASSCE</option>
                                    <option value="JAMB">JAMB</option>
                                </select>
							</div>

							<div class="col-lg-12 text-left mb-3">
								<h4 class="subject_title"></h4>
							</div>

							<div class="col-lg-6 form-group subject">
								
							</div>
							
							<div class="col-lg-6 form-group grade">
								
							</div>

							<div class="col-lg-12">
								<div class="alert-msg" style="text-align: left;"></div>
								<button class="genric-btn primary" style="float: right;">Submit</button>											
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-4">
					<div class="mb-5 mt-5 text-center">
						<h2 class="mb-5">Total Credit</h2>
						<h1 id="credits">0</h1>
					</div>
				</div>
			</div>
		</div>	
	</section>
@endsection
