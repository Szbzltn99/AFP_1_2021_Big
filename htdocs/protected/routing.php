<?php 
if(!array_key_exists('P', $_GET) || empty($_GET['P']))
$_GET['P'] = 'home';

	switch ($_GET['P']) 
    {
		case 'login': 
			!isUserLoggedIn() ? require_once PROTECTED_DIR.'user/login.php' : header('Location: index.php');
			 break;
        case 'register': 
			!isUserLoggedIn() ? require_once PROTECTED_DIR.'user/register.php' : header('Location: index.php');
			break;
		case 'home': 
			require_once PROTECTED_DIR.'home.php';
			break;
		case 'logout': userLogout(); break;
		
		case 'editUser' : 
			isUserLoggedIn() ? require_once PROTECTED_DIR.'user/editUser.php' : header('Location: index.php');
			break;
		default: require_once PROTECTED_DIR.'404.php'; break;
	}


?>