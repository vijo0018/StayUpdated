<?php include "includes/header.php";
?>
<?php
//Kopplar till databasen.
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'vijo0018');
    define('DB_PASSWORD', 'Awppro123');
    define('DB_DATABASE', 'vijo0018');
    $db= mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    $user_check = $_SESSION['login_user'];

	//hämtar värderna för användaren med emailen som sattes som en session i loggin.
    $ses_sql = mysqli_query($db,"select id, Namn, Efternamn, Email, pass, passConfirm, personnummer, Mobiltelefon from Medlem where email = '$user_check' ");
    
	//Skriver ut värderna
    ($row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC));
        $row['Namn'];
        $row['Efternamn'];
        $row['Email'];
        $row['pass'];
        $row['passConfirm'];
        $row['personnummer'];
        $row['Mobiltelefon'];
        
        $userId = $row['id'];
 
   $login_session = $row['Email'];
   //Om inte sessionen är satt blir man tillbaka skickad till loggin.
   if(!isset($_SESSION['login_user'])){
      header("location:loggin.php");
   }
?>