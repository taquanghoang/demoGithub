<html>
   
   <head>
      <title>Gửi email trong PHP</title>
      <meta charset="utf-8">
   </head> 
   <body>
      <?php
         function sendmail($mailfrom){
            header('Content-Type: text/html; charset=UTF-8');
            $to = "taquanghoang95@gmail.com";
            $subject = "Active Dormitory Management";
         
            $message = "<b>Hi You!.</b>";
            $message .= "<h1>Please click active.</h1>";
         
            $header = "From:taquanghoang95@gmail.com \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
         
            $retval = mail($to,$subject,$message,$header);
         
            if( $retval == true )
            {
             echo "Gửi email thành công ...";
             }
            else
            {
               echo "Không thể gửi email ...";
            }
            }
         sendmail("taquanghoang95@gmail.com");
      ?>  
   </body>
</html>