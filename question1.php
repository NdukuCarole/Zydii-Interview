
<?php 

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
<body>
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
                <button type="submit" onclick="vuvuzelaS()"> Calculate</button>
            
		        
		    </form>
	    
		<div id="result"></div>
	
	</body>

    <script src="main.js"></script>
</html>