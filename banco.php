<meta charset="utf-8">
<?
$host = "localhost";
$user = "root";
$pass = "";
$db = "dados";
$conexao = new mysqli($host,$user,$pass,$db);

$con = mysql_pconnect($host, $user, $db, $pass) or trigger_error(mysqli_error(),E_USER_ERROR); 


?>