<?php
include '_dbconnect.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_SESSION['userId'];
    
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $orderId = $_POST["orderId"];
    $message = $_POST["message"];
    $password = $_POST["password"];

    // Check user password is match or not
    $passSql = "SELECT * FROM users WHERE id='$userId'"; 
    $passResult = mysqli_query($conn, $passSql);
    $passRow=mysqli_fetch_assoc($passResult);
    
    if (password_verify($password, $passRow['password'])){
        $sql = "INSERT INTO `contact` (`userId`, `email`, `phoneNo`, `orderId`, `message`, `time`) VALUES ('$userId', '$email', '$phone', '$orderId', '$message', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        $contactId = $conn->insert_id;
        echo '<script>alert("Спасибо, что связались с нами. Ваш контактный идентификатор ' .$contactId. '. Мы свяжемся с вами очень скоро.");
                    window.location.href="http://localhost/OnlinePizzaDelivery/index.php";  
                    </script>';
                    exit();
    }
    else{
        echo "<script>alert('Пароль неверный!!');
                window.history.back(1);
                </script>";
    }
    
}
?>