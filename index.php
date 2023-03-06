<body>

<link rel="stylesheet" href="styke.css">
<div class="Wrapper">
    <h1 class="Title">Веб-сайт Калькулятор </h1>
<form action="index.php" method="get">
    <div class="Input">
        <input type="number" id="input" placeholder="количество страниц" class="Input-text" name="num1"><br>
        <input type="number" id="input" placeholder="количество часов" class="Input-text" name="num2"><br>
       
    </div> 
        
       <input type="submit" class="button"value="Посчитать"></input>
       <?php
      Answer: echo $_GET["num1"] * $_GET["num2"];
       ?> 
       
</form>
   
</div>
    
</body>

