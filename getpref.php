<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
/* arxi diko mou */    
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}    
/* telos diko mou */    
    
/* $q = intval($_GET['q']); */

$con = mysqli_connect('localhost','admin','admin','omdb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"userMovies");
$sql="SELECT * FROM userMovies WHERE id_user = '".$_SESSION["id"]."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>id_user</th>
<th>id_movie</th>
<th>created_at</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td style='width:10%;'>" . $row['id_user'] . "</td>";
    echo "<td style='width:30%;'>" . $row['id_movie'] . "</td>";
    echo "<td style='width:10%;'>" . $row['created_at'] . "</td>";
    echo "</tr>";
}

echo "</table>";
mysqli_close($con);
?>
</body>
</html>