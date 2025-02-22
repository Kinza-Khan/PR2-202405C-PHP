<?php
$stdName = "ali";
$stdAge = 21  ;
$nic = true ;
echo $stdName . " " . $stdAge  ;
echo "<h1>".$stdName."</h1>"; 
?>

<h1><?php echo $stdName?></h1>

<?php
$color = "red";
$empName = "Hassan";
?>
<h1 style="color:<?php echo $color?>"><?php  echo $empName ?></h1>
<?php
$num1 = 21 ;
$num2 = 22 ;
$mul = $num1*$num2;
$add = $num1+$num2 ;
echo "multipliaction result " . $mul . "<br>" ;
echo "addition result " . $add ;
?>


