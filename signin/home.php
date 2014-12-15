<?php
require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '../css/meta.php'; ?>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/css/meta.php'; ?>
        <link href="../css/home_page.css" rel="stylesheet" type="text/css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Untitled Document</title>
        <style type="text/css">
            <!--
            .style1 {
                font-size: 36px;
                font-weight: bold;
            }
            -->
        </style>
    </head>

    <body>
        <header>

            <!--Logo-->

            <div> 
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/nav/logo_header.php'; ?> 
            </div>

            <!-- header navigation area -->
            <!--Calls from file headernavigation.php -->
            <div> 
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/nav/headernavigation.php'; ?> 
            </div>

        </header>



        <!-- Main body -->
        <main>
            <fieldset>
                <table>
                    <tr>
                        <td>
                            <div align="center">
                                <?php
                                $remarks = $_GET['remarks'];
                                if ($remarks == null and $remarks == "") {
                                    echo '';
                                }
                                if ($remarks == 'success') {
                                    echo 'Registration Success';
                                }
                                ?>	
                            </div>
                        </td>
                    </tr>
                </table>
            </fieldset>

            <p align="center" class="style1">Login successfully </p>
            <!--<p align="center">This page is the home, you can put some stuff here......</p>-->
            <!--<p align="center"><a href="index.php">logout</a></p>-->
            <br></br><br></br>


            <?php
            require_once('connection.php');
            $id = $_SESSION['SESS_MEMBER_ID'];
            $result3 = mysql_query("SELECT * FROM member where mem_id='$id'");
            while ($row3 = mysql_fetch_array($result3)) {
                $fname = $row3['fname'];
                $lname = $row3['lname'];
                $address = $row3['address'];
                $contact = $row3['contact'];
                $picture = $row3['picture'];
                $gender = $row3['gender'];
            }
            ?>
            <fieldset>
                <table>
                    <tr>
                        <td>Your Profile Information </td>
                        <td class="r"><div align="right"><a href="logout.php">logout</a></div></td>
                    </tr>
                    <tr>
                        <td class="r"><div align="left">FirstName:</div></td>
                        <td class="r"><?php echo $fname ?></td>
                    </tr>
                    <tr>
                        <td class="r"><div align="left">LastName:</div></td>
                        <td class="r"><?php echo $lname ?></td>
                    </tr>
                    <tr>
                        <td class="r"><div align="left">Gender:</div></td>
                        <td class="r"><?php echo $gender ?></td>
                    </tr>
    <!--                <tr>
                        <td class="r"><div align="left">Address:</div></td>
                        <td class="r"><?php echo $address ?></td>
                    </tr>-->
                    <tr>
                        <td class="r"><div align="left">Contact No.: </div></td>
                        <td class="r"><?php echo $contact ?></td>
                    </tr>
                </table>
            </fieldset>
            <p align="center"><a href="index.php"></a></p>

        </main>
<script>
// Check browser support
if (typeof(Storage) != "undefined") {
    // Store
    localStorage.setItem("lastname", "Welcome Back ".$fname);
    // Retrieve
    document.getElementById("result").innerHTML = localStorage.getItem("lastname");
} else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}
</script>

        <footer>
            <!--Calls Footer from file footer.index.php -->
            <div> 
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/nav/footer.php'; ?> 
            </div>

        </footer>

    </body>
</html>