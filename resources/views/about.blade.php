@extends('principal')

@section('title')
<title>Factoría Pacoms</title>
@endsection

@section('links')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/nav-home.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
@endsection

@section('body')
@include('components.nav-home')


<div class="container">
	<div class="row">
		<div class="col-12 py-5">
			<h3 class="text-center"><b>FACTORÍA PACOMS</b></h3>
			Es una empresa especializada, eficiente y experimentada en mantenimiento, reparación y fabricación de maquinarias industriales, que brinda un excelente servicio en la rama de metalmecánica y mecanizado.
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 text-center pt-5" data-aos="fade-up-right" data-aos-duration="3000">
			<img src="{{ asset('/img/thumbnail_mision.jpg') }}" class="img-thumbnail">
		</div>
		<div class="col-md-6 d-grid align-content-center pt-5" data-aos="fade-up-left" data-aos-duration="3000">
			<h2 class="text-center font-title">Misión</h2>
			<p class="text-justify">Prestar servicios de metal mecánica con niveles de calidad, seguridad, cumplimiento y rentabilidad de acuerdo a las exigencias de nuestros clientes. </p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 d-grid align-content-center pt-5" data-aos="fade-up-right" data-aos-duration="3000">
			<h2 class="text-center font-title">Visión</h2>
			<p class="text-justify">Para el 2025 lograremos ser una empresa competitiva a nivel nacional y posicionarse como una de las mejores en el rubro metalmecánico industrial, cumpliendo los estándares y normas de seguridad, calidad y medio ambiente.</p>
		</div>
		<div class="col-md-6 text-center pt-5" data-aos="fade-up-left" data-aos-duration="3000">
			<img src="{{ asset('/img/thumbnail_vision.jpg') }}" class="img-thumbnail">
		</div>
	</div>

	<div class="row py-5">
		<h2 class="text-center font-title pb-5">Nuestros Valores</h2>
		<div class="col-md-2 col-6 text-center" data-aos="zoom-in-down">
			<img src="{{ asset('/img/thumbnail_innovacion.jpg') }}" alt="..." class="rounded-circle" width="100px" height="100px">
			<p class="py-3">Innovación</p>
		</div>
		<div class="col-md-2 col-6 text-center" data-aos="zoom-in-down" data-aos-delay="50">
			<img src="{{ asset('/img/thumbnail_calidad.jpg') }}" alt="..." class="rounded-circle" width="100px" height="100px">
			<p class="py-3">Calidad</p>
		</div>
		<div class="col-md-2 col-6 text-center" data-aos="zoom-in-down" data-aos-delay="100" >
			<img src="{{ asset('/img/thumbnail_responsabilidad.jpg') }}" alt="..." class="rounded-circle" width="100px" height="100px">
			<p class="py-3">Responsabilidad</p>
		</div>
		<div class="col-md-2 col-6 text-center" data-aos="zoom-in-down" data-aos-delay="150">
			<img src="{{ asset('/img/thumbnail_integridad.jpg') }}" alt="..." class="rounded-circle" width="100px" height="100px">
			<p class="py-3">Integridad</p>
		</div>
		<div class="col-md-2 col-6 text-center" data-aos="zoom-in-down" data-aos-delay="200">
			<img src="{{ asset('/img/thumbnail_compromiso.jpg') }}" alt="..." class="rounded-circle" width="100px" height="100px">
			<p class="py-3">Compromiso</p>
		</div>
		<div class="col-md-2 col-6 text-center" data-aos="zoom-in-down" data-aos-delay="250">
			<img src="{{ asset('/img/thumbnail_puntualidad.jpg') }}" alt="..." class="rounded-circle" width="100px" height="100px">
			<p class="py-3">Puntualidad</p>
		</div>
	</div>
</div>


<div class="container py-5 px-4">
	<div class="row gx-5">
		<div class="col">
			<div data-aos="fade-up-right" data-aos-duration="3000">
				
			</div>
		</div>
		<div class="col">
			<div data-aos="fade-up-left" data-aos-duration="3000">
				
			</div>
		</div>
	</div>
</div>
@include('components.footer')
@endsection
@section('scripts')
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
	  AOS.init();
	</script>
@endsection