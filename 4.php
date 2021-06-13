<?php
    function arm($num)
    {
        $sum=0;
        $x=$num;
        while($x != 0)
        {
            $rem = $x % 10;
            $sum = $sum + $rem * $rem * $rem;
            $x = $x / 10;
        }

        if($num == $sum)
            return 1;
        return 0;
    }

    $number = 153;
    echo "Armstrong check <br> number is $number <br>";
    $flag = arm($number);
    if($flag == 1)
        echo "It is armstrong number";
    else
        echo "It is not armstrong number";

?>