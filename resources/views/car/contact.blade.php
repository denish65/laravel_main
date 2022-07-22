@extends('car.layout')
@section('title_name')
Contact Us page
@endsection
@section('content')

<!-- Contact -->
</div>

<section class="contact py-5">
	<div class="container py-lg-5">
		<h1 class="heading text-capitalize text-center">Contact Us</h1>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row agile-contact-form">
			<div class="col-md-6 contact-form-left map">
				<div class="w3layouts-contact-form-top">
				<div class="contact-form-top">
					<h3>Locate Us</h3>
				</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3381268.89304075!2d-108.26956901768942!3d34.145820117962906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2sCanada!5e0!3m2!1sen!2sin!4v1524478277945" allowfullscreen></iframe>
				</div>
				
			</div>
			<div class="col-md-6 mt-md-0 mt-4 contact-form-right">
				<div class="contact-form-top">
					<h3>Send us a message</h3>
				</div>
               
				{{-- @if($errors->any())
				<div class="alert alert-danger">

                   @foreach($errors->all() as $error)

				   <ul>

					<li> {{  $error }} </li>
				   </ul>

				   @endforeach
			
				</div>
				@endif --}}

				@if(Session("success"))
				<div class="alert alert-success">
                   <span class="text-center">
					   <b> {{ session('success') }} </b>
				   </span>
				</div>
				@endif


				<div class="agileinfo-contact-form-grid">
					<form  method="post">
						@csrf
						
						<input type="text" name="FirstName" placeholder="FirstName" class="@error('FirstName') is-invalid @enderror">
						<br><br><br>
						@error('FirstName')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

						<input type="text" name="LastName" placeholder="LastName" class="@error('LastName') is-invalid @enderror">
						<br><br><br>
						@error('LastName')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
						
						<input type="text" name="Name" placeholder="Name" class="@error('Name') is-invalid @enderror">
						<br><br><br>
						@error('Name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

						<input type="text" name="Email" placeholder="Email" class="@error('Name') is-invalid @enderror">
						<br><br><br>

						@error('Name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
						
						<input type="text" name="Phone" placeholder="Phone" class="@error('Phone') is-invalid @enderror">
						<br><br><br>

						@error('Phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
						<input type="text" name="Subject" placeholder="Subject" class="@error('Subject') is-invalid @enderror">
						<br><br><br>
						
						@error('Subject')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
						
						<textarea name="Message" placeholder="Message" class="@error('Message') is-invalid @enderror"></textarea>
					

						@error('Message')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
						<button type="submit" name="addcontact" class="btn1">Send Details</button>
					</form>
				</div>
			</div>
		</div>
				<div class="row top mt-5">
					<div class="col-lg-4 mb-lg-0 mb-4 address-grid">
						<div class="row address-info">
							<div class="col-lg-3 col-sm-2 mb-sm-0 mb-3 address-left">
								<i class="fas fa-map-marker-alt"></i>
							</div>
							<div class="col-lg-9 col-sm-10 address-right text-left">
								<h6>Address</h6>
								<p> 3481 Jack Street Beverly Jack Hills<span> 90210 Block, USA </span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-lg-0 mb-4 address-grid">
						<div class="row address-info">
							<div class="col-lg-3 col-sm-2 mb-sm-0 mb-3 address-left">
								<i class="fas fa-envelope-open"></i>
							</div>
							<div class="col-lg-9 col-sm-10 address-right text-left">
								<h6>Email</h6>
								<p>Email :
									<a href="mailto:example@email.com"> mail@example.com</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-lg-3 col-sm-2 mb-sm-0 mb-3 address-left">
								<i class="fas fa-phone"></i>
							</div>
							<div class="col-lg-9 col-sm-10 address-right text-left">
								<h6>Phone</h6>
								<p>Phone : 112 367 896 2449</p>
								<p>Fax : 112 367 896 2449</p>
								</p>
							</div>
						</div>
					</div>
				</div>
			
	</div>
</section>
<!-- //Contact -->
	
@endsection
