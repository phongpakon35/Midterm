
<?php echo validation_errors(); ?>
<form role="form" method="post" action="<?php echo base_url('index.php/Quiz/validate');?>" >

            <div class="row">
                <center><div class="form-group col-lg-4">
                    <label>Username :</label>
                    <input type="text" class="form-control" name="usname">
                </div></center><br>
                <div class="form-group col-lg-4">
                    <center> <label>E-mail :</label>
                                
                        <input type="text" name="email"><br>
                        </div></center><br>
                    <center><button type="submit" class="btn btn-default">Submit</button></center>

                </div>
    </form>