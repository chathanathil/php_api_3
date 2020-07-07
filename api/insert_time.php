<?php
  $conn=mysqli_connect("localhost","root","","times");
  $info=json_decode(file_get_contents("php://input"));
  print_r($info);
    if(count($info)>0){
      $time=mysqli_real_escape_string($conn,$info->time);
      $query="INSERT INTO timestable(time) VALUES('$time')";
      if(mysqli_query($conn,$query)){
        echo "Inserted";
      }else{
        echo "fd";
      }
    }
?>