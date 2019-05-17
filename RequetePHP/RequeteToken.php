<?php

header('Content-Type: application/json');

$con=mysqli_connect("localhost","root","aazz","bitirme_projesi");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$Token = $_POST['Valeur'];

$sql = "INSERT INTO Token(token) VALUES ('$Token')";

if ($result=mysqli_query($con,$sql))
  {
    $response='';
    if(isset($response)){
      $response['error']=false;
      $response['message']='Token added successfully';
    }
    echo json_encode($response);
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>
