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
    <div class="header">
        <img src="atei-logo.png" class="logo">
        <h1>ΠΜΣ Ευφυείς Τεχνολογίες Διαδικτύου</h1>
        <h2>Τμήμα Πληροφορικής</h2>
        <p>Μηχανική Λογισμικού για Διαδικτυακές Εφαρμογές</p>
    </div>
    
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    
<!-- dikos mou kodikas arxi -->
    
    <div class="div">
        <form name='frm'  >
            Movie Title: <input style='width:30%' name=title id='ttl' type=text required/>
            <br>
            Year: <input style='width:5%' name=year id='yr' type=text/><br>
            <input style='width:30%' name="sub" onclick="omdbApi()" value="Apply filters" type="button"/>
        </form>
    </div>
    
    <div id="selection_images"></div>
    
    <p id="demo">demo1</p>

    <div style="margin:10px">    
        <button class="button" onclick="showUser()">Η λίστα μου</button>        
    </div> 
    
    <div id="txtHint" class="div"><b>Person info will be listed here...</b></div>
        
<!-- dikos mou kodikas telos -->   
    <div style="margin:10px; padding:100px;">
        <p>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        </p>
    </div>
    <div class="footer">
        <p>Αντώνης Καραγεώργος - Κώστας Κελεσίδης - Ιωάννης Μαρασλίδης - Μαρία Μαυρίδου</p>
        <p>2018</p>
    </div>
</body>
</html>