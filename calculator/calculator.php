<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>calc</title>
</head>
<body>
    <form method="post" action="calculator.php">
        <input name="expression" type="text" name="expression" class="expression" id="exp">
        <button type="button" class="buttons" onclick="clearexp()">C</button>
        <button type="button" class="buttons" onclick="writeexpression('(')">( )</button>
        <button type="button" class="buttons" onclick="writeexpression('%')">%</button>
        <button type="button" class="buttons" onclick="writeexpression('/')">/</button>
        <button type="button" class="buttons" onclick="writeexpression(7)">7</button>
        <button type="button" class="buttons" onclick="writeexpression(8)">8</button>
        <button type="button" class="buttons" onclick="writeexpression(9)">9</button>
        <button type="button" class="buttons" onclick="writeexpression('*')">X</button>
        <button type="button" class="buttons" onclick="writeexpression(4)">4</button>
        <button type="button" class="buttons" onclick="writeexpression(5)">5</button>
        <button type="button" class="buttons" onclick="writeexpression(6)">6</button>
        <button type="button" class="buttons" onclick="writeexpression('-')">_</button>
        <button type="button" class="buttons" onclick="writeexpression(1)">1</button>
        <button type="button" class="buttons" onclick="writeexpression(2)">2</button>
        <button type="button" class="buttons" onclick="writeexpression(3)">3</button>
        <button type="button" class="buttons" onclick="writeexpression('+')">+</button>
        <button type="button" class="buttons" onclick="writeexpression('')">√</button>
        <button type="button" class="buttons" onclick="writeexpression(0)">0</button>
        <button type="submit" class="buttons">=</button>
        <button type="button" class="buttons" onclick="writeexpression('.')">.</button>

    </form>
</body>
<script>
    function writeexpression(expr) {
        document.getElementById("exp").value += expr
    }

    function clearexp(){
        document.getElementById("exp").value = "";
    }
</script>
</html>

<?php 

function calc() {
    $expression = $_POST["expression"];
    if ($expression) {

    }else {

    };
    $answer = eval("return " . $expression . ";");
    echo "<script>document.getElementById('exp').value = {$answer}</script>";
};

if (isset($_POST["expression"])) {
    calc();
};
?>