<?php
	require_once "../Models/conexion.php";

	session_start();

	$conexion = new Conectar();
   	$conexion = $conexion->conexion();

   	$instruccion = "SELECT * FROM vuelo WHERE id_vuelo='" . $_POST['vuelo'] . "';";
   	$result = mysqli_query($conexion, $instruccion);
   	$row = mysqli_fetch_assoc($result);
   	$vuelo = Array();
   	$vuelo['id_vuelo']	  =	$row["id_vuelo"];
   	$vuelo['costo_vuelo'] = $row["costo_vuelo"];
   	$vuelo['duracion']	  = $row["duracion"];
   	$_SESSION['vuelo']=$vuelo;

    INSERT INTO reserva 

	#header("location: ../reserva");
?>