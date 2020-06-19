<?php
$cabeceras = apache_request_headers();
////if(!isset($cabeceras["Authorization"])) die('Debe especificar el token');

////$token = $_SERVER['Authorization'];
$token = $cabeceras["Authorization"];
////$token = $_SERVER['HTTP_AUTHORIZATION'];

////echo Auth::Check($token)

//print substr($token,7);
$token = substr($token,7);

//var_dump(Auth::GetData($token));
//echo Auth::Check($token);

try 
{
    Auth::Check($token);
    echo json_encode(array(
			"estado" => 1,
			"mensaje" => "DATOS"
		));	
} 
catch (Exception $e) 
{
    echo json_encode(array(
			"estado" => 0,
			"mensaje" => $e->getMessage()
		));    
}
