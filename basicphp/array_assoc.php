<?php
$student = [
    "id"=>1,
    "name"=>"ali",
    "email"=>"ali@gmail.com"
];
echo $student['name'] . " " . $student['email'];
?>
<h1>Foreach loop</h1>
<ul>
    <?php
    foreach($student as $key=> $value){
    ?>
        <li><?php echo  $key." : ". $value?></li>
    <?php
    }
    ?>
</ul>
<h1>Nested</h1>
<?php
$students = [
    ["id"=>1, "name"=>"ali","email"=>"ali@gmail.com"],
    ["id"=>2, "name"=>"sana","email"=>"sana@gmail.com"],
    ["id"=>3, "name"=>"aqsa","email"=>"aqsa@gmail.com"]
];
$allStudents = [
   "Std1456"=>["name"=>"hamza","email"=>"hamza@gmail.com"],
   "Std1457"=>["name"=>"rafiya","email"=>"rafiya@gmail.com"],
   "Std1458"=>["name"=>"huzaifa","email"=>"huzaifa@gmail.com"],
];
?>

