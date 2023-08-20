<?php 
    include('includes/header.php'); 
    $id = $_GET['id'];
    include('actions/cn.php'); // connection ..
    $query = "SELECT * FROM `users` WHERE id='$id'";
    $result = mysqli_query($cn,$query) or die('Cant run query');
    $row = mysqli_fetch_array($result);
?>
<div class="container mt-5">
    <div class="col-lg-5">
    <?php include('error.php'); ?>     
        <div class="card">
            <div class="card-header">
                Edit Here
            </div>
            <div class="card-body">
                <form action="actions/update.php?id=<?php echo $row['id']; ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?php echo $row['fname']; ?>" placeholder="Full Name" name="fname" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="<?php echo $row['email']; ?>" placeholder="Enter Your Email Or  Username" name="email" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" value="<?php echo $row['password']; ?>" placeholder="Enter Your Password" name="password" />
                    </div>
                    <div class="form-group">
                        <label>Gender</label>

                        Male <input type="radio" name="gender" value="m" <?php if($row['gender'] == "m") { echo 'checked'; } ?> />
                        Female <input type="radio" name="gender" value="f" <?php if($row['gender'] == "f") { echo 'checked'; } ?> />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-lg btn-block">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>