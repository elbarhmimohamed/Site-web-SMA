<?php


  require 'DB.php';


  $id  = $_POST["id"];

  $post = $_POST;


  $sql = "UPDATE admin SET nom = '".$post['nom']."',password = '".$post['password']."'  WHERE id = '".$id."'";


  $result = $mysqli->query($sql);


  $sql = "SELECT * FROM admin WHERE id = '".$id."'"; 


  $result = $mysqli->query($sql);


  $data = $result->fetch_assoc();


  echo json_encode($data);

  header("Location: gerer-utilisateurs.php");
?>