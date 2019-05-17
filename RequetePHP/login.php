
<?php

header('Content-Type: application/json');

$con=mysqli_connect("localhost","root","aazz","bitirme_projesi");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//WHERE 'Email' LIKE 'enes7466@gmail.com' AND 'Password' LIKE ''
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$sql = "SELECT ID,Email FROM Membre WHERE Email = '$Email' AND Password = '$Password'";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
     //("%s (%s)\n",$row[0],$row[1]);
     echo json_encode($row[0]);
     echo json_encode($row[1]);
    }
  // Free result set
  mysqli_free_result($result);
}


mysqli_close($con);
?>
