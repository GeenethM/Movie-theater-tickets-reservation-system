<?php
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "pdsa";

    $fdate = $_POST['date'];
    $ftime = $_POST['time'];
    $fname = $_POST['cusName'];
    $fmail = $_POST['cusMail'];
    $ftel = $_POST['cusTel'];

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
      }

      $qdelete = "TRUNCATE TABLE firstpage;";

      mysqli_query($connect, $qdelete);

    $query = "INSERT INTO firstpage(id, movie, date, time, name, email, telephone) VALUES ('1', 'Jailer','$fdate','$ftime','$fname','$fmail','$ftel')";

    $result = mysqli_query($connect, $query);

    /*if($result) {
        echo "data inserted";

    }else {
        echo "data not inserted";
    }*/

    mysqli_close($connect);

    header("Location: booking.html");
    die();
} 
?>