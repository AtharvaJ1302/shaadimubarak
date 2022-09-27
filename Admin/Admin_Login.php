<?php
require("Connection.php");

 if(isset($_POST['Signin']))
 {  
    $name=$_POST["AdminName"];
    $pwd=$_POST["AdminPassword"];
    $query  = "SELECT * FROM admin_login WHERE Admin_Name= '$name' AND Admin_Password='$pwd' ";
    $result = mysqli_query($conn,$query);
    if(!$result){
        echo "query not functioning";
    }
    $cnt = mysqli_num_rows($result);
    if($cnt==1) 
    {
        //echo "correct";
        header("Location:Admin_index.php");
    }
    else {
    //   echo "<script>alert(incorrect password);</script>" ;
    echo "incorrect";
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
</head>

<body>
    <div class="login-form">
        <h2>Admin login</h2>
        <form method="post">
            <div class="input-field">
                <input type="text" placeholder="Admin-Name" name="AdminName">
            </div>
            <div class="input-field">
                <input type="password" palceholder="Password" name="AdminPassword">
            </div>
            <button type="submit" name="Signin">Sign In</button>
            <button class="extra">
                <a href="a">Forget Password?</a>
            </button>
        </form>
    </div>
    
</body>

</html>