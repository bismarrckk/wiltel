<?php
session_start();
if(!isset($_SESSION["data"])){
    header("Location: ../login.php?unauthorized");
}
if(isset($_GET["id"])){
$id=$_GET["id"];
$_SESSION["user_id"]=$id;
  }
require('../database/connection.php');
$sql="SELECT * FROM users where user_id = $id";
$records = $conn->query($sql);

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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Change Status</h3></div>
                                    <div class="card-body">
                                        <?php while($values = $records->fetch_assoc()){?>
                                        <form action="../process_data.php" method="POST">
                                             <div class="form-row">
                                                <div class="col-md-12">
                                           
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Full Name</label>
                                                        <input class="form-control py-4" name="fullname" type="text" value="<?php echo $values['full_name'] ;?>" readonly/>
                                                    </div>
                                                </div>
                                                                                              
                                                
                                                </div>
                                                <div class="form-row">
                                                <div class="col-md-12">
                                                   <label class="small mb-1">Role</label>
                                                    <select name="role"  class="form-control" required>

                                                      <option value="admin">Admin</option>
                                                      <option value="user">User</option>
                                                      <option value="<?php echo $values['role'] ;?>" selected="selected" ><?php echo $values['role'] ;?></option>
                                                        
                                                    </select>
                                                </div>
                                                
                                            </div>
                                        
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                   <label class="small mb-1">Status</label>
                                                    <select name="status"  class="form-control" required>

                                                      <option value="suspended">Suspend</option>
                                                      <option value="active">Activate</option>
                                                      <option value="<?php echo $values['status'] ;?>" selected="selected" ><?php echo $values['status'] ;?></option>
                                                        
                                                    </select>
                                                </div>
                                                
                                            </div>
                                           <br>
                                            <div align="center">
                                           <button type="submit"  class="btn btn-primary mb-2" name="update_user_details">Update</button>
                                           <a href="index.php" class="btn btn-primary mb-2" ><i class="fa fa-backward"></i> Back</a>
                                        </div>
                                        </form>
                                    <?php }?>
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
