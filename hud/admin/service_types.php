<?php
include_once('../db/db.php');

$success="";
$error="";
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    
        $addGroup=mysqli_query($conn,"INSERT INTO service_type(name) VALUES('$name')");
        
        if($addGroup==TRUE) {

             $success="Service Added";
        }else{
           $error="Error: " . $sql . "<br>" . $conn->error;
        }
     
}

if (isset($_POST['up_submit'])) {
    $up_name=$_POST['up_name'];
    $service_id=$_POST['sid'];
        $addGroup=mysqli_query($conn,"UPDATE service_type SET name='$up_name' where id='$service_id'");
        
        if($addGroup==TRUE) {

             $success="Service Updated";
        }else{
           $error="Error: " . $sql . "<br>" . $conn->error;
        }
     
}

$get_types=mysqli_query($conn,"SELECT * FROM service_type");
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
            
            <!--------------footer----------->
            <div id="content" class="main-content">
            <div class="layout-px-spacing mt-4">
                        <?php 
                            if ($success!="") {

                        ?>        
                                <div class="alert alert-success mb-4 " role="alert" id="alert">
                                    
                                    <strong>Success! </strong><?php echo $success;?>
                                </div> 
                        <?php        
                                $_SESSION['success']="";
                                $success="";
                            }elseif ($error!="") {
                        ?>        
                                <div class="alert alert-danger mb-4" role="alert" id="alert">
                                    
                                    <strong>Error! </strong><?php echo $error;?>

                                </div> 
                        <?php  
                                $_SESSION['error']="";
                                $error="";      
                            }
                        ?>
                        <div class="col-lg-12 col-12 layout-spacing" >
                            
                            <div class="statbox widget box box-shadow mb-4">
                                <div class="widget-header">
                                    <div class="row mb-2">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h3>Add Service Type</h3>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area" style="border: none;">
                                    <form action="" method="POST">
                                       
                                        <div class="form-row mb-4">
                                            
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                                            </div>

                                            
                                            <div class="form-group col-md-2">
                                                <button type="submit" name="submit" class="btn btn-primary" style="height: 45px">Add Type</button>
                                            </div>
                                            
                                             <hr>


                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing mb-4">
                        <div class="widget-content widget-content-area br-6 mt-2">
                            <div class="widget-header ml-4 mt-2">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h3>Service Type</h3>
                                    </div>                                                                        
                                </div>
                            </div>
                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th class="dt-no-sorting">Action</th>
                                        
                                    </tr>


                                </thead>
                                <tbody>
                                    <?php  
                                        $count=1;
                                        while ($data=mysqli_fetch_array($get_types)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $count ?></td>
                                        <td><?php echo $data['name']; ?> </td>
                                        <td>
                                            
                                             <a data-toggle="modal" data-target="#modal<?php echo $count; ?>"><i class="far fa-edit" style="color: blue; font-size: 18px;margin-right: 5px" aria-hidden="true"></i></a>
                                            <a href="deleteGroup.php?id=<?php echo $data['id'];?>&table=service_type&page=service_types.php" onclick="return confirm('Are you sure?')"><i class="far fa-times-circle" style="color: red; font-size: 20px;" aria-hidden="true"></i></a>

                                        </td>
                                        <div class="modal md" id="modal<?php echo $count; ?>" tabindex="-1" role="dialog">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title"><?php echo "Update Service Type" ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>

                                              <form action="" method="POST">
                                              <div class="modal-body">
                                                    <input type="text" class="form-control"  name="sid"  value="<?php echo $data['id']; ?>" id="id<?php echo $data['id'];?>" style="display: none;">
                                                    <label>Name:</label>
                                                    <input type="text" class="form-control" name="up_name"  value="<?php echo $data['name']; ?>" id="name<?php echo $data['id'];?>">
                                              </div>
                                              <div class="modal-footer">
                                                    <button class="btn btn-primary" name="up_submit" type="submit">Update</button>
                                              </div>
                                              </form>
                                            </div>
                                          </div>
                                    </div>
                                    </tr>
                                    <?php
                                         $count++;        
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
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
            setTimeout(()=> {
            $('#alert').hide('slow')
        }, 5000)
        </script>
        <script src="assets/js/custom.js"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src="plugins/apex/apexcharts.min.js"></script>
        <script src="assets/js/dashboard/dash_1.js"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    </body>
</html>