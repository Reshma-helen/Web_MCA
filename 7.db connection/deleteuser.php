<html>
<body>
<form action="Home1.php" method="post">
<center>

<?php

include'conn.php';
$id1=$_POST['userid'];
$sql_3="DELETE FROM user WHERE id='$id1'";
$result_3=mysqli_query($conn,$sql_3);
if(!$result_3)
{
$msg="ERROR!!!".mysqli_error($conn);
}
else
{
echo"Deletion Success";
}
mysqli_close($conn);
?>
<br><br>
<input type="submit" value="Home Page" name="btn">
</form>
</body>
</html>
