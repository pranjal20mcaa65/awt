<html>

<body>
    <h2>A-Mart Stationery PVT.Ltd.</h2><br>
    <?php
    if (isset($_POST['bill'])) {
        $iname = $_POST['iname'];
        $iprice = $_POST['iprice'];
        $iqty = $_POST['iqty'];
        $total = $iprice * $iqty;
        //echo "$iname $iprice $iqty";

    }
    ?>
    <table border="2" style="background-color: pink;">
        <tr>
            <td colspan="5" style="text-align:center;">A-Mart Reciept/Bill</td>
        </tr>
        <tr>
            <td>Item name</td>
            <td>Item price</td>
            <td>Item Quantity</td>
            <td>Date of purchase</td>
            <td>Total Amount</td>
        </tr>
        <tr>
            <td><?php echo $iname ?></td>
            <td><?php echo $iprice ?></td>
            <td><?php echo $iqty ?></td>
            <td><?php echo date("d/m/y") ?></td>
            <td><?php echo $total ?></td>
        </tr>

    </table>
    <p>Thank you for shopping</p><br>

    <input type="submit" id="submitBtn" />

    <script>
        document.getElementById("submitBtn").addEventListener("click", myFunction);

        function myFunction() {
            window.location.href = "12.html";
        }
    </script>
</body>

</html>