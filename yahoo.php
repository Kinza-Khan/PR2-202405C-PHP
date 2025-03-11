<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <form action="" method="post">
            <div class="form-group">
              <label for="">Enter Email</label>
              <input type="text" name="userEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">          
            </div>
            <button name="sub" class="btn btn-info">Submit</button>
        </form>
      </div>
     </body>
     <?php
     if(isset($_POST['sub'])){
        $userEmail = $_POST['userEmail'];
        $restrcitedDomain = "yahoo.com";
        $userEmailArray = explode('@',$userEmail);
        // print_r($userEmailArray);
        $usersEmailLastIndexValue =   $userEmailArray[count($userEmailArray)-1];
        // echo $usersEmailLastIndexValue ."<br>";
        $Final = strcmp($usersEmailLastIndexValue, $restrcitedDomain);
        // echo $Final ;
        if($Final == 0){
                echo "<h1>" . 'restricted domain ' .  $usersEmailLastIndexValue  ."</h1>";
        }
        else{
            echo "<h1>" . 'allow domain ' .  $usersEmailLastIndexValue  ."</h1>";
        }
     }
     ?>
</html>