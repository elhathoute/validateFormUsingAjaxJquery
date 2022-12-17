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

        // $("button").click(function(){
        //  $.get (
        //     "test.txt",
        //      function(data,status){
        //         $("#test").html(data);
        //         alert(status);
        //      }                //callback function (optional) 
        //  )//data: from get request
        //  //status :success - failed
        // });
$("input").keyup(function(){
   var name =  $(this).val();
  $.post(
    "suggestions.php",
    {
    suggestion :name,

    },
    function (data,status) {
        $("#test").html(data);
        console.log(status);  
      }
  );
});

    });
</script>

</head>

<body>

<!-- <button>click me to get data!</button> -->
<input type="text" name="name" autocomplete="none">
<p id="test"></p>

</body>


</html>