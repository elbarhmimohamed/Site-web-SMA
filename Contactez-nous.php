<?php
session_start();
if(isset($_SESSION['nom'])  &&   isset($_SESSION['Role'])){
session_destroy();
session_start();
}

?>
<!doctype html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Contactez-nous</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cf66f3efc2.js" crossorigin="anonymous"></script>
    <SCRipt src="jquery-3.3.1.min.js"></SCRipt>
    <style>
        
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
        .formm{
            width : 60%;
            
           
            margin-left: 20%;
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">
                    <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
                <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                </svg>
                    Acceil</a>
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                    <a class="nav-link" href="services.php">
                    <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-bricks" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5v-3zM3 4v2h4.5V4H3zm5.5 0v2H13V4H8.5zM3 10v2h4.5v-2H3zm5.5 0v2H13v-2H8.5zM1 1v2h3.5V1H1zm4.5 0v2H15V1H5.5zM1 7v2h3.5V7H1zm4.5 0v2h5V7h-5zm6 0v2H15V7h-3.5zM1 13v2h3.5v-2H1zm4.5 0v2h5v-2h-5zm6 0v2H15v-2h-3.5z"/>
                    </svg>
                    Sérvices</a>
                </li>
                
                
                &nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                    <a class="nav-link" href="propos.php">
                    <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-signpost-2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 1.414V16h2V1.414a1 1 0 0 0-2 0z"/>
                    <path d="M1 3a1 1 0 0 1 1-1h11.5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.3 5.6a1 1 0 0 1-.8.4H2a1 1 0 0 1-1-1V3zm14 5a1 1 0 0 0-1-1H2.5a1 1 0 0 0-.8.4L.725 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4H14a1 1 0 0 0 1-1V8z"/>
                    </svg>
                    A Propos </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="propos.php">
                    <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg>
                                       Contact<span class="sr-only">(current)</span></a>
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                   
                    <a class="nav-link" href="Connexion.php">
                    
                        <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                        <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                        </svg>
                        Connexion
                </a>
           
                </li>

                
                
                </ul>
            
        </div>
        </nav>
        <br><br>
        <?php       
            
           
            include 'BD.php';
            global $db ;
           
            if(isset($_POST['envoyer'])){
                extract($_POST);
            
            if(!empty($nom)   && !empty($sujet)  && !empty($messag) ){
                
                            $options = [
                                'cost' => 12,
                            ];
                            $q = $db->prepare("INSERT INTO form(nom,adress,sujet,messag) VALUES(:nom,:adress,:sujet,:messag)");
                            $q-> execute([
                                'nom' => $nom,
                                
                                'adress'=>$adress, 
                                'sujet'=>$sujet,
                                'messag'=>$messag
                                ]); 
                                 
                               
                                            
                                $_SESSION['message'] = "Message Envoyer ";
                                $_SESSION['msg_type'] = "success";
                               

                         
                
                }
                

            }
            
                
                if (isset($_SESSION['message'])) {?>
                <div class="alert alert-<?=$_SESSION['msg_type']?>">
                    <?php 
                        echo $_SESSION['message'];
                        unset ($_SESSION['message']);
                    ?>
                </div>
                <?php } 
                
                
            session_destroy();
        ?>
        <br>
        
        <div class="formm">



        
        <h4 class="mb-3">Votre message : </h4>
        <br><br>
        <form method="post">
        <div class="row">
            <div class="col">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" placeholder="Nom" id="nom" name="nom" required>
            </div>
           
           
        </div><br>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="adress" name="adress" placeholder="Email" required>
        </div><br>
      
        <div class="form-group">
            <label for="obj">Sujet</label>
            <input type="text" class="form-control" id="sujet" name="sujet" placeholder="Sujet" required>
        </div><br>
        <div class="form-group">
            <label for="msg">Message</label>
            <textarea class="form-control" id="messag" name="messag" placeholder="Entrer un message" required></textarea>
        </div><br>
        <input class="btn btn-primary btn-lg btn-block" name="envoyer" id ="envoyer" type="submit" value="  Envoyer  " ><br/>
        <br>
        
        </form>
       
        
        
        </div>
        
       
            
            
           
                            
                    

                    
        

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