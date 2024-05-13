<?php

session_start();
require_once "connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

if (isset($_POST['delete'])) {
    $table = $_SESSION['chaletname'];
    $date = $_POST['date'];
    $date= stripcslashes($date);
    $date= mysqli_real_escape_string($con, $date);
    
    $d = "DELETE FROM `$table` where `booking_date` < '$date'";
    $result = mysqli_query($con, $d);
    echo "<script language='javascript'>";
    echo "alert('All Data Before $date Are Deleted');
    window.history.go(-1);";
    echo "</script>";
    
}
if (isset($_POST['update'])) {
    $r = $_SESSION['r'];
    $table = $_SESSION['chaletname'];
    for ($i = 0; $i < $r; $i++) {
        $Cname = $_POST["Cname$i"];
        $phone = $_POST["phone$i"];
        $date = $_POST["date$i"];
        $date= stripcslashes($date);
        $date= mysqli_real_escape_string($con, $date);
        $q2 = "UPDATE `$table` SET `Customer_Name`='$Cname',`Mobile_Number`='$phone' WHERE `booking_date`='$date'";
        $result2 = mysqli_query($con, $q2);
    }
    echo "<script language='javascript'>";
    echo "alert('all data updated');
    window.history.go(-1);";
    echo "</script>";
}
}
?>