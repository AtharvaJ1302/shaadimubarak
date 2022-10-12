<?php
require("dbcon.php");

 if(isset($_POST['Signin']))
 {  
    $name=$_POST["username"];
    $pwd=$_POST["password"];
    $id=$_POST["ID"];
    $query  = "SELECT * FROM admin_login WHERE username= '$name' AND password ='$pwd' AND id='$id' ";
    $result = mysqli_query($con,$query);
    if(!$result)
    {
        echo "The query is not functioning";
    }
    
    $cnt = mysqli_num_rows($result);
    if($cnt==1) 
    {
        //echo "correct";
        header ("Location: index.php");
        exit;
    }
    else {
    echo "<script>
    alert('incorrect username or password');
    </script>" ;
    //echo "incorrect";
    }

 }

 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <style>
        /* body
        {
            background-color: black;
        } */
        .login-frame
        {
            /* margin: 25%; */
            margin-top: 25%;
            margin-bottom: 25%;
            margin-left: 600px;
            margin-top: 25%;
            border-radius: 25px;
            border-width: 3px;
            border-color: pink;
            vertical-align: middle;

        }

        input
        {
            border-radius: 25px;
            border-color: pink;
            color: black;
        }

        button
        {
            border-radius: 35px;
            background-color: black;
            color: white;
        }

        a
        {
            link: white;
            color: white;
            alink: pink;
            vlink: gold;
        }
    </style>

</head>

<body>
    <div class="login-frame">
        <h2>Admin login</h2>
        <form method="post">
            <div class="input-field">
                <input type="text" placeholder="User ID" name="ID">
                <input type="text" placeholder="Admin User Name" name="username">
            </div>
            <div class="input-field">
                <input type="password" palceholder="Password" name="password">
            </div>
            <button type="submit" name="Signin">Sign In</button>
            <button class="extra">
                <a href="a">Forget Password?</a>
            </button>
        </form>
    </div>
    
</body>

</html>