<?php
   include_once 'config.php';


    $name = $_POST['field1'];
    $e_mail = $_POST['field2'];
    $subject = $_POST['field3'];
    $reviews = $_POST['field4'];

    

 $sql = "INSERT INTO details1('Name','E-mail','Subject','Review')values($name,$e_mail,$subject,$reviews)";

 if(mysqli_query($conn,$sql)){
     echo "<script>alert ('Record inserted successfully!!!')</script>";
 }
 else{
     echo "<script>alert ('error in inserting records')</script>";
 }

 mysqli_close($conn);

 ?>