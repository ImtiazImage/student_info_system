<?php include 'inc/header.php'; ?>


<div class="container">
    <div class="text-center">
        <h1 class="nice">Update Registration Form</h1>
    </div>
    <form class="form-horizontal" method="post" action="#" enctype="multipart/form-data">
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Name</label>

            <div class="col-md-4">
                <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="">
                <span class="help-block">Please type in your full name</span>
            </div>
        </div>

        <!-- Select Date Of Birth-->
        <div class="row">
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Month</label>

                <div class="col-md-1">
                    <select id="selectbasic" name="selectbasic" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>


                <label class="col-md-1 control-label" for="selectbasic">Day</label>

                <div class="col-md-1">
                    <select id="selectbasic" name="selectbasic" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                </div>
                <label class="col-md-1 control-label" for="selectbasic">Year</label>

                <div class="col-md-2">
                    <select id="selectbasic" name="selectbasic" class="form-control">
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                    </select>
                    <span class="help-block">In A.D.</span>
                </div>
            </div>
        </div>
        <!-- Gender Input -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="checkboxes">Gender</label>

            <div class="col-md-4">
                <div class="checkbox">
                    <label>
                        <input name="genderboxes" id="genderboxes-0" value="1" type="radio">
                        Male
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input name="genderboxes" id="genderboxes-1" value="2" type="radio">
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
                <input id="email" name="email" type="email" placeholder="Email"
                       class="form-control input-md" required="">
                <span class="help-block">Please type in your email</span>
            </div>
        </div>
        <!-- Weight input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Weight</label>

            <div class="col-md-4">
                <input id="weight" name="weight" type="number" placeholder="Weight"
                       class="form-control input-md" required="">
                <span class="help-block">In Kg</span>
            </div>
        </div>
        <!-- Paddress input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Permanent Address</label>

            <div class="col-md-4">
                <input id="paddress" name="paddress" type="text" placeholder="Address" class="form-control input-md"
                       required="">
                <span class="help-block">Please type in your Permanent Address</span>
            </div>
        </div>
        <!-- Taddress input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Temporary Address</label>

            <div class="col-md-4">
                <input id="taddress" name="taddress" type="text" placeholder="Address" class="form-control input-md"
                       required="">
                <span class="help-block">Please type in your Temporary Address</span>
            </div>
        </div>
        <!-- Phone input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Phone</label>

            <div class="col-md-4">
                <input id="phone" name="phone" type="number" placeholder="Phone number"
                       class="form-control input-md" required="">
                <span class="help-block">Please provide your Mobile Number</span>
            </div>
        </div>
        <!-- School input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">School/Collage</label>

            <div class="col-md-4">
                <input id="school" name="school" type="text" placeholder="Name" class="form-control input-md"
                       required="">
                <span class="help-block">Please type in your School/collage name</span>
            </div>
        </div>
        <!-- School Address input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">School/Collage Address</label>

            <div class="col-md-4">
                <input id="aschool" name="aschool" type="text" placeholder="Address" class="form-control input-md"
                       required="">
                <span class="help-block">Please type in your School/collage Address</span>
            </div>
        </div>
        <!-- Mother Name input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Mother's Name</label>

            <div class="col-md-4">
                <input id="mname" name="mname" type="text" placeholder="Name" class="form-control input-md"
                       required="">
                <span class="help-block">Please type in your Mother's Name</span>
            </div>
        </div>
        <!-- Mother Phone input-->
        <div class="form-group">
            <label class="col-md-4 control-label">Mother's Phone</label>

            <div class="col-md-4">
                <input id="mphone" name="mphone" type="number" placeholder="Phone number"
                       class="form-control input-md" required="">
                <span class="help-block">Please provide your Mother's Mobile Number</span>
            </div>
        </div>


        <!-- Father Name input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Father's Name</label>

            <div class="col-md-4">
                <input id="fname" name="fname" type="text" placeholder="Name" class="form-control input-md"
                       required="">
                <span class="help-block">Please type in your Father's Name</span>
            </div>
        </div>
        <!-- Father Phone input-->
        <div class="form-group">
            <label class="col-md-4 control-label">Father's Phone</label>

            <div class="col-md-4">
                <input id="fphone" name="fphone" type="number" placeholder="Phone number"
                       class="form-control input-md" required="">
                <span class="help-block">Please provide your Father's Mobile Number</span>
            </div>
        </div>


        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="button1id"></label>

            <div class="col-md-8">
                <button type="submit" class="btn btn-success">Save</button>
                <a id="cancel" name="cancel" class="btn btn-danger" href="#">
                    Cancel</a>
            </div>
        </div>
    </form>
</div>




<?php include 'inc/footer.php'; ?>