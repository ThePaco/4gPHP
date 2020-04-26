<?php
$model=$_POST['model'];
$jezgre=$_POST ['jezgre'];
$clock=$_POST ['clock'];
$cache=$_POST ['cache'];

$link = new mysqli('localhost', 'root', '', 'baza');

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO cpus(model, jezgre, clock, cache) VALUES ('$model' , '$jezgre' , '$clock' , '$cache')";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.".'<br>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

if($rezultat = mysqli_query($link, "SELECT * FROM cpus")){
    if(mysqli_num_rows($rezultat) > 0){
        echo "<table>";
        echo "<tr>";
        echo "<th>model</th>";
        echo "<th>jezgre</th>";
        echo "<th>clock</th>";
        echo "<th>cache</th>";
        echo "</tr>";
    }
}
while($row = mysqli_fetch_array($rezultat)){
    echo "<tr>";

    echo "<td>" . $row['model'] . "</td>";
    echo "<td>" . $row['jezgre'] . "</td>";
    echo "<td>" . $row['clock'] . "</td>";
    echo "<td>" . $row['cache'] . "</td>";
    echo "<tr>";
}
echo "</table>";
mysqli_free_result($rezultat);
?>
