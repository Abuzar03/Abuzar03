<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="POST">
            <label>NAME:</label>
            <input type="text" name="name"require="Enter Your Name">
            <input type="submit" name="submit" value="submit">
        </form>
        <?php
            if(isset($_POST['submit']))
            {
                $fname=$_POST['name'];
                echo "<h1><i>.$fname</i><h1>";
            }
            ?>
</body>
</html>