<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- This Is bootstrap File-->
  <link rel="stylesheet" href="./bootstrap.min.css">
</head>
<body>
  <form action="" method="POST">
    <div class="container bg-dark text-light p-2">
      <div class="row text-center text-warning">
        <div class="col-12">
          <h1 class="border-bottom">PRG_7: Check String I Aanagram Or Not</h1>
        </div>
      </div>
      <div class="row p-2">
        <div class="col-6">
          <h4>Enter Any String 1:- </h4>
        </div>
        <div class="col-6"><input type="text"name="Str1" class="form-control"></div>
      </div>
      <div class="row p-2">
        <div class="col-6">
          <h4>Enter Any String 2:- </h4>
        </div>
        <div class="col-6"><input type="text"name="Str2" class="form-control"></div>
      </div>
      <div class="row p-3">
        <div class="col-4"><input type="submit" name="submit" class="btn bg-info"></div>
      </div>
      <div class="row">
        <div class="col-12">
          <h4>
          <?php
            if(isset($_POST['submit'])){
              $str1 = $_POST['Str1'];
              $str2 = $_POST['Str2'];
              if(strlen($str1) == strlen($str2)){
                $str1=SortLtr($str1);
                $str2=SortLtr($str2);
                if($str1 == $str2)
                  echo("The All String Are Aanagram String");
                else
                  echo("The All String Are Not Aanagram String");
              }else
                echo("The All String Are Not Aanagram String");
            }
            function SortLtr($str){
              for($i=0; $i<strlen($str); $i++)
                for($j=0; $j<strlen($str); $j++){
                  if($str[$i] < $str[$j]){
                  $tmp = $str[$i];
                  $str[$i] = $str[$j];
                  $str[$j] = $tmp;
                }
              }
              return $str;
            }
          ?>   
          </h4>
        </div>
      </div>
    </div>
  </form>
</body>
</html>