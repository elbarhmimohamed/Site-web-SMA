



<?php 
    require_once('BD.php'); 
    $id = $_GET['GetId'];
    $query = "SELECT * FROM admin WHERE id = '".$id."'";
    $result5 = mysqli_query($db,$query);

    while($row=mysqli_fetch_assoc($result5)){
            $id =$row['id'];
            $usernam=$row['nom'];
            $passwordd=$row['password'];

    }
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Crud Operation in Php Using OOP</title>



<body class="bg-dark">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="card mt-5">
                                <div class="card-title">
                                    <h3 class="bg-success text-white text-center py-3"> Modifier un utilisateur</h3>
                                </div>
                                <div class="card-body">

                            <form  method="post">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Nom d'utilisateur</label>
                                    
                                    <input  name="lnom" id ="lnom" type="text" placeholder="Entrer votre nom"  class="form-control" values="<?php echo' $usernam' ; ?>" required >
                                </div>
                        
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    
                                    <input  name="lpassword"id ="lpassword "type="password" placeholder="Entrer mot de passe" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    
                                    <input  name="lapassword"id ="lapassword "type="password" placeholder="confirmé votre mot de passe" class="form-control" required>
                                </div>
                                
                                <br>
                            
                                <input  name="formsend" id ="formsend" type="submit" value="  Modifier  " class="btn btn-outline-success btn-lg btn-block"  ><br/>
                                
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>