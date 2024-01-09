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
          <h1 class="border-bottom">PRG_8: Dispaly Sum Of All Digit Numebr</h1>
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
          <?php
            if(isset($_POST['submit'])){
              $number = $_POST['Number'];
              $sum = 0;
              while($number>0){
                $sum += (int)$number%10;
                $number/=10;
              }
              echo("<h3>The Sum Of All Degit :- $sum </h3>");
            }
          ?>   
        </div>
      </div>
    </div>
  </form>
</body>
</html>