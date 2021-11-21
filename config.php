<?php
$conn= mysqli_connect("localhost", "root" ,"" ,"mydb" );
if($conn)
{
   echo "Done";
}

else
{
    echo "failed";
}
?>