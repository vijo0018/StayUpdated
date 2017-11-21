
<?php
   include('session.php');
?>
<!-- Hämtar innehållet från andra -->
<?php
include "includes/navbar.php";
?>
<?php
//Forein key, hämtar medlem och article, där den som skrivit artikeln, med samma id.
$query = mysqli_query($db, 
"SELECT Medlem.id, Medlem.Email, 
Article.A_Id, Article.ingress, Article.brodtext, Article.id
FROM Medlem, Article
WHERE Medlem.id = Article.id");
?>

<div class="container-fluid containerDown">
    
<h1>Home</h1>
<?php include "includes/accountNavbar.php"; ?>
    
    <div class="col-sm-8">
	<?php
	while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
	?>
 <!--Skriver loopar ut resultatet.-->
	<p><br />User: <?php echo $row['Email']; ?> wrote article: <?php echo $row['A_Id']; ?> </p>
	<h3>Article with id:<?php echo $row['A_Id']; ?></h3>
	<?php echo $row['ingress']; ?><br /> 
	<br/>
	<?php echo $row['brodtext']; ?>
	<?php
}
?>
	</div>
</div>
<?php
include "includes/footer.php";
?>