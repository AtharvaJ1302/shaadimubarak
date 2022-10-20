<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *
        {
            font: 300 breeze sans;
        }
        .menu
        {
            height: 100%;
            width: 20%;
            margin: 0px;
            position: fixed;
            background-color: #C21E56;
            top: 0px;
            bottom: 0px;
            left: 0px;
        }

        .menu-content
        {
            color: #E4D00A;
            width: 100%;
            height: 50px;
            margin: 0px;
            text-align: center;
            background-color: white;
            vertical-align: middle;
            border-radius: 2px;
            font: 300 breeze sans;
            margin-bottom: 50px;
            border: 0.5px solid black;
            cursor: pointer;
        }

        .menu-content:hover
        {
            background-color: gold;
            transform:scaleY(1.05);
            transition-duration: 400ms;
        }

        .foot
        {
            vertical-align: bottom;
            text-align: center;
        }

        .foot h1
        {
            color: white;
        }

    </style>
</head>
<body>
    <section class="menu">
        <nav class="nav">
            <h1 align="left"><a href="/">< Back</a></h1>
            <h1 align="center">Shaadi Mubarak</h1>
            <a href="index.php">
            <button class="menu-content">
                Dashboard
            </button>
            </a>

            <a href="orders.php">
            <button class="menu-content">
                View Orders
            </button>
            </a>


            <a href="add.php">
            <button class="menu-content">
                Add Item
            </button>
            </a>

            <div class="foot">
                <h1> Admin <h1>
            </div>
        
    </nav>


    </section>
    
</body>
</html>