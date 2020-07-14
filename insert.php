<?php
// $email = $_POST['email']; 

// if (!empty($email)){
// $host = "localhost";
// $Username = "root";
// $Password = "";
// $dbname = "email";

// $conn = new mysqli($host, $Username, $Password, $dbname);

// if(mysqli_connect_error()){
//     die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
// } else {
//     $SELECT = "SELECT email From mailing Where email = ? Limit 1";
//     $INSERT = "INSERT Into email (email) values(?)";

//     //prepare statement 
//     $stmt = $conn->prepare($SELECT);
//     $stmt -> bind_param("s", $email);
//     $stmt -> execute();
//     $stmt -> bind_result($email);
//     $stmt -> store_result();
//     $rnum = $stmt -> num_rows;

//     if($rnum==0){
//         $stmt->close();

//         $stmt = $conn->prepare($INSERT);
//         $stmt->bind_param("s", $email);
//         $stmt->execute();
//         echo "New record inserted successfully";
//     }else{
//         echo "someone already registered with this mail";
//     }
//     $stmt->close; 
//     $conn->close;
// }
// }else{
//     echo "All fields required";
//     die(); 
// }
?> 


<?php
$conn = new mysqli("localhost","root","","email");

mysqli_select_db($conn, "email") or die("no db found");

if(isset($_POST['submit'])){
    $email = $_POST['email'];

    $query = "INSERT INTO `mailing` (`Email`) VALUE('$email')";
    if(mysqli_query($conn, $query)){
        echo "<h1>success</h1>"; 
        header("location: success.html");
    }else{
        // echo "<h1>failed</h1>";
        header("location: error.html");
    }
}
?>


