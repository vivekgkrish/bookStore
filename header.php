<?php include "includes/db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Document</title>
    
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
        
      
    </style>
</head>
<body>
   
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
       
            
