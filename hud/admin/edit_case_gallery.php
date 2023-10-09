
<?php
include_once('../db/db.php');
$case_id=$_GET['caseid'];
$get_docs=mysqli_query($conn,"SELECT * FROM case_images where case_id='$case_id'");
?>

<!DOCTYPE html>
<html lang="en">
    <!--------------head----------->
    <?php include_once('includes/head.php');?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
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
                         
                            <div class="col-lg-12 col-12 layout-spacing" >
                                <div class="statbox widget box box-shadow mb-4">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h2>Upload Gallery</h2>
                                            </div>                                                                        
                                        </div>
                                    </div>
                                    <!-- <div class="widget-content widget-content-area"> -->

                                   
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
                                                        while ($data2=mysqli_fetch_array($get_docs)) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $count ?></td>
                                                        
                                                        <td>
                                                            <a href="<?php echo 'Case_Gallery/'.$data2['image_url']?>"><?php echo $data2['image_url']?></a>
                                                        </td>
                                                        <td>
                                                            <a href="deleteGroup.php?id=<?php echo $data2['id'];?>&table=case_images&page=edit_case_gallery.php?caseid=<?php echo $data2['case_id']?>" onclick="return confirm('Are you sure?')"><i class="far fa-times-circle" style="color: red; font-size: 20px;" aria-hidden="true"></i></a>
                                                        </td>
                                                        
                                                    </tr>
                                                   
                                                    <?php
                                                        $count++;        
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12 mt-5">
                                            <h2>Add New Gallery</h2>
                                            <form action="upload_edit_case_images.php?id=<?php echo $case_id?> " enctype="multipart/form-data" class="dropzone" id="dropzonewidget">
                           
                                            </form> 
                                            <center><a href="update_case_docs.php?id=<?php echo $case_id?>" class="btn btn-primary mt-4" id="submit-all"> Update Documents </a></center>
                                        </div>
                                        

                                    <!-- </div> -->
                                        
                                    </div>
                                </div>
                            </div>
                       
                </div>
                
                
                <!--------------footer----------->
               
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        <script>
        Dropzone.autoDiscover = false;
         
         $(function() {
             var myDropzone = new Dropzone(".dropzone", {
                 url: "upload_edit_case_images.php?case_id=<?php echo $case_id?>",
                 paramName: "file",
                 maxFilesize: 100,
                 maxFiles: 20,
             });
         });
    </script> 
    </body>
</html>