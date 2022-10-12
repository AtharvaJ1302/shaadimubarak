<!DOCTYPE html>
<html lang="en">
<head>
<?php //include ('header.php');?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>

    <style>
        .form-container
        {
            height: 90%;
            width: 80%
        }

        .form-input-style
        {
            height: 70px;
            width: 150px;
        }
    </style>

</head>
<body>
<!-- <div class="content" style="width: 500px"> -->
            <div class="form-container">
                <form action="master.php" method="POST" class="form-input-style">

                    <input type = "text" name="cat" placeholder="Category">
                    <br>    
                    <input type = "text" name="name"placeholder="Name">
                    <br>     
                    <input type = "textarea" name="desc" placeholder="Description">
                    <br> 
                    <input type = "number" oninput="validity.valid||(value='');" name="price"placeholder="Price">
                    <br> 
                    <input type = "text" name="venue" placeholder="Venue">
                    <input type = "text" name="state" placeholder="State"> 
                    <input type = "text" name="city" placeholder="City">
                    <br> 
                    <input type = "text" name="f_cat" placeholder="Food Category">
                    <input type = "text" name="f_type" placeholder="Food type">
                    <br> 
                    <input type = "text" name="img_url" placeholder="Image URL">
                    <br> 
                    <input type = "text" name="status" placeholder="Status">
                    
                    <input type="submit" value="Add" name="add">
                    <input type="reset" value="Reset">
                </form>
            </div>
<!-- </div> -->
    
</body>
</html>