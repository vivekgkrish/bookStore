<?php include "../includes/db.php" ?>

<?php
    
if(isset($_POST['submit'])) {
    
//    $isbn = $_POST['isbn'];
//    $book_title = $_POST['book_title'];
//    $book_author = $_POST['author_name'];
//    $category = $_POST['category'];
//    $book_price = $_POST['book_price'];
//    $year_published = $_POST['year_published'];
//   
//
//  
//    
//    
//   // var_dump("hi");
//    
//    $imagename = $_FILES['image']['name'];
//    
//    //var_dump($imagename);
//    
//    $upload_directry = "../img/";
//        
//     $target = $upload_directry.$imagename;   
//    
//     $database_path = "http://localhost/bookStore/img/".$imagename;
//    
//     //var_dump($target);
//    
//    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)) {
//          // var_dump($database_path);
//        
//      $query = "INSERT INTO books (book_title,book_price,book_image,year_published,ISBN,author_name,cat_id) VALUES ('$book_title','$book_price','$database_path','$year_published','$isbn','$book_author','$category')";
//    
//        if ($connection->query($query) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $query . "<br>" . $connection->error;
//}
//
//$connection->close();
//    }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>add books</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
   <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
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
        
        
        
        
        img{
            height: 150px;
        }
        
        .form-group{
            
            margin: 20px 500px;
        }
        
        form input{
            margin-bottom: 20px;
            margin-left: 10px;
            
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
              <div class="menuItem" id="Books">Books</div>
              <div class="menuItem" id="Categories">Categories</div>
              <div class="menuItem" id="Users">Users</div>
               
           </div>
           
       </div>

<form method="post" id="myform" enctype = "multipart/form-data">
<div class="form-group">
 ISBN:
  <input type="text" name="isbn" id="isbn">
  <div class="isbn-error" style="color:red;font-weight:900"></div>
  <br>
  Book Title:
  <input type="text" name="book_title"><br>
  
  <select name="category">
   
   <option value="">Select Catagory</option>
   
   <?php
 $query= "select * from category";
 $select_books = mysqli_query($connection,$query);
                    
 while($row = mysqli_fetch_assoc($select_books)){
                         ?>
                        
                        
 <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_title']?></option>
            
                        
              
<?php   }   ?>
               
    
  </select>
  
  <br>
  
  Year Published:
  <input type="text" name="year_published"><br>
  
  Author Name:
  <input type="text" name="author_name"><br>
  Price:
  <input type="text" name="book_price"><br>
  Image:
  <input type="file" name="image"><br>
    <button type="submit" name="submit" id="mybtn" >add item</button>
</div>


</form>


<script>
    $( document ).ready(function() {

$('#myform').submit(function(evt) {
 
  evt.preventDefault();
 //var isbn = $("#isbn");
   var formData = new FormData(this);
$.ajax({  
    type: 'POST',  
    url: 'testajax.php', 
    data: formData,
    cache:false,
    contentType: false,
    processData: false,
    success: function(response) {
        //alert(response);
        console.log(response);
        
        if(response == 0) {
$(".isbn-error").html("isbn already exist");
        }
        
        else {
            alert("New Record Created");
            location.reload();

        }
        
        //else {
         //  $(".isbn-error").html("isbn is unique");
       // }
    }
});
  
});
        
        });
</script>