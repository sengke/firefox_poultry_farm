<?php
if (isset($_POST["btn_reg"])){
    $name =$_POST["x"];
    $email =$_POST["y"];
    $password =$_POST["z"];
    //to start saving, connect to your created database
    require_once "connection.php";
    //now insert the insert query
    $insertQuery ="INSERT INTO `Users`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$name','$email','$password')";
    ///complete the saving using mysqli query function
    $save = mysqli_query($connection,$insertQuery);
    //check if the saving was successful
    if (isset($save)){
        echo "User registered successfully";
    }else{
        echo "User registration failed";
    }
}
