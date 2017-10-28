<?php include 'inc/header.php'; ?>
<?php
if (!isset($_GET['search']) || $_GET['search'] == NULL) {
	echo "Please enter keywords";
} else {
	$std_name = trim(mysqli_real_escape_string($_GET['name']));
	$std_email= trim(mysqli_real_escape_string(strtolower($_GET['email'])));

	$query = mysqli_connect($db,)
}

?>

<div class="container" style="margin-top: 5%;">
    <div class="col-md-6 col-md-offset-3">

        <!-- Search Form -->
        <form role="form-group" action="" method="GET">
        
        <!-- Search Field -->
            <div class="row">

            	<?php if(isset($_SESSION['username'])){ ?>
            	<h1 class="alert alert-success">Welcome Admin!!!</h1>
            	<?php } ?>

                <h1 class="text-center">Student Information System</h1>

				<!-- form group [search] -->
			    <div class="form-group">
			        <label class="filter-col" style="margin-right:0;" >Name:</label>
			        <input type="text" name="name" class="form-control">
			    </div>

			    <div class="form-group">
			        <label class="filter-col" style="margin-right:0;">E-mail:</label>
			        <input type="text" name="email" class="form-control">
			    </div><!-- form group [search] -->


			    <div class="form-group">    
			        <button type="submit" name="search"class="btn btn-default filter-col">
			            <span class="glyphicon glyphicon-search"></span> Search
			        </button>  
			    </div>
            </div>
            
        </form>
        <!-- End of Search Form -->
            
    </div>
</div>

<?php include 'inc/footer.php'; ?>