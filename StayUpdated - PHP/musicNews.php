<?php
    include "includes/header.php";
?>

<?php
    include "includes/navbar.php";
?>


<div class="container-fluid">
    <h1>Music News</h1>

<!-- Aktiverar javascript functionen genom att skicka med ett värde som funktionen sedan hanterar och skickar tillbaka

I detta exempel så håller man över "texten" så utförs javascript functionen-->
    <div class="well col-sm-4" style="float:right;">
        <h4>Hover to listen</h4>
        <p onmouseover="play('first')"
           onmouseout="stop('first')">Winside - Reapers</p>
        <audio id="first" src="music/win.mp3" controls="controls">
        </audio><br />
    
        <p onmouseover="play('second')"
           onmouseout="stop('second')" >
            Noosa - Walk On By (Sound Remedy Remix)
        </p>
        <audio id="second" src="music/walked.mp3"
               controls="controls">
        </audio><br />
    
        <p onmouseover="play('third')"
           onmouseout="stop('third')" >
            Tobu - Hope (Original Mix)
        </p>
        <audio id="third" src="music/hope.mp3"
               controls="controls">
        </audio>
    </div>
</div>
<script>
    //Simple javaScript funktion (vanlig javaScript)
    function play(sound){
        //hämtar det "inskickade" id och utför funktionen, spela.
        var controlls = document.getElementById(sound);
        controlls.play();
    }
        
    function stop(sound){
        var controlls = document.getElementById(sound);
        controlls.pause();
        controlls.currentTime = 0;
    }
</script>

 
<?php
include "includes/footer.php";
    ?>