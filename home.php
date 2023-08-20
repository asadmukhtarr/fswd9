<?php 
    include('includes/header.php'); // header .. 
    include('actions/cn.php'); // for connection ..
    $query = "SELECT * FROM `users` ORDER BY `id` DESC";
    $result = mysqli_query($cn,$query) or die('cant run query');
?>
<div class="container mt-5">
    <?php include('error.php'); ?>
    <div class="card">
        <div class="card-header">
            Welcome <?php echo $_SESSION['user']; ?>
        </div>
        <div class="card-body">
           <table class="table table-bordered table-hovered">
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Full Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Gender
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
                <?php while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success"><i class="fa fa-edit"></i></button></a>
                        <button class="btn btn-danger" onclick="del(this.value)" value="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                <?php } ?>
           </table>
        </div>
    </div>
</div>
<script>
    function del(c){
        if(confirm("Are you sure? You want to delete") == true){
            // redirect location ..
            var b = "actions/delete.php?id="+c;
           window.location.href = b;
        }
    }
</script>
<?php include('includes/footer.php'); // footer .. ?>
