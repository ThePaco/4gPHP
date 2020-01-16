<?php
$site = "";
if(isset($_POST["site"])) {
    $site = $_POST["site"];
}
if(preg_match( "/http(s)?://www.([a-zA-Z[0-9]){1,9}.[a-z]{2,3}/", $site)){
    echo "website: ".$site." ima tocnu adresu.";
}
else {
    echo "Netocan unos!";
}

?>