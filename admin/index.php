 <?php
require('../database/connection.php');
if(isset($_POST["delBtn"])){
if ($_SERVER['REQUEST_METHOD'] == 'DELETE' || ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['_METHOD'] == 'DELETE')) {
    $id =$_POST['id'];
    $result = "DELETE FROM customers where cust_id='$id'";
    if ($conn->query($result)===true) {
    header("index.php");
        
    }
 }
}
include"header.php"; ?>
 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                       <div class="card mb-4">
                       </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-file"></i>
                                Applications
                              
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Contact</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Location</th>
                                                <th>Package</th>
                                                <th>Payment</th>
                                                <th>Entry Date</th>
                                                <th>Status</th>
                                                <th>Action</th>

                                               
                                            </tr>
                                        </thead>

                                        <tbody>
                                             <?php
                                          
                                            require('../database/connection.php');
                                            $sql="SELECT * FROM customers order by reg_date desc";
                                            $records = $conn->query($sql);
                                            while($values = $records->fetch_assoc()){
                                            ?> 
                                            <tr>
                                                <td><?php echo $values['company']; ?></td>
                                                <td><?php echo $values['contact_person']; ?></td>
                                                <td><?php echo $values['phone_number'];?></td>
                                                <td><?php echo $values['email'];?></td>
                                                 <td><?php echo $values['location'];?></td>
                                                 <td><?php echo $values['package'];?></td>
                                                 <td><?php echo $values['payment_method'];?></td>
                                                 <?php $date=$values['reg_date']; ?>
                                                 <td><?php echo(date("d-M-Y",$date)); ?></td>
                                                 <td><?php echo $values['status'];?></td>
                                                 
                                                 <td> 
                                               
                                                    <form method="POST" onsubmit="return confirm('Are you sure you want to delete this application?');">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a href="update-status.php?id=<?php echo $values['cust_id']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                                                        <input type="hidden" name="_METHOD" value="DELETE">
                                                        <input type="hidden" name="id" value="<?php echo $values['cust_id']; ?>">
                                                        <button type="submit" name="delBtn" class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></button>
                                                    </div>
                                                    </form>
                                                 
                                                 </td>
                                                  
                                                                                              
                                            </tr>
                                            <?php } ?>                                            
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php include"footer.php"; ?>