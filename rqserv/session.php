 <?php
    require_once('..\sign_in\connection.php');
    $id=$_SESSION['SESS_MEMBER_ID'];
    $result3 = mysql_query("SELECT * FROM member where mem_id='$id'");
    while($row3 = mysql_fetch_array($result3))
    {
    $ptype=$row3['ptype'];
    $pname=$row3['pname'];
    $teaserdesc=$row3['teaserdesc'];
    $fulldesc=$row3['fulldesc'];
    $contactname=$row3['contactname'];
    $contactnum=$row3['contactnum'];
    }
    ?>

