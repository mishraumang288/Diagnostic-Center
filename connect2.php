<?php
 
    $Name = $_REQUEST['Name'];
    $Phonenumber = $_REQUEST['Phonenumber'];
    $Message = $_REQUEST['Message'];
    $City = $_REQUEST['City'];



    $conn = mysqli_connect('localhost', 'root', '','test');

    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
    } 
    else {
       

        $stmt2 = $conn->prepare("insert into more(Name, Phonenumber,Message,City ) values(?, ?, ?,?)");
        $stmt2->bind_param("siss", $Name, $Phonenumber,$Message,$City);
        $execval2 = $stmt2->execute();

        header("Location: index.php");
        
        // echo "Details Submitted successfully...";
        $stmt2->close();
        $conn->close();
    }



    ?>