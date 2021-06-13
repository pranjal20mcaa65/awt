<html>

<head>
    <script language="javascript" type="text/javascript">
        function dynamicdropdown(listindex) {
            switch (listindex) {
                case "bsc":
                    document.getElementById("course").options[0] = new Option("Select course", "");
                    document.getElementById("course").options[1] = new Option("MCA", "mca");
                    document.getElementById("course").options[2] = new Option("MBA", "mba");
                    document.getElementById("course").options[3] = new Option("MSC", "msc");
                    break;
                case "bca":
                    document.getElementById("course").options[0] = new Option("Select course", "");
                    document.getElementById("course").options[1] = new Option("MCA", "mca");
                    document.getElementById("course").options[2] = new Option("MBA", "mba");
                    document.getElementById("course").options[3] = new Option("MSC", "msc");
                    break;
                case "be":
                    document.getElementById("course").options[0] = new Option("Select course", "");
                    document.getElementById("course").options[1] = new Option("MTECH", "mtech");
                    document.getElementById("course").options[2] = new Option("MBA", "mba");
                    break;
                default:
                    document.getElementById("course").options[0] = new Option("Select course", "");
            }
            return true;
        }
    </script>
</head>

<body>
    <h2>Nitte PG Courses</h2><br>
    <form method="POST" class="form" name="form" id="form" enctype="multipart/form-data">
        <input type="text" name="fname" placeholder="First Name"><br><br>

        <input type="text" name="mname" placeholder="Middle Name"><br><br>

        <input type="text" name="lname" placeholder="Last Name"><br><br>

        <input type="file" name="images" id="" placeholder="Upload img"><br><br>

        <input type="text" name="father" placeholder="Father's Name"><br><br>

        <textarea name="address" id="" cols="30" rows="10" placeholder="Address"></textarea><br><br>

        <input type="number" name="contact" placeholder="Contact"><br><br>

        <input type="email" name="mail" placeholder="Email"><br><br>

        <input type="date" name="dob" placeholder="DOB"><br><br>

        Gender &nbsp; <input type="radio" name="g" value="male">Male &nbsp; <input type="radio" name="g" value="female">Female<br><br>

        <input type="number" name="mark" id="" placeholder="Percentage in degree"><br><br>

        Hobbies &nbsp; <input type="checkbox" name="hobby1" id="" value="pubg">PUBG &nbsp; <input type="checkbox" name="hobby2" id="" value="cod">COD<br><br>

        Institution studied &nbsp; <select name="institution" id="">
            <option value="SPC"> St Philomena</option>
            <option value="VC"> Vivekananda</option>
        </select><br><br>


        Course studied :
        <select id="study" name="study" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
            <option value="">Select cource</option>
            <option value="bsc">BSC</option>
            <option value="be">BE</option>
            <option value="bca">BCA</option>
        </select>
        <br><br>
        Course Available:
        <script type="text/javascript" language="JavaScript">
            document.write('<select name="course" id="course"> <option value="">Select status</option> </select>')
        </script>

        <br><br>


        <input type="submit" name="submit" value="Send">

    </form>
    <?php
    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        //$img = $_POST['img'];
        $father = $_POST['father'];
        $address = $_POST['address'];
        $mail = $_POST['mail'];
        $mark = $_POST['mark'];
        $dob = $_POST['dob'];
        $gender = $_POST['g'];
        $hobby1 = $_POST['hobby1'];
        $hobby2 = $_POST['hobby2'];
        $institution = $_POST['institution'];
        $study = $_POST['study'];
        $course = $_POST['course'];
        
        $imgname = $_FILES['images']['name'];
        //$imgtype = $_FILES['images']['type'];
        $imgloc = $_FILES['images']['tmp_name'];
        $imgstore = "img/".$imgname;
        move_uploaded_file($imgloc,$imgstore);

        switch($course)
        {
            case "mca":
            case "mtech":
                if($mark < 70)
                    echo "Percentage should be greater than 70%";
            break;
            case "mba":
                if($mark < 60)
                    echo "Percentage should be greater than 60%";
            break;
            default :
                if($mark <40)
                    echo "Percentage should be greater than 40%";
            break;
        }
        echo "<br>";
        echo "Your entered <br>";
        echo "Name: $fname $mname $lname <br>";
        echo "Address: $address <br>";
        echo "Mail: $mail <br>";
        echo "DOB: $dob <br>";
        echo "Gender: $gender <br>";
        echo "Hobby: $hobby1 $hobby2 <br>";
        echo "Institution: $institution <br>";
        echo "Study: $study <br>";
        echo "Course: $course <br>";
        ?>
        <img src="<?php echo $imgstore; ?>" alt="">
        <?php
    }
    ?>
    
</body>

</html>