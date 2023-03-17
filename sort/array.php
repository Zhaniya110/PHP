<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="styke.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="post">
Web Design: <input type="checkbox" name="interest[]" value="Web Design"><br>
Mobile Development: <input type="checkbox" name="interest[]" value="Mobile Development"><br>
Data Science : <input type="checkbox" name="interest[]" value="Data Science"><br>

<input type="submit">

    <?php
     $interest = $_POST["interest"];
     print_r($interest);

    ?>
    </form>
</body>
</html>