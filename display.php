<?php include 'inc/header.php'; ?>


<div class="container">
    <div class="text-center">
        <h1 class="nice">Display Information</h1>
    </div>

<!-- Display form data -->
    <div class="form-horizontal">


<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
?>

<table style="margin-left:80px;"width="100%">
<?php
         $select = mysqli_query($db,"SELECT * FROM tbl_std WHERE std_id=$id");
          if ($select) {
              while ($read = mysqli_fetch_assoc($select)) {
          //removing ../ from img name
             $img_name = explode('../', $read['std_img']);
             $img = strtolower(end($img_name));
?>
<tr >
    <td >            
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Name</label>

            <div class="col-md-4">
                <?php echo $read['std_name'];?>
            </div>
        </div>
    </td>

    <td width="20%" rowspan="2">
        <!-- Select image -->
        <div class="row">
            <div class="form-group">
                <img src="<?php echo $img;?>" height="80px" width="80px"/>
            </div>
        </div>
    </td>
</tr>
<tr>
    <td >
        <!-- Select Date Of Birth-->
        <div class="row">
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Date of Birth</label>

                <div class="col-md-7">
                  <?php echo $read['std_dob'];?>
             </div>
            </div>
        </div>
    </td>


</tr>
</table>

        <!-- Gender Input -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="checkboxes">Gender</label>

            <div class="col-md-4">
                <?php echo $read['std_gender'];?>
            </div>
        </div>

        <!-- Email input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Email</label>

            <div class="col-md-4">
                <?php echo $read['std_email'];?>
 
            </div>
        </div>


        <!-- Paddress input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Address</label>

            <div class="col-md-4">
                <?php echo $read['std_address'];?>
            </div>
        </div>

        <!-- Phone input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Phone</label>

            <div class="col-md-4">
               <?php echo $read['std_phone'];?>
            </div>
        </div>
        <!-- School input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">School/Collage</label>

            <div class="col-md-4">
                <?php echo $read['std_school'];?>
            </div>
        </div>

        <!-- Mother Name input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Mother's Name</label>

            <div class="col-md-4">
               <?php echo $read['std_mname'];?>
            </div>
        </div>

        <!-- Father Name input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Father's Name</label>

            <div class="col-md-4">
                <?php echo $read['std_fname'];?>
            </div>
        </div>
<?php
     }
 }

//}
?>
    </div>
</div>




<?php include 'inc/footer.php'; ?>