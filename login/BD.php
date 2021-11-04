<?php

    define('HOST','localhost');
    define('DB_NAME','sadif');
    define('USER','root');
    define('PASS','');
       
    try{
          $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS)   ; 
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
    }
    catch(PDOException $e ){
        echo $e ;
    }
   
     if (isset($_GET['Supprimer'])) {
        $id = $_GET['Supprimer'];
        $c = $db->prepare("DELETE FROM admin WhERE id = $id") or die ($db->error());
        
                        }

     

?>