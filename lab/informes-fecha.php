<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lab.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/informes.css">
<link rel="stylesheet" href="css/articles-print.css" type="text/css" media="print" />
<link href="https://fonts.googleapis.com/css?family=Michroma" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="js/lab.js"></script>
<script src="js/chart.js"></script>

</head>


<body>

	<div class="container">
		<div class="row header">
			<div class="col-md-8">
				<h3>Laboratorio de Reparaciones de Veotek</h3>
			</div>
			<div class="col-md-4">
				
<?php
			include ('funciones.php');
							if (verificar_usuario()){
								print "<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bienvenido $_SESSION[login] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> ";
								print "<a href='salir.php'/> Cerrar Sesion</a> ";


							} else {
								header('Location:session.php');
							}

echo'			<img width="100%" align="center" src="../img/veotek-lab.png">			
			</div>
		</div>';

?>



		<div class="row">
			<div class="col-md-8 informes">


				<form action="fechas.php" method="get" enctype="multipart/form-data">
					<input type="date" id="date" name="date">
					<input type="submit" id="inputdefault" value="Consulta por dia">
				</form>
				<form action="fechas-rango.php" method="get" enctype="multipart/form-data">
					
					<input type="date" id="inputdefault" name="date">
					<input type="date" id="inputdefault" name="date2">
					<input type="submit" id="submit" value="Consulta por rango">
				</form>

				

			</div>
			<div class="col-md-4 menu">
				<div class="row">
					<div class="col-md-6">
						<ul>
							<ul>
							<li>
								<p class="text-center"><a href="index.php"><span class="glyphicon glyphicon-home" style="font-size:88px;"></span></a><br>
								Home</p>
							</li>
							<li>
								<p class="text-center"><a href="articulos.php"><span class="glyphicon glyphicon-file" style="font-size:88px;"></span></a><br>
								Articulos</p>
							</li>
							<li>
								<p class="text-center"><a href="alta.php"><span class="glyphicon glyphicon-log-in" style="font-size:88px;"></span></a><br>
		                        Entradas</p>
							</li>
							<li>
								<p class="text-center"><span class="glyphicon glyphicon-log-out" style="font-size:88px;"></span><br>
		                        Salidas</p>
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul>
							<li>
								<p class="text-center"><span class="glyphicon glyphicon-refresh" style="font-size:88px;"></span><br>
		                        Modificar</p>
							</li>
							<li>
								<p class="text-center"><span class="glyphicon glyphicon-list-alt" style="font-size:88px;"></span><br>
		                        Pedidos</p>
							</li>
							<li>
								<p class="text-center"><span class="glyphicon glyphicon-folder-open" style="font-size:88px;"></span><br>
		                        Informes</p>
							</li>
							<li>
								<p class="text-center"><span class="glyphicon glyphicon-search" style="font-size:88px;"></span><br>
		                        Busqueda</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>


