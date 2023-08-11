<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/index.css" rel="stylesheet" />
    <title>Home</title>
</head>
<body>
    <div class="container mt-5">
        <br /> <br />
        <div class="row mt-5">
            <div class="col-lg-7">
                <img src="images/logo.svg" width="250px" style="margin-left:-27px;" />
                <h3>Facebook helps you connect and share with the people in your life.</h3>
            </div>
            <div class="col-lg-5">
                <?php include('error.php'); ?>
                
                <div class="card">
                    <div class="card-header">
                        Register Here
                    </div>
                    <div class="card-body">
                        <form action="actions/register.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full Name" name="fname" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Your Email Or  Username" name="email" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Confrim Email" name="cemail" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Enter Your Password" name="password" />
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                Male <input type="radio" name="gender" value="m" />
                                Female <input type="radio" name="gender" value="f" />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>