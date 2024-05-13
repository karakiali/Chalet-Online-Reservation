
<!DOCTYPE>
<html>
    <head>
        <title>Select</title>
        <link rel="icon" type="image/png" href="images/favicon.png.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <SCRIPT LANGUAGE="JavaScript">
history.forward();
</SCRIPT>
    </head>
    <body>
        

<?php
session_start();
header("Cache-Control: no cache");
if ($_SESSION['log']==true){
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    echo "<form action='ChaletOwner.php' method='POST'>";
    echo '<center><div style="padding: 20px;width:40% ; background-color : #f1f1f1; height : 70% ; margin-top : 100px;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.19), 0 6px 20px 0 rgba(0,0,0,0.19);">
        <h3>Welcome! Please Select your Chalet:</h3><br>
        <label for="chaletnum"></label>';
    echo '<select name="select" size="1" style="font-size : 20px";>';
     $r = $_SESSION['r'];
    for ($i = 0; $i < $r; $i++) {
        
        echo "<option>$_POST[$i] </option>";
    }
    echo '</select><br><button style="margin-top:150px ;" class="button" type="submit">Enter</button><hr>';
    echo "</form>";
    echo '<button style=" background-color:rgb(223, 11, 11) ;
         onclick="location.href="logout.php" class="button" type="submit">Log out</button>
        </div>
        </center>';
}else {
    header('location:LogIn.php');
    exit();
}
}else {
    header('location:LogIn.php');
    exit();
}
?>

            </body>
</html>