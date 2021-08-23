<section id="heroes">
	<div id="carousel" class="carousel slide carousel-fade" data-bs-pause="false" data-bs-ride="carousel" data-bs-interval="5000">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
			<button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
			<button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
			<button type="button" data-bs-target="#carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{ asset('assets/img/slider/slider1.jpg') }}" class="d-block w-100" alt="Carousel 1" />
				<div class="container">
					<div class="position-absolute start-0">
						<div class="row">
							<div class="col-md-12 px-3 px-sm-5">
								<div class="px-3 px-sm-5 text-light carousel_content">
									<h1 class="display-3 text-uppercase py-1 ff_blank_river">{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}</h1>
									<p class="lead">Vigitrick Commission Website and Artwork Gallery</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{ asset('assets/img/slider/slider2.jpg') }}" class="d-block w-100" alt="Carousel 2" />
				<div class="container">
					<div class="position-absolute start-0">
						<div class="row">
							<div class="col-md-12 px-3 px-sm-5">
								<div class="px-3 px-sm-5 text-light carousel_content">
									<h1 class="display-3 text-uppercase py-1 ff_blank_river">{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}</h1>
									<p class="lead">Vigitrick Commission Website and Artwork Gallery</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{ asset('assets/img/slider/slider3.jpg') }}" class="d-block w-100" alt="Carousel 3" />
				<div class="container">
					<div class="position-absolute start-0">
						<div class="row">
							<div class="col-md-12 px-3 px-sm-5">
								<div class="px-3 px-sm-5 text-light carousel_content">
									<h1 class="display-3 text-uppercase py-1 ff_blank_river">{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}</h1>
									<p class="lead">Vigitrick Commission Website and Artwork Gallery</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{ asset('assets/img/slider/slider4.jpg') }}" class="d-block w-100" alt="Carousel 4" />
				<div class="container">
					<div class="position-absolute start-0">
						<div class="row">
							<div class="col-md-12 px-3 px-sm-5">
								<div class="px-3 px-sm-5 text-light carousel_content">
									<h1 class="display-3 text-uppercase py-1 ff_blank_river">{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}</h1>
									<p class="lead">Vigitrick Commission Website and Artwork Gallery</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{ asset('assets/img/slider/slider5.jpg') }}" class="d-block w-100" alt="Carousel 5" />
				<div class="container">
					<div class="position-absolute start-0">
						<div class="row">
							<div class="col-md-12 px-3 px-sm-5">
								<div class="px-3 px-sm-5 text-light carousel_content">
									<h1 class="display-3 text-uppercase py-1 ff_blank_river">{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}</h1>
									<p class="lead">Vigitrick Commission Website and Artwork Gallery</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{ asset('assets/img/slider/slider6.jpg') }}" class="d-block w-100" alt="Carousel 6" />
				<div class="container">
					<div class="position-absolute start-0">
						<div class="row">
							<div class="col-md-12 px-3 px-sm-5">
								<div class="px-3 px-sm-5 text-light carousel_content">
									<h1 class="display-3 text-uppercase py-1 ff_blank_river">{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}</h1>
									<p class="lead">Vigitrick Commission Website and Artwork Gallery</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev d-none d-lg-block" type="button" data-bs-target="#carousel" data-bs-slide="prev">
			<span class="carousel-control-prev-icon p-4" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next d-none d-lg-block" type="button" data-bs-target="#carousel" data-bs-slide="next">
			<span class="carousel-control-next-icon p-4" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</section>
