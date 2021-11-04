<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="BOOTSTRAP">
</head>
<body>
<h1 class="text-info text-center">Poultry Farm Users</h1>
<table class="table table-hover table-dark">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    <?php
    //start by connecting to the database
    require_once "connection.php";
    //prepare the select query
    $selectQuery =(SELECT * FROM `Users` WHERE 1);
    ?>

</table>

</body>
</html>
