<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($conn, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>

<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>
		    
		    <!-- Calculator form -->
		    <form method="post">
		        
                value 1: <input type="text" id="value1">
                value 2: <input type="text" id="value2">
                Operator:
                <select>

                <option Value="add">Add</option>
                <option Value="subtract">subtract</option>
                <option Value="Divide">divide</option>
                <option Value="Multiply">multiply</option>
                </select>

		        <br>
                <button type="submit" onclick="calc()"> Calculate</button>
            
		        
		    </form>
	    
		<div id="result"></div>
	
	</body>

    <script src="main.js"></script>
</html>