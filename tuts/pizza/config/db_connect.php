<?php
    $conn = mysqli_connect('localhost','Pizza','pass','pizza');


         //check connection
         if (!$conn){
             echo 'Connection Failed:' . mysqli_connect_error();
         }


?>
