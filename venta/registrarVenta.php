<?php require('../vendedor/headerVendedor.php'); ?>

<?php
    $db=mysql_connect('localhost','root' ,'')or die("cannot connect");
	mysql_select_db('autoventabd') or die("Query failed". mysql_error());

	$idVehiculo = $_POST['idVehiculo'];
	$precioVenta = $_POST['precioFinal'];

	echo "ci es:".$idVehiculo ;
	echo "precio es:".$precioVenta ;
	
	$sql="INSERT INTO ventas (idVehiculo,precioFinal) values ('$idVehiculo','$precioVenta')"; //genero la instancia SQL y luego la ejecuto.
	$result=mysql_query($sql,$db);  

	if ($result) {
		header('Location: mostrarVehiculos.php');
		//echo "inserto en la consulta";
		//header('Location: mostrarVehiculos.php');
	}else 
	{
		echo "ERROR EN LA CONSULTA";
	}
?>


<?php require('../vendedor/footerVendedor.php'); ?>