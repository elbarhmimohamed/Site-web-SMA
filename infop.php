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
            if(isset($_SESSION['nom']) && isset($_SESSION['Role']) && isset($_SESSION['password'])){
                         
                
            
            
            
            
                        $conn1 = mysqli_connect("localhost","root","","sadif");
                        if($conn1->connect_error){
                            die("connection failed : ".$conn1->connect_error);
                        }
                        $nomm= $_SESSION['nom'];
                        $rolee=$_SESSION['Role'];
                        $lapassword=$_SESSION['password'];
                       
                        

                        
                             ?>
                            
                            
           
        
        <div class="container">
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="card mt-5">
                                <div class="card-title">
                                    <h3 class="bg-warning text-white text-center py-3"> Infos personnelles : </h3>
                                    <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp; Nom d'utilisateur : <?php echo $nomm ;?><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp; Role : <?php echo $rolee ;?><br>
                                    <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------------------------
                                    <br>
                                </div>
                                <div class="card-body">

                                <form  method="post">
                                 <div class="form-group">
                                
                                    <label for="exampleInputEmail1">Modifier Nom d'utilisateur : </label>
                                    
                                    <input    name="lnom" id ="lnom" type="text" placeholder="Entrer votre nom"  class="form-control"  required >
                                </div>
                                <div class="form-group">
                                   
                                    <label for="inputState">Modifier Role d'utilisateur : </label>
                                    <select   name="lrole" id ="lrole" class="form-control">
                                        <option selected>Choisir le Role</option>
                                        <option>Directeur</option>
                                        <option>Secretaire</option>
                                        
                                    </select>
                                    
                                </div>
                        
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    
                                    <input   name="lpassword" id ="lpassword "type="password" placeholder="Entrer mot de passe" class="form-control" required>
                                </div>

                                
                                
                                <br>
                            
                                <input  name="formsend" id ="formsend" type="submit" value="  Enregistrer  " class="btn btn-warning "  >&nbsp;&nbsp;
                                <a  type="submit"  href="gerer-utilisateurs.php"
                                     class= "btn  btn-outline-warning ">
                                        Annuler
                                </a>
                                <br><br>


                       <?php 
                        
                                 include 'BD.php';
                                global $db ;
                            
                                if(isset($_POST['formsend'])){
                                    extract($_POST);
                                
                                if(!empty($lpassword) && !empty($lrole) && !empty($lnom)){
                                    if($lpassword == $lapassword){
                                           
                                                $db->query("DELETE FROM admin WHERE nom = $nomm") or die ($db->error());
                                               
                                            
                                                $q = $db->prepare("INSERT INTO admin(nom,Role) VALUES(:lnom,:lrole)");
                                                $q-> execute([
                                                    'lnom' => $lnom,
                                                   
                                                    'lrole' => $lrole
                                                    ]); 
                                                    
                                                    header("location:infop.php");

                                            
                                            
                                            

                                            }
                                    
                                        else{
                                       
                                            echo '<script language="javascript" >
                                                alert("Mots de passes inccorect !!!!!!")
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