<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Members Records</h2>
    <?php
        include 'config.php';

        $sql = "SELECT * FROM members";

        $result =  mysqli_query($conn, $sql) or die("Query Unsuccessful");

        if(mysqli_num_rows($result) > 0) { 
    ?>
    <table class="table" cellpadding="4px">
    <thead class="thead-dark">
        <th scope="col">Id</th>
        <th scope="col">Member Name</th>
        <th scope="col">Father Name</th>
        <th scope="col">Cast</th>
        <th scope="col">Rank</th>
        <th scope="col">CNIC#</th>
        <th scope="col">Address</th>
        <th scope="col">Phone#</th>
        <th scope="col">WhatsApp</th>
        <th scope="col">Blood</th>
        <th scope="col">CRUD</th>
        </thead>
        <tbody>

            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['mid']; ?></td>
                <td><?php echo $row['mname']; ?></td>
                <td><?php echo $row['mfname']; ?></td>
                <td><?php echo $row['mcast']; ?></td>
                <td><?php echo $row['mrank']; ?></td>
                <td><?php echo $row['mcnic']; ?></td>
                <td><?php echo $row['maddress']; ?></td>
                <td><?php echo $row['mphone']; ?></td>
                <td><?php echo $row['mwhatsapp']; ?></td>
                <td><?php echo $row['mblood']; ?></td>
                <td>
                    <center><a href='edit.php?id=<?php echo $row['mid']; ?>' class="link-info">Edit</a>
                    
                    <a href='delete-inline.php?id=<?php echo $row['mid']; ?>' class="link-danger">Delete</a></center>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } else{
    echo "<h3>No Record Found</h3>";
} 
mysqli_close($conn);
?>
</div>
</div>
</body>
</html>
