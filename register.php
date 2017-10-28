<?php include 'inc/header.php'; ?>


<div class="container">
    <div class="text-center">
        <h1 class="nice">Registration Form</h1>
    </div>
    <form class="form-horizontal" method="post" action="process/register.php" enctype="multipart/form-data">
    
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Name</label>

            <div class="col-md-4">
                <input  type="text" name="name"  placeholder="Name" class="form-control input-md" required="">
                <span class="help-block">Please type in your full name</span>
            </div>
        </div>

        <!-- Select Date Of Birth-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="birthDate" >Date of Birth</label>
            <div class="col-md-4">
                <input type="text" name="dob" class="form-control" placeholder="dd/mm/yyyy">
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
                <input  type="email" name="email"  placeholder="Email"
                       class="form-control input-md" required="">
                <span class="help-block">Please type in your email</span>
            </div>
        </div>

        <!-- Paddress input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Address</label>

            <div class="col-md-4">
                <input  type="text" name="address"  placeholder="Address" class="form-control input-md"
                       required="">
                <span class="help-block">Please type in your  Address</span>
            </div>
        </div>

        <!-- Phone input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Phone</label>

            <div class="col-md-4">
                <input type="text" name="phone"  placeholder="Phone number"
                       class="form-control input-md" required="">
                <span class="help-block">Please provide your Mobile Number</span>
            </div>
        </div>

        <!-- School input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">School/Collage</label>

            <div class="col-md-4">
                <input type="text" name="school"  placeholder="Name" class="form-control input-md"
                       required="">
                <span class="help-block">Please type in your School/collage name</span>
            </div>
        </div>

        <!-- Mother Name input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Mother's Name</label>

            <div class="col-md-4">
                <input type="text" name="mname"  placeholder="Name" class="form-control input-md"
                       required="">
                <span class="help-block">Please type in your Mother's Name</span>
            </div>
        </div>

        <!-- Father Name input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Father's Name</label>

            <div class="col-md-4">
                <input type="text" name="fname"  placeholder="Name" class="form-control input-md"
                       required="">
                <span class="help-block">Please type in your Father's Name</span>
            </div>
        </div>

        <!-- Input Photo -->
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
                <button type="submit" name ="register" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-danger">
                    Cancel</a>
            </div>
        </div>
    </form>
</div>




<?php include 'inc/footer.php'; ?>