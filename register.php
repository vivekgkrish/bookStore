<?php include "includes/db.php"?>


<?php
if(isset($_POST['submit'])) {
    
    $email = $_POST['email'];
    $name = $_POST['username'];
    $pass = $_POST['password'];
    
    $query = "INSERT INTO users (email,username,password) VALUES ('$email', '$name', '$pass')";
    
    
     if ($connection->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}

$connection->close();
}
   
  ?>
   




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Register User</title>
  </head>
  <body>
    <style>
        input{
            
            margin: 20px;
        }
        
        .btn{
            margin: 20px;
        }
   </style>
    
    <div class="container">
    
    <div>
        
        <h3>Register USER</h3>
    </div>
    <div class="myform">
        
        <form name = "myForm" method="post" onsubmit = "return(validate());">
           <div>
               <input placeholder="Enter Email" type="email" class="form-control" name="email" >
               
               <input placeholder="user name" type="text" class="form-control" name="username" >
               <input placeholder="Enter Password" type="password" class="form-control" name="password" >
               
           </div>
            
            <div>
                
             <button name = "submit" type="submit" class="btn btn-success">Register Now</button>
             
             

            </div>
            
            
            
        </form>
        
    </div>
    
    
    
</div>
   
   
   
   <script type = "text/javascript">
   <!--
      // Form validation code will come here.
      function validate() {
      
         if( document.myForm.email.value == "" ) {
            alert( "Please provide your email!" );
            document.myForm.email.focus() ;
            return false;
         }
         if( document.myForm.username.value == "" ) {
            alert( "Please provide your username!" );
            document.myForm.username.focus() ;
            return false;
         }
         
         if(document.myForm.password.value == ""){
             
             alert( "Please provide your pass" );
            document.myForm.password.focus() ;
            return false;
         }
         return( true );   
        
      }
   
   //-->
</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>