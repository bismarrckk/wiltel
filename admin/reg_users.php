<?php
session_start();
if(!isset($_SESSION["data"])){
    header("Location: ../login.php?unauthorized");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>WILTEL</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body >
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create New User</h3></div>
                                    <div class="card-body">
                                        <?php if(isset($_GET['mismatch'])){?>
                                        <div class="alert alert-danger" style="text-align:left">
                                            Error! Passwords do not match,Please try again.
                                        </div>
                                        <?php } ?>
                                        <form action="../process_data.php" method="POST">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">First Name</label>
                                                        <input class="form-control py-4" name="firstname" type="text" placeholder="Enter first name" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                                        <input class="form-control py-4" name="lastname" type="text" placeholder="Enter last name" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                               
                                                <div class="col-md-12">
                                                    <label class="small mb-1">Phone Number </label>
                                                     <input class="form-control py-4" name="phone" type="text" placeholder="Enter phone number" required />
                                                   
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">New Password</label>
                                                        <input class="form-control py-4" name="password" type="password" placeholder="Enter password" required/>
                                                    </div>
                                                
                                               
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input class="form-control py-4" name="password2" type="password" placeholder="Confirm password" required/>
                                                    </div>
                                            <div align="center">
                                           <button type="submit" class="btn btn-primary mb-2" name="save_user_details">Submit</button>
                                            <a href="users.php" class="btn btn-primary mb-2" ><i class="fa fa-backward"></i> Back</i></a>
                                        </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; ibizz.co.ke</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
