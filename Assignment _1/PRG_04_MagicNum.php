
<!-- Program :3
    Write a Script Wether the number is Prime or Not-->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrom Number</title>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
</head>
<body class=" bg-info">
    <form action="" method="POST">
        <div class="container bg-dark m-50 mt-4 text-light p-4">
            <div class="row p-3 m-3">
                <div class="col-12">
                    <h2 class=" border-bottom border-primary border-4 fw-bold">PRG_4 : Magic Numbert</h2>
                </div>
            </div>
            <div class="row p-3 m-3">
                <div class="col-4 fs-2 fw-bolder">
                  <label for="inptNo">Enter Any Number :-</label>
                </div>
                <div class="col-8"><input type="number" name="number" class=" form-control "></div>
            </div>
            <div class="row">
                <div class="col-12"><input type="submit" value="submit" name="submit" class=" btn bg-primary fs-5 fw-bolder ms-5 ps-4 pe-4"></div>
            </div>
            <div class="row">
                <div class="col-12 mt-5 ms-4">
                    <h4>
                    <?php
                    if(isset($_POST['submit'])){

                        $number = $_POST['number'];
                        if($number>9)
                            MagicNum($number);
                    }
                    function MagicNum($num){
                        $sum = 0;
                        for($i=$num; $i>0; $i=$i/10)
                            $sum += $i%10;
                        if($sum>9)
                            MagicNum($sum);
                        else{
                            if($sum == 1)
                                echo("magic");
                            else
                                echo(" not magic");
                        }
                    }
                    ?>
                    </h4>
                </div>
            </div>
        </div>
    </form>
</body>
</html>