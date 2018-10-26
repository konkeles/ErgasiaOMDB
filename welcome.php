<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> 
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    
<!-- dikos mou kodikas arxi -->
    <link rel="stylesheet" href="format.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="omdbapi.js"></script>
<!-- dikos mou kodikas telos -->
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    
<!-- dikos mou kodikas arxi -->
    
    <div style="margin:10px">
        <img id="poster" src="search.png" style="margin:10px">
        <br>
        <input type="search" id="searchTitle" placeholder="Τίτλος ταινίας.." title="γράψε τον τίτλο στα αγγλικά">
        <button onclick="omdbApi()">Αναζήτηση</button>
        <p id="demo">demo1</p>
         <p id="demo2">demo2</p>
    </div>
    
    <!-- epiloges like - dislike -->
    <div id="rb" style="margin:10px">
        <input type="radio" name="choose" value="like" onclick="check()"> Like 
        <input type="radio" name="choose" value="nah" onclick="check()"> Dislike
    </div>
    
    <div style="margin:10px">    
      <!--  <button onclick="omdbApi2()">Αποθήκευση</button>   -->
        <button class="button" onclick="showUser()">Η λίστα μου</button>
        
    </div> 
    <div id="txtHint"><b>Person info will be listed here...</b></div>
    
   
    
    
    
    
    
<!-- dikos mou kodikas telos -->   
    <footer style="margin:10px">
        <p>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        </p>
    </footer>
    
</body>
</html>