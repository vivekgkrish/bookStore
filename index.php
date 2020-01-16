

      <?php include "header.php" ?>



       
       <div id="book">
           <table id="books">
               <tr>
                   <th>Book Name</th>
                   <th>Author</th>
                   <th>Price</th>
                   <th>Image</th>
               </tr>
               
               <?php
                    $query= "SELECT b.book_id AS book_id,b.book_title AS book_name, b.book_price AS book_price, b.book_image AS book_image,b.author_name AS author_name  from books b  INNER JOIN category c ON b.cat_id = c.cat_id";
                    $select_books = mysqli_query($connection,$query);
                    
//var_dump($select_books);
    
                    while($row = mysqli_fetch_assoc($select_books)){
                        $book_name = $row['book_name'];
                        $author_name = $row['author_name'];
                        $book_price = $row['book_price'];
                        $book_image = $row['book_image']; ?>
                        
                        
                        
                        
                <tr>
                   <td><?php echo $book_name ?></td>
                   <td><?php echo $author_name ?></td>
                   <td><?php echo $book_price ?></td>
                   <td><img src="<?php echo $book_image ?>"></td>
               </tr>
                 <?php   }
               
               ?>
               
               
             
           </table>
           
       </div>
       
       
   </div>
    
</body>
</html>