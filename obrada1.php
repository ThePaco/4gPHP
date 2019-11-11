<?php

echo "<b>Vase ime je: </b>", $_POST["ime"] . "<br>";
echo "<b>Vase prezime je: </b>", $_POST["prezime"] . "<br>";

if ($_POST["skola"]=="da")
{ echo "<b>Idete u skolu</b>" . "<br>";}
else
{ echo "<b>Ne idete u skolu</b>" . "<br>";}

echo "<b>OIB: </b>", $_POST["oib"] . "<br>";

echo "<b>Najdrazi predmeti: </b>" . "<br>";
foreach ($_POST["predmet"] as $odabran) echo $odabran . "<br>";

echo "<b>Najdraza boja vam je: </b>" . $_POST["boja"] . "<br>";
?>