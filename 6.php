<html>

<body>
    <form method="POST">

        <input type="number" name="num"><br>
        <input type="submit" name="submit">
    </form>
    <?php
    if ($_POST) {
        $number = ($_POST['num']);
        echo "Entered no is $number <br>";
        $i = 3;
        $f1 = 0;
        $f2 = 1;
        $last = $f2;
        echo "Fibonacci series: ";
        echo $f1 . ' ' . $f2 . ' ';
        while ($i <= $number) {
            $f3 = $f1 + $f2;
            echo "$f3 ";
            $f1 = $f2;
            $f2 = $f3;
            $i = $i + 1;
            $last = $f2;
        }
        

        $count = 0;
        $num1 = $_POST['num'];
        $num = 2;
        $n1 = 1;
        $n2 = 1;
        $n3 = 2;
        echo "Prime Numbers: ";
        echo "\n";
        while ($count < $last) {
            $div_count = 0;
            while ($num == $n3) {
                if ($last > 2) {
                    for ($i = 1; $i <= $num; $i++) {
                        if (($num % $i) == 0) {
                            $div_count++;
                        }
                    }
                    if ($div_count < 3) {
                        echo $num . "  ";
                    }
                }
                $n1 = $n2;
                $n2 = $n3;
                $n3 = $n1 + $n2;
            }
            $num = $num + 1;
            $count = $count + 1;
        }
    }
    ?>
</body>

</html>