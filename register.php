<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="BOOTSTRAP">
</head>
<body>
<h1 class="text-info text-center">Firefox Poultry Farm</h1>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <form method="post" action="register_handler.php">
            <input name="x" class="form-control" type="text" placeholder="Enter name"><br><br>
            <input name="y" class="form-control" type="email" placeholder="Enter email"><br><br>
            <input name="z" class="form-control" type="password" placeholder="Enter password"><br><br>
            <input name="btn_reg" class="btn btn-outline-info btn-block" type="submit" value="Register"><br><br>
            <a class="btn btn-outline-success btn-block" href="users.php">View User</a>

        </form>
    </div>
    <div class="col-3"></div>
</div>

</body>
</html>
