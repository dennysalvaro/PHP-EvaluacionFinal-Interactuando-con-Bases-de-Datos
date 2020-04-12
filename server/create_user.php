<?php

  	require_once('conector.php');

  	$datos = array(

        'nombre' => 'Yulissa Pazo',
        'email' => 'yulissapazo01@gmail.com.com',
        'clave' => password_hash("1234567", PASSWORD_DEFAULT),
        'nacimiento' => '1980-09-13');

        /*
        'nombre' => 'Gabriel Huaman',
        'email' => 'gabrielfranco01l@gmail.com',
        'clave' => password_hash("123456", PASSWORD_DEFAULT),
        'nacimiento' => '2017-08-25');
        */


    /*
      'nombre' => 'Dennys Huaman',
      'email' => 'dennysalvaro01@gmail.com',
      'clave' => password_hash("12345", PASSWORD_DEFAULT),
      'nacimiento' => '1980-01-13');


    */

    $con = new ConectorBD('localhost','root','');
  	$respuesta = $con->iniciarConexion('dennys_nextu');

  	if ($respuesta == 'OK') {
    	if($con->insertarRegistro('usuarios', $datos)){
      		$respuesta = "exito en la inserción";
	    }else {
	      	$respuesta = "Hubo un error y los datos no han sido cargados";
	    }
  	}else {
    	$respuesta = "No se pudo conectar a la base de datos";
  	}
    $con->cerrarConexion();
?>
