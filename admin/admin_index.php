
<?php include "../includes/db.php"?>

<?php
session_start();

if($_SESSION['username'] == "") {
    header("location: ../login.php");
}
?>
     
     
      
               
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
              <div class="menuItem" id="Books"><a href="admin_index.php">Books</div>
              <div class="menuItem" id="Categories"><a href="#">Categories</div>
              <div class="menuItem" id="Users"><a href="#">Users</div>
               
           </div>
           

           
       </div>
       
            
<div>

Hello <?php echo $_SESSION['username']?>
</div>
<div>
<a href="../logout.php">logout</a>      
</div>
       
       <div id="book">
           <table id="books">
               <tr>
                   <th>Book Name</th>
                   <th>Author</th>
                   <th>Price</th>
                   <th>Image</th>
                   <th>Actions</th>
               </tr>
               
               <?php
                    $query= "SELECT b.book_id AS book_id,b.book_title AS book_name, b.book_price AS book_price, b.book_image AS book_image,b.author_name AS author_name  from books b  INNER JOIN category c ON b.cat_id = c.cat_id";
                    $select_books = mysqli_query($connection,$query);
                    
//var_dump($select_books);
    
                    while($row = mysqli_fetch_assoc($select_books)){
                        $book_name = $row['book_name'];
                        $author_name = $row['author_name'];
                        $book_price = $row['book_price'];
                        $book_image = $row['book_image']; 
                        $book_id = $row['book_id'];
               ?>
                       
                        
                        
                        
                        
                <tr>
                   <td><?php echo $book_name ?></td>
                   <td><?php echo $author_name ?></td>
                   <td><?php echo $book_price ?></td>
                   
                   <td><img src="<?php echo $book_image ?>"></td>
                   
                   <td>
                   <button  id="<?php echo $book_id ?>" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  View model
</button> <br>
                   <a href="http://localhost/bookStore/admin/edit_books.php?book_id=<?php echo $book_id; ?>">Edit this book</a> <br>
                   <a onclick="return confirm('Are you sure?')" href="http://localhost/bookStore/admin/delete_books.php?book_id=<?php echo $book_id;?>">Delete this book</a></td>
                   <br>
                   
               </tr>
                 <?php   }
               
               ?>
               
             
        
               
               
               
             
           </table>
           
       </div>
       
       
   </div>
   
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>