@extends('principal')

@section('title')
	<title>Página no encontrada</title>
@endsection

@section('links')
<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/nav-home.css') }}">
@endsection

@section('body')
	@include('components.nav-home')
	
	<div class="text-center bg-white">
		<h1 class="text-dark pt-5 shadow-sm p-3 mb-5 bg-white rounded"><strong>PÁGINA NO ENCONTRADA</strong></h1>
		<img src="{{ asset('/img/notfound.gif') }}" class="img-fluid">
	</div>
	
	@include('components.footer')
@endsection
