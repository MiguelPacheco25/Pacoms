@extends('principal')

@section('title')
<title>Factoría Pacoms</title>
@endsection

@section('links')
<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/nav-home.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
<style type="text/css">
	.container-contact{
		margin-top: 160px !important;
		margin-bottom: 160px !important;
	}
	.important{
		font-size: 9px;
		color: red;
	}
</style>
@endsection

@section('body')
@include('components.nav-home')
<div class="container py-5 container-contact">
	<form>
		<div class="row g-2">
			<h4>Información general</h4>
			<div class="col-md">
				<div class="form-floating">
					<input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
					<label for="floatingInputGrid" class="text-dark">Razón Social o Nombre</label>
				</div>
			</div>
			<div class="col-md">
				<div class="form-floating">
					<input type="number" class="form-control" id="floatingInputGrid" placeholder="1111111" required>
					<label for="floatingInputGrid" class="text-dark">DNI o RUC <span class="important"><b>(*)</b></span></label>
				</div>
			</div>
			<div class="col-md">
				<div class="form-floating">
					<input type="number" class="form-control" id="floatingInputGrid" placeholder="111111">
					<label for="floatingInputGrid" class="text-dark">Celular<span class="important"><b>(*)</b></span></label>
				</div>
			</div>
			<div class="col-md">
				<div class="form-floating">
					<input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
					<label for="floatingInputGrid" class="text-dark">Correo</label>
				</div>
			</div>
			<div class="form-floating">
			  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
			  <label for="floatingTextarea2" class="text-dark">Comments</label>
			</div>
			<div class="col-md d-grid align-content-center">
				<button type="submit" class="btn btn-success">Enviar</button>
			</div>
		</div>
	</form>
</div>

@include('components.footer')
@endsection
