<?php
   include_once('session.php');
?>

<?php
    include "includes/navbar.php";
?>
<div class="container-fluid containerDown">


<h1>Make a post</h1>
<?php include "includes/accountNavbar.php"; ?>
    
    <form class="well" method='post' enctype='multipart/form-data' action='upload.php'>
        File: <input class="btn btn-lg btn-primary" type='file' name='file_upload'><br />
        <input class="btn btn-lg btn-primary" type='submit'>
    </form>
 

    <?php
    //Anvä
	//Php fil hämtning
    if(isset($_SESSION['message'])){
        echo "<h3>".$_SESSION['message']."</h3>"; //Visar meddelandet (läggs till i en session)
        unset($_SESSION['message']);
    }// Rengör meddelandet
    ?>
    <div class="col-sm-4">
        <?php
        $files = opendir("uploads");
        //Använt mig av https://www.startutorial.com/articles/view/php_file_upload_tutorial_part_2 för att få ut värderna.
        
		// skriver ut hämtade filer i en lista.
        while(($entry = readdir($files)) !== FALSE){
            if($entry != '.' && $entry != '..'){
                echo $entry."<br/>";
            }
        }
?>
        
        </div>
    </div>  


<?php
    include "includes/footer.php";
?>
