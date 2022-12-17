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
<link rel="stylesheet" href="style2.css">
    <!-- jquery -->
<script>

    $(document).ready(function(){
     $("form").submit(function(event){
         event.preventDefault();//desable action of form 
        //  console.log($(this));
        var name = $("#fullname").val();
        var email = $("#email").val();
        var gender = $("#gender").val();
        var message = $("#message").val();
        var submit = $("#submit").val();

        $(".form-message").load(
          "mail.php",//url
          {//data
            name:name,
            email:email,
            gender:gender,
            message:message,
            submit:submit
          }//data

        );
     });

    });

</script>

</head>

<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="mail.php" method="post">
    <!-- name -->
    <label for="fullname">Full Name</label>
    <input type="text" id="fullname" name="fullname" placeholder="Your fullname .." autocomplete="off">
<!-- email -->
    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your  email.." autocomplete="off">
<!-- gender -->
    <label for="gender">Gender</label>
    <select id="gender" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
<!-- subject -->
    <label for="message">Subject</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

<button id="submit" type="submit" name="submit">send e-mail</button>
<p class="form-message">Etat:</p>
  </form>
</div>

</body>
</html>



</body>


</html>