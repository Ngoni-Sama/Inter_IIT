<?php

  $q = $_GET['q'];
  require("db.php");
  $query = "Select * from medicines";
  // echo strlen($q)."  ".$q."\n";
  if(strlen($q)!==0){
    $query = $query." where name like '".$q."%'";
  }
  $stmt = $conn->prepare($query);
  $stmt->execute();
  $result = $stmt->get_result();
  if(!$result) { die("[]");}
  $outp = $result->fetch_all(MYSQLI_ASSOC);

  echo json_encode($outp);
?>
