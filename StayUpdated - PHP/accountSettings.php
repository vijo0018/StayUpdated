<?php
   include_once('session.php');
?>
<?php
include "includes/navbar.php";
?>
<?php
//Uppdatera account sql kod
if(isset($_POST['update'])){
    
    $newUserName = htmlspecialchars($_POST['fName']);
    $newLastName = htmlspecialchars($_POST['eNamn']);
    $newEmail = htmlspecialchars($_POST['email']);
    $newPassword = htmlspecialchars($_POST['pass']);
    $newPassConfirm = htmlspecialchars($_POST['passConfirm']);
    $newPersonNumber = htmlspecialchars($_POST['personNummer']);
    $newMobil = htmlspecialchars($_POST['mobiltele']);
    
    //gör en ifsats och fråga om varje blir ändrad annars gör annat.
    
    //Uppdaterar till det som ändras i tabellen
        $SQL_UPDATE_STRING = mysqli_query($db, 
        "UPDATE Medlem SET 
        Namn= '$newUserName', 
        Efternamn = '$newLastName',
        Email = '$newEmail',
        pass = '$newPassword',
        passConfirm = '$newPassConfirm',
        personNummer = '$newPersonNumber',
        Mobiltelefon = '$newMobil' WHERE
        id='$userId' ");
    
    //Alertar efter uppdateringen av uppgifterna
    $message = "Your changes are made loggin to activate them";
    echo "<script>alert('$message');</script>";
    //förstör sessionen och låter användaren logga in för att skapa en ny session.
     if(session_destroy()) {
      header("Location: loggin.php");
     }
}
//Delete, tar bort användaren där id passar det inloggade id.
 if(isset($_POST['delete'])){
        $SQL_DELETE_STRING = mysqli_query($db, "DELETE FROM Medlem  WHERE id='$userId'");
     
     $message = "You successfully removed your account";
     echo "<script type='text/javascript'>alert('$message');</script>";
     //Skickas till loggin sidan.
      if(session_destroy()) {
      header("Location: loggin.php");
     }
        
    }

    
?>
<!-- Ett formulär för att ta bort ett konto. Som place holders visas även den nuvarande informationen som de kan välja att ändra.-->
<div class="container-fluid containerDown">
    
    <h1>Settings</h1>
<?php include "includes/accountNavbar.php"; ?>
    
    <div class="col-sm-6">
        <form action="" method="post" target="_self" class="formAdjust">
    
            <div class="col-sm-10">
                Förnamn:<input class="form-control" name="fName" type="text" placeholder="<?php echo $row['Namn'];?> "/>
            </div>
            <div class="col-sm-10">
                Efternamn:<input class="form-control" name="eNamn" type="text" placeholder="<?php echo $row['Efternamn']; ?> "/>
            </div>
            <div class="col-sm-10">
                Email:<input class="form-control" name="email" type="email" placeholder="<?php echo $row['Email'];?>" />
            </div>
            <div class="col-sm-10">
                Password:<input class="form-control" name="pass" type="password" placeholder="<?php echo $row['pass'];?> "/>
            </div>

            <div class="col-sm-10">
                Confirm password:<input class="form-control" name="passConfirm" type="password" placeholder="<?php echo $row['passConfirm'];?> "/>
            </div>

            <div class="col-sm-10">
                Personnummer:<input class="form-control" name="personNummer" type="text" placeholder="<?php echo $row['personnummer'];?> "/>
            </div>

            <div class="col-sm-10">
                Mobiltelefon:<input class="form-control" name="mobiltele" type="tel" placeholder="<?php echo  $row['Mobiltelefon'];?> "/>
            </div>
            <!-- Knapparna -->
            <div class="col-sm-10"><br></div>
            <div class="col-sm-10">
                <input class="btn btn-primary" name="update" type="submit" value="Uppdatera" />
                <input style="float:right;"class="btn btn-primary" name="delete" type="submit" value="Delete account" />
            </div>
        </form>
    </div>
</div>

<?php
include "includes/footer.php";
?>