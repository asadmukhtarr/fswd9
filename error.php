<?php 
    if(!empty($_GET['murad'])){
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo $_GET['murad']; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>  
<?php
    }
?>
<?php 
    if(!empty($_GET['msg'])){
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo $_GET['msg']; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>  
<?php
    }
?>