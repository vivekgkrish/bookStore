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
   




<?php include "includes/db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Register</title>
    
    
</head>
<body>
   
<style>
        body{
            font-family: sans-serif;
            margin: 0;
            padding: 0;
           
        }
        #wrapper{
           
        }
        #header{
            width: 100%;
            background-color: #3d423e;
            height: 45px;
             
        }
        #logo{
            color: white;
            font-weight: bold;
            font-size: 130%;
            padding: 5px 10px;
            float: left;
        }
        
        #menuBar{
            margin: 0 auto;
            width: 250px;
            
        }
        .menuItem{
            float: left;
            padding: 8px;
            color: white;
            border-right: 1px solid white;
        }
        
        #books{
            border-collapse: collapse;
            width: 100%;
        }
        #books td, #books th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #books tr:nth-child(even){background-color: #f2f2f2;}

        #books tr:hover {background-color: #ddd;}

        #books th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
        
        img{
            height: 150px;
        }
        
        #loginMenu{
            float: right;
            width: 300px;
        }
        .loginMenuItem a{
            color: white;
            text-decoration: none;
        }
        
        .menuItem a{
            color: white;
            text-decoration: none;
        }
        
        .menuItem a:hover{
            color: green;
        }
        
       input{
            
            margin: 20px;
        }
        
        .btn{
            margin: 20px;
        }
      
    </style>    
    
   <div id="wrapper">
       
       <div id="header">
           
           <div id="logo">
               theBookStore
           </div>
           <div id="menuBar">
               <div class="menuItem" id="Books"><a href="index.php">Books</a></div>
               <div class="menuItem" id="Categories"><a href="#">Categories</a></div>
               <div class="menuItem" id="Users"><a href="#">Users</a></div>
               
           </div>
           
           <div id="loginMenu">
               <div class="loginMenuItem"><a href="login.php">login</a></div>
               <div class="loginMenuItem"><a href="register.php">Sign-up</a></div>
              
               
           </div>
           
       </div>
   
    
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
    </div>
  </body>
</html>
