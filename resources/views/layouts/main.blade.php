<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	@include('layouts.head')
	<body id="home" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" tabindex="0">

		@include('layouts.navbar')

		<main>
			@yield('content')
		</main>

		@include('layouts.footer')

		<button type="button" id="back" class="text-light rounded-3 shadow top bg_secondary" style="display: inline" title="Back to Top">
			<i class="fa fa-chevron-up"></i>
		</button>

		@include('layouts.scripts')
	</body>
</html>
