<html>
    <head>
        <link href="Calendar\calendar.css" type="text/css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/ch.owner.css">
        <style>
            button {

                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 20%;
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            }
            
           
    body {
      background-image: url("Images/backg1.jpg");
      background-repeat: no-repeat, repeat;
      background-attachment: fixed; 
    background-size: 100% 100%;
    }
        </style>
        
    </head>
    <body>
        
        <div class="topnav">
              <a style="float: right; background-color: red;" href="logIn.php">Log Out</a>
        </div><br><br>
        
        <?php
        session_start();
        if ($_SESSION['log']==true){
        
        if (isset($_POST["select"])) {
            $_SESSION['chaletname'] = $_POST['select'];
        }

        include 'Calendar\Calendar.php';
        include 'Calendar\Booking.php';
        include 'Calendar\BookableCell.php';

        $booking = new Booking(
                'id20280008_chalets',
                'localhost',
                'id20280008_chalet',
                '=CH+v)n*RL7z?Z8#',
                $_SESSION['chaletname']
        );

        $bookableCell = new BookableCell($booking);

        $calendar = new Calendar();

        $calendar->attachObserver('showCell', $bookableCell);

        $bookableCell->routeActions();

        echo $calendar->show();
        }else {
    header('location:LogIn.php');
    exit();
}
?><br><br>
        <form action="SetReserverInfo.php" align='center'>
            <button type="submit" align="center" class="button" style="background-color : #04AA6D">Set Reserver Info</button>
        </form>
        
            
            
    </body>
</html>