<?php
include_once('../db/db.php');
session_start();
$user_id=$_SESSION['user_id'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $country=$_POST['country'];

    $update_profile=mysqli_query($conn,"UPDATE user set name ='$name', email='$email',contact='$contact',street='$street',city='$city',state='$state',zip='$zip',country='$country' where id='$user_id'");
    if($update_profile){
        echo "Updated";
    }else{
        echo "error : $conn->error";
    }

}



$get_user=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM user where id='$user_id'"));




?>
<!DOCTYPE html>
<html lang="en">
    <!--------------head----------->
    <?php include_once('includes/head.php');?>
    <body class="sidebar-noneoverflow">
        <!--------------topbar----------->
        <?php include_once('includes/topbar.php');?>
       
        <div class="main-container" id="container">
           
            <!--------------side bar----------->
            <?php include_once('includes/sidenav.php');?>
            <div id="content" class="main-content">

                <div class="layout-px-spacing mt-4">     
                    <div class="col-lg-12 col-12 layout-spacing" >
                        <div class="statbox widget box box-shadow mb-4">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h2>Profile</h2>
                                    <div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form action="" method="POST">
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-12 mt-4">
                                            <h5>Personal Details:</h5>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label >Full Name:</label>
                                            <input type="text" class="form-control"  name="name" placeholder="Full Name" value="<?php echo $get_user['name']?>" >
                                        </div>
                                            <div class="form-group col-md-4">
                                            <label >Email:</label>
                                            <input type="email" class="form-control"  name="email" placeholder="Enter Email" value="<?php echo $get_user['email']?>">
                                        </div>
                                            <div class="form-group col-md-4">
                                            <label >Contact No:</label>
                                            <input type="text" class="form-control" name="contact" placeholder="Enter Contact" value="<?php echo $get_user['contact']?>">
                                        </div>
                                            <div class="form-group col-md-8">
                                            <label >Street:</label>
                                            <input type="text" class="form-control" id="" name="street" placeholder="Street " value="<?php echo $get_user['street']?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label >City:</label>
                                            <input type="text" class="form-control" id="" name="city" placeholder="City" value="<?php echo $get_user['city']?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label >State:</label>
                                            <input type="text" class="form-control" id="" name="state" placeholder="State" required value="<?php echo $get_user['state']?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label >Zip:</label>
                                            <input type="text" class="form-control" id="" name="zip" placeholder="Enter Zip " value="<?php echo $get_user['zip']?>" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label >Country:</label>
                                            <input type="text" class="form-control" id="" name="country" placeholder="Country" value="<?php echo $get_user['country']?>">
                                        </div>

                                    </div>
                                
                                    <center><button type="submit" name="submit" class="btn btn-primary mt-3">Update Profile</button></center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include_once('includes/footer.php');?>

             </div>
        </div>

      


                <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>
        <script src="assets/js/custom.js"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src="plugins/apex/apexcharts.min.js"></script>
        <script src="assets/js/dashboard/dash_1.js"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    </body>
</html>