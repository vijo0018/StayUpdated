<?php
include "includes/header.php";
?>
<?php
include "includes/navbar.php";
?>

<div class="container-fluid containerDown">
    
<!-- En formulär för att skapa ett konto  -->
<form action="medlem.php" method="post" target="_self" class="formAdjust">
    
<div class="col-sm-10">
    Förnamn:<input class="form-control" name="fName" type="text" />
</div>
    
<div class="col-sm-10">
    Efternamn:<input class="form-control" name="eNamn" type="text" />
</div>
    
<div class="col-sm-10">
    Email:<input class="form-control" name="email" type="email" />
</div>
    
<div class="col-sm-10">
    Password:<input class="form-control" name="pass" type="password" />
</div>
    
<div class="col-sm-10">
    Confirm password:<input class="form-control" name="passConfirm" type="password" />
</div>

<div class="col-sm-10">
    Personnummer:<input class="form-control" name="personNummer" type="text" />
</div>
    
<div class="col-sm-10">
    Mobiltelefon:<input class="form-control" name="mobiltele" type="tel" />
</div>
    
<div class="col-sm-10">
    <input class="btn btn-primary" name="submit" type="submit" value="Skapa användare" />
</div>
    
</form>
</div>

<?php
    //Ansluter till databasen.
    $servername = "localhost";
    $username = "vijo0018";
    $password = "Awppro123";
    $dbname = "vijo0018";
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Lägger till "användare" i medlem om knappet trycks på.
    if(isset($_POST['submit'])){
		//escapar invärderna för att förhindra injektioner.
        $SQL_INSERT_STRING = "INSERT INTO Medlem (id,Namn,Efternamn,Email,pass,passConfirm,personnummer,Mobiltelefon) VALUES ('NULL','"
            .htmlspecialchars($_POST['fName'])."','"
            .htmlspecialchars($_POST['eNamn'])."','"
            .htmlspecialchars($_POST['email'])."','"
            .htmlspecialchars($_POST['pass'])."','"
            .htmlspecialchars($_POST['passConfirm'])."','"
            .htmlspecialchars($_POST['personNummer'])."','"
            .htmlspecialchars($_POST['mobiltele'])."');";
    
        
        //Berättar för dig om dina uppgifter är lagrade.
        if($conn->query($SQL_INSERT_STRING) == TRUE){
            echo("</br><p style='color:green;'>Dina uppgifter har lagrats </p>");
            
        }
        else{
            //Fel meddelande.
            echo("<br /><p style='color:red;'>Det uppstod ett fel, fyll i alla kollumner </p>");
        }
    }
//Stänger anslutningen till databasen. 
$conn->close();
?>

<?php
include "includes/footer.php";
?>