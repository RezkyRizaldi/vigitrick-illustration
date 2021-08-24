<section id="heroes">
	<div id="carousel" class="carousel slide carousel-fade" data-bs-pause="false" data-bs-ride="carousel" data-bs-interval="5000">
		<div class="carousel-indicators">
			@foreach ($sliders as $slider)
			<button type="button" data-bs-target="#carousel" data-bs-slide-to="{{ $loop->index }}" {{ $loop->first ? 'class=active aria-current=true' : '' }} aria-label="{{ $slider['title'] }}"></button>
			@endforeach
		</div>
		<div class="carousel-inner">
			@foreach ($sliders as $slider)
				<div class="carousel-item {{ $loop->first ? 'active' : '' }}">
					<img src="{{ asset('assets/img/slider/slider' . $loop->iteration . '.jpg') }}" class="d-block w-100" alt="{{ $slider['title'] }}" />
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
			@endforeach
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
