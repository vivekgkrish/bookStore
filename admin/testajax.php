<?php include "../includes/db.php" ?>

<?php


    $isbn = $_POST['isbn'];
    $book_title = $_POST['book_title'];
    $book_author = $_POST['author_name'];
    $category = $_POST['category'];
    $book_price = $_POST['book_price'];
    $year_published = $_POST['year_published'];
   

  
    
    
    
    $imagename = $_FILES['image']['name'];
    
    //var_dump($imagename);
    
    $upload_directry = "../img/";
        
     $target = $upload_directry.$imagename;   
    
     $database_path = "http://localhost/bookStore/img/".$imagename;
    $default_path = "http://localhost/bookStore/img/de.jpg";
     //var_dump($target);
    
    $checkisbn = "Select * from books where ISBN = '$isbn'";
              $result = mysqli_query($connection,$checkisbn);
      //$row = mysqli_fetch_array($result);
      $count = mysqli_num_rows($result);


   

if($count == 0) {
    
    
     if(move_uploaded_file($_FILES['image']['tmp_name'],$target)) {
          // var_dump($database_path);
        
      $query = "INSERT INTO books (book_title,book_price,book_image,year_published,ISBN,author_name,cat_id) VALUES ('$book_title','$book_price','$database_path','$year_published','$isbn','$book_author','$category')";
    
   

        
    }

else {
    $query = "INSERT INTO books (book_title,book_price,book_image,year_published,ISBN,author_name,cat_id) VALUES ('$book_title','$book_price','$default_path','$year_published','$isbn','$book_author','$category')";
    
  

   }
        

    
if ($connection->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}

}
else {
    //isbn exist
echo "0";
   // echo $checkisbn;
}

      
$connection->close();     
       
   
		
      
   
?>