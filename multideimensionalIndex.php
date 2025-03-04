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
        <?php
        $allStudents =
            [
            ["ali",21,"karachi" , "ali@mail.com", "123" ],       
            ["sana",23,"karachi" , "sana@gmail.com"],        
           ["aqsa",23 ,"lahore", "aqsa@gmail.com" ,"aqsa123"] 
        ];    
        ?>   
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($allStudents as $key => $student){
                        ?>
                      <tr>
                            <?php
                            foreach($student as $data){
                            ?>                 
                            <td><?php echo $data?></td>
                            <?php
                            }
                            ?>
                    </tr>
                    <?php
                    }
                    ?>
                  
                </tbody>
            </table>
  </body>
</html>