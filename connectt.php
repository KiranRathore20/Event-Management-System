<html>
<head><title>Data base connectivity</title></head>
<body>
<?php
$host="localhost";
$user="root";
$pass="";
$db="event";
$con=mysqli_connect($host, $user, $pass, $db);
if(!$con)
{
echo "not successful";
}
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$event=$_REQUEST['event'];
$day=$_REQUEST['day'];
$month=$_REQUEST['month'];
$year=$_REQUEST['year'];
$vname=$_REQUEST['vname'];
$sql="INSERT INTO manage VALUES('$fname','$lname','$email','$phone','$event','$day','$month','$year','$vname')";
echo "Thanks! for connecting with us";
if(mysqli_query($con,$sql))
{
echo " We will connect  u soon";

}
mysqli_close($con);
?>
 <a href="logout.php" class="btn"> <button type="logout">logout</button>
<a href="managee.html" class="btn"> <button type="back">Backtopage</button>

</a>
</body>
</html>
