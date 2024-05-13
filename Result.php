<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LEBChalet</title>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="images/favicon.png.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/v.css">

    </head>

    <?php
    require_once "connection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            if (isset($_POST['SearchChaleByName'])) {
                $name = $_POST['ChaletName'];
                $q = "select * from search where  ChaletName='$name'";
                $result = mysqli_query($con, $q);
                $row = mysqli_fetch_row($result);
                if (mysqli_num_rows($result) == 1) {

                    


                        $q = "select * from search where  ChaletName='$name'";
                        $result = mysqli_query($con, $q);
                        $row = mysqli_fetch_row($result);

                        echo "<p style='color:red;'>Note: Press on Chalet's Name/Image for more details</p>
                        <table>
        <tr>
            <th><h1>Chalet's name</h1></th>
            <th><h1>Location</h1></th>
            <th><h1>Price</h1></th>
            <th><h1>Season(s)</h1></th>
            <th><h1>Chalet's image</h1></th>
        </tr>
         <tr>
            <td><a href='ViewChalet.php?chaletname=$row[0]'><h1 style='font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif'> $row[0] </h1></a></td>
            <td><h2>$row[2]</h2></td>  
            <td><h2>Price: <mark>$row[4] </mark>$ per 24h<hr> Weekend Price: <mark>$row[5]</mark>$ per 24h</h2></td>
            <td><h2>$row[3]</h2></td>
            <td><a href='ViewChalet.php?chaletname=$row[0]'><img src='Images/$row[6]' alt='ChaletImage' width='120px' height='120px'></a></td>
        </tr></table>";
                    
                } else {
                    echo 'sorry no results';
                }
            }
            if (isset($_POST['SearchChale'])) {
               
                
                $tr = 0;

                $date = $_POST['date'];
                $placearr =explode ("-", $_POST['location']);
                $place = $placearr['0'];
                $villagearr =explode ("-", $_POST['village']); 
                $village = $villagearr['0'];
                $season = $_POST['season'];
                $price = $_POST['price'];
                if ($village == null) {
                    $village = "Any";
                }
                if ($place == null) {
                    $place = "Any";
                }
                if ($season == null) {
                    $season = "Any";
                }

                if($place=="Any"){
    if ($season == "Any") {
        if($village=="Any"){
            $q = "SELECT * FROM `search` WHERE price<='$price'";
        } else {
           $q = "SELECT * FROM `search` WHERE village='$village' && price<='$price'"; 
        }
    } else {
      if($village=="Any"){
            $q = "SELECT * FROM `search` WHERE season='$season' && price<='$price'";
        } else {
           $q = "SELECT * FROM `search` WHERE village='$village' && season='$season' && price<='$price'"; 
        }  
    }
}else{
    if ($season == "Any") {
        if($village=="Any"){
            $q = "SELECT * FROM `search` WHERE place='$place'&& price<='$price'";
        } else {
           $q = "SELECT * FROM `search` WHERE place='$place' && village='$village' && price<='$price'"; 
        }
    } else {
      if($village=="Any"){
            $q = "SELECT * FROM `search` WHERE place='$place' && season='$season' && price<='$price'";
        } else {
           $q = "SELECT * FROM `search` WHERE place='$place' && village='$village' && season='$season' && price<='$price'"; 
        }  
    }
    
}
$result_1 = mysqli_query($con, $q);
                        $r = mysqli_num_rows($result_1);

                        echo "<p style='color:red;'>Note: Press on Chalet's Name/Image for more details</p>
                        <table  class='table table-sm table-striped table-sortable'>
        <thead><tr>
            <th data-sort='string'><h1>Chalet's name</h1></th>
            <th data-sort='string'><h1>Location</h1></th>
            <th data-sort='int'><h1>Price</h1></th>
            <th data-sort='string'><h1>Season(s)</h1></th>
            <th><h1>Chalet's image</h1></th>
        </tr></thead><tbody>";
                        for ($i = 0; $i < $r; $i++) {

                            $row = mysqli_fetch_row($result_1);

                            $q2 = "SELECT * FROM $row[0] WHERE booking_date='$date'";

                            $result_2 = mysqli_query($con, $q2);

                            if (mysqli_num_rows($result_2) == 0) {
                                $tr++;

                                echo "<tr>
            <td><a href='ViewChalet.php?chaletname=$row[0]'><h1 style='font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif'>$row[0]</h1></a></td>
            <td><h2>$row[2]</h2></td>  
            <td><h2><mark>$row[4] </mark>$ per Day<hr><mark>$row[5]</mark>$ (Weekend)</h2></td>
            <td><h2>$row[3]</h2></td>
            <td><a href='ViewChalet.php?chaletname=$row[0]'><img src='Images/$row[6]' alt='ChaletImage' width='120px' height='120px'></a></td>
        </tr>";
                            }
                        }if ($tr == 0) {
                            echo '<tr style=" background-color:red;"><td colspan="5"><h1>Sorry!! There is no result</h1></td></tr></table>';
                        } else {
                            echo '</body></table>';
                        }
                }
            
        
    }
    ?>
    
    
    <script >

Node.prototype.tsortable = function() {
	var ths = this.querySelectorAll('thead tr:last-child th[data-sort]')
	ths.forEach(th => th.onclick = tablesort)
}

function tablesort(e) {
	var table = e.currentTarget.closest('table')

	var J = Array.from(e.currentTarget.parentNode.children).indexOf(e.currentTarget)

	var datatype = e.currentTarget.dataset.sort

	var olderTH = table.querySelector('th[data-dir]')
	if (olderTH && olderTH !== e.currentTarget) delete olderTH.dataset.dir

	var dir = e.currentTarget.dataset.dir ? (e.currentTarget.dataset.dir === 'asc' ? 'desc' : 'asc') : (e.currentTarget.dataset.sortDefault ? e.currentTarget.dataset.sortDefault : 'asc')
	e.currentTarget.dataset.dir = dir


	var itable = []


	var trs = table.querySelectorAll('tbody tr')
	trs.forEach((tr, i) => {
		itable.push({tr: tr, values: []})
		var tds = tr.querySelectorAll('td')
		tds.forEach(td => {
			var value = td.dataset.sortValue ? td.dataset.sortValue : td.innerText
			if (datatype === 'int') value = parseInt(value)
			else if (datatype === 'float') value = parseFloat(value)
			else if (datatype === 'date') value = new Date(value)
			itable[i].values.push(value)
		})
	})


	if (datatype === 'string') {
		if (dir === 'asc') {
			itable.sort((a, b) => {
				return ('' + a.values[J]).localeCompare(b.values[J])
			})
		} else {
			itable.sort((a, b) => {
				return -('' + a.values[J]).localeCompare(b.values[J])
			})
		}
	} else {
		if (dir === 'asc') {
			itable.sort((a, b) => {
				return a.values[J] < b.values[J] ? -1 : (a.values[J] > b.values[J] ? 1 : 0)
			})
		} else {
			itable.sort((a, b) => {
				return a.values[J] < b.values[J] ? 1 : (a.values[J] > b.values[J] ? -1 : 0)
			})
		}		
	}

	table.querySelector('tbody').innerHTML = ''
	itable.forEach(row => table.querySelector('tbody').append(row.tr))
}

function tablesort(e){var t=e.currentTarget.closest("table"),r=Array.from(e.currentTarget.parentNode.children).indexOf(e.currentTarget),a=e.currentTarget.dataset.sort,s=t.querySelector("th[data-dir]"),s=(s&&s!==e.currentTarget&&delete s.dataset.dir,e.currentTarget.dataset.dir?"asc"===e.currentTarget.dataset.dir?"desc":"asc":e.currentTarget.dataset.sortDefault||"asc"),l=(e.currentTarget.dataset.dir=s,[]);t.querySelectorAll("tbody tr").forEach((e,t)=>{l.push({tr:e,values:[]}),e.querySelectorAll("td").forEach(e=>{e=e.dataset.sortValue||e.innerText;"int"===a?e=parseInt(e):"float"===a?e=parseFloat(e):"date"===a&&(e=new Date(e)),l[t].values.push(e)})}),"string"===a?"asc"===s?l.sort((e,t)=>(""+e.values[r]).localeCompare(t.values[r])):l.sort((e,t)=>-(""+e.values[r]).localeCompare(t.values[r])):"asc"===s?l.sort((e,t)=>e.values[r]<t.values[r]?-1:e.values[r]>t.values[r]?1:0):l.sort((e,t)=>e.values[r]<t.values[r]?1:e.values[r]>t.values[r]?-1:0),t.querySelector("tbody").innerHTML="",l.forEach(e=>t.querySelector("tbody").append(e.tr))}Node.prototype.tsortable=function(){this.querySelectorAll("thead tr:last-child th[data-sort]").forEach(e=>e.onclick=tablesort)};
</script>
<script>document.querySelector('.table-sortable').tsortable()</script>
    </html>
    