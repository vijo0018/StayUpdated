<?php
   include_once('session.php');
?>
<?php
include "includes/navbar.php";
?>

<div class="container-fluid containerDown">
 <h1>Member news</h1>
<?php include "includes/accountNavbar.php"; ?>

<h2>Nedan artikel använder OOP</h2>
    <!--Och läser ur tabellen NewsPost, med rubrik, ingress och brödtext-->
<?php
class db{
    private $host;
    private $dbname;
    private $password;
    private $username;
    public $mysqli;
    
    public function __construct(){
        $this->conn();
    }
	//Kopplar med databasen
    private function conn(){
        $this->host = 'localhost';
        $this->dbname = 'vijo0018';
        $this->password = 'Awppro123';
        $this->username = 'vijo0018';
            
        $this->mysqli = new mysqli($this->host, $this->dbname, $this->password, $this->username);
    }
    
    //Läser samt skriver ut från databasen (tabellen)
    public function read(){
        $query = 'SELECT * FROM NewsPost'; 
        $result = $this->mysqli ->query($query);
        $total_results = $result->num_rows;
        while($row = $result ->fetch_assoc()){
            echo "<div class='row'>";
            echo "<div class='col-sm-12'>";
            echo "<h3>".$row['Rubrik']."</h3>";
            echo $row['Ingress']."<br />";
            echo "<br/>".$row['Brodtext']."<br />"; 
            echo "</div><br />";
            echo "</div><br />";
        }
    }
}
//Skapar en ny instans av klassen
$instans = new db();
echo $instans->read(); //läser/hämtar functionen
    ?>
</div>

<?php
include "includes/footer.php";
?>