<?php
session_start();
?>
<?php
//http://codular.com/php-file-uploads
// Kollar efter fel
if($_FILES['file_upload']['error'] > 0){
    $_SESSION['message'] = 'You need to select something.';
 header("Location:accountPost.php");
 exit();
}

// Kollar fil storleken
if ($_FILES["file_upload"]["size"] > 500000) {
     $_SESSION['message'] = 'Sorry file is to large.';
 header("Location:accountPost.php");
 exit();
}

// Kollar om filen exsisterar
if(file_exists('uploads/' . $_FILES['file_upload']['name'])){
    $_SESSION['message'] = 'File with that name already exists.';
 header("Location:accountPost.php");
 exit();
}

// Laddar upp filen
if(!move_uploaded_file($_FILES['file_upload']['tmp_name'], 'uploads/' . $_FILES['file_upload']['name'])){
    //Skapar ett temporät meddelande
   $_SESSION['message'] = 'Error Uploading';
 header("Location:accountPost.php");
 exit();
}
//Skapar ett temporät meddelande och går sedan till "post" sidan (tillbaka)
 $_SESSION['message'] = 'Succesfully uploaded';
 header("Location:accountPost.php");
 exit();

    ?>

