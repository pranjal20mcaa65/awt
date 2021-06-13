<html>

<body>
    <h1>Calculation</h1>
    <?php
    if (isset($_POST['submit'])) {

        $eno = $_POST['eno'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $ecat = $_POST['ecat'];
        $hour = $_POST['hour'];
        $basic = $_POST['basic'];

        $iname = $_FILES['img']['name'];
        $iloc = $_FILES['img']['tmp_name'];
        $istore = "img/" . $iname;
        move_uploaded_file($iloc, $istore);

        $salary = 0.0;
        $da = 0.0;
        $hra = 0.0;
        $tax = 0.0;
        $pf = 0.0;
        $net = 0.0;
        $gross = 0.0;

        if ($ecat == "part")
            $salary = $hour * 100 + $basic;

        if ($ecat == "contract") {
            if ($basic < 5000) {
                $da = 200;
            } else if ($basic > 5000 && $basic <= 25000) {
                $da = $basic * 0.15;
                $hra = 1000;
                $tax = $basic * 0.03;
            } else if ($basic > 25000) {
                $da = $basic * 0.20;
                $hra = $basic * 0.05;
                $tax = $basic * 0.09;
            }
        }

        if ($ecat == "full") {
            if ($basic <= 10000) {
                $da = $basic * 0.45;
                $hra = $basic * 0.10;
            } else if ($basic < 50000 && $basic > 10000) {
                $da = $basic * 0.75;
                $hra = $basic * 0.20;
                $tax = $basic * 0.05;
                $pf = 1200;
            } else if ($basic > 50000) {
                $da = $basic * 0.90;
                $hra = $basic * 0.30;
                $tax = $basic * 0.15;
                $pf = $basic * 0.05;
            }
        }

        $net = ($da + $hra) - ($pf + $tax);
        $gross = $salary + $net;


        echo "<br> Inital pay for full time is $basic";
        echo "<br> DA for full time is $da";
        echo "<br> HRA for full time is $hra";
        echo "<br> Tax for full time is $tax";
        echo "<br> PF for full time is $pf";
        echo "<br> Net for full time is $net";
        echo "<br> Gross for full time is $gross";
    ?>
        <img src="<?php echo $istore; ?>" alt="sorry">
    <?php

    }
    ?>
</body>

</html>