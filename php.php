<!DOCTYPE html>
<html>
    <style>
        *{
            font-size:30px;
            background-image:url("images/b1.jpg"); 
            background-size:cover;
            color:white;
            text-align:center;
            margin-top:20px;
        }
    </style>

<body>
    <?php
    // $servername="localhost";
    // $username="root";
    // $password='';
    // $conn=new mysqli($servername,$username,$password);

    // if ($conn->connect_error){
    //     die ("connection failed".$conn->connect_error);
    // }else{
    //     echo "connected successfully";
    // }

    // $db="CREATE DATABASE Travelism";

    // if ($conn->query($db)===TRUE){
    //     echo "database created successfully";
    // }else{
    //      echo "something went wrong in creating database".$conn->error;
    // }


    $dbname="Travelism";
    $servername="localhost";
    $username='root';
    $password='';
    $conn=new mysqli($servername,$username,$password,$dbname);

    // if ($conn->connect_error){
    //     die ("connection failed".$conn->connect_error);
    // }else{
    //     echo "connected successfully"."<br>";
    // }


    // $sql="CREATE TABLE bookings (
    //     sno INT(30) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    //     passengername VARCHAR(30) NOT NULL,
    //     email VARCHAR(12) NOT NULL,
    //     place VARCHAR(12) NOT NULL,
    //     stayday INT(13) NOT NULL,
    //     arrival VARCHAR(20) NOT NULL,
    //     leaving VARCHAR(20) NOT NULL)";

    
    //     if ($conn->query($sql)===TRUE){
    //         echo "table created successfully";
    //     }else{
    //         "something went wrong in creating table".$conn->error;
    //     }

    $pname= $_POST['name'];
    $email= $_POST['email'];
    $place= $_POST['place'];  
    $days= $_POST['days'];  
    $arrival= $_POST['arrivaldate'];  
    $leaving= $_POST['leavingdate'];    
    $sql="INSERT INTO `bookings`(`passengername`,`email`,`place`,`stayday`,`arrival`,`leaving`) 
    VALUES ('$pname','$email','$place','$days','$arrival','$leaving')";
    
    
    if ($conn->query($sql)===TRUE){
        echo "$pname". " "."your trip to "."$place" ." "."booked successfully"."<br>"."<h1>THANKS FOR CHOOSING US!</h1>"."<br>";;
        echo "<a href='travelweb.php'>HOME</a>";
        echo "<br><br><br>";
        echo "your booking id:".rand(10000,1000000);
        echo "<br><br>FOR FURTHER INFO:CONTACT 9876543210";
    }else{
        echo "something went wrong in creating record".$conn->error;
    }

    $sql = "SELECT passengername,place FROM bookings WHERE passengername='$pname'";
    $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     if($result->num_rows<2){
//     echo  $row['passengername']. " "."your trip to ".$row['place'] ." "."booked successfully"."<br>"."<h1>THANKS FOR CHOOSING US!</h1>"."<br>";
//     }else{
//         echo "$pname". " "."your trip to "."$place" ." "."already in our booked list"."<br>"."<h1>THANKS FOR CHOOSING US!</h1>"."<br>";
//     }
//     echo "<a href='travelweb.php'>HOME</a>";
// }}


    $conn->close();
    ?>
</body>
</html>
