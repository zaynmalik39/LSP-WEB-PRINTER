<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
       <center> <h2><i>Welcome Our Shop</i></h2> </center>
       <center> <h3>Login your account</h3> </center>
        <form action="process.php" method="POST">
            <label>Username</label>
            <input type="text" name="username" class="form-control" id=""> <br /><br />

        <label>Password</label>
        <input type="password" name="password" class="form-control" id=""> <br /><br />
        
        <button type="submit" name="login">Login</button>

        <div class="register">
           <b> <small>Belum punya akun? <br /> </b>
            <a href="../register/index.php">Register</a></small>
        </div>
        </form>
    </div>
</body>
</html>