 <?php
    $customerName = $_REQUEST['customerName'];
    $customerPhone = $_REQUEST['customerPhone'];
    $testName = $_REQUEST['testName'];
    $customerDate = date('Y-m-d',strtotime($_REQUEST['customerDate']));
  
    $conn = mysqli_connect('localhost', 'root', '','test');
          

    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
    } 
    else {
        $stmt = $conn->prepare("insert into book(customerName, customerPhone,testName,customerDate ) values(?, ?, ?, ?)");
        $stmt->bind_param("siss", $customerName, $customerPhone,$testName,$customerDate);
        $execval = $stmt->execute();
        header("Location: index.php");
        exit (0);
    
        $stmt->close();
        $conn->close();
    }

    ?>
