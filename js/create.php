<?php


require 'DB.php';


  $post = $_POST;


  $sql = "INSERT INTO admin (title,description) 


	VALUES ('".$post['nom']."','".$post['password']."')";


  $result = $mysqli->query($sql);


  $sql = "SELECT * FROM admin Order by id desc LIMIT 1"; 


  $result = $mysqli->query($sql);


  $data = $result->fetch_assoc();


echo json_encode($data);
header("Location: gerer-utilisateurs.php");

?>