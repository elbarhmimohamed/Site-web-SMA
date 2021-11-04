<!doctype html>
<html >
  <head>
  <title>Modifier utilisateurs</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

   
    
  </head>
    
  <body class="bg-dark">
            
               
           
             


            
  <?php session_start();
            if(isset($_SESSION['nom'])){
                         
            
            
            
            
            
                        $conn1 = mysqli_connect("localhost","root","","sadif");
                        if($conn1->connect_error){
                            die("connection failed : ".$conn1->connect_error);
                        }
                        $id = $_GET['utilid'];
                        $sql1 = "SELECT * from admin WHERE id = $id";
                        $result3 = $conn1-> query($sql1);

                        if($result3->num_rows ==1){
                            while ($row = $result3-> fetch_assoc()){ ?>
                            
                            
           
        
        <div class="container">
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="card mt-5">
                                <div class="card-title">
                                    <h3 class="bg-warning text-white text-center py-3"> Modifier Utilisateur : <?php echo $row["nom"] ;?></h3>
                                </div>
                                <div class="card-body">

                                <form  method="post">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Nom d'utilisateur</label>
                                    
                                    <input   value="<?php echo $row["nom"] ;?>" name="lnom" id ="lnom" type="text" placeholder="Entrer votre nom"  class="form-control"  required >
                                </div>
                                <div class="form-group">
                                    
                                    <label for="inputState">Role d'utilisateur</label>
                                    <select value="<?php echo $row["Role"] ;?> " name="lrole" id ="lrole" class="form-control">
                                        <option selected>Choisir le Role</option>
                                        <option>Directeur</option>
                                        <option>Secretaire</option>
                                        
                                    </select>
                                    
                                </div>
                        
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    
                                    <input   name="lpassword"id ="lpassword "type="password" placeholder="Entrer mot de passe" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword12">Password</label>
                                    
                                    <input   name="lapassword"id ="lapassword "type="password" placeholder="confirmé votre mot de passe" class="form-control" required>
                                </div>
                                
                                <br>
                            
                                <input  name="formsend" id ="formsend" type="submit" value="  Enregistrer  " class="btn btn-warning "  >&nbsp;&nbsp;
                                <a  type="submit"  href="gerer-utilisateurs.php"
                                     class= "btn  btn-outline-warning ">
                                        Annuler
                                </a>
                                <br><br>


                        <?php }} 
                        
                                 include 'BD.php';
                                global $db ;
                            
                                if(isset($_POST['formsend'])){
                                    extract($_POST);
                                
                                if(!empty($lpassword) && !empty($lapassword) && !empty($lnom)){
                                    if($lpassword == $lapassword){
                                            $options = [
                                                'cost' => 12,
                                            ];
                                            $hashpass = password_hash($lpassword, PASSWORD_BCRYPT, $options);
                                            
                                                
                                                $db->query("DELETE FROM admin WHERE id = $id") or die ($db->error());
                                                $q = $db->prepare("INSERT INTO admin(nom,Role,password) VALUES(:lnom,:lrole,:password)");
                                                //$q=$db->prepare("UPDATE admin SET nom = $lnom,Role=$lrole,password=$password WHERE id=$id");
                                                $q-> execute([
                                                    'lnom' => $lnom,
                                                    'password' => $hashpass,
                                                    'lrole' => $lrole
                                                    ]); 
                                                    $_SESSION['message'] = "L'utilisateur est Modifier ";
                                                    $_SESSION['msg_type'] = "warning";
                                                    header("location:gerer-utilisateurs.php");

                                            
                                            
                                            

                                            }
                                    
                                        else{
                                       
                                            echo '<script language="javascript" >
                                                alert("Mots de passes n est pas les meme !!!!!!")
                                            </script>';
                       
                     
                                    
                                    }
                                    }
                                

                            }
                        
                        
                        
                        
                        
                        
                        
                        ?>
                                
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }
  else{
    header("Location: Connexion.php?Connecter s'il vous plait !!!!!");
  }?>
   </body>
   </html>