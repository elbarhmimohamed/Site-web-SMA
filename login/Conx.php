<?php
    session_start();
    include 'login/BD.php';
    global $db ;
    
    if(isset($_POST['Connexion'])){
        extract($_POST);
        if(!empty($password)  && !empty($nom)){
                    
                    $q = $db->prepare("SELECT * FROM admin WHERE nom = :nom");
                    $q->execute(['nom' => $nom]);
                    $result = $q -> fetch();
                    
                    if($result == true){
                       
                        if(password_verify ($password, $result['password'] )){
                            $_SESSION['id'] = $result['id'];
                            $_SESSION['nom'] =  $result['nom'];
                            $_SESSION['password'] =  $result['password'];
                            header("Location: page1.php");
                            die();
                        }
                        else{
                            echo 'le mot de passe est inccorect !!!';
                        }
                    }
                    else{
                        echo 'Le nom est inccorect !!!';
                    }

        }          
        else{
            echo "Veuillez completer l'ensemble des champs";
             }
        

    }
?>