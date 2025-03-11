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
    <form action="" method="post">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Age</label>
          <input type="text" name="age" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Salary</label>
          <input type="text" name="salary" id="" class="form-control" placeholder="" aria-describedby="helpId">
      
        </div>
        <div class="form-group">
          <label for="">Loan Amount</label>
          <select class="form-control" name="laonAmount" id="">
            <option>Select</option>
            <option>200000</option>
            <option>300000</option>
            <option>400000</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Select Duration</label>
          <select class="form-control" name="duration" id="">
            <option>Select</option>
            <option value="2">2 Years</option>
            <option value="3">3 Years</option>
            <option value="4">4 Years</option>
          </select>
        </div>
        <button class="btn btn-info">Submit</button>
    </form>
   </div>
  </body>
</html>