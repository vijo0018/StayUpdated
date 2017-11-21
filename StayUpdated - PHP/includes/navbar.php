<!-- Översiktliga menyn -->
<body id="myPage" data-target=".navbar"
          style="
                 margin:auto;
                 margin-top: 28px;
                 ">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <!-- Knappen för den minimerade menyn -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Företags "loggan" -->
            <a class="navbar-brand" href="index.php" style="padding:0px;">
                <h4 style="
                           height: 0px;
                           margin-top: 12px;
                           margin-bottom: 0px;
                           margin-left: 15px;
                           margin-right: 15px;
                           color:white;">
                    Stay Updated</h4>
            </a>
        </div>
        <div class="container"> 
            <!-- Meny "navbar" har en collapse funktion ifall sidan kryper -->
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-left" > 
                    <li>
                        <a href="worldNews.php">
                            <div class="glyphicon glyphicon-globe"><span class="menuText">&nbsp;World News</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="movieNews.php">
                            <div class="glyphicon glyphicon-film"><span class="menuText">&nbsp;Movie News</span> </div>
                        </a>
                    </li>
                    <li>
                        <a href="gameNews.php">
                            <div class="glyphicon glyphicon-headphones"><span class="menuText">&nbsp;Game News</span></div>
                        </a>
                    </li>
                    <li>
                        <a href="musicNews.php">
                            <div class="glyphicon glyphicon-music"><span class="menuText">&nbsp;Music News</span></div>
                        </a>
                    </li>
                    <li>
                        <a href="viralVideos.php">
                            <div class="glyphicon glyphicon-play"><span class="menuText">&nbsp;Viral Videos</span></div>
                        </a>
                    </li>	
                    <li>
                        <a href="account.php">
                            <div class="glyphicon glyphicon-user"><span class="menuText">&nbsp;My Profile</span></div>
                        </a>
                    </li>	
                </ul>
            </div>
        </div>
    </nav>