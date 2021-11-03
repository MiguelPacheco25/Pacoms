@extends('principal')

@section('title')
<title>Factoría Pacoms</title>
@endsection

@section('body')
@include('components.nav-home')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
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
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container py-5 px-4">
  <div class="row gx-5">
    <div class="col">
      <div data-aos="fade-up-right" data-aos-duration="3000">
        <h2 class="text-center">MISIÓN</h2>
        <p>Brindar servicios de mecánica industrial con altos niveles de calidad, seguridad y rentabilidad, para satisfacción de nuestros clientes.</p>
      </div>
    </div>
    <div class="col">
     <div data-aos="fade-up-left" data-aos-duration="3000">
       <h2 class="text-center">VISIÓN</h2>
       <p>En el 2025 seremos la empresa líder en prestación de servicios de mecánica industrial, con reconocimiento a nivel nacional y con presencia en el extranjero, basado en exigentes criterios de calidad e innovación, garantizando a sus clientes un excelente servicio.</p>
     </div>
   </div>
 </div>
</div>

<div class="container py-5">
  <div class="row" data-aos="fade-up" data-aos-duration="3000">
    <h2 class="text-center py-5">NUESTROS SERVICIOS</h2>
    <div class="col-md-8">
      <h3>MECANIZADO DE PIEZAS INDUSTRIALES</h3>
      <p>Brindamos el servicio de mecanizado y fabricación de piezas especiales, para lo cual FACTORÍA PACOMS cuenta con una variedad de máquinas y equipos tales como:</p>
      <ul>
        <li data-aos="zoom-in" data-aos-duration="3000"><h4>Tornos</h4></li>
        <li data-aos="zoom-in" data-aos-duration="3000"><h4>Fresadoras</h4></li>
        <li data-aos="zoom-in" data-aos-duration="3000"><h4>Cepillos</h4></li>
        <li data-aos="zoom-in" data-aos-duration="3000"><h4>Taladro radial</h4></li>
        <li data-aos="zoom-in" data-aos-duration="3000"><h4>Barrenadora</h4></li>
        <li data-aos="zoom-in" data-aos-duration="3000"><h4>Prensas hidráulicas</h4></li>
        <li data-aos="zoom-in" data-aos-duration="3000"><h4>Puente grúa</h4></li>
      </ul>
      
    </div>
    <div class="col-md-4">
      <img src="{{ asset('/img/thumbnail1.jpg') }}" class="img-thumbnail" alt="...">
    </div>
    
  </div>
</div>

<h2 class="text-center py-3">NUESTROS CLIENTES</h2>
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
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
@endsection


