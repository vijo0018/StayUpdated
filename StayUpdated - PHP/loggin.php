<?php
include "includes/header.php";
?>
<?php
include "includes/navbar.php";
?>

<?php
	// Med hjälp av https://www.tutorialspoint.com/php/php_mysql_login har jag skapad login funktionerna.

    //Ett annat sätt för att koppla sig till databasen
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'vijo0018');
    define('DB_PASSWORD', 'Awppro123');
    define('DB_DATABASE', 'vijo0018');
    $db= mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    

    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //username och password som skickas från formuläret
        //Använder en escape_string vilket undviker XSS attacker.
        $username = mysqli_real_escape_string($db,$_POST['email']);
        $userpassword = mysqli_real_escape_string($db,$_POST['pass']);
        
        //Cookie i ett år
        if(isset($_POST['rememberMe'])){
            setcookie('email', $_POST['email'], time(),+60*60*24*365);
            setcookie('password', $_POST['pass'], time(),+60*60*24*365);
        }
        if(isset($_COOKIE['email']) && isset($_COOKIE['password'])){
            header("location: account.php");
        }else{
            header("location: loggin.php");
        }
        //SQLsats som hämtar id från användaren som loggats in.
        $sql = "SELECT id FROM Medlem WHERE Email = '$username' and pass = '$userpassword'";        
      
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);//räknar inloggade.
        
        //Om result matchade med $username and $userpassword, då finns det en användare, dvs en rad.
        if($count == 1){
            $_SESSION['login_user'] = $username;
            header("location: account.php");
        }
        else{
            echo "Wrong name or password";
        }
    }
	//style="margin-left:10%; margin-right:10%;
//
?>
<!-- Formulär för loggin -->
<div class="container-fluid containerDown">

    <form action="loggin.php" method="post" target="_self" class="formAdjust">
        <div style="margin-left:10%; margin-right:10%;">
		<div class="col-sm-4" >
            Email: <input class="form-control"  name="email" type="text" placeholder="Enter Username (email)" />
        </div>
        <div class="col-sm-4">
            Password: <input class="form-control" name="pass" type="password" placeholder="Enter password" />
        </div>
		</div>
		<div style="margin-top:20px;margin-left:10%; margin-right:20%; ">
        <br>
        Remember Me:<input type="checkbox" name="rememberMe" value="1">
        <div class="col-sm-6">
            <input class="btn btn-primary" type="submit" name="btnSubmit" value="Log In"/>
        </div>
		</div>
           </form>
    <div class="row">
        <div class="col-sm-3">
            <br />
            <a class="btn btn-primary" href="medlem.php">Skapa konto</a>
        </div>
    </div>
</div>
<script>
    //Enkel JQuery function, vid "focus/markering" av input rutan, ändra färg annars inte.
    $(document).ready(function(){
       $("input").focus(function(){
           $(this).css("background-color", "#D3D3D3"); 
    });
        $("input").blur(function(){
           $(this).css("background-color", "#FFFFFF"); 
        });
    });
        
</script>

<? include "includes/footer.php"?>