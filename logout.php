<?php 
  setcookie("login","",time() - (86400));
  setcookie("name","",time()-(86400));
  setcookie("id","",time()-86400);
  header('Location: login.php');
  exit();
?>