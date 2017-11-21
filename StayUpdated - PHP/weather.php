<?php
    include "includes/header.php";
?>

<?php
    include "includes/navbar.php";
?>
<?php
    include "includes/wnNavbar.php"
?>

<div class="container-fluid containerDown">
    <div class="well col-sm-4" style="float:right;">
        <div id="location"></div>
        <p>Temperatur: <span id="temperatur"></span></p>
        <p>Wind: <span id="wind"></span></p>
        <p>Weather: <span id="weather"></span></p>
    </div>
    
    <div class="row">
        <br>
        <br>
        <h1>New in weather</h1>
    </div>

</div>
<script>
    // Weather api, vad för typ och vilken url har nyckeln
    var loc = new XMLHttpRequest();
    loc.open("GET","http://api.wunderground.com/api/75118e3a4cbd2139/conditions/q/SE/Stockholm.json",false);
    loc.send(null);
    
    var response = JSON.parse(loc.response);
    var loc = "Current location: " + response.current_observation.display_location.full;
    //tar värdet temp_c ur api "nyckeln"
    var temperatur = response.current_observation.temp_c + " C";
    var wind = response.current_observation.wind_string ;
    
    var weather = response.current_observation.weather;
    //Skickar till spanen och skriver ut
    document.getElementById("location").innerHTML = loc;
    document.getElementById("temperatur").innerHTML = temperatur;
    document.getElementById("wind").innerHTML = wind;
    document.getElementById("weather").innerHTML = weather;

</script>
<?php
    include "includes/footer.php";
?>