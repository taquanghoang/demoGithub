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
         $my_array = array("mango","apple","banana");
   
         list($a, $b, $c) = $my_array;
         list($d) = $my_array.addslashes("hhh");
         echo "Tôi có một vài loại quả: một $a, một $b, và một $c and $d.";
      ?>
      
   </body>
</html>