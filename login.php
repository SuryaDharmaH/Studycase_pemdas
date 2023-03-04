<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <center>
        <div class="d-flex flex-column mt-4">
    <img src="img/gg.png">
    <strong>SELAMAT DATANG DI TECHNOPARK GALLERY SMKN 2 BANJARMASIN </strong>  
    </div>
    <div class="login-form">  
<form action="log.php" method="POST" class="form">
<div class="form-group">
				<input type="text" name="username" class="form-control" id="username" placeholder="username" required>
			</div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
	</div>
    <div class="row align-item-start">
            <div class="col">
                <input type="submit" name="login" value="Login" style="width: 110px;" class="btn btn-light ms-auto mt-4">
        </div> 
</form>
    </div>
   </center>

</body>
</html>