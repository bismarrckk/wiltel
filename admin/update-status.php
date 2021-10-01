<?php
session_start();
if(!isset($_SESSION["data"])){
    header("Location: ../login.php?unauthorized");
}
if(isset($_GET["id"])){
$id=$_GET["id"];
$_SESSION["cust_id"]=$id;
  }
require('../database/connection.php');
$sql="SELECT * FROM customers where cust_id = $id";
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
                                             
                                           
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Company</label>
                                                        <input class="form-control py-4"  type="text" value="<?php echo $values['company'] ;?>" readonly/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Contact Person</label>
                                                        <input class="form-control py-4"  type="text" value="<?php echo $values['contact_person'] ;?>" readonly/>
                                                    </div>
                                            
                                                 
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Location</label>
                                                        <input class="form-control py-4" name="fullname" type="text" value="<?php echo $values['location'] ;?>" readonly/>
                                                    </div>
                                               
                                        
                                                    <div class="form-group">
                                                       <label class="small mb-1">Status</label>
                                                        <select name="status"  class="form-control" required>

                                                          <option value="seen">Seen</option>
                                                          <option value="complete">Complete</option>
                                                          <option value="<?php echo $values['status'] ;?>" selected="selected" ><?php echo $values['status'] ;?></option>
                                                        </select>
                                                    </div>
                                            
                                           <br>
                                            <div align="center">
                                           <button type="submit"  class="btn btn-primary mb-2" name="update_cust_details">Update</button>
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
