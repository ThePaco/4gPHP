<?php
$mail = "";
if(isset($_POST["mail"])){
    $mail = $_POST["mail"];
}
if(preg_match("/([A-Za-z]){1,5}[0-9]{1,5}@yahoo.com/", $mail)){
    echo "email: ".$mail." je tocno unesen.";
}
else {
    echo "Netocan unos!";
}
?>
