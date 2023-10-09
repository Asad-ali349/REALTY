<?php 
include_once('../db/db.php');

$get_vendors=mysqli_query($conn,"SELECT * FROM vendors");
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
}

?>
<!DOCTYPE html>
<html lang="en">
    <!--------------head----------->
    <?php include_once('includes/head.php');?>
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/custom_dt_html5.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/dt-global_style.css">
    <body class="sidebar-noneoverflow">
        <!--------------topbar----------->
        <?php include_once('includes/topbar.php');?>
       
        <div class="main-container" id="container">
           
            <!--------------side bar----------->
            <?php include_once('includes/sidenav.php');?>
                

            <div id="content" class="main-content">

                <div class="layout-px-spacing mt-4">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing mb-4">
                        <div class="widget-content widget-content-area br-6 mt-2">
                            <div class="widget-header ml-4 mt-2">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h3>Vendors Record</h3>
                                    </div>                                                                        
                                </div>
                            </div>
                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th class="dt-no-sorting">Email</th>
                                        <th class="dt-no-sorting">Phone</th>
                                        <th class="dt-no-sorting">Address</th>
                                        <th class="dt-no-sorting">Action</th>
                                        
                                    </tr>


                                </thead>
                                <tbody>
                                    <?php  
                                        $count=1;
                                        while ($data2=mysqli_fetch_array($get_vendors)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $count ?></td>
                                        <td><?php echo $data2['name']; ?></td>
                                        <td>
                                            <?php echo $data2['email']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data2['phone']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data2['street'].''.$data2['city'].','.$data2['state'].','.$data2['zip'].','.$data2['country']; ?>
                                        </td>
                                        
                                        <td>
                                            <a href="vendor_detail_page.php?id=<?php echo $data2['id'];?>"><i class="far fa-list-alt" style="color: green; font-size: 18px;margin-right: 10px" aria-hidden="true"></i></a>
                                            <a href="edit_vendor.php?id=<?php echo $data2['id'];?>"><i class="far fa-edit" style="color: blue; font-size: 18px;margin-right: 5px" aria-hidden="true"></i></a>
                                            <a href="delete_vendor.php?id=<?php echo $data2['id'];?>" onclick="return confirm('Are you sure?')"><i class="far fa-times-circle" style="color: red; font-size: 20px;" aria-hidden="true"></i></a>
                                        </td>
                                        
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
        </script>
        <script src="assets/js/custom.js"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src="plugins/apex/apexcharts.min.js"></script>
        <script src="assets/js/dashboard/dash_1.js"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src="plugins/table/datatable/datatables.js"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="plugins/table/datatable/button-ext/jszip.min.js"></script>    
    <script src="plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="plugins/table/datatable/button-ext/buttons.print.min.js"></script>
    <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'csv', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 20
        } );
    </script>
    </body>
</html>