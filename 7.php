<html>

<body>
    <form action="" method="POST">

        <input type="number" name="prev"><br>
        <input type="number" name="curr"><br>
        <input type="submit" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $prev = ($_POST['prev']);
        $curr = ($_POST['curr']);
        $diff = $curr - $prev;
    ?>
        Units consumed<input type="text" value="<?php echo "$diff" ?>">
    <?php
    $price = 0;
    if($diff < 100)
        $price = 3;
    else if($diff >= 100 && $diff <= 200)
        $price =4;
    else if($diff >=2100 && $diff <= 300)
        $price =5;
    else
        $price = 6;
    
    $sum = $diff * $price;
    echo "<br> Bill Amount is: $sum";
    }
    ?>
</body>

</html>