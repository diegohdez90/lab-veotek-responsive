<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lab.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/pedidos.css">
<link rel="stylesheet" href="css/articles-print.css" type="text/css" media="print" />
<link href="https://fonts.googleapis.com/css?family=Michroma" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="js/lab.js"></script>

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
			<div class="col-md-8 pedidos">
				<form onsubmit="return confirm('¿Esta de acuerdo en proseguir?');" action="registrar-pedido.php" method="post" enctype="multipart/form-data">
    				<?php
						include('connection.php');
							$queEmp = "SELECT max(folio) as folio1 FROM pedido";
						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
						$totEmp = mysql_num_rows($resEmp);
						while ($rowEmp = mysql_fetch_assoc($resEmp)) {
							$folo=$rowEmp['folio1']; 
							$foli=$folo+1;?>
					<label><b>Folio</b></label>
					<input class="form-control" id="folio" name="folio" value="<?php echo $foli;?>" required="required">
					<?php
							}
						?>

						<?php
						$sdate=date("Y")."-".date("m")."-".date("d");
					?>
					<div class="form-group">
						<label><b>Referencia</b></label>
						<input class="form-control"id="ref" name="ref" required="required">
					</div>

					<div class="form-group">
						<label><b>Fecha</b></label>
						<input class="form-control" id="fecha" name="fecha" value="<?php echo "$sdate"; ?>">
					</div>
					<div class="form-group">
						<label><b> T&eacute;cnico</b></label>
						<select class="form-control" id="tecnico" name="tecnico">
							<?php
								include('connection.php');
									$queEmp = "SELECT nombre FROM tecnos";
								$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
								$totEmp = mysql_num_rows($resEmp);
								while ($rowEmp = mysql_fetch_assoc($resEmp)) {?>
								<option value="<?php echo $rowEmp['nombre']; ?>"><?php echo $rowEmp['nombre']; ?></option>
								
							<?php
									}
								?></select><br>
							</div>

					<div class="form-group">
						<label><b>Status</b></label>
						<select class="form-control" id="status" name="status">
							<option value="Entregado">Entregado</option>
							<option value="Terminado">Terminado</option>
							<option value="En proceso">En proceso</option>
						</select>
					</div>
					<div class="form-group">
						<label><b>Armazones</b></label>
						<select class="form-control" id="armazones" name="armazones">
							<option value="Completos">Completos</option>
							<option value="Ranurados">Ranurados</option>
							<option value="3 piezas">3 piezas</option>
						</select>
					</div>
					<div class="form-group">
						<label><b>Micas</b></label>
						<select class="form-control" id="micas" name="micas">						
							<option value="Monofocal">Monofocal</option>
							<option value="Progresivo">Progresivo</option>
							<option value="Flat-Top">Flat-Top</option>
							<option value="Blend">Blend</option>
						</select>
					</div>
					<div class="form-group">
						<label><b>Materiales</b></label>
						<select class="form-control" id="materiales" name="materiales">						
							<option value="CR-39">CR-39</option>
							<option value="Poly">Poly</option>
							<option value="Hi-Index">Hi-Index</option>
							<option value="Cristal">Cristal</option>
						</select>
					</div>

<!---							<table class="table">

								<tr>
									<th></th>
									<th>Esfera</th>
									<th>Cilindro</th>
									<th>Eje</th>
									<th>Add</th>
									<th>DNP</th>
									<th>Altura</th>
									<th>Prisma</th>
									<th>Base Seg</th>

								</tr>
								<tr>
									<td><label><b>OD</b></label></td>
									<td><input id="ode" name="ode"></td>
									<td><input id="odc" name="odc"></td>
									<td><input id="odej" name="odej"></td>
									<td><input id="oda" name="oda"></td>
									<td><input id="odd" name="odd"></td>
									<td><input id="odal" name="odal"></td>
									<td><input id="odp" name="odp"></td>
									<td><input id="odb" name="odb"></td>
								</tr>
								<tr>
									<td><label><b>OI</b></label></td>
									<td><input id="oie" name="oie"></td>
									<td><input id="oic" name="oic"></td>
									<td><input id="oiej" name="oiej"></td>
									<td><input id="oia" name="oia"></td>
									<td><input id="oid" name="oid"></td>
									<td><input id="oial" name="oial"></td>
									<td><input id="oip" name="oip"></td>
									<td><input id="oib" name="oib"></td>
								</tr>


							</table>
-->
						<div class="table-responsive">
							<table class="table">
								
								<tr>
									<th></th>
									<th>Ojo Derecho</th>
									<th>Ojo Izquierdo</th>

								</tr>
								<tr>
									<td>Esfera</td>
									<td><input id="ode" name="ode"></td>
									<td><input id="oie" name="oie"></td>
								</tr>
								<tr>
									<td>Cilindro</td>
									<td><input id="odc" name="odc"></td>
									<td><input id="oic" name="oic"></td>
								</tr>
								<tr>
									<td>Eje</td>
									<td><input id="odej" name="odej"></td>
									<td><input id="oiej" name="oiej"></td>
								</tr>
								<tr>
									<td>ADD</td>
									<td><input id="oda" name="oda"></td>
									<td><input id="oia" name="oia"></td>
								</tr>
								<tr>
									<td>DNP</td>
									<td><input id="odd" name="odd"></td>
									<td><input id="oid" name="oid"></td>
								</tr>
								<tr>
									<td>Altura</td>
									<td><input id="odal" name="odal"></td>
									<td><input id="oial" name="oial"></td>
								</tr>
								<tr>
									<td>Prisma</td>
									<td><input id="odp" name="odp"></td>
									<td><input id="oip" name="oip"></td>
								</tr>
								<tr>
									<td>Base Seg.</td>
									<td><input id="odb" name="odb"></td>
									<td><input id="oib" name="oib"></td>
								</tr>
							</table>
						</div>




					<div class="form-group">
						<label><b>Descripcion</b> </label><br>
						<textarea class="form-control" id="descrip" name="descrip" ></textarea><br>
					</div>
					<div class="form-group">
						<label><b>Tratamiento</b></label>
						<select class="form-control" id="tratamiento" name="tratamiento">	
							<option value="BCO">BCO</option>
							<option value="Antireflejante">Antireflejante</option>
							<option value="Fotocromatico">Fotocromatico</option>
							<option value="Transitions">Transitions</option>
							<option value="Crizal">Crizal</option>
							<option value="Transitions-Crizal">Transitions-Crizal</option>
							<option value="AR-Foto">AR-Foto</option>
							<option value="Polarizado">Polarizado</option>
							<option value="Polarizado-AR">Polarizado-AR</option>
						</select>
					</div>
					<div class="form-group">
						<label><b>Tipo</b></label>
						<select class="form-control" id="tipo" name="tipo">							
							<option value="Terminado">Terminado</option>
							<option value="Procesado">Procesado</option>
							<option value="Rebisel">Rebisel</option>
						</select>
					</div>
	            	<input type="submit" id="submit" >
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


