<?php
$member_id = $_POST['mid'];
$member_name = $_POST['mname'];
$member_fname = $_POST['mfname'];
$member_cast = $_POST['mcast'];
$member_cnic = $_POST['mcnic'];
$member_phone = $_POST['mphone'];
$member_address = $_POST['maddress'];
$member_rank = $_POST['mrank'];
$member_whatsapp = $_POST['mwhatsapp'];
$member_blood = $_POST['mblood'];

include 'config.php';

$sql = "UPDATE members SET mname = '{$member_name}', mfname = '{$member_fname}', mcast = '{$member_cast}', mcnic = '{$member_cnic}', mphone = '{$member_phone}', maddress = '{$member_address}', mrank = '{$member_rank}', mwhatsapp = '{$member_whatsapp}', mblood = '{$member_blood}' WHERE mid = '{$member_id}'";
// $sql = "INSERT INTO members(mname,mfname,mcast,mcnic,mphone,maddress,mrank,mwhatsapp,mblood) VALUES ('{$member_name}', '{$member_fname}', '{$member_cast}', '{$member_cnic}','{$member_phone}', '{$member_address}', '{$member_rank}', '{$member_whatsapp}', '{$member_blood}')";

$result =  mysqli_query($conn, $sql) or die("Query Unsuccessful");

header("Location: /crud/index.php");

mysqli_close($conn);

?>