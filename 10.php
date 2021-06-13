<html>

<body>
    <form method="POST">
        <input type="text" name="string" id="" required placeholder="Text here">
        <div>
            <select name="op">
                <option>Operation</option>
                <option value="reverse">Reverse</option>
                <option value="length">Find Length</option>
                <option value="substring">Sub String</option>
                <option value="upper">Uppercase</option>
                <option value="lower">Lowercase</option>
                <option value="count">Count words</option>
            </select>
        </div>
        <input type="submit" name="submit" id="">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $str = $_POST['string'];
        $op = $_POST['op'];

        switch ($op) {
            case "reverse":
                echo " Reverse is: ";
                //    echo strrev($str);
                for ($i = strlen($str) - 1, $j = 0; $j < $i; $i--, $j++) {
                    $temp = $str[$i];
                    $str[$i] = $str[$j];
                    $str[$j] = $temp;
                }
                echo $str;
                break;

            case "length":
                echo "Length is: ";
                echo strlen($str);
                break;

            case "substring":
                echo substr($str,-8, -5);
                break;

            case "upper":
                echo strtoupper($str);
                break;
            case "lower":
                echo strtolower($str);
                break;
            case "count":
                echo str_word_count($str);
                break;
        }
    }

    ?>
</body>

</html>