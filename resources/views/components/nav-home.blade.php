<div class="container-fluid p-0 nav-position">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid px-sm-5">
      <a href="{{ route('home') }}">
        <img src="{{ asset('img/logo.png') }}" width="100px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav text-center">
            <a class="nav-link text-white active" aria-current="page" href="{{ route('home') }}"><b>Inicio</b></a>
            <a class="nav-link text-white" href=" {{ route('quote') }} "><b>Cotiza tu servicio</b></a>
            <a class="nav-link text-white" href=" {{ route('about') }} "><b>Nosotros</b></a>
            <a class="nav-link text-white" href=" {{ route('login') }} "><b>Login</b></a>
        </div>
        
      </div>
    </div>
  </nav>
</div>
<div class="space-nav"></div>
