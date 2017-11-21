<?php
    include "includes/header.php";
?>

<?php
    include "includes/navbar.php";
?>
<div class="container-fluid">
    <div>
        <canvas id="canvas" width="200px" height="200px"></canvas>
    </div>
    <h1>Reasent game news</h1>
    <hr />
    <a href="readNews.php">
        <div class="row">
            <div class="col-sm-4">
                <img src="bilder/game/watch.jpg" alt="New games"/>
            </div><br/>
            <div clsas="col-sm-6">
                <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental.
                </p>
            </div>
        </div>
    </a>
    <hr>
    <a href="readNews.php">
        <div class="row">
            <div class="col-sm-4">
                <img src="bilder/game/splinter.jpg" alt="New games"/>
            </div><br/>
            <div clsas="col-sm-6">
                <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental.
                </p>
            </div>
        </div>
    </a>
</div>
<hr>
<script type="text/javascript">
//deklarerar variablerna
var canvas;  
var ctx;
var x = 200;
var y = 200;
var dx = 5;
var dy = 4;
var WIDTH = 200;
var HEIGHT = 200; 

//Funktioner för hur bollen ska röra sig och vad det ska vara.
function circle(x,y,r) {
  ctx.beginPath();
  ctx.arc(x, y, r, 0, Math.PI*2, true);
  ctx.fill();
}

function rect(x,y,w,h) {
  ctx.beginPath();
  ctx.rect(x,y,w,h);
  ctx.closePath();
  ctx.fill();
}

 
function clear() {
  ctx.clearRect(0, 0, WIDTH, HEIGHT);
}

function init() {
  canvas = document.getElementById("canvas");
  ctx = canvas.getContext("2d");
  return setInterval(draw, 10);
}


function draw() {
  clear();
  ctx.fillStyle = "white";
  rect(0,0,WIDTH,HEIGHT);
  ctx.fillStyle = "blue";
  circle(x, y, 10);

  if (x + dx > WIDTH || x + dx < 0)
    dx = -dx;
  if (y + dy > HEIGHT || y + dy < 0)
    dy = -dy;

  x += dx;
  y += dy;
}

init();
</script>


<?php
include "includes/footer.php";
    ?>