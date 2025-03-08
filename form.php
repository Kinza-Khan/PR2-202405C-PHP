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
        <div class="container p-5">
                    <form action="" method="get">
                            <div class="form-group">
                              <label for="">Name</label>
                              <input type="text" name="uName" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                            <div class="form-group">
                              <label for="">Email</label>
                              <input type="text" name="uEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">
                              <!-- <small id="helpId" class="text-muted">Help text</small> -->
                            </div>
                            <button name="sub" class="btn btn-info">Submit</button>
                    </form>
        </div>
    </body>
</html>

<?php
// if(isset($_POST['sub'])){
//     $userName = $_POST['uName'];
//     $userEmail = $_POST['uEmail'];
//     echo "This is user " . $userName . " and email is " . $userEmail ; 
// }
if(isset($_GET['sub'])){
    $userName = $_GET['uName'];
    $userEmail = $_GET['uEmail'];
    echo "This is user " . $userName . " and email is " . $userEmail ; 

}

?>