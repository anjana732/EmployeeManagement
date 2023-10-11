<?php
    $server ="localhost";
    $username ="root";
    $password ="";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to database failed due to".mysqli_connect_error());
    }

    $name = $_POST['name'];
    $eid = $_POST['eid'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $doj = $_POST['doj'];
    $address =$_POST['address'];

    $sql = "INSERT INTO `EmployeeManagement`.`Employee` (`name`, `eid`, `gender`, `email`, `phone`, `doj`, `address`) VALUES ('$name', '$eid', '$gender', '$email', '$phone', '$doj', '$address');";
    echo $sql;

    if($con->query($sql)==true){
        echo "Sucessfully Inserted";
    }else{
        echo "Error: $sql <br> $con->error";
    }
    $con->close();

?>