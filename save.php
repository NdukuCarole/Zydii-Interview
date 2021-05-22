<?php

require_once 'conn.php';
if (isset($_POST['name'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $name = $_POST ["Name"];  
if (!preg_match ("/^[a-zA-z]*$/", $name) ) {  
    $ErrMsg = "Only alphabets and whitespace are allowed.";  
             echo $ErrMsg;  
} else {  
    echo $name;  
}  
    
    mysqli_query($conn, "insert into contacts(name,email) values ('$name','$email')");

    //Start the session if already not started.
    session_start();
    $_SESSION['success_message'] = "Name saved successfully.";
    header("Location: qn1b.php");
    exit();


    
} else {
    echo "Server problem, Try after sometime.";
}
?>