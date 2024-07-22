<?php
  $conn =new mysqli('localhost:3306','root','','employe');
  if(!$conn){
    echo('ERROR'.mysqli_error($conn));
  }

  switch($_POST['api']){
    
    case 'viewdetailemploye':
      $id = $_GET['id'];
      $data = $conn->query("select * from salery where empId=$id");
      if($data){
        $response = $data->fetch_all(1);
       } else {
        $response = [
          'status' => 'error',
          'message' => 'User not found'
          ];
        }
       print_r(json_encode($response));
     break;
     case 'update':
        echo('it is succsessfuly Call');
       break;
  }
 ?>