<html>
<head>
    <title>Factorial Program using loop in PHP</title>
</head>
<body>
    <form method="post">
        Enter the Number:<br>
        <input type="number" name="number" id="number">
        <input type="submit" name="submit" value="Submit" />
    </form>
    <?php
    if ($_POST) {

        $number = abs($_POST['number']);
    
        echo "Factorial of $number:<br><br>";
        
        function factorial($number)
        {
            $fact = 1;
            for ($i = 1; $i <= $number; $i++) {
                $fact = $fact * $i;
            }
            echo $fact . "<br>";
        }
        factorial($number);
    }
    ?>
</body>
</html>