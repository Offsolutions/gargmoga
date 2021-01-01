<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>booking page</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.9.1.min.js"></script>
    <?php
    session_start();
    if (isset($_SESSION['g'])) {
        $userid = $_SESSION['g'];

        $usern = $_SESSION['login'];
        $use = strtoupper($usern);

    ?>
        <style>
            form {
                height: 650px;
                padding-left: 30px;
                padding-top: 20px;
                width: 550px;
                margin-left: -50px;
            }

            label {
                font-size: 20px;
                margin-top: 10px;
                color: white;
            }

            form input {
                width: 250px;
                margin-top: 5px;
            }

            .btn {
                height: 50px;
                background-color: gray;
                margin-top: 50px;
                width: 95%;
                font-size: 15px;
                transition: 1s;
            }

            .btn:hover {
                background-color: #FFF;
            }

            h1 {
                font-family: Arial, Helvetica, sans-serif;
                text-align: center;
                color: #FF3;
                size: 90px;
            }

            .s {
                position: absolute;
                margin-top: 5px;
                margin-left: 8px;
            }

            .aw {
                margin-top: -25px;
                position: absolute;
                margin-left: 8px;
            }

            .logout {
                height: 50px;
                float: right;
                margin-right: 20px;
                margin-top: 15px;
                width: 80px;
                font-size: 20px;
            }

            .la {
                width: 94%;
                height: 45px;
            }
        </style>
</head>

<body>
    <div style="background-color:
         #69F;width:100%;height:100px;background-color:#000;">
        <div style="width:50%;
     height:100px;float:left;">
            <center>
                <font class="font" style="color:#FFF;font-size:23px;line-height:80px;"> <?php echo $use; ?> </font>
            </center>
        </div>

        <div style="width:50%;
     height:100px;float:right;">

            <ul class="mai">
                <li>
                    <a href="selectbook.php"> Booking Details</a></li>
                <li><a href="logout.php"> Logout</a></li>
            </ul>
        </div>
    </div>

    <div class="book">
        <div class="book11">

            <div class="book1"></div>
        </div>
        <div class="book2">
            <?php
            //session_start();
            include_once 'connect.php';
            $messsage = '';

            if (isset($_POST["sub"])) {
                if (!empty($_POST["carr"])) {
                    $f = $_POST['first'];
                    $la = $_POST['last'];
                    $e = $_POST['email'];
                    $p = $_POST['picup'];
                    $d = $_POST['dest'];
                    $ca = $_POST['carr'];
                    $pda = $_POST['pdate'];

                    $q = "insert into book2(first_name,last_name,e_mail,pik_up,
	   dest,car,pik_date) values('" . $f . "','" . $la . "','" .
                        $e . "','" . $p . "','" . $d . "','" . $ca . "','" . $pda . "')";

                    "SELECT * FROM book2 WHERE book_id = '" . $_POST["carr"] . "'  
                ) LIMIT 1  ";
                    $query = oci_parse($conn, $q);
                    $result = oci_execute($query);
                    oci_commit($conn);

                    // echo $result;

                    if (oci_fetch_array($conn, $result)) {
                        $insert_id = mysqli_insert_id($conn);
                        if ($insert_id != '') {
                            header("location:demobook.php?inserted=1");
                        } else {
                            header("location:demobook.php?already=1");
                        }
                    }
                } else {
                    header("location:demobook.php?required=1");
                }
            }
            if (isset($_GET["inserted"])) {
                $message = "Car_name inserted";
            }
            if (isset($_GET["already"])) {
                $message = "Car_name Already inserted";
            }
            if (isset($_GET["required"])) {
                $message = "Car_Name Required";
            }
            ?>

            <script>
                //$(document).ready(function(e)
                // {
                //  $(".mm").fadeOut(2000);
                // });
            </script>
            <?php
            //echo "<font class='mm'>done</font>";
            // }
            //else
            //{
            //echo "<font class='mm'>Error</font>";	
            //} 
            //}
            //}
            ?>

            <h1 style=""> Book A Car</h1>
            <div class="book21">
                <?php
                if ($message != '') {
                    echo $message;
                }
                ?>
                <form class="form-control" action="" method="post">

                    <label>First Name</label>
                    <br>
                    <input type="text" placeholder=" Enter First Your  Name" name="first" class="l" required>
                    <label class="aw">Last Name</label>

                    <input type="text" placeholder=" Enter Your Last Name" name="last" class="l s" required>


                    <br><br><label>E-mail</label><br>
                    <input type="text" placeholder=" Enter your  E-mail" name="email" class="la" required>
                    <br><br><label> Pick-up Your Location</label><br>
                    <input type="text" placeholder=" Enter  location" name="picup" class="la" required>
                    <br><br><label>Destination</label><br>
                    <input type="text" placeholder=" Enter your Destination" name="dest" class="la" required>
                    <br><br><label>Car</label><br>
                    <select name="carr">
                        <option>Audi</option>
                        <option>BMW</option>
                        <option>Nissan</option>
                        <option>Buick LaCrosse</option>
                        <option>Mazda LaPuta</option>
                        <option>Skoda Laura</option>

                    </select>

                    <br><br><label>Pick-date Your Location</label><br>
                    <input type="text" placeholder=" Enter  location" name="pdate" class="la" required> <br>

                    <input type="submit" value="Login" name="sub" class="btn">
                </form>
            </div>
        </div>

</body>

</html>
<?php
    }
?>