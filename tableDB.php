<?php
  $sname= $_REQUEST['name'];
  $semail= $_REQUEST['email'];
  $sphone= $_REQUEST['phone'];
  $Bdate= $_REQUEST['date'];
  $Btime= $_REQUEST['time'];
  $speople= $_REQUEST['people'];
  $pmsg= $_REQUEST['message'];

  $con=mysqli_connect("localhost","root","","demo_sql");
  $q="insert into table_booking(name,email,phone,date,time,people,msg)value('$sname','$semail','$sphone','$Bdate','$Btime','$speople','$pmsg')";
  mysqli_query($con,$q);
  if(mysqli_affected_rows($con)>0){
  header("location:index.php?success");
  }
?>