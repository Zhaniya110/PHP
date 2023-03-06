<html>
<link rel="stylesheet" href="styke.css">
<style>
    p{color:white;

    }
</style>
<body>
<h1 class="Title">Building a Mad Libs Game </h1>
    <form action="test.php" method="get">
    <span style="color:#AFA;"> color: <input type="text" placeholder="color" class="Input-text" name="color">
    <span style="color:#AFA;"> flower: <input type="text" placeholder="flower" class="Input-text" name="flower">
    <span style="color:#AFA;"> someone: <input type="text" placeholder="someone" class="Input-text" name="someone"> <br>
      <input type="submit" value="Submit" class="button">

    </form>
    <br><br>
    <?php
     $color = $_GET["color"];
     $flower = $_GET["flower"];
     $someone = $_GET["someone"];


    echo "Roses are $color <br>"; 
    echo "$flower are white <br>"; 
    echo "I love $someone"
    
    
    
    ?>
</body>










</html>