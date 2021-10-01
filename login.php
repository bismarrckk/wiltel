<!DOCTYPE html>
<html>
<head>
	<title>wiltel</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<style >
	body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 30%;
  max-width: 100%;
  height: 100%;
  border: 1px solid #9C9C9C;
  background-color: #fff;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>
<body>
    <div id="login" >
        
        <div class="container" >
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">

                    <div id="login-box" class="col-md-12">
                    		<?php if(isset($_GET['incorrect'])){?>
						    <div class="alert alert-danger" style="margin-top: 2%;width:100%;text-align: center;">
						        Incorrect username/password
						    </div>
						    <?php } ?>
                            <?php if(isset($_GET['successful'])){?>
                            <div class="alert alert-success" style="margin-top: 2%;width:100%;text-align: center;">
                                Your password has been updated!!
                            </div>
                            <?php } ?>
                        <form id="login-form" class="form" action="checklogin.php" method="Post">
                        	<div class="container" align="center">
                            <img src="assets/images/logo.png" id="icon" alt="Logo"  style="width:25%;padding-top: " />
                        	</div>
                            <div class="form-group">
                                <label  class="text-info">Phone Number:</label><br>
                                <input type="text" name="phone"  class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required="">
                            </div>
                            <div class="form-group" >
                               
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                                <br>
                               
                            </div>
                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>