<?php
  require('./conn.php');
?>
  <title>View Detail</title>
  <style>
  #update,#updategive{
      backdrop-filter: blur(20px);
    }
    #update form,#updategive form{
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
    }
    header *{
      color: #fff;
    }
  </style>
</head>
<body>
  <header class="container-fluid  d-flex p-2 ps-5 pe-5 bg-secondary justify-content-between position-fixed">
    <h4>EmployeWork Info</h4>
    <nav class="d-flex d-block gap-4">
      <a href="./index.php">Home</a>
      
    </nav>
  </header>
    
  <div class="container pt-5">
    <table class="table">
      <thead>
        <tr>
          <th>Date</th>
          <th>Id</th>
          <th>Name</th>
          <th>work</th>
          <th>price</th>
          <th>employSalery</th>
          <th>##</th>
        </tr>
      </thead>
      <?php
        $data = $conn->query('select * from employee_table');
            if(mysqli_num_rows($data) <= 0){
              echo('<tr>
                <td>Worker Is Not Avalable</td>
              </tr>');
              }
              else{
                foreach($data as $row){
                  $salerydata = $conn->query("select * from salery where empId = $row[id]");
                  $totalsalery = 0;
                  foreach($salerydata as $salery){
                    echo("<tr>
                      <td>$salery[date]</td>
                      <td>$row[id]</td>
                      <td>$row[name]</td>
                      <td>$salery[empWork]</td>
                      <td>$salery[price]</td>
                     
                      ");
                      if($salery['salery']!=0)
                        echo("<td class='text-success'>+$salery[salery]</td>
                        <td><button type='button' class='btn bg-info text-dark' onclick='Update(\"$salery[id]\",\"$salery[empWork]\",\"$salery[price]\")'>Update</button>
                        <button type='button' class='btn bg-danger text-dark' onclick='Delete(\"$salery[id]\")'>Delete</button>
                        </td>
                        </tr>
                        ");
                      else
                        echo("<td class='text-danger'>-$salery[givensalery]</td>
                        <td><button type='button' class='btn bg-info text-dark' onclick='UpdateGive(\"$salery[id]\",\"$salery[givensalery]\")'>Update</button>
                        <button type='button' class='btn bg-danger text-dark' onclick='Delete(\"$salery[id]\")'>Delete</button>
                        </td>
                        </tr>
                        ");
                       
                        
                      $totalsalery += $salery['salery'];
                      $totalsalery -= $salery['givensalery'];
                  } 
                  echo("<tr class=''>
                    <td colspan='6' class='bg-success text-center'>
                    Total Pagar  : $totalsalery
                    </td>
                    </tr>");
                }
              }
          ?>
        </tbody>
    </table>
  </div>
  <div class="container-fluid h-100 position-fixed top-0 d-none" id="update">
    <form method="POST" class="w-50 position-absolute">
      <button type="button" class="btn bg-info text-dark h1 fs-5 position-absolute end-0 " onclick="closeform('update')">Close</button>
      <h1 class="text-center text-primary">Update Worker</h1>
      
      <div class=" mt-4 border-bottom border-3 border-info">
        <label for="work">work</label>
        <input type="number" name="work" id="work" placeholder="Enter employe work work" class="form-control" required>
      </div>
      <div class=" mt-4 border-bottom border-3 border-info">
        <label for="Name">price</label>
        <input type="number" name="price" id="price" placeholder="Enter price of work" class="form-control" value="10" required>
      </div>
      
      <div class="mt-5 text-center ">
        <input type="button" id="submitwork" value="Submit" class="btn bg-info w-25" onclick="formSubmit('1')"> 
      </div>
    </form>
    
  <?php
  
?>    
  </div>
  <!-- ======================== update give -->
  <div class="container-fluid h-100 position-fixed top-0 d-none" id="updategive">
    <form method="POST" class="w-50 position-absolute">
      <button type="button" class="btn bg-info text-dark h1 fs-5 position-absolute end-0 " onclick="closeform('updategive')">Close</button>
      <h1 class="text-center text-primary">Update Given Monny</h1>
      
      <div class=" mt-4 border-bottom border-3 border-info">
        <label for="Monny">Monny</label>
        <input type="number" name="Monny" id="Monny" placeholder="Enter any mony" class="form-control" required>
      </div>
      
      <div class="mt-5 text-center ">
        <input type="button" id="submitgive" value="Submit" class="btn bg-info w-25" onclick="formSubmit('0')"> 
      </div>
    </form>
    
  <?php
  
?>    
  </div>
</body>
<script>
const formWork = document.querySelector('#submitwork');
const formGive= document.querySelector('#updategive');
const give = document.querySelector('#Monny');
const work = document.querySelector('#work');
const price = document.querySelector('#price');
var id;
  
  function Update(id1,work1,price1){
    document.querySelector('#update').classList.remove('d-none');
    work.value=work1;
    price.value=price1;
    id=id1;
  }
  function UpdateGive(id1,monny){
    document.querySelector('#updategive').classList.remove('d-none');
    give.value=monny;
    id=id1;
  }
  function closeform(id){
    document.querySelector(`#${id}`).classList.add('d-none');
    
    
  }
  function Delete(id){
    alert(id);
  }
  function formSubmit(i){
    if(price.value!=0){
      give.value=0;
      alert('work');
    }else{
      work.value=0;
      price.value=0;
      alert('give');
    }
    let formData = new FormData();
    formData.append("api",'update');
    
    formData.append("give",give.value);
    formData.append("work",work.value);
    formData.append("price",price.value);
    
    fetch(`./api.php?id=${id}`,{
      method:'POST',
      header:{
        'Contant-type':'application/json'
      },
      body:formData,
    }).then(res=>res.json())
    .then(res=>{
      console.log(res);
    });
    
  }
</script>
</html>