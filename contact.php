<!DOCTYPE html>
<html>
    <style>
        *{
            font-size:30px;
            background-image:url("images/b1.jpg"); 
            width:100vw;
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


    // $sql="CREATE TABLE contactinfo (
    //     sno INT(30) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    //     passengername VARCHAR(30) NOT NULL,
    //     phone VARCHAR(14),
    //     email VARCHAR(12) NOT NULL)";

    
    //     if ($conn->query($sql)===TRUE){
    //         echo "table created successfully";
    //     }else{
    //         "something went wrong in creating table".$conn->error;
    //     }

    $pname= $_POST['name'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];      
    $sql="INSERT INTO `contactinfo`(`passengername`,`phone`,`email`)
    VALUES ('$pname','$phone','$email')";
    
    
    if ($conn->query($sql)===TRUE){
        echo "$pname"." "."<h1>THANKS FOR CHOOSING US!</h1>"."<br>"."stay connect with us!";
        echo "<a href='travelweb.php'>HOME</a>";
    }else{
        echo "something went wrong in creating record".$conn->error;
    }

//     $sql = "SELECT passengername FROM contactinfo WHERE passengername='$pname'";
//     $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo  $row["passengername"]. " "."<h1>THANKS FOR CHOOSING US!</h1>"."<br>";
//     }
//     echo "<a href='travelweb.php'>HOME</a>";
// }else {
//   echo "0 results";}


    $conn->close();
    ?>
</body>
</html>