<?php 
function getConnection(){
    $server = 'localhost'; 
    $username = 'root';
    $password = '';
    $database = 'afp1_big';
    $connection = mysqli_connect($server,$username,$password, $database);
    return $connection;
}

/*function executeQuery($query)
{
    $connection = getConnection();
    if(mysqli_query($connection,$query))
    {
        echo "Sikeres művelet";
    } else {
        echo "Hiba";
    }
    mysqli_close($connection);
}*/

function executeQuery($query)
{
    $connection = getConnection();
    $statement = mysqli_prepare($connection,$query);
    $success = mysqli_stmt_execute($statement);
    if($success)
    {
        echo "siker";
    }
    else{
        echo "fail";
    }
    mysqli_stmt_close($statement);
    mysqli_close($connection);
}

function classList($query)
{
    $connection = getConnection();
    $statement = mysqli_prepare($connection,$query);
    $success = mysqli_stmt_execute($statement);
    $result = [];
    if($success === TRUE)
    {
        $idk = $statement->get_result();
        while($temp = $idk->fetch_assoc())
        {
            $result[]=$temp;
        }
    }
    else{
        die('Sikertelen végrehajtás');
    }
    
    mysqli_stmt_close($statement);

    mysqli_close($connection);

    return $result;

}
function isUserLoggedIn() 
{
	return $_SESSION  != null && array_key_exists('uid', $_SESSION) && is_numeric($_SESSION['uid']);
}
function userLogout() {
	session_unset();
	session_destroy();
	header('Location: index.php?P=home');
}
?>