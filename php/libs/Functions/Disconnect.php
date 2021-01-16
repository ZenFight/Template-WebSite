<?php 

//
//		FONCTION DE DECONNEXION
//
function Disconnect()
{

	if(!isset($_SESSION['user_connected']))
	{

		header('Location: /no-access');

	}
	else 
	{

		$_SESSION = array();
		session_destroy();
		header('Location: /');

	}

}