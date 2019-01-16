<?PHP
$db=mysql_connect('localhost','root','');
$conn=mysql_select_db("Biometric", $db);
$user=$_REQUEST['uname'];
$pass=$_REQUEST['password'];
echo $user,$pass;
$r1=mysql_query("select * from staff where username='$user' and password='$pass'",$db);
if (mysql_affected_rows($db)>=1)
	header("location:staff.php?username=$user");
	else 
	header("location:login.php");
	?>