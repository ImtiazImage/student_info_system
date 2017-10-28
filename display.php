<?php include 'inc/header.php'; ?>


<div class="container">
    <div class="text-center">
        <h1 class="nice">Display Information</h1>
    </div>

<!-- Display form data -->
    <div class="form-horizontal">


<table style="margin-left:80px;"width="100%">
<tr >
    <td >            
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Name</label>

            <div class="col-md-4">
                    ..........
            </div>
        </div>
    </td>

    <td width="20%" rowspan="2">
        <!-- Select image -->
        <div class="row">
            <div class="form-group">
                <img src="<?php echo $result['image'];?>" height="40px" width="50px"/>
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
                   ........
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
                .........
            </div>
        </div>

        <!-- Email input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Email</label>

            <div class="col-md-4">
                ........
 
            </div>
        </div>


        <!-- Paddress input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Address</label>

            <div class="col-md-4">
                ........
            </div>
        </div>

        <!-- Phone input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Phone</label>

            <div class="col-md-4">
                .....
            </div>
        </div>
        <!-- School input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">School/Collage</label>

            <div class="col-md-4">
                .......
            </div>
        </div>

        <!-- Mother Name input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Mother's Name</label>

            <div class="col-md-4">
               .......
            </div>
        </div>

        <!-- Father Name input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Father's Name</label>

            <div class="col-md-4">
                .......
            </div>
        </div>

    </div>
</div>




<?php include 'inc/footer.php'; ?>



