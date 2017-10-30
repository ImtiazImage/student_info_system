<?php include 'inc/header.php'; ?>
<?php
if (isset($_GET['search1']))  {
    $std_name = trim(mysqli_real_escape_string($db,$_GET['std_name']));
}
?>

<div class="container">
    <div class="text-center">
        <h1 class="nice">Display Information</h1>
    </div>

<!-- Display form data -->
    <div class="form-horizontal">


<?php

$select = mysqli_query($db, "SELECT * FROM tbl_std WHERE std_name LIKE '%$std_name%'");
if ($select) {
    while ($read = mysqli_fetch_assoc($select)) {
       //removing ../ from img name
        $img_name = explode('../', $read['std_img']);
        $img = strtolower(end($img_name));
?>



<table class="table table-hober">
<tr width="40%">
    <th>Student Name</th>
    <th>Student Photo</th>
    <?php if (isset($_SESSION['username'])) {
        echo "<th> Action </th>";
    }?>
</tr>
<tr width="30%" >
    <td width="40%">            
        <p><a href="display.php?id=<?php echo $read['std_id']; ?>">Name:  <?php echo $read['std_name']; ?></a></p>

    </td>

    <td width="30%">
       <a href="display.php?id=<?php echo $read['std_id']; ?>"> <img src="<?php echo $img?>" height="80px;" width="80px;"></a>
    </td>
<?php if (isset($_SESSION['username'])) {  ?>
    <td> <button class="btn btn-link">
         <a href="update.php?id=<?php echo urlencode($read['std_id']);?>" class="btn btn-link" style="margin-top:-15px;">Update</a>
            </button>
    </td>        
<?php } ?>
</tr>

</table>

<?php
    }
}
?>

    </div>
</div>




<?php include 'inc/footer.php'; ?>



