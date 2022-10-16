<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <form class="post-form" action="updatedata.php" method="post">
    <div class="form-group">
            <label>Member Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Father Name</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Cast</label>
            <input type="text" name="saddress" />
        </div>
        
        <div class="form-group">
            <label>Member Rank</label>
            <select name="class">
                <option value="" selected disabled>Select Rank</option>
                <option value="1">Core Member</option>
                <option value="2">Member</option>
            </select>
        </div>
        <div class="form-group">
            <label>CNIC#/NIC</label>
            <input type="text" name="sphone" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="sphone" />
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <div class="form-group">
            <label>Have WhatsApp</label>
            <select name="class">
                <option value="" selected disabled>Choose</option>
                <option value="1">Yes</option>
                <option value="2">NO</option>
            </select>
        </div>
        <div class="form-group">
            <label>Blood Group</label>
            <select name="class">
                <option value="" selected disabled>Select Blood Group</option>
                <option value="1">A RhD Positive (A+)</option>
                <option value="2">A RhD Negative (A-)</option>
                <option value="3">B RhD Positive (B+)</option>
                <option value="4">B RhD Negative (B-)</option>
                <option value="5">O RhD Positive (O+)</option>
                <option value="6">O RhD Negative (O-)</option>
                <option value="7">AB RhD Positive (AB+)</option>
                <option value="7">AB RhD Negative (AB-)</option>
            </select>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
