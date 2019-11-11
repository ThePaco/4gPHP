<?php

echo $_POST["ime"] . "<br>";
echo $_POST["prezime"] . "<br>";

if ($_POST["skola"]=="da")
{ echo "Idete u skolu" . "<br>";}
else
{ echo "Ne idete u skolu" . "<br>";}

echo "OIB: " . $_POST["oib"] . "<br>";

echo "Najdrazi predmeti: " . "<br>";
foreach ($_POST["predmet"] as $odabran) echo $odabran . "<br>";

echo "Najdraza boja vam je : " . $_POST["boja"] . "<br>";
?>