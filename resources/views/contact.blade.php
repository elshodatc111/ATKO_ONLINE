@extends('layouts.home')

@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_6.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate mb-0 text-center">
					<p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{ route('index') }}">Bosh sahifa <i class="fa fa-chevron-right"></i></a></span> <span>Bog'lanish <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">Bog'lanish</h1>
				</div>
			</div>
		</div>
	</section>

    <section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper px-md-4">
						<div class="row mb-5">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="text">
										<p><span>Manzil:</span>{{ $Setting->addres }}</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-phone"></span>
									</div>
									<div class="text">
										<p><span>Telefon:</span> <a href="#">{{ $Setting->phone }}</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-paper-plane"></span>
									</div>
									<div class="text">
										<p><span>Email:</span> <a href="#">{{ $Setting->email }}</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
									<div class="icon d-flex align-items-center justify-content-center">
										<span class="fa fa-globe"></span>
									</div>
									<div class="text">
										<p><span>Web sayt</span> <a href="#">{{ $Setting->sayt }}</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="no-gutters">
							<div class="contact-wrap w-100 p-md-5 p-4">
								<h3 class="mb-4 w-100 text-center">Bog'lanish</h3>
								<form method="POST" action="{{ route('contactPost') }}" id="contactForm" name="contactForm" class="contactForm">
									@csrf
									<div class="row">
										@guest
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="name">Ismingiz</label>
												<input type="text" class="form-control" name="name" id="name" placeholder="Name">
											</div>
										</div>
										<div class="col-md-6"> 
											<div class="form-group">
												<label class="label" for="email">Telefon raqamingiz</label>
												<input type="number" class="form-control" name="phone" id="phone" placeholder="Email">
											</div>
										</div>
										@else
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="name">Ismingiz</label>
												<input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name" id="name" placeholder="Name">
											</div>
										</div>
										<div class="col-md-6"> 
											<div class="form-group">
												<label class="label" for="email">Telefon raqamingiz</label>
												<input type="number" class="form-control" value="{{ Auth::user()->phone }}" name="phone" id="phone" placeholder="Email">
											</div>
										</div>
										@endguest
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="#">Murojat matni</label>
												<textarea name="text" class="form-control" id="text" cols="30" rows="4" placeholder="Xabar"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="submit" value="Murojatni yuborish" class="btn btn-primary">
												<div class="submitting"></div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection