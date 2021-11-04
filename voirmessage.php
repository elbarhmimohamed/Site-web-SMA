<!doctype html>
<html >
  <head>
  <title>Details messages</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

   
    
  </head>
    
  <body class="bg-dark">
            
               
           
             


            
            <?php       
            
            
            
             session_start();
            if(isset($_SESSION['nom'])){
                    
                        
                        $conn1 = mysqli_connect("localhost","root","","sadif");
                        if($conn1->connect_error){
                            die("connection failed : ".$conn1->connect_error);
                        }
                        $id = $_GET['msgid'];
                        $sql1 = "SELECT * from form WHERE id = $id";
                        $result3 = $conn1-> query($sql1);

                        if($result3->num_rows ==1){
                            while ($row = $result3-> fetch_assoc()){ ?>
                            
                            
           
        
        <div class="container">
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="card mt-5">
                                <div class="card-title">
                                    <h3 class="bg-primary text-white text-center py-3"> Message De : <?php echo $row["nom"] ;?> </h3>
                                </div>
                                <div class="card-body">

                            <form  >
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Date :</label>
                                    <?php echo $row["date"] ;?>
                                    
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Nom :</label>
                                    
                                    <?php echo $row["nom"] ;?>
                                </div>
                        
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email :</label>
                                    <?php echo $row["adress"] ;?>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Sujet :</label>
                                    <?php echo $row["sujet"] ;?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Message :</label>
                                    <hr>
                                    <?php echo $row["messag"] ;?>
                                </div>
                                <hr>
                                <a  type="submit" id="Supprimermsg" href="messages.php"
                                     class= "btn btn-outline-primary">
                                        Retour
                                </a>
                                
                        <?php }}
                       
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