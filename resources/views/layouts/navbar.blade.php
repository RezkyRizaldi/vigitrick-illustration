{{-- Navbar --}}
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark shadow-lg bg_main">
	<div class="container">
		<a class="navbar-brand" href="{{ route('home') }}">
			<img src="{{ asset('assets/img/logo.png') }}" alt="Logo {{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item mx-2">
					<a class="nav-link active fw_600 fs-5" aria-current="page" href="#home" title="Home">Home</a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link fw_600 fs-5" href="#gallery" title="Gallery">Gallery</a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link fw_600 fs-5" href="#pricing" title="Pricing">Pricing</a>
				</li>
			</ul>
			<hr class="bg-light mx-auto d-block d-lg-none" width="90%" />
			<div class="d-flex align-items-center d-block d-lg-none">
				<div>
					<h6 class="mb-0 me-2 text-light text-uppercase">Follow me on</h6>
				</div>
				<a class="nav-link text-light" href="https://twitter.com/vigitrick" rel="noopener norefferer" target="_blank" title="Twitter">
					<i class="fab fa-lg fa-twitter"></i>
				</a>
				<a class="nav-link text-light" href="https://instagram.com/vigitrick" rel="noopener norefferer" target="_blank" title="Instagram">
					<i class="fab fa-lg fa-instagram"></i>
				</a>
			</div>
		</div>
		<ul class="navbar-nav align-items-center d-none d-lg-flex">
			<li class="nav-item mx-2">
				<a class="nav-link text-light" href="https://twitter.com/vigitrick" rel="noopener norefferer" target="_blank" title="Twitter">
					<i class="fab fa-lg fa-twitter"></i>
				</a>
			</li>
			<li class="nav-item mx-2">
				<a class="nav-link text-light" href="https://instagram.com/vigitrick" rel="noopener norefferer" target="_blank" title="Instagram">
					<i class="fab fa-lg fa-instagram"></i>
				</a>
			</li>
		</ul>
	</div>
</nav>
