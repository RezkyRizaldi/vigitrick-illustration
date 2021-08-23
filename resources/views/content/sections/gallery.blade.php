<section id="gallery" class="px-3 px-sm-0 py-5">
	<div class="container">
		<div class="row text-center text-light">
			<div class="col-md-12">
				<h2 class="display-4 fw-bold mb-0 ff_blank_river">Gallery</h2>
				<hr class="mx-auto bg-white" width="20%" />
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-12">
				<ul class="nav nav-pills justify-content-center mt-5 mb-4">
					<li class="nav-item mb-3 mb-md-0 mx-2 shadow active filter" data-filter="all">All</li>
					<li class="nav-item mb-3 mb-md-0 mx-2 shadow filter" data-filter="category1">Category 1</li>
					<li class="nav-item mb-3 mb-md-0 mx-2 shadow filter" data-filter="category2">Category 2</li>
					<li class="nav-item mb-3 mb-md-0 mx-2 shadow filter" data-filter="category3">Category 3</li>
					<li class="nav-item mb-3 mb-md-0 mx-2 shadow filter" data-filter="category4">Category 4</li>
					<li class="nav-item mb-3 mb-md-0 mx-2 shadow filter" data-filter="category5">Category 5</li>
				</ul>
				<div class="row">
				<div class="col-12 mb-4 d-none d-md-block" data-aos="fade-in">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							@foreach ($summary_galleries as $gallery)
								<div class="swiper-slide">
									<img class="img-thumbnail swiper-lazy big" src="{{ asset('assets/img/gallery/' . $gallery["img"] . '.jpg') }}" class="card-img" alt="{{ $gallery["title"] }}" />
									<div class="swiper-lazy-preloader"></div>
									<div class="card-img-overlay">
										<h5 class="card-title text-light">{{ $gallery["title"] }}</h5>
									</div>
								</div>
							@endforeach
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
					@foreach ($galleries->skip(1) as $gallery)
						<div class="col-md-6 col-lg-4 mb-4 filter_item" data-item="{{ $gallery["data_item"] }}">
							<div class="card text-light border-0 shadow-lg">
								<img class="img-thumbnail" src="{{ asset('assets/img/gallery/' . $gallery["img"] . '.jpg') }}" class="card-img" alt="{{ $gallery["title"] }}" />
								<div class="card-img-overlay">
									<h5 class="card-title">{{ $gallery["title"] }}</h5>
									<p class="card-text position-absolute bottom-0 mb-3 bg_main p-2 rounded-pill">{{ $gallery["data_item"] }}</p>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>

@push('script')
	<script type="text/javascript">
		var swiper = new Swiper(".swiper-container", {
			preloadImages: false,
			lazy: true,
			autoplay: {
				delay: 5000,
			},
			loop: true,
			pagination: {
				el: ".swiper-pagination",
				dynamicBullets: true,
			},
		});
	</script>
@endpush
