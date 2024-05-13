<?php
require_once "connection.php";
$chalet = $_GET['chaletname'];
$q = "select * from search where  ChaletName='$chalet'";
$result = mysqli_query($con, $q);
$row = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>View Chalet</title>
        <meta charset="utf-8">
        <link href="CSS/viewcalendar.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/png" href="images/favicon.png.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/VChalet.css"> 
        

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
        <div class="hero">
            <div class="title">
                <h1><?php echo $chalet ?></h1>
            </div>

        </div> <br> <br>

        <div style="width: 80%; margin: auto;" class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 5</div>
                <img id ="0" src="" style="width:100%; height: 500px;">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 5</div>
                <img id ="1" src="" style="width:100%; height: 500px;">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 5</div>
                <img id ="2" src="" style="width:100%; height: 500px;">
            </div>
            
            <div class="mySlides fade">
                <div class="numbertext">4 / 5</div>
                <img id ="3" src="" style="width:100%; height: 500px;">
            </div>
            
            <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <img id ="4" src="" style="width:100%; height: 500px;">
            </div>
            

            <a class="prev" onclick="plusSlides( - 1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
            <span class="dot" onclick="currentSlide(4)"></span> 
            <span class="dot" onclick="currentSlide(5)"></span> 
            
        </div>

        <div class="row">
            <h2 style="margin-left:1%">Details:</h2><br>
            <p id="details"></p>
            <script>
    const detail = "<?php echo $row['7'] ?>";
    let d = detail.split("/");
    let dLen = d.length;
    let text = "";
    for (let i = 0; i < dLen; i++) {
    let op = d[i].split(":");
    text += "<p class='equ'><figure style='float:left; margin-left:4%;'><img alt='icon' src='Images/" + op['0'] + ".png' /><figcaption> " + op[1] + " " + op[0] + "<?figcaption></figure></p>";
    }
    text += "";
    document.getElementById("details").innerHTML = text;
    </script> 
        </div>

        <div class="row">
            <h2 style="margin-left:1%">Available Equipments:</h2><br>
            <p id="equ" ></p>
            <script>
    const eq = "<?php echo $row['8'] ?>";
    let e = eq.split("/");
    let eLen = e.length;
    let etext = "";
    for (let j = 0; j < eLen; j++) {
    let equ = e[j].split(":");
    etext += "<p class='equ'><figure style='float:left; margin-left:4%;'><img alt='icon' src='Images/" + equ['0'] + ".png' /><figcaption> " + " " + equ[0] + "<?figcaption></figure></p>";
    }
    etext += "";
    document.getElementById("equ").innerHTML = etext;
    </script>
        </div> <br>


        <div class="row">
            <h2 style="float: left; margin-left: 1%">Prices:</h2><img style="width: 50px; height: 50px;" src="Images/icons8-dollar-coin.gif">
            <table style="margin-left: 3%; float: left; font-size: larger;">
                <tr>
                    <th>Mon, Tues, Wed, Thurs, Fri</th>
                    <th>Sat, Sun</th>
                </tr>
                <tr>
                    <td><mark><?php echo $row['4'] . "$" ?></mark></td>
                    <td><mark><?php echo $row['5'] . "$" ?></mark></td>
                </tr>
            </table>
        </div> 
        <div class="row">
            <table style="margin-left:1%">
            <tr>
                <td><h2 class="box" style="float: left;">Location:</h2></td>
                <td><a href="<?php echo $row['9']; ?>"><img src="Images/google-maps.png" alt="google-maps" class="equi"></a></td>
        </tr>
        </table> 
        </div>

        <div class="row">
            <table style="margin-left:1%">
                <tr>
                    <td><h2 style="float: left;">For Reservation Please contact: <p style="color: blue"><?php echo $row['10']; ?></p></h2></td>
                    <td><a href="https://wa.me/961<?php echo $row['10']; ?>"><img src="Images/wa.png" alt="whatsapp"></a></td>
                </tr>
            </table></div>
            <br>
        



    <body class="light">
    <center>


        <div class="calendar">
            <div class="calendar-header">
                <span class="month-picker" id="month-picker">April</span>
                <div class="year-picker">
                    <span class="year-change" id="prev-year">
                        <pre><</pre>
                    </span>
                    <span id="year">2022</span>
                    <span class="year-change" id="next-year">
                        <pre>></pre>
                    </span>
                </div>
            </div>
            <div class="calendar-body">
                <div class="calendar-week-day">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                </div>
                <div class="calendar-days"></div>
            </div>

            <div class="month-list"></div>
        </div>
        <br> <h3 style="color : red">Note: Dates inside red circles are the reserved ones</h3><br>
        <button style="width:30%;" class="button" onclick="javascript:window.history.go( - 2)">GO back</button>
    </center>


</body>
<script>
    const slideimages = "<?php echo $row['11'] ?>";
    let s = slideimages.split("/");
    let sLen = s.length;
    for (let i = 0; i < sLen; i++) {
    var image = document.getElementById(i);
    function changeImage() {
    image.src = "Images/" + s[i];
    }

    changeImage();
    }
</script>


<script>
    let slideIndex = 1;
    showSlides(slideIndex);
    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
    slideIndex = 1
    }
    if (n < 1) {
    slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    }
</script>
  

<script>
    let calendar = document.querySelector('.calendar')

            const month_names = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']

            isLeapYear = (year) => {
    return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year % 400 === 0)
            }

    getFebDays = (year) => {
    return isLeapYear(year) ? 29 : 28
            }

    generateCalendar = (month, year) => {

    let calendar_days = calendar.querySelector('.calendar-days')
            let calendar_header_year = calendar.querySelector('#year')

            let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

            calendar_days.innerHTML = ''

            let currDate = new Date()
            if (month > 11 || month < 0) month = currDate.getMonth()
            if (!year) year = currDate.getFullYear()

            let curr_month = `${month_names[month]}`
            month_picker.innerHTML = curr_month
            calendar_header_year.innerHTML = year

// get first day of month

            let first_day = new Date(year, month, 1)

            for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
    let day = document.createElement('div')

<?php
require_once "connection.php";
$chalet;
$q = "select * from $chalet where 1";
$result_1 = mysqli_query($con, $q);
$r = mysqli_num_rows($result_1);
$data = array();
for ($i = 0; $i < $r; $i++) {
    $column = mysqli_fetch_array($result_1);

    $data[$i] = $column[1];
}
?>

    const dates = <?php echo json_encode($data); ?>;
    if (i >= first_day.getDay()) {
    day.classList.add('calendar-day-hover')
            day.innerHTML = i - first_day.getDay() + 1
            day.innerHTML += `<span></span>
                        <span></span>
                        <span></span>
                        <span></span>`
            for (let j = 0; j < dates.length; j++) {
    const myArray = dates[j].split("-");
    if (i - first_day.getDay() + 1 === Number(myArray[2]) && year === Number(myArray[0]) && month === Number(myArray[1]) - 1) {
    day.classList.add('curr-date')
    }
    }
    }
    calendar_days.appendChild(day)
            }
    }

    let month_list = calendar.querySelector('.month-list')

            month_names.forEach((e, index) => {
            let month = document.createElement('div')
                    month.innerHTML = `<div data-month="${index}">${e}</div>`
                    month.querySelector('div').onclick = () => {
            month_list.classList.remove('show')
                    curr_month.value = index
                    generateCalendar(index, curr_year.value)
                    }
            month_list.appendChild(month)
                    })

            let month_picker = calendar.querySelector('#month-picker')

            month_picker.onclick = () => {
    month_list.classList.add('show')
            }

    let currDate = new Date()

            let curr_month = {value: currDate.getMonth()}
    let curr_year = {value: currDate.getFullYear()}

    generateCalendar(curr_month.value, curr_year.value)

            document.querySelector('#prev-year').onclick = () => {
    --curr_year.value
            generateCalendar(curr_month.value, curr_year.value)
            }

    document.querySelector('#next-year').onclick = () => {
    ++curr_year.value
            generateCalendar(curr_month.value, curr_year.value)
            }

</script>



</body>
</html>

