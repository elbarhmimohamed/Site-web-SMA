<!doctype html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
         body{
           
           background: url("img/bggg.png");
           background-repeat: no-repeat;
           background-attachment: fixed;
           background-size: 100% 100%;
       }
        a{
            text-decoration:none;
        }
        button a{
            text-decoration:none;
            color :white ;
        }
        button a:hover{
            text-decoration:none;
            color : black ;
        }
        button:hover{
            text-decoration:none;
            color : black ;
        }
        .p{
                color:black;
                font-size:90;
                text-align:center;
                font-family : New Century Schoolbook, TeX Gyre Schola, serif ;
                font-style: oblique;
            }
    </style>

  </head>
    
  <body>
  <?php session_start();
  if(isset($_SESSION['nom'])&&isset($_SESSION['Role'])){
            ?>
                 
                 <link href="sticky-footer-navbar.css" rel="stylesheet">
  <body class="d-flex flex-column h-100"> 

        
        
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
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        
                        <li class="nav-item">
                            <a class="nav-link" href="gerer-utilisateurs.php">Utilisateurs</a>
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
                        
                        </ul> </div>
                        
                        
                        



                       
                        
                
                    </nav>
                    <br><br><br>
                    
                    <center>
                
                    <br><br>
                    <center><img src="img/logo.png" alt="iconne_maintenance" width="25%" height="25%"></center>
                    
                   
                   <p class="p" >
                   <FONT size="6pt"> 
                        <center>
                        BIENVENUE SUR ESPACE ADMIN <br> 
                    VOUS POUVEZ VOIR,SUPPRIMER LES MESSAGES DES VISITEURS DE VOTRE SITE <br>
                    ET AUSSI VOIR LES AUTRES UTILISATEURS ET SES ROLES
                        
                            
                    

                    </p></center> </FONT>.
                        
                        
                            
                    </center> 

  </p>

   <center>
           <footer class="footer mt-auto py-3">
            <div class="container">
                <span > <p class="p">© 2020 SMA BENI MELLAL.</p> </span>
            </div>
</footer>
</center>
                
            
  <?php }
  else{
    header("Location: Connexion.php? Connecter s il vous plait !!!!!");
  }?>

        



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