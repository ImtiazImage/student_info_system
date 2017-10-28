<?php include 'inc/header.php'; ?>

<div class="container" style="margin-top: 5%;">
    <div class="col-md-6 col-md-offset-3">

        <!-- Search Form -->
        <form role="form-group">
        
        <!-- Search Field -->
            <div class="row">

            	<?php if(isset($_SESSION['username'])){ ?>
            	<h1 class="alert alert-success">Welcome Admin!!!</h1>
            	<?php } ?>

                <h1 class="text-center">Student Information System</h1>

				<!-- form group [search] -->
			    <div class="form-group">
			        <label class="filter-col" style="margin-right:0;" >name:</label>
			        <input type="text" name="name" class="form-control">
			    </div>

			    <div class="form-group">
			        <label class="filter-col" style="margin-right:0;">batch:</label>
			        <input type="text" name="batch" class="form-control">
			    </div><!-- form group [search] -->

				<div class="form-group">
			        <label class="filter-col" style="margin-right:0;">Depertment:</label>
			        <select name="dept" class="form-control">
			            <option value="cse">CSE</option>
			            <option value="eee">EEE</option>
			            <option value="civil">CIVIL</option>
			            <option value="architecture">ARCHITECTURE</option>
			            <option value="5">LAW</option>
			        </select>                                
			    </div> <!-- form group [rows] -->

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