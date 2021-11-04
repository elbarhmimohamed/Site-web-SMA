<?php
           
          $conn = mysqli_connect("localhost","root","","sadif");
          if($conn->connect_error){
              die("connection failed : ".$conn->connect_error);
          }

         if (isset($_GET['Supprimer'])) {
            $id = $_GET['Supprimer'];
            $conn->query("DELETE FROM admin WHERE id = $id") or die ($conn->error());
            $_SESSION['message'] = "L'utilisateur est Supprimé ";
            $_SESSION['msg_type'] = "danger";
            header("Location: gerer-utilisateurs.php");
               
            
            }

            if (isset($_GET['Supprimermsg'])) {
                $id = $_GET['Supprimermsg'];
                $conn->query("DELETE FROM form WHERE id = $id") or die ($conn->error());
                $_SESSION['message'] = "Message est Supprimé ";
                $_SESSION['msg_type'] = "danger";
                header("Location: messages.php");
                                   
                }
            
            









?>