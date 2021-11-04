<?php


 require 'DB.php';


 $id  = $_POST["id"];


 $sql = "DELETE FROM admin WHERE id = '".$id."'";


 $result = $mysqli->query($sql);


 echo json_encode([$id]);

 header("Location: gerer-utilisateurs.php");
?>