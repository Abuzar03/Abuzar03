<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <label>Enter Your Name:</label>
    <input type="text"name="f_name">
    <input type="submit" value="Display" name="submit">
    </form>
</body>
</html>
<?php 
    if(isset($_POST['submit'])){
        $f_name=$_POST['f_name'];
        echo "<h1><i> Good Morning, $f_name</i></h1>";
    }
    ?>