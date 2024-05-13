<!DOCTYPE html>
<html>
    <head>
        <title>LebChalet</title>
        <link rel="icon" type="image/png" href="images/favicon.png.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/t.css"> 
        <meta name="description" content="Bootstrap.">  
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style>
    
     .topnav {
   overflow: hidden;
   background-color: #e9e9e9;
 }
 
 .topnav a {
   float: left;
   display: block;
   color: black;
   text-align: center;
   padding: 14px 16px;
   text-decoration: none;
   font-size: 17px;
 }
 
 .topnav a:hover {
   background-color: #ddd;
   color: black;
 }
 
 .topnav a.active {
   background-color: #2196F3;
   color: white;
 }
 
 .topnav .search-container {
   float: right;
 }
 
 .topnav input[type=text] {
   padding: 6px;
   margin-top: 8px;
   font-size: 17px;
   border: none;
 }
 
 .topnav .search-container button {
   float: right;
   padding: 6px 10px;
   margin-top: 8px;
   margin-right: 16px;
   background: #ddd;
   font-size: 17px;
   border: none;
   cursor: pointer;
 }
 
 .topnav .search-container button:hover {
   background: #ccc;
 }
 

</style>
    </head>
    <body>
        
        <div class="topnav">
        <a style="background-color: #04AA6D;" href="ChaletOwner.php">Back</a>
        <a style="float: right; background-color: red;" href="logIn.php">Log Out</a>
      </div><br><br>
      
    
    <script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
function getDate(){
    var today = new Date();

document.getElementById("date").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);


}
</script>
</body>
</html>
<?php
function Delete() {
    
    
  }

session_start();

        if ($_SESSION['log']==true){
require_once "connection.php";

$chale = $_SESSION['chaletname'];
$q = "select * from $chale ";
$result = mysqli_query($con, $q);
$r = mysqli_num_rows($result);
$_SESSION['r']=$r;
if ($r > 0) {


    $q = "select * from $chale ";

    $result = mysqli_query($con, $q);
    $r = mysqli_num_rows($result);

    echo "<form method='post' action = 'update.php'>"
    . "<center><table id='myTable' class='table table-striped'><thead>";
    echo "<tr><th>Name</th><th>PhoneNumber</th><th>Date</th></tr></thead><tbody>";

    for ($i = 0; $i < $r; $i++) {

        $row = mysqli_fetch_row($result);
        $_SESSION['date'] = $row[1];

        echo "<tr><th ><input type='text' name='Cname$i' value='$row[2]'></th>"
        . "<th><input type='text' name='phone$i' value='$row[3]'></th><th ><input type='text' name='date$i' value='$row[1]' readonly></th></tr>";
    }

    echo '</tbody></table>'
    . '<button type="submit" name="update" class="button">Update</button>
        </form>';
    
    echo '<center><form method= post action = update.php>
        <div  style="background-color: red; width: 50%;">
        <h1>Delete all reservation info before: </h1> <input type ="date"  value='. date("Y-m-d").'  name="date"  required><p>(mm/dd/YYYY)</p>
            </div>
   
  <button style="background-color: red; color: black;" type="submit" name="delete" onclick="return checkDelete()" class="button">Delete</button></form></center>';
} else {
    echo '<center><h1>Sorry! There are no reserved dates</h1><br><br><h1>Reserve a date first please</h1></center>';
}


        }
        else {
    header('location:LogIn.php');
    exit();
}
?>


