<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
</head>
<body>
    <form role="form" method="post" action="<?php echo base_url('index.php/Receiveform/received');?>" enctype="multipart/form-data">
            <div class="row">
                <center><div class="form-group col-lg-4"><br><br><br><br>
                    <label>Name</label>
                    <input type="text" class="form-control" name="name"> <br><br>
                     <label>E-mail</label>
                    <input type="text" class="form-control" name="e-mail"><br><br>
                     <label>Username</label>
                    <input type="text" class="form-control" name="username"><br><br>
                     <label>Password</label>
                    <input type="text" class="form-control" name="password"><br><br>
                     <label>Repassword</label>
                    <input type="text" class="form-control" name="repassword"><br>
                </div></center><br>
                
                    <center><button type="submit" class="btn btn-default">Submit</button></center>
                </div>
    </form>
                    

</body>
</html>