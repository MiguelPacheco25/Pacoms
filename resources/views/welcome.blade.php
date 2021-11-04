@extends('principal')

@section('title')
<title>Factoría Pacoms</title>
@endsection

@section('links')
<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/carrusel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/carruselBanner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/nav-home.css') }}">
@endsection

@section('body')
@include('components.nav-home')

<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/banner1.jpg') }}" class="d-block w-100 banner-img" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/banner2.jpg') }}" class="d-block w-100 banner-img" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/banner3.jpg') }}" class="d-block w-100 banner-img" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/banner4.jpg') }}" class="d-block w-100 banner-img" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/banner5.jpg') }}" class="d-block w-100 banner-img" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/banner6.jpg') }}" class="d-block w-100 banner-img" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/banner7.jpg') }}" class="d-block w-100 banner-img" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/banner8.jpg') }}" class="d-block w-100 banner-img" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/banner9.jpg') }}" class="d-block w-100 banner-img" alt="...">
    </div>

  </div>
  
</div>

<div class="container">
  <div class="row">
    <h2 class="text-center py-5">Nuestros Servicios</h2>
    <div class="col-md-6 text-center p-3" data-aos="fade-right" data-aos-duration="500" data-aos-offset="500">
      <img src="{{ asset('/img/thumbnail1.jpg') }}" class="img-thumbnail img-service">
      <h3><b>Tornos</b></h3>
    </div>
    <div class="col-md-6 text-center p-3" data-aos="fade-left" data-aos-duration="500" data-aos-offset="500">
      <img src="{{ asset('/img/thumbnail1.jpg') }}" class="img-thumbnail img-service">
      <h3><b>Fresadoras</b></h3>
    </div>
    <div class="col-md-6 text-center p-3" data-aos="fade-right" data-aos-duration="500" data-aos-offset="500">
      <img src="{{ asset('/img/thumbnail1.jpg') }}" class="img-thumbnail img-service">
      <h3><b>Cepillos</b></h3>
    </div>
    <div class="col-md-6 text-center p-3" data-aos="fade-left" data-aos-duration="500" data-aos-offset="500">
      <img src="{{ asset('/img/thumbnail1.jpg') }}" class="img-thumbnail img-service">
      <h3><b>Taladro radial</b></h3>
    </div>
    <div class="col-md-6 text-center p-3" data-aos="fade-right" data-aos-duration="500" data-aos-offset="500">
      <img src="{{ asset('/img/thumbnail1.jpg') }}" class="img-thumbnail img-service">
      <h3><b>Barrenadora</b></h3>
    </div>
    <div class="col-md-6 text-center p-3" data-aos="fade-left" data-aos-duration="500" data-aos-offset="500">
      <img src="{{ asset('/img/thumbnail1.jpg') }}" class="img-thumbnail img-service">
      <h3><b>Prensas hidráulicas</b></h3>
    </div>
    <div class="col-md-12 text-center p-3" data-aos="fade-up" data-aos-duration="500" data-aos-offset="500">
      <img src="{{ asset('/img/thumbnail1.jpg') }}" class="img-thumbnail img-service">
      <h3><b>Puente grúa</b></h3>
    </div>

  </div>
</div>

<h2 class="text-center pt-5 py-3">NUESTROS CLIENTES</h2>
<div class="container-carrusel">
  <div class="slider">
    <div class="slide-track">
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
      </div>
      <div class="slide">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
      </div>
    </div>
  </div>
</div>


@include('components.footer')
@endsection
@section('scripts')
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script> AOS.init(); </script>
@endsection


