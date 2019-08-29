<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
		<style>
			#head-form{
				margin-top: 100px;
			}
			body{
				background-color: #000;
			}
		</style>
	</head>
	<body>
		<center>
		<div class="container">
			<aside class="col-sm-4">
				<div id="head-form" class="card">
					<article class="card-body">
						<h4 class="card-title text-center mb-4 mt-1">Registro</h4>
						<hr>
						<form>
                        <div class="form-group">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text"> <i class="fa fa-user"></i> </span>
													</div>
													<input name="" class="form-control" placeholder="Nombre" type="text">
												</div>
											</div>
											<div class="form-group">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
													</div>
													<input class="form-control" placeholder="Cooreo" type="email">
												</div>
											</div>
											<div class="form-group">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
													</div>
													<input class="form-control" placeholder="Edad" type="number">
												</div>
											</div>
											<div class="form-group">
												<label for="genero">Genero</label>
												<select class="form-control" id="genero">
													<option value="Amazonas">Masculino</option>
													<option value="Antioquia">Femenino</option>
												</select>
											</div>
											<div class="form-group">
												<label for="departamento">Departamentos</label>
												<select class="form-control" id="departamento">
													<option value="Amazonas">Amazonas</option>
													<option value="Antioquia">Antioquia</option>
													<option value="Arauca">Arauca</option>	
													<option value="Atlantico">Atlantico</option>
													<option value="Bolivar">Bolivar</option>
													<option value="Boyaca">Boyaca</option>			
													<option value="Caldas">Caldas</option>
													<option value="Caqueta">Caqueta</option>
													<option value="Casanare">Casanare</option>
													<option value="Cauca">Cauca</option>
													<option value="Cesar">Cesar</option>
													<option value="Choco">Choco</option>
													<option value="Cordoba">Cordoba</option>
													<option value="Cundinamarca">Cundinamarca</option>
													<option value="Guainia">Guainia</option>
													<option value="Guaviare">Guaviare</option>
													<option value="Huila">Huila</option>
													<option value="Guajira">Guajira</option>
													<option value="Magdalena">Magdalena</option>
													<option value="Meta">Meta</option>
													<option value="Nariño">Nariño</option>
													<option value="Norte de Santander">Norte de Santander</option>
													<option value="Putumayo">Putumayo</option>
													<option value="Quindio">Quindio</option>
													<option value="Risaralda">Risaralda</option>
													<option value="San Andres">San Andres</option>
													<option value="Santander">Santander</option>
													<option value="Sucre">Sucre</option>
													<option value="Tolima">Tolima</option>
													<option value="Valle del Cauca">Valle del Cauca</option>
													<option value="Vaupes">Vaupes</option>
													<option value="Vichada">Vichada</option>
												</select>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary btn-block">Ingresar</button>
											</div>
						</form>
					</article>
				</div>
			</aside>
		</div>
		</center>
	</body>
</html>