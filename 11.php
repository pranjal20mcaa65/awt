<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_POST['store']) {
        $nm = $_POST['name'];
        $rate = $_POST['price'];

        $name = explode(',', $nm);
        $x = count($name);

        $price = explode(',', $rate);
    ?>
        <table style="background-color: yellow;">
            <tr>
                <th>Item name</th>
                <th>Item price</th>
            </tr>
            <?php
            $total = 0;
            for ($i = 0; $i < $x; $i++)
                $total = $total + $price[$i];

            for ($i = 0; $i < $x; $i++) {
                echo "<tr>";
                echo "<td>$name[$i]</td><td>$price[$i]</td>";
                echo "</tr>";
            }
            echo "<tr>";
            echo "<td>Total</td><td>$total</td>";
            echo "</tr>";
            ?>
        </table><br>
    <?php

        $coastly = max($price);
        $max = array_search($coastly, $price);
        echo "<br> Coasliest is $name[$max]";

        $cheap = min($price);
        $min = array_search($cheap, $price);
        echo "<br> Cheapest is $name[$min]";
    }
    ?>
</body>

</html>