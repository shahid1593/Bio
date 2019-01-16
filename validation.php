<?PHP
$db=mysql_connect('localhost','root','');
$conn=mysql_select_db("Biometric", $db);
$user=$_REQUEST['uname'];
$pass=$_REQUEST['password'];
echo $user,$pass;
$r1=mysql_query("select * from user where uname='$user' and password='$pass'",$db);
if (mysql_affected_rows($db)>=1)
	header("location:student.php?uname=$user");
	else 
	header("location:login.php");
	?>