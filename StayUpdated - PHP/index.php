<?php
    include "includes/header.php";
?>

<?php
    include "includes/navbar.php";
?>
<!--  Den stora carusellen  -->
<?php
    include "includes/carousel.php";
?>
        <!-- Ett antal divar som delar in vissa delar av text och stycken. -->
        <div class="container-fluid">
            <h1>News of the day</h1>
            <hr />
            <div class="row">
                <div class="col-sm-4">
                    <a href="readNews.php">
                        <h2>Swedish winner</h2>
                        <img src="bilder/news/win.jpg" alt="news1" />
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </a>
                </div>
            
                <div class="col-sm-4">
                    <a href="readNews.php">
                        <h2>More tornados</h2>
                        <img src="bilder/news/nardo.jpg" alt="news2" />
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </a>
                </div>
        
                <div class="col-sm-4">
                    <a href="readNews.php">
                        <h2>Trump vs Hillary</h2>
                        <img src="bilder/news/kanidates.jpg" alt="news3" />
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </a>
                </div>
            </div>
              <hr /> 
            <div class="row">
                <div class="col-sm-8">
                    <a href="readNews.php">
                        <h2>Space travel</h2>
                        <img src="bilder/news/travel.jpg" alt="news4" />
                        <p>For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. </p>
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="readNews.php">
                        <h2>Vanilla new album</h2>
                        <img src="bilder/news/vanilla.jpg" alt="news5" />
                    </a>
            
                </div>
                <div class="col-sm-4">
                    <a href="readNews.php">
                        <img src="bilder/news/album.jpg" alt="news6" />
                        <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                    </a>
                </div>
            </div>
        </div>
<?php
include "includes/miniCarousel.php"
    ?>
<?php
include "includes/footer.php";
    ?>