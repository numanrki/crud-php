<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Edit Member Record</h2>
    <?php
    
    include 'config.php';

        $member_id = $_GET['id'];

        $sql = "SELECT * FROM members WHERE mid = {$member_id}";

        $result =  mysqli_query($conn, $sql) or die("Query Unsuccessful");

        if(mysqli_num_rows($result) > 0) { 
            while($row = mysqli_fetch_assoc($result)){

    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label>Member Name</label>
            <input type="hidden" name="mid" value="<?php echo $row['mid']; ?>"/>
            <input type="text" name="mname" value="<?php echo $row['mname']; ?>"/>
        </div>
        <div class="form-group">
            <label>Father Name</label>
            <input type="text" name="mfname" value="<?php echo $row['mfname']; ?>"/>
        </div>
        <div class="form-group">
            <label>Cast</label>
            <input type="text" name="mcast" value="<?php echo $row['mcast']; ?>"/>
        </div>
        
        <div class="form-group">
            <label>CNIC#/NIC</label>
            <input type="text" name="mcnic" value="<?php echo $row['mcnic']; ?>"/>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="mphone" value="<?php echo $row['mphone']; ?>"/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="maddress" value="<?php echo $row['maddress']; ?>"/>
        </div>
    
        <div class="form-group">
            <label>Member Rank</label>
            <input type="text" name="mrank" value="<?php echo $row['mrank']; ?>"/>
        </div>
        <div class="form-group">
            <label>Have WhatsApp</label>
            <input type="text" name="mwhatsapp" value="<?php echo $row['mwhatsapp']; ?>"/>
        </div>
        <div class="form-group">
            <label>Blood Group</label>
            <input type="text" name="mblood" value="<?php echo $row['mblood']; ?>"/>
        </div>
        <input class="submit" type="submit" value="Update" />
    </form>
    <?php 
        }
    }
    ?>
</div>
</div>
</body>
</html>
