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
$g1 = ($_POST['g']);
$h1 = ($_POST['h']) ? 'checked' : 'Unchecked';

$sql = "INSERT INTO Registration1(Username,Password, User_Type,Display_Name,Address, Email ,Gender,Checkbox) VALUES('$a1', '$b1','$c1 ','$d1','$e1','$f1','$g1','$h1')";

if(mysqli_query($conn,$sql))
{
	echo "Registerd Successfully";
}
else
{
	echo mysqli_error($conn);
}

?>
