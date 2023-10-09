<!DOCTYPE html>
<html lang="en">
    <!--------------head----------->
    <?php
        require_once 'includes/db.php';
        include_once('includes/head.php');

        $property=mysqli_query($conn,"SELECT * from property_case");
        




    ?>
        <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
        <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
    <body class="sidebar-noneoverflow">
        <!--------------topbar----------->
        <?php include_once('includes/topbar.php');?>
       
        <div class="main-container" id="container">
           
            <!--------------side bar----------->
            <?php include_once('includes/sidenav.php');?>
            <div id="content" class="main-content">
                <div class="row layout-spacing">
                        <div class="col-lg-12 m-2">
                           
                           
                            <div class="statbox widget box box-shadow mt-4 ml-2" style="margin-right:15px">
                                <div class="widget-content widget-content-area">
                                <h4 class="">Property-case Records</h4>

                                    <table id="style-3" class="table style-3  table-hover">
                                        <thead>
                                            <tr>
                                                <th class="checkbox-column text-center"> # </th>
                                                <th class="text-center">Image</th>
                                                <th>Property case</th>
                                                <th>Address</th>
                                                <th>Price</th>
                                                <th>Bid Open Date</th>
                                                <th class="text-center">Bed</th>
                                                <th class="text-center">Bath</th>

                                                <th class="text-center dt-no-sorting">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php  
                                                $count=0;
                                                while ($property_data=mysqli_fetch_assoc($property)) {
                                                    $count++;
                                            ?>
                                            <tr>
                                                <td class="checkbox-column text-center"> <?php echo $count; ?> </td>
                                                <td class="text-center">
                                                    <span><img src="<?php echo $property_data['primary_image']; ?>" class="profile-img" alt="avatar" style="width:100px; height:100px"></span>
                                                </td>
                                                <td><?php echo $property_data['case_id']; ?></td>
                                                <td><?php echo $property_data['address']." ".$property_data['city']."".$property_data['state']."".$property_data['zip']; ?></td>
                                                <td><?php echo $property_data['price']; ?></td>
                                                <td><?php echo $property_data['bid_open_date']; ?></td>
                                                <td><?php echo $property_data['bed']; ?></td>


                                                <td><?php echo $property_data['bath']; ?></td>
                                                <td class="text-center">
                                                    <ul class="table-controls">
                                                        <a href="history_detail.php?case_id=<?php echo $property_data['case_id']; ?>" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="view" ><li class="far fa-list-alt"></li></a>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <?php        
                                                }

                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
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
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="plugins/table/datatable/datatables.js"></script>
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
          c3 = $('#style-3').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5
        });

        multiCheck(c3);
    </script>
        </script>
    </body>
</html>