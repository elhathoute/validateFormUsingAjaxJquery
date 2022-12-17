<?php
include_once 'dbh.php';
$commentsCountNew=$_POST['commentsCountNew'];
 $sql = "SELECT * FROM commentes limit $commentsCountNew ";
 $result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "<p style='background-color:gray;margin-bottom:40px;'>";
        echo $row['author'];
        echo "<br>";
        echo $row['message'];
        echo "</p>";
    }
 }else{
     echo "ther are no comments";
 }


 ?>