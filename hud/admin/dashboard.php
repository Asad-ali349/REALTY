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