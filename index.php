<?php include 'inc/header.php'; ?>

<div class="container" style="margin-top: 5%;">
    <div class="col-md-6 col-md-offset-3">

        <!-- Search Form -->
        <form role="form-group">
        
        <!-- Search Field -->
            <div class="row">
                <h1 class="text-center">Student Information System</h1>
				
			    <div class="form-group">
			        <label class="filter-col" style="margin-right:0;" >name:</label>
			        <input type="text" class="form-control">
			    </div><!-- form group [search] -->

			    <div class="form-group">
			        <label class="filter-col" style="margin-right:0;">batch:</label>
			        <input type="text" class="form-control">
			    </div><!-- form group [search] -->

				<div class="form-group">
			        <label class="filter-col" style="margin-right:0;">Depertment:</label>
			        <select class="form-control">
			            <option value="cse">CSE</option>
			            <option value="eee">EEE</option>
			            <option value="civil">CIVIL</option>
			            <option value="architecture">ARCHITECTURE</option>
			            <option value="5">LAW</option>
			        </select>                                
			    </div> <!-- form group [rows] -->

			    <div class="form-group">    
			        <button type="submit" class="btn btn-default filter-col">
			            <span class="glyphicon glyphicon-search"></span> Search
			        </button>  
			    </div>
            </div>
            
        </form>
        <!-- End of Search Form -->
            
    </div>
</div>

<?php include 'inc/footer.php'; ?>