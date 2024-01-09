<!-- Write a php script to check number is odd or even -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- This Is bootstrap File-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <form action="" method="POST">
    <div class="container bg-dark text-light p-2">
      <div class="row text-center text-warning">
        <div class="col-12">
          <h1 class="border-bottom">PRG_6: Check Even Or Odd Number</h1>
        </div>
      </div>
      <div class="row p-2">
        <div class="clo-4">
          <h4>Enter Any Value :- </h4>
        </div>
        <div class="col-8"><input type="text"name="Number" class="form-control"></div>
      </div>
      <div class="row p-3">
        <div class="col-4"><input type="submit" name="submit" class="btn bg-info"></div>
      </div>
      <div class="row">
        <div class="col-12">
          <h3>
          <?php
            if(isset($_POST['submit'])){
              $number = $_POST['Number'];
              
                if($number%2==0)
                  echo(" The Number Is Even :$number");
                else
                  echo(" The Number Is Odd :$number");
            } 
          ?>   
          </h3>
        </div>
      </div>
    </div>
  </form>
</body>
</html>