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
        <?php
        // single dimesional index array
        $students = ["ali","aqsa","hamza","sana"] ;
        print_r($students); 
        ?>  
        <ul>
        
             <?php
             for($i=0 ; $i<count($students); $i++){
                ?>
                    <li><?php  echo $students[$i]?></li>
            <?php
             }
             ?>
        </ul>

                <h1>By Foreach Loop</h1>
                <ul>
                    <?php
                        foreach($students as $key => $std){
                                ?>
                            <li><?php echo   $key." ". $std?></li>
                        <?php
                        }

                    ?>
                </ul>


 </div>
  </body>
</html>