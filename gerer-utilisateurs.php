<!doctype html>
<html >
  <head>
  <title>Gerer les utilisateurs</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

   <style>
       body{
           
           background: url("img/bggg.png");
           background-repeat: no-repeat;
           background-attachment: fixed;
           background-size: 100% 100%;
       }
       .tl{
           font-size : 20px;
       }
   </style>
    
  </head>
    
  <body>
  <?php session_start();
  if(isset($_SESSION['nom']) && isset($_SESSION['Role'])){
    $roledirect="Directeur";
    $rolesecret="Secretaire";
            ?>



<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">     
       
       <a class="navbar-brand" href="Admin.php">STE MAISON D'AFRIQUE</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
  
      &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
                       
            

        

            
            
            
            <li class="nav-item">
                <a class="nav-link" href="messages.php">Messages</a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="gerer-utilisateurs.php">Utilisateurs<span class="sr-only">(current)</span></a>
            </li>
            &nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;

             
            
            <div  class="nav-item dropdown">
                        <a
                            class="nav-link text-light font-weight-bold text-uppercase px-3 dropdown-toggle"
                            data-toggle="dropdown"
                            href="#"
                            >
                            <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                                    </svg>
                                    <?php echo $_SESSION['nom'] ;?>
                                    </a>
                            <div class="dropdown-menu">
                            
                            
                            <a class="dropdown-item" href="Deconnexion.php">Deconnexion</a>
                            </div>



                        </div>
                        </ul></div>
           
     </nav>
     <?php require_once 'procces.php';?>
            

            <?php
                
                if (isset($_SESSION['message'])) {?>
                <div class="alert alert-<?=$_SESSION['msg_type']?>">
                    <?php 
                        echo $_SESSION['message'];
                        unset ($_SESSION['message']);
                    ?>
                </div>
                <?php } 
                
                ?>
               
              
            
                <br><br><br>
                <?php
                if($_SESSION['Role'] == $roledirect){ ?>

                
                                    <a  type="submit" id="Ajouter" href="Creation_cpmte.php "class= "btn btn-success btn-lg">
                                        Ajouter Un Utilisateur
                                    </a>
                <?php } ?>
                <br><br>
            <div id="tableau">
            
            <table class="table table-striped">                
                 <thead class="tl">
                    <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Nom d'utilisateur</th>
                    <th scope="col">Role d'utilisateur</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                    
                    
                    </tr>
                </thead>
                
                    <?php
                       
                        
                        $conn = mysqli_connect("localhost","root","","sadif");
                        if($conn->connect_error){
                            die("connection failed : ".$conn->connect_error);
                        }
                        $sql = "SELECT * from admin";
                        $result1 = $conn-> query($sql);

                        if($result1->num_rows > 0){
                            while ($row = $result1-> fetch_assoc()){ ?>
                            <tr>
                                
                                <th> <?php echo $row["DATE"] ;?></th>
                                <th> <?php echo $row["nom"] ;?></th>
                                
                                <th> <?php echo $row["Role"] ;?></th>
                                
                                <th>
                                    <?php 
                                   
                                    if($_SESSION['nom'] != $row["nom"] ){
                                        if($_SESSION['Role'] == $roledirect && $row["Role"]!=$roledirect){

                                                ?>
                                    <a type="submite" id ="detailmsgID" href="modifmsg.php?utilid=<?php echo $row["id"] ;?>"
                                    class= "btn btn-warning">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                    </a>
                                </th>
                                <th>
                                     <a  type="submit" id="Supprimer" href="procces.php?Supprimer=<?php echo $row["id"] ;?>"
                                     class= "btn btn-danger">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                        </svg>
                                     </a>
                                </th>
                                <?php 
                                    }
                                    
                                }
                               
                                    
                                                ?>
                            <tr>
                           <?php
                            }
                            echo"</table>";
                        }
                        else{
                            echo"0 utilisateurs";
                        }
                        
                            $conn->close();
                            
                    ?>
                    </div>  

                    <?php }
  else{
    header("Location: Connexion.php?Connecter s'il vous plait !!!!!");
  }?>                    
           <br><br><br><br><br><br><br>

<center>
           <footer class="footer mt-auto py-3">
            <div class="container">
                <span > <p class="p">© 2020 SMA BENI MELLAL.</p> </span>
            </div>
</footer>
</center>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script></body>
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