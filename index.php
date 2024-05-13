<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LebChalet</title>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="images/favicon.png.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/index.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function () {
            //change selectboxes to selectize mode to be searchable
               $("select").select2();
            });
        </script>
        
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
        <a class="active" href="index.php">Home</a>
        <a href="contact.html">Contact</a>
        <a href="about.html">About</a>
        <a style="margin-left: 30% ; font-family: brush-script ;"> LEB CHALETS </a>
    </div>

        
<?php 
 require_once "connection.php";
 $query = "Select * from `adds`";
 $results = mysqli_query($con, $query);
 $rows = mysqli_fetch_row($results);
 
 $name1 = $rows[0];
  $name2 = $rows[1];
   $name3 = $rows[2];
   
   $Images1 = $rows[3];
   $I1 = explode("/", $Images1);
   
   $Images2 = $rows[4];
   $I2 = explode("/", $Images2);
   
   $Images3 = $rows[5];
   $I3 = explode("/", $Images3);
         ?>

    <div class="content">
        <div style="margin:auto; width:90%" "class="row">
            <div class="column">

                <div class="slideshow-container" data-cycle="3000">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <a href='ViewChalet.php?chaletname=<?php echo "$name1" ?>'><img src=<?php echo "Images/$I1[0]"; ?> style="width:90%"></a>
                        <div class="text"><?php echo " $name1 " ?></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <a href='ViewChalet.php?chaletname=<?php echo "$name1" ?>'><img src=<?php echo "Images/$I1[1]"; ?> style="width:90%"></a>
                        <div class="text"><?php echo " $name1 " ?></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <a href='ViewChalet.php?chaletname=<?php echo "$name1" ?>'><img src=<?php echo "Images/$I1[2]"; ?> style="width:90%"></a>
                        <div class="text"><?php echo " $name1 " ?></div>
                    </div>

                </div></div>

            <div class="column">
                <div class="slideshow-container" data-cycle="3000">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <a href='ViewChalet.php?chaletname=<?php echo "$name2" ?>'><img src=<?php echo "Images/$I2[0]"; ?> style="width:90%"></a>
                        <div class="text"><?php echo " $name2 " ?></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <a href='ViewChalet.php?chaletname=<?php echo "$name2" ?>'><img src=<?php echo "Images/$I2[1]"; ?> style="width:90%"></a>
                        <div class="text"><?php echo " $name2 " ?></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <a href='ViewChalet.php?chaletname=<?php echo "$name2" ?>'><img src=<?php echo "Images/$I2[2]"; ?> style="width:90%"></a>
                        <div class="text"><?php echo " $name2 " ?></div>
                    </div>
                </div></div>

            <div class="column">
                <div class="slideshow-container" data-cycle="3000">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <a href='ViewChalet.php?chaletname=<?php echo "$name3" ?>'><img src=<?php echo "Images/$I3[0]"; ?> style="width:90%"></a>
                        <div class="text"><?php echo " $name3 " ?></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <a href='ViewChalet.php?chaletname=<?php echo "$name3" ?>'><img src=<?php echo "Images/$I3[1]"; ?> style="width:90%"></a>
                        <div class="text"><?php echo " $name3 " ?></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <a href='ViewChalet.php?chaletname=<?php echo "$name3" ?>'><img src=<?php echo "Images/$I3[2]"; ?> style="width:90%"></a>
                        <div class="text"><?php echo " $name3 " ?></div>
                    </div>
                </div></div>
        </div>
        <script>
            /* Find all slideshow containers */
            var slideshowContainers = document.getElementsByClassName("slideshow-container");
            /* For each container get starting variables */
            for (let s = 0; s < slideshowContainers.length; s++) {
                /* Read the new data attribute */
                var cycle = slideshowContainers[s].dataset.cycle;
                /* Find all the child nodes with class mySlides */
                var slides = slideshowContainers[s].querySelectorAll('.mySlides');
                var slideIndex = 0;
                /* Now we can cycle slides, but this recursive function must have parameters */
                /* slides and cycle never change, those are unique for each slide container */
                /* slideIndex will increase during each iteration */
                showSlides(slides, slideIndex, cycle);
            }
            ;

            /* Function is alsmost same, but now it uses 3 new parameters */
            function showSlides(slides, slideIndex, cycle) {
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                ;
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                ;
                slides[slideIndex - 1].style.display = "block";
                /* Calling same function, but with new parameters and cycle time */
                setTimeout(function () {
                    showSlides(slides, slideIndex, cycle)
                }, cycle);
            }
            ;

        </script>
                    <script>
            var stateObject = {
            "Aley- عاليه": {"": [] },
            "Akkar- عكار": {"#": [] },
            "Baabda- بعبدا" : {"#": [] },           
            "Baalbek- بعلبك": {"#": [] },
            "Batroun- بترون": {"#": [] },
            "Bcharreh- بشرّي": {"#": [] },
            "Beirut- بيروت": {"#": [] },
            "Bent jbeil- بنت جبيل": {"#": [] },
            "Chouf- الشوف": {"Ain-Zhalta" :[]},
            "Hasbaya- حاصبيا": {"#": [] },
            "Hermel- الهرمل": {"#": [] },
            "Jbeil- جبيل": {"#": [] },
            "Jezzine- جزين": {"#": [] },
            "Keserwan- كسروان": {"#": [] },
            "Koura- الكورة": {"#": [] },
            "Marjaayoun- مرجعيون": {"Khiam": [] },
            "Minieh Danniyeh- منية الضنية": {"#": [] },
            "Matn- المتن": {"Baskinta" :[]},
            "Nabatieh- النبطية": {"Jbaa" :[], "Safi" :[], "Ain_Bouswar" :[], "Deir el zahrani" :[], "Kfarsir" :[]},
            "Rachaya- راشيا": {"baflay": [] },
            "South lebanon- جنوب لبنان": {"#": [] },
            "Tripoli- طرابلس": {"#": [] },
            "Tyre- صور": {"#": [] },
            "West Bekaa- البقاع الغربي": {"#": [] },
            "Zahleh- زحلة": {"#": [] },
            "Zgharta- زغرتا": {"#": [] }, 
            }
            window.onload = function () {
            var countySel = document.getElementById("location"),
            stateSel = document.getElementById("village");
            for (var country in stateObject) {
            countySel.options[countySel.options.length] = new Option(country, country);
            }
            countySel.onchange = function () {
            stateSel.length = 1; // remove all options bar first
             // remove all options bar first
            if (this.selectedIndex < 1) return; // done
            for (var state in stateObject[this.value]) {
            stateSel.options[stateSel.options.length] = new Option(state, state);
            }
            }
            countySel.onchange(); // reset in case page is reloaded
            }
            </script>

     
        <form  method="POST" action="Result.php">
            <div style="margin:auto; width:80%" class="row">
       <div class="columntxt3">
      <div class="box" style=" background-image : url('Images/sss.jpg') ; float: left;" >
        <center>
        <label for="date">Choose a Date:</label><br>
                    <input type="date"  id ="date" name="date" style="width:90% ;height: 30px; border-radius: 5px; border: 1px black; text-align: center ; font-size: 17px" >
                    <br><br>
                    

                
                    <?php
                   
                    $min = "SELECT MIN(price) FROM search";
                    $result_min = mysqli_query($con, $min);
                    $row_min = mysqli_fetch_row($result_min);

                    $max = "SELECT MAX(price) FROM search";
                    $result_max = mysqli_query($con, $max);
                    $row_max = mysqli_fetch_row($result_max);
                    ?>
                    
                    <label for="Budget">Choose Your Budget:</label>
                    

                    <input type="number" style="width:90% ;height: 30px; border-radius: 5px; border: 1px black; text-align: center ; font-size: 17px"  id="price" name="price" min="<?php echo $row_min['0']; ?>" max="<?php echo $row_max['0']; ?>" value="<?php echo $row_max['0']; ?>" required>
                <br><br>
                <label for="village">Choose a State:</label>
                    <select style="width:90%; height: 30px; border-radius: 5px; border: 1px black; text-align: center; font-size: 17px" class="inbox"  name="location" id="location" required>
                        <option>Any</option>
                    </select>
                    <br><br>
                
                    
                    <label for="village">Choose a Village:</label>
                    <select style="width:90% ;height: 30px; border-radius: 5px; border: 1px black" name="village" id="village" required>
                        <option>Any</option>
                        
                    </select>
                    <br><br>

                
                    <label for="Season">Season(s):</label>
                    <select style="width:90%; height: 30px; border-radius: 5px; border: 1px black; text-align: center; font-size: 17px" class="inbox" name="season" id="season" size="1" required>
                        <option>Any</option>
                        <option>Winter/Summer</option>
                        <option>Summer</option>
                        <option>Winter</option>


                    </select>
               <br><br>
 
             
               <button type="submit" name="SearchChale" class="button" style="width:50%; background-color: rgb(244, 174, 109); ">Search</button></center>
      </div></div>
                
               </form>
        <div class="box" style="float: right; background-image : url('Images/sss.jpg')" >
            
                <br>
                 <center><h2 style="color:black ;">Search for Chalet by Name:</h2><br><br>
            
                <form method="POST" action="Result.php">
                  
                   
                    <?php
                    require_once "connection.php";
                    $q = "SELECT `ChaletName` FROM `search` WHERE 1";
                    echo '<select name = "ChaletName" style="width:90%; height: 30px; border-radius: 5px; border: 1px black; text-align: center; font-size: 17px" class="inbox" required>';
                    $result_1 = mysqli_query($con, $q);
                    $r = mysqli_num_rows($result_1);
                    for ($i = 0; $i < $r; $i++) {

                        $row = mysqli_fetch_row($result_1);
                        echo '<option>' . $row[0] . '</option>';
                    }
                    echo '</select>';
                    ?><br><br><br><br>
                    <button type="submit" class="button" name="SearchChaleByName" style="width:50%; background-color: rgb(244, 174, 109);">Search</button></div>
                </center>
    </form>


            </div></div>


    </body>
</html>


