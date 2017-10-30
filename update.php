<?php include 'inc/header.php'; ?>
<?php 
if(!isset($_SESSION['username'])){
    header("Location:index.php?msg=".urlencode("You are not allowed to this page!!!"));
} else {

$id = $_GET['id'];
$getD = mysqli_query($db,"SELECT * FROM tbl_std WHERE std_id='$id'");
$getData=(mysqli_fetch_assoc($getD));
             $img_name = explode('../', $getData['std_img']);
             $img = strtolower(end($img_name));
?> 

    <div class="container">
    <div class="text-center">
        <h1 class="nice">Update Registration Form</h1>
    </div>
    <form class="form-horizontal" method="post" action="process/update.php?id=<?php echo $id;?>" enctype="multipart/form-data">
    
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Name</label>

            <div class="col-md-4">
                <input  type="text" name="name"  value="<?php echo $getData['std_name'];?>" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Select Date Of Birth-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="birthDate" >Date of Birth</label>
            <div class="col-md-4">
                <input type="text" name="dob" class="form-control" value="<?php echo $getData['std_dob'];?>">
            </div>
        </div>

        <!-- Gender Input -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="checkboxes">Gender</label>

            <div class="col-md-4">
                <div class="checkbox">
                    <label>
                        <input  name="gender" value="Male" type="radio">
                        Male
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input name="gender" id="genderboxes-1" value="Female" type="radio">
                        Female
                    </label>
                </div>
                <span class="help-block">Please select your Gender</span>

            </div>
        </div>

        <!-- Email input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Email</label>

            <div class="col-md-4">
                <input  type="email" name="email"  value="<?php echo $getData['std_email'];?>" class="form-control input-md" required="">
                <span class="help-block">Please type in your email</span>
            </div>
        </div>

        <!-- Paddress input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Address</label>

            <div class="col-md-4">
                <input  type="text" name="address"  value="<?php echo $getData['std_address'];?>" class="form-control input-md"
                       required="">
                <span class="help-block">Please type in your  Address</span>
            </div>
        </div>

        <!-- Phone input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Phone</label>

            <div class="col-md-4">
                <input type="text" name="phone"  value="<?php echo $getData['std_phone'];?>" class="form-control input-md" required="">
                <span class="help-block">Please provide your Mobile Number</span>
            </div>
        </div>

        <!-- School input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">School/Collage</label>

            <div class="col-md-4">
                <input type="text" name="school"  value="<?php echo $getData['std_school'];?>" class="form-control input-md" required="">
                <span class="help-block">Please type in your School/collage name</span>
            </div>
        </div>

        <!-- Mother Name input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Mother's Name</label>

            <div class="col-md-4">
                <input type="text" name="mname"  value="<?php echo $getData['std_mname'];?>" class="form-control input-md" required="">
                <span class="help-block">Please type in your Mother's Name</span>
            </div>
        </div>

        <!-- Father Name input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Father's Name</label>

            <div class="col-md-4">
                <input type="text" name="fname"  value="<?php echo $getData['std_fname'];?>" class="form-control input-md" required="">
                <span class="help-block">Please type in your Father's Name</span>
            </div>
        </div>

        <!-- Input Photo -->
        <div class="form-group">
            <div class="col-md-4"></div>
            <div class="col-md-4">
               <img src="<?php echo $img;?>" height="80px" width="80px"/></td>



            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Photo</label>

            <div class="col-md-4">
               <input name="img" type="file" class="form-control input-md" required="">
                <span class="help-block">Please provide your photo</span>
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="button1id"></label>

            <div class="col-md-8">
                <button type="submit" name ="update" class="btn btn-success">Update</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
            </div>
        </div>
    </form>
</div>
<?php
}
    ?>

<?php include 'inc/footer.php'; ?>