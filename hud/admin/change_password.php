<?php 

include_once("../db/db.php"); 
session_start();
$user_id=$_SESSION['user_id'];
$success="";
$error="";

    if(isset($_POST['submit'])){
      
        $oldpassword = $_POST['oldpassword'];
        $newpassword = $_POST['newpassword'];

        $check = "SELECT password FROM user WHERE id = '$user_id'";
        $result = mysqli_query($conn,$check);
        if($result->num_rows > 0 ){
            $data = $result->fetch_array();
            if($oldpassword == $data['password']){
                $sql=mysqli_query($conn,"UPDATE user SET password='$newpassword' WHERE id='$user_id'");
                if ($sql==true) {
                    echo "Password Changed";
                }else{
                   echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            else{
              echo "Old Password is incorrect"; 
            }
        }    

      
 
    }

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
                                                <h2>Add New Propert-Case</h2>
                                            </div>                                                                        
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">
                                        <form action="" method="POST">
                                           
                                            <div class="form-row mb-4">
                                                
                                                <div class="form-group col-md-8">
                                                    <input type="text" class="form-control" id="oldpassword" name="oldpassword" placeholder="Old Password" required>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <input type="text" class="form-control" id="password" name="password" placeholder="New Password" >
                                                    
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <input type="text" class="form-control" id="confirm_password" name="newpassword" placeholder="Confirm Password" >
                                                    <span id='message'></span>
                                                </div>

                                            </div>
                                       
                                            <button type="submit" name="submit" class="btn btn-primary mt-3">Update Password</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                       
                </div>
                
                
                <!--------------footer----------->
                <div id="content" class="main-content">
                    <?php include_once('includes/footer.php');?>
                </div>

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
        <script>
            
            $('#confirm_password').on('keyup', function () {
            if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('Matching').css('color', 'green');
            } else 
                $('#message').html('Not Matching').css('color', 'red');
            });
        </script>
    </body>
</html>