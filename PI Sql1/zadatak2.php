<?php
$link = new mysqli('localhost', 'root', '', 'baza1.sql');
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if($result = mysqli_query($link, "UPISI_UPIT")){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
        echo "<tr>";
        echo "<th>Ime Gosta</th>";
        echo "<th>Cijena Sobe</th>";
        echo "<th>Dorucak</th>";
        echo "</tr>";
    }
}
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['ime_gosta'] . "</td>";
    echo "<td>" . $row['cijena_sobe'] . "</td>";
    echo "<td>" . $row['dorucak'] . "</td>";
    echo "<tr>";
}
echo "</table>";
mysqli_free_result($result);
?>