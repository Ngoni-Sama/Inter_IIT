<?php 
  $conn = mysqli_connect('localhost','root','tinku@123','credentials');
  if(mysqli_connect_errno()){
    echo "Failed to connect with db.";
  }
  // else{
  //   echo "connection Successful";
  // }
?>