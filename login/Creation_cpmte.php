<!DOCTYPE HTML>
<html>
    <header>
        <title>Creation d'une compte Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </header>
    <body>
        
 
            <div id="conect">
            <form method="post">
                <input  name="lnom" id ="lnom" type="text" placeholder="Entrer votre nom"  required ><br/><br/>
                <input  name="lpassword"id ="lpassword "type="password" placeholder="Entrer mot de passe" required><br/><br/>
                <input  name="lapassword"id ="lapassword "type="password" placeholder="confirmé votre mot de passe" required><br/><br/>
                <input  name="formsend" id ="formsend" type="submit" value="  Accepter  " ><br/>
            </form></div>
<?php       
            
            session_start();
            include 'login/BD.php';
            global $db ;
           
            if(isset($_POST['formsend'])){
                extract($_POST);
            
            if(!empty($lpassword) && !empty($lapassword) && !empty($lnom)){
                if($lpassword == $lapassword){
                        $options = [
                            'cost' => 12,
                        ];
                        $hashpass = password_hash($lpassword, PASSWORD_BCRYPT, $options);
                    
                        include 'login/BD.php';
                        global $db ;
                        $c = $db->prepare("SELECT nom FROM admin WHERE nom = :lnom");
                        $c->execute(['lnom' => $lnom]);
                        $result = $c -> rowCount();
                        if($result == 0){
                            $q = $db->prepare("INSERT INTO admin(nom,password) VALUES(:lnom,:password)");
                            $q-> execute([
                                'lnom' => $lnom,
                                'password' => $hashpass
                                ]); 
                                echo 'le compte a ete crée';
                        }
                         
                         else{
                                echo 'le nom existe déja !';
                         }

                         }
                 else{
                    echo 'Essayé a nouveau !!!!!!!!';
                 }
                }
            else{
                echo 'Error !!!!!!!!!!!!!!!!' ;
            }

        }
        ?>
   </body>
</html>