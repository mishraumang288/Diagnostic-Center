<?php

$host="localhost";
$user="root";
$password='';
$db="test";
$conn=mysqli_connect($host,$user,$password,$db);
$username= $_REQUEST['login'];
$password= $_REQUEST['pass'];



      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
        
            // echo "<h1><center> Login successful </center></h1>";
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
?>

<html lang="en">
<head>
<link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    
<section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="index.php">
            <h1><span>BOOKING</span> <span>DETAILS</span></h1>
          </a>
          
        </div>
       
        <button  type="button" class="btn btn-danger" data-after="Home"
        style="
        padding: 15px;
        font-size:15px;
        "
        
        ><a  href="login.php" 
        style="color: white
        ; text-decoration:none;
        "
        >LOGOUT</a></button>

        
  </section> <br><br> <br><br>

  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Customer ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Test</th>
      <th scope="col">Booking Date</th>
    
   
     
      
      
    </tr>
  </thead>
  <tbody>
    <?php 
    $selectquery = "select * from book";
    $query = mysqli_query($conn,$selectquery);
    $nums = mysqli_num_rows($query);

   
  
    while($res= mysqli_fetch_array($query)){
        ?>
        <tr>
      
        <td><?php echo $res['customerID']; ?></td>
        <td><?php echo $res['customerName']; ?></td>
        <td><?php echo $res['customerPhone']; ?></td>
        <td><?php echo $res['testName']; ?></td>
        <td><?php echo $res['customerDate']; ?></td>
          
      </tr> 
<?php
    }

   
  ?>
 
  </tbody>
</table>


</body>
</html>