<!-- 
if(session_status() !== PHP_SESSION_ACTIVE){session_start();} 
$_SESSION=array();
session_destroy();
-->

<?php
session_start();
$_SESSION['log']=false;
if(isset($_SESSION['error'])){
if($_SESSION['error'] != null){
echo $_SESSION['error'];

$_SESSION['error']=null;}
}
?>
<html lang="en">
    <head>
        <title>Login</title>
        <link rel="icon" type="image/png" href="images/favicon.png.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/login.css">
        <SCRIPT LANGUAGE="JavaScript">
history.forward();
</SCRIPT>
    <style> 
    body {
      background-image: url("Images/backg1.jpg");
      background-repeat: no-repeat, repeat;
      background-attachment: fixed; 
    background-size: 100% 100%;
    }
    </style>
    </head>
    <body>
       <div id="navbar">
           <center><a style="margin-left:35%; font-family: brush-script ;"> LEB CHALETS </a></center>
           
           
        
    </div>
        <div class="container">
        <div>
            <center><img src="Images/avatar1.png" alt="Avatar" class="avatar">
                </div>

                
                    <form action="LogThrough.php" method="POST" align="center">
                        
                        <input style="width: 40%; text-align: center;" type="text" placeholder="Enter Username" name="user" required><br>

                        
                        <input style="width: 40%; text-align: center;" type="password" placeholder="Enter Password" name="pass" required><br>

                        <button style="width: 30%; text-align: center;" class="button" type="submit">Login</button></center>

                </div>
                </body>
                </html>
