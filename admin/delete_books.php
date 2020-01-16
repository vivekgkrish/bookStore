<?php include "../includes/db.php" ?>


<?php

    $global_book_id = $_GET['book_id'];

   $query = "DELETE from books where book_id = '".$global_book_id."'";
  $retrived_result = mysqli_query($connection,$query);
         header("location: admin_index.php");


// $query= "select * from category";
// $select_books = mysqli_query($connection,$query);
//                    


?>
