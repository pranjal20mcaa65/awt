<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
    <h2 style="background-color: green; color:white;">A-Mart Stationery PVT.Ltd.</h2><br>

        <h4 style="color: brown;">Please select your item</h2><br>

        <select id="sel" name="item">
            <option>Items</option>
            <option value="Pencil">Pencil</option>
            <option value="Scale">Scale</option>
            <option value="Eraser">Eraser</option>
        </select><br>

        <input type="submit" name="submit" id="">
    </form>

    <form action="12.php" method="POST">
        <?php
        if (isset($_POST['submit'])) {
            $item = $_POST['item'];
            if ($item == "Pencil") {
        ?>
                <table>
                    <tr>
                        <th>Description</th>
                        <th>Values</th>
                    </tr>
                    <tr>
                        <td><label for="">SL Number</label></td>
                        <td><input type="number" name="p" id="" value="1" placeholder="SL.No"></td>
                    </tr>
                    <tr>
                        <td><label for="">Name</label></td>
                        <td> <input type="text" name="iname" id="" value="Pencil"></td>
                    </tr>
                    <tr>
                        <td><label for="">Price</label></td>
                        <td> <input type="number" name="iprice" id="" value="10"></td>
                    </tr>
                    <tr>
                        <td><label for="">Item code</label></td>
                        <td> <input type="text" name="icode" id="" value="1001"></td>
                    </tr>
                    <tr>
                        <td><label for="">Item Quantity</label></td>
                        <td><input type="number" name="iqty" id="" placeholder="Enter qty" min="0"></td>
                    </tr>
                </table>
            <?php
            } else if ($item == "Scale") {
            ?>
                <table>
                    <tr>
                        <th>Description</th>
                        <th>Values</th>
                    </tr>
                    <tr>
                        <td><label for="">SL Number</label></td>
                        <td><input type="number" name="p" id="" value="1" placeholder="SL.No"></td>
                    </tr>
                    <tr>
                        <td><label for="">Name</label></td>
                        <td> <input type="text" name="iname" id="" value="Scale"></td>
                    </tr>
                    <tr>
                        <td><label for="">Price</label></td>
                        <td> <input type="number" name="iprice" id="" value="20"></td>
                    </tr>
                    <tr>
                        <td><label for="">Item code</label></td>
                        <td> <input type="text" name="icode" id="" value="1002"></td>
                    </tr>
                    <tr>
                        <td><label for="">Item Quantity</label></td>
                        <td><input type="number" name="iqty" id="" placeholder="Enter qty" min="0"></td>
                    </tr>
                </table>
            <?php
            } else if ($item == "Eraser") {
            ?>
                <table>
                    <tr>
                        <th>Description</th>
                        <th>Values</th>
                    </tr>
                    <tr>
                        <td><label for="">SL Number</label></td>
                        <td><input type="number" name="p" id="" value="1" placeholder="SL.No"></td>
                    </tr>
                    <tr>
                        <td><label for="">Name</label></td>
                        <td> <input type="text" name="iname" id="" value="Eraser"></td>
                    </tr>
                    <tr>
                        <td><label for="">Price</label></td>
                        <td> <input type="number" name="iprice" id="" value="5"></td>
                    </tr>
                    <tr>
                        <td><label for="">Item code</label></td>
                        <td> <input type="text" name="icode" id="" value="1003"></td>
                    </tr>
                    <tr>
                        <td><label for="">Item Quantity</label></td>
                        <td><input type="number" name="iqty" id="" placeholder="Enter qty" min="0"></td>
                    </tr>
                </table>
            <?php
            }

            ?>
            <input type="submit" name="bill" id="">
        <?php
        }

        ?>

    </form>
</body>

</html>