<!DOCTYPE html>
<html>
    <head>
        <title>media.com</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'templates/navbar.php'; ?>
        <div class="container mt-4">
            <h2>SignUp</h2>
            <form class="form" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                </div> 
                <div class="form-group">
                    <label for="gender">Gender &nbsp </label> 
                    <input type="radio"  id="male" name="male" value="male">&nbsp Male &nbsp
                    <input type="radio"  id="male" name="male" vamue="female">&nbsp Female
                </div>  
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
                </div>
                <div class="form-group">
                    <label for="pwd2">Confirm password</label>
                    <input type="password" class="form-control" id="pwd2" placeholder="Enter password" name="pwd2" required>
                </div>  

                <input type="submit" class="btn btn-dark" value="Sign up" name="signup">
                <a href="login.php"><input type="button" class="btn btn-dark" value="Login" name="Login"></a>
            </form>           
        </div>
    </body>
</html>