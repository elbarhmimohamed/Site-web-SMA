<?php
session_start();
if(isset($_SESSION['nom'])  &&   isset($_SESSION['Role'])){
session_destroy();
}

?>
<!doctype html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style>
        .con{
            width:30%;
        }
        .footer {
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: center;
            }
    </style>

  </head>
    
  <body >
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">     
        <a class="navbar-brand" href="index.php">STE MAISON D'AFRIQUE</a>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
      &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
                
            
        </div>
        </nav>


        <br><br><br>
                
        <div class="container">
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="card mt-5">
                            <div class="card-title">
                                    <h3 class="bg-success text-white text-center py-3"> Connexion : </h3>
                                </div>
                                
                                <div class="card-body">

                                <form  method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nom d'utilisateur</label>
                                    <input  name="nom" id ="nom" type="text" placeholder="Entrer votre nom" class="form-control" required >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input  name="password" id ="password" type="password" placeholder="Entrer mot de passe" class="form-control" required>
                                </div>
                        
                                <br>
                            
                                <br>
                                    <button type="submit" class="btn btn-success btn-lg btn-block" name="Connexion" id="Connexion"> Se Connecter</button>
                                
                                    <br><br>
                                
                                </div>
                            
                                <br><br>
                                </form>
                                </div></div></div></div></div><br><br><br><br><br><br>

            <?php
    
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
                            $_SESSION['Role'] =  $result['Role'];
                            header('Location: Admin.php?Connecter_Succes');
                            die();
                        }
                        else{
                            echo '<script language="javascript" >
                            alert("Mot de passe inccorect !!!!!!")
                        </script>';
                        }
                    }
                    else{
                        echo '<script language="javascript" >
                                            alert("Nom inccorect !!!!!!")
                                        </script>';
                    }

        }          
        else{
            echo "Veuillez completer l'ensemble des champs";
             }
        

    }
?>


<footer class="footer mt-auto py-3">
            <div class="container">
                <span class="text-muted"> <p class="p">© 2020 SMA BENI MELLAL.</p> </span>
            </div>
</footer>
        


        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
            ></script>
            <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
            ></script>
            <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
            ></script>
 

  </body>
 </html>