
<html>
    <head>
       <SCRIPT LANGUAGE="JavaScript">
history.forward();
</SCRIPT> 
    </head>
    
</html>
    
    
<?php
session_start();

require_once "connection.php";

if (isset($_POST["user"], $_POST["pass"])) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $user= stripcslashes($user);
    $pass=stripcslashes($pass);
    $user= mysqli_real_escape_string($con, $user);
    $pass= mysqli_real_escape_string($con, $pass);

    $query = "SELECT * FROM `login` WHERE user='$user' And pass='$pass'";

    $result = mysqli_query($con, $query);
    $q = mysqli_num_rows($result);
    if ($q == 1) {
        $_SESSION['log']=true;
        $r = mysqli_num_rows($result);
        $row = mysqli_fetch_row($result);

        $_SESSION['chaletname'] = $row[0];
        $user="";
        $pass="";
        header('location:ChaletOwner.php');
        
    } elseif ($q > 1) {
        $_SESSION['log']=true;

        $r = mysqli_num_rows($result);
        $_SESSION['r']= $r;
        echo "<form name='myform' method='post' action='Select.php' align='center'>";

        for ($i = 0; $i < $r; $i++) {

            $row = mysqli_fetch_row($result);
            echo "<input type='hidden' name='$i' value='$row[0]'>";
        }
       
        echo '<script language="JavaScript">document.myform.submit();</script></form>';
    } else {
        $_SESSION['error'] = '<script>alert("Incorrect Username Or Password")</script>';
        header("location: LogIn.php");
exit ();

    }
} else {
    echo 'Please login First ;-)';
}
?>
