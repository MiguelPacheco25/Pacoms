<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">Navbar</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Link</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link disabled">Disabled</a>
	        </li>
	      </ul>
	      <form class="d-flex">
	        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
	        <button class="btn btn-outline-success" type="submit">Search</button>
	      </form>
	    </div>
	  </div>
	</nav>
	<div class="container">
		<form class="row g-3">
		  <div class="col-md-6">
		    <label for="" class="form-label">RUC</label>
		    <input type="number" class="form-control" id="NumberRuc" onkeyup="consultRuc()" maxlength="11">
		  </div>
		  <div class="col-md-6">
		    <label for="" class="form-label">Razon Social</label>
		    <input type="text" class="form-control" id="SocialRasonRuc" readonly>
		  </div>
		  <div class="col-md-6">
		    <label for="" class="form-label">Teléfonos</label>
		    <input type="text" class="form-control" id="PhoneRuc" readonly>
		  </div>
		  <div class="col-md-6">
		    <label for="" class="form-label">Estado</label>
		    <input type="text" class="form-control" id="StatusRuc" readonly>
		  </div>
		  <div class="col-md-6">
		    <label for="" class="form-label">Dirección</label>
		    <input type="text" class="form-control" id="AddressRuc" readonly>
		  </div>
		  <div class="col-md-6">
		    <label for="" class="form-label">Departamento</label>
		    <input type="text" class="form-control" id="DepartamentRuc" readonly>
		  </div>
		  <div class="col-md-6">
		    <label for="" class="form-label">Provincia</label>
		    <input type="text" class="form-control" id="ProvinceRuc" readonly>
		  </div>
		  <div class="col-md-6">
		    <label for="" class="form-label">Distrito</label>
		    <input type="text" class="form-control" id="DistrictRuc" readonly>
		  </div>
		  <div class="col-md-6">
		    <label for="inputPassword4" class="form-label">Password</label>
		    <input type="password" class="form-control" id="inputPassword4">
		  </div>
		  <div class="col-12">
		    <label for="inputAddress" class="form-label">Address</label>
		    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
		  </div>
		  <div class="col-12">
		    <label for="inputAddress2" class="form-label">Address 2</label>
		    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
		  </div>
		  <div class="col-md-6">
		    <label for="inputCity" class="form-label">City</label>
		    <input type="text" class="form-control" id="inputCity">
		  </div>
		  <div class="col-md-4">
		    <label for="inputState" class="form-label">State</label>
		    <select id="inputState" class="form-select">
		      <option selected>Choose...</option>
		      <option>...</option>
		    </select>
		  </div>
		  <div class="col-md-2">
		    <label for="inputZip" class="form-label">Zip</label>
		    <input type="text" class="form-control" id="inputZip">
		  </div>
		  <div class="col-12">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox" id="gridCheck">
		      <label class="form-check-label" for="gridCheck">
		        Check me out
		      </label>
		    </div>
		  </div>
		  <div class="col-12">
		    <button type="submit" class="btn btn-primary">Sign in</button>
		  </div>
		</form>
	</div>
	<script type="text/javascript">
		function consultRuc(){
			let ruc = $('#NumberRuc')[0].value;

			if(ruc.length == 11)
				$.getJSON('https://dniruc.apisperu.com/api/v1/ruc/'+ruc+'?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Im1hcmxvbi5zYW5jaGV6LmNoYXZlekBnbWFpbC5jb20ifQ.PYMu7nXFp8anSN7cw340zlUPCw0asP6pti7hST6lawQ', function(data) {
				    $('#SocialRasonRuc')[0].value = data.razonSocial;   
				    $('#PhoneRuc')[0].value = data.telefonos;   
				    $('#StatusRuc')[0].value = data.estado;   
				    $('#AddressRuc')[0].value = data.direccion;   
				    $('#DepartamentRuc')[0].value = data.departamento;   
				    $('#ProvinceRuc')[0].value = data.provincia; 
				    $('#DistrictRuc')[0].value = data.distrito;   
				});

		}
		
	</script>
</body>
</html>