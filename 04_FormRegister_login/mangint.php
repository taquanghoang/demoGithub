<html>
   <body>
   
      <?php
         /* Phương thức thứ nhất để tạo mảng trong PHP. */
         $numbers = array( 1, 2, 3, 4, 5);
         
         foreach( $numbers as $value )
         {
            echo "Giá trị phần tử mảng là $value <br />";
         }
         
         /* Phương thức thứ hai để tạo mảng trong PHP. */
         $numbers[0] = "one";
         $numbers[1] = "two";
         $numbers[2] = "three";
         $numbers[3] = "four";
         $numbers[4] = "five";
         
         foreach( $numbers as $value )
         {
            echo "Giá trị phần tử mảng là $value <br />";
         }
      ?>
      
   </body>
</html>