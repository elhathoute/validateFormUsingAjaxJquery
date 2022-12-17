<?php
include('dbh.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <title>AJAX</title>
    <link rel="stylesheet" href="style.css">
    <!-- jquery -->
<script>
    $(document).ready(function(){
        var commentsCount=2;

        $("button").click(function () {
            commentsCount=commentsCount+2;
            $("#comments").load(
              "load-comments.php" ,
                {
                    commentsCountNew : commentsCount

                }
            );



          });


    });
</script>

</head>

<body>
    
<div id="comments">
<?php
 $sql = "SELECT * FROM commentes limit 2";
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


</div>

<button id="btn">
    show more comments
</button>

</body>

<script>
$(document).ready(function(){
   

});
</script>
</html>