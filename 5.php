<!-- <?php
$first=(int)readLine("enter a number");
$second=(int)readline("enter another number");
$x=readline("enter 1/2/3/4 for add/subtract/multiply/divide");
$result=0;
switch($x){
   case 1: echo $first+$second; break;
   case 2: echo $first-$second; break;
   case 3: echo $first*$second; break;
   case 4: echo $first/$second; break;
   default: echo "Incorrect input";
}
?> -->
<html>
    <body>
        
<?php
    if(isset($_POST['submit']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];        
        $op = $_POST['op'];        
        $ans = '';
        switch($op)
        {
            // case "add" : $ans = $num1 + $num2;
            // case "sub" : $ans = $num1 - $num2;
            // case "mul" : $ans = $num1 * $num2;
            // case "div" : $ans = $num1 / $num2;
            // default : echo "Incorrect input <br>";

            case 1 : $ans = $num1 + $num2;
            break;
            case 2 : $ans = $num1 - $num2;
            break;
            case 3 : $ans = $num1 * $num2;
            break;
            case 4 : $ans = $num1 / $num2;
            break;
            default : echo "Incorrect input <br>";
            break;
        }

        echo "Answer is $ans <br>";
    
        echo "$num1   $num2";
    }
?>
</body>
</html>