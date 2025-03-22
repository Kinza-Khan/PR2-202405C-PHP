
<?php
include("php/query.php");
?>
<h1>Admin Panel index file</h1>
<?php
if(isset($_SESSION['adminEmail'])){
    ?>
     <h1><?php echo $_SESSION['adminName'] . " " . $_SESSION['adminEmail']?></h1>
     <a href="logout.php">Logout</a>
    <?php
}
?>