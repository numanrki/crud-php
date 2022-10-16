<?php include 'header.php'; 
    if(isset($_FILES['image'])){

        $member_picture_name = $_FILES['image']['name'];
        $member_picture_size = $_FILES['image']['size'];
        $member_pictureName_temp = $_FILES['image']['tmp_name'];
        $member_picture_type = $_FILES['image']['type'];

        if(move_uploaded_file($member_pictureName_temp, "members-images/".$member_picture_name)){
            echo "Successfully Uploaded";
        }else{
            echo "Couldn't Upload the file";
        }

    }

?>

<div id="main-content">
    <h2>Add New Member</h2>
    <form class="post-form" action="savedata.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Member Name</label>
            <input type="text" name="mname" />
        </div>
        <div class="form-group">
            <label>Father Name</label>
            <input type="text" name="mfname" />
        </div>
        <div class="form-group">
            <label>Cast</label>
            <input type="text" name="mcast" />
        </div>
        
        <div class="form-group">
            <label>CNIC#/NIC</label>
            <input type="text" name="mcnic" />
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="mphone" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="maddress" />
        </div>
    
        <div class="form-group">
            <label>Member Rank</label>
            <input type="text" name="mrank" />
        </div>
        <div class="form-group">
            <label>Have WhatsApp</label>
            <input type="text" name="mwhatsapp" />
        </div>
        <div class="form-group">
            <label>Blood Group</label>
            <input type="text" name="mblood" />
        </div>
        <div class="form-group">
            <label>Upload Your Picture</label>
            <input type="file" name="image" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
