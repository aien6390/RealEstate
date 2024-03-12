<?php
include('connection.php');

$Id=$_GET['del'];

$query="DELETE FROM info WHERE userid='$userid'";

$result=mysqli_query($conn,$query);

if($result)
{
   echo "<script>alert ('information Deleted!');location.href='delete.php';</script>";

}
else{
    echo "<script>alert ('informatin not deleted!');location.href='delete.php';</script>";
}
?>