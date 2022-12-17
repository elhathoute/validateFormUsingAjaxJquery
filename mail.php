<?php

 if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $message = $_POST['message'];

    $errorEmpty = false;
    $errorEmail = false;

   if(empty($name) ||empty($email)||empty($message)){
        echo "<span class='form-error'> fill in all fields!</span>";
        $errorEmpty = true;
   }
   elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "<span class='form-error'> write a valide email adress!</span>";
        $errorEmail = true;
   } else{
    echo "<span class='form-succes'> success</span>";
   }
 }
else{
    echo "there was an error";
}

?>
<script>
  $("#name,#email,#gender,#message,#gender").removeClasss("input-error");
  var errorEmpty ="<?php echo $errorEmpty; ?>";
  var errorEmail ="<?php echo $errorEmail; ?>";
  if(errorEmpty==true){
    $("#name,#email,#gender,#message").addClass("input-error");
  }
  if(errorEmail==true){
    $("#email").addClass("input-error");
  }
  if(errorEmpty==false && errorEmail==false){
   $("#name,#email,#gender,#message").val("");//empty fields
  }
</script>