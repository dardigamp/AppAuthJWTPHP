<?php
$usuario  = 'eduardo';
$password = '123456';
if ($usuario === $_SERVER['PHP_AUTH_USER'] && $password === $_SERVER['PHP_AUTH_PW'])
{
    echo Auth::SignIn([
        'id' => 1,
        'name' => 'Eduardo'
    ]);
}
else
{
	echo json_encode(array(
				"estado" => 0,
				"mensaje" => "No se valido correctamente"
			));	
}
