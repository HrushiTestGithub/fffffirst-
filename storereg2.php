<?php  
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'task2';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  

$a1 = $_POST['a'];
$b1 = $_POST['b'];
$c1 = $_POST['c'];
$d1 = $_POST['d'];
$e1 = $_POST['e'];
$f1 = $_POST['f'];
$g1 = $_POST['g'];
$h1 = $_POST['h'];
$i1 = $_POST['i'];
$j1 = $_POST['j'];
$k1 = $_POST['k'];

$sql = "INSERT INTO registration2(First_Name,Last_Name, Email, Address, City ,Zip,State,Country,Organisation_Department,Kind, Profile)
 VALUES('$a1', '$b1','$c1 ','$d1','$e1','$f1','$g1','$h1','$i1','$j1','$k1')";

if(mysqli_query($conn,$sql))
{
	echo "Registerd Successfully";
}
else
{
	echo mysqli_error($conn);
}

?>
