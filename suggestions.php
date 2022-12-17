<?php
$exestingNames = array(
    "daniel",
    "abdelaziz",
    "khalid",
    "said",
    "smith",
    "dennis");
    
if(isset($_POST['suggestion'])){
    $name = $_POST['suggestion'];
}
if(!empty($name)){
    foreach($exestingNames as $exestingName){
        if(strpos($exestingName,$name)!==false){
            echo  $exestingName;
            echo "<br>"; 
        }
    }
}


    

?>