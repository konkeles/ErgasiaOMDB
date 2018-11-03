
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
$sql="insert into userMovies (id_user,id_movie) values  (".$_SESSION["id"].",'".$_POST["movie_id"]."');";
       
$result = mysqli_query($con,$sql);
//
//    echo("done");

mysqli_close($con);
     echo 'done';
?>
</body>
</html>