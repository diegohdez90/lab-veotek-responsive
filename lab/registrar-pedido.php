<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lab.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/registrar-pedido.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="js/lab.js"></script>
<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=pedidos.php">
</head>


<body>

	<div class="container registrar">
		<div class="row error">
			<img id="cargando" src="img/cargando.gif">
				<?php
                            //1. Crear conexión a la Base de Datos
                        $link = mysqli_connect("localhost","root","");
                                mysqli_select_db($link, "labveotek");  

                        $folio = $_POST['folio'];
                        $ref = $_POST['ref'];
                        $fecha = $_POST['fecha'];
                        $tecnico=$_POST['tecnico'];
                        $ode1=$_POST['ode'];
                        $odc1=$_POST['odc'];
                        $odej1=$_POST['odej'];
                        $oda1=$_POST['oda'];
                        $odd1=$_POST['odd'];
                        $odal1=$_POST['odal'];
                        $odp1=$_POST['odp'];
                        $odb1=$_POST['odb'];
                        $oie2=$_POST['oie'];
                        $oic2=$_POST['oic'];
                        $oiej2=$_POST['oiej'];
                        $oia2=$_POST['oia'];
                        $oid2=$_POST['oid'];
                        $oial2=$_POST['oial'];
                        $oip2=$_POST['oip'];
                        $oib2=$_POST['oib'];
                        $descrip = $_POST['descrip'];
                        $status = $_POST['status'];
                        $armazon = $_POST['armazones'];
                        $micas = $_POST['micas'];
                        $materiales = $_POST['materiales'];
                        $tratamiento = $_POST['tratamiento'];
                        $tipo = $_POST['tipo'];



                        //4. Insertar campos en la Base de Datos (No inserto el id_empleado ya que se genera automaticamente)
                        $res = mysqli_query($link,"select ref from pedido where ref = '$ref'");
                        $rows = mysqli_num_rows($res);
                        if($rows==0){
                            $insertar = mysqli_query($link,"insert into pedido (folio,ref,fecha,tecnico,ode1,odc1,odej1,odd1,oda1,odal1,odp1,odb1,oie2,oic2,oiej2,oid2,oia2,oial2,oip2,oib2,descripcion,status,armazon,micas,materiales,tratamiento,tipo) values ('$folio','$ref','$fecha','$tecnico','$ode1','$odc1','$odej1','$odd1','$oda1','$odal1','$odp1','$odb1','$oie2','$oic2','$oiej2','$oid2','$oia2','$oial2','$oip2','$oib2','$descrip','$status','$armazon','$micas','$materiales','$tratamiento','$tipo')");
                        }
                        else{
                            die("<h3 class='text-center'>Duplicado el valor de Referencia ".$rows. " Valores duplicados</h3>");
                        }

                        if (!$insertar) {
                        die("<h3 class='text-center'>Fallo en la insercion de registro en la Base de Datos: " . mysql_error(). "Posible dato de REFERENCIA duplidado</h3>");
                    }
                    //4. Cerrar conexión a la Base de Datos
                    mysqli_close($link);

                ?>
	            </div>
	</div>


</body>
