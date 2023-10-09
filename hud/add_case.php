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
                                                
                                                <div class="form-group col-md-4">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Property-Case ID" required>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <input type="url" class="form-control" id="email" name="url" placeholder="Enter Street Address" >
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <input type="number" class="form-control" id="" name="employee" placeholder="Enter City" >
                                                </div>
                                                 <div class="form-group col-md-4">
                                                    <input type="number" class="form-control" id="" name="employee" placeholder="Enter State" >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="number" class="form-control" id="" name="employee" placeholder="Enter ZIP" >
                                                </div>
                                                     <div class="form-group col-md-4">
                                                    <input type="number" class="form-control" id="" name="employee" placeholder="Enter Country" >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="number" class="form-control" id="" name="employee" placeholder="Enter County" >
                                                </div>

                                       
                                                
                                              
                                                <hr>

                                               <div class="form-group col-md-12 mt-4">
                                                    <h5>Personal Details:</h5>
                                                </div>


                                                <div class="form-group col-md-8">
                                                    <input type="text" class="form-control"  name="address" placeholder="Street Address" >
                                                </div>
                                                 <div class="form-group col-md-4">
                                                    <input type="text" class="form-control"  name="city" placeholder="Enter City" >
                                                </div>
                                                 <div class="form-group col-md-4">
                                                    <input type="text" class="form-control" name="state" placeholder="Enter State" >
                                                </div>
                                                 <div class="form-group col-md-4">
                                                    <input type="text" class="form-control" id="" name="zip" placeholder="ZIP " >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="text" class="form-control" id="" name="country" placeholder="Country" >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="email" class="form-control" id="" name="email" placeholder="Enter email" required>
                                                </div>
                                                 <div class="form-group col-md-4">
                                                    <input type="phone" class="form-control" id="" name="phone" placeholder="Enter Phone " required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="number" class="form-control" id="" name="average" placeholder="Review Average" >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="number" class="form-control" id="" name="count" placeholder="Enter Review Count" >
                                                </div>
                                                 <div class="form-group col-md-4">
                                                    <input type="number" class="form-control" id="" name="score" placeholder="Enter Credit Score " >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="number" class="form-control" id="" name="revenue" placeholder="Annual Revenue" >
                                                </div>
                                                 <div class="form-group col-md-4">
                                                    <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Enter Latitude "  readonly>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Enter Longitude"  readonly>
                                                </div>
                                                


                                            </div>
                                       
                                            <center><button type="submit" name="submit" class="btn btn-primary mt-3">Add Company</button></center>
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
    </body>
</html>