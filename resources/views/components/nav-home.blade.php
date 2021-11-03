<div class="container-fluid p-0">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a href="{{ route('home') }}">
        <img src="{{ asset('img/logo.png') }}" width="100px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}"><b>Inicio</b></a>
          <a class="nav-link" href="#"><b>Cotiza tu servicio</b></a>
          <a class="nav-link" href=" {{ route('about') }} "><b>Nosotros</b></a>
          <a class="nav-link disabled">Disabled</a>
        </div>
      </div>
    </div>
  </nav>
</div>
