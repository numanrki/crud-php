<?php

echo $member_id = $_GET['id'];

        include 'config.php';


        $sql = "DELETE FROM members WHERE mid = {$member_id}";

        $result =  mysqli_query($conn, $sql) or die("Query Unsuccessful");

        header("Location: /crud/index.php");

        mysqli_close($conn);

?>