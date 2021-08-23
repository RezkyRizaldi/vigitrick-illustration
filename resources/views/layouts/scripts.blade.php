{{-- Mix Scripts --}}
<script type="text/javascript" src="{{ mix('assets/js/vendor.js') }}"></script>
<script type="text/javascript" src="{{ mix('assets/js/app.js') }}"></script>

{{-- Swiper JavaScript --}}
<script type="text/javascript" src="{{ asset('assets/js/swiper/swiper-bundle.min.js') }}"></script>

{{-- AOS JavaScript --}}
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script type="text/javascript">
	const filterItem = document.querySelectorAll(".filter_item");

	filterItem.forEach((elem, i) => {
		elem.dataset.aos = 'fade-up';
		elem.dataset.aosDelay = i * 100;
	});

	AOS.init({
		once: true,
	});
</script>
@stack('script')
