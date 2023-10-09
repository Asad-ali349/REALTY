<?php
   include_once("../db/db.php");
   $success="";
   $error="";
   
   $id=$_GET['id'];
   
   $data=mysqli_fetch_array(mysqli_query($conn,"Select property_accounting.*,service_type.name as service,vendors.name as vendor from property_accounting INNER JOIN service_type ON service_type.id=property_accounting.type INNER JOIN vendors ON vendors.id=property_accounting.vendor_id where property_accounting.id='$id'"));
   

   $get_acc_docs=mysqli_query($conn,"SELECT * FROM accounting_docs where account_id='$id'");
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <?php include_once("includes/head.php")?>
   <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
   <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
   <link href="assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
   <link href="plugins/animate/animate.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="plugins/font-icons/fontawesome/css/regular.css">
   <link rel="stylesheet" href="plugins/font-icons/fontawesome/css/fontawesome.css">
   <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
   <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
   <link href="assets/css/components/cards/card.css" rel="stylesheet" type="text/css" />
   <link href="assetsss/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
   <link rel="stylesheet" type="text/css" href="plugins/table/datatable/custom_dt_html5.css">
   <link rel="stylesheet" type="text/css" href="plugins/table/datatable/dt-global_style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <body>   
      <!-- BEGIN LOADER -->
      <div id="load_screen">
         <div class="loader">
            <div class="loader-content">
               <div class="spinner-grow align-self-center"></div>
            </div>
         </div>
      </div>
      <!--  END LOADER -->
      <?php include_once("includes/topbar.php");?>
      <!--  BEGIN MAIN CONTAINER  -->
      <div class="main-container" id="container">
         <?php include_once("includes/sidenav.php");?>
         <!--  BEGIN CONTENT PART content -->
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
               <div class="col-lg-12 col-12  mt-3 mb-4">
                  <div class="statbox widget box box-shadow mb-4">
                     <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-10 col-md-10 col-sm-12 col-12">
                              <h4 class="card-user_name"><?php echo $data['name']; ?></h4>
                           </div>
                           <div class="col-xl-2 col-md-2 col-sm-4 col-12">
                              <a href="edit_account.php?id=<?php echo $data['id'];?>" class="btn btn-danger"><i class="far fa-edit" style=" font-size: 18px;margin-right: 5px" aria-hidden="true"></i>Update</a>
                           </div>
                        </div>
                     </div>
                     <div class="widget-content">
                        <div style="text-align: left;">
                           <div>
                                <span style="color:black"><b>Service Type:</b></span>
                                <span><?php echo $data['service'];?></span>          
                           </div>
                           <div>
                                <span style="color:black"><b>Vendor:</b></span>
                                <span><?php echo $data['vendor']; ?></span>       
                           </div>
                           <div>
                                <span style="color:black"><b>Amount:</b></span>
                                <span><?php echo "$".$data['amount']; ?></span>     
                           </div>
                           <div>
                                <span style="color:black"><b>Date:</b></span>
                                <span><?php echo $data['date']; ?></span>     
                           </div>
                           <div class="mt-4">
                               <span style="color:black" >Description:</span>
                               <span><?php echo $data['memo']; ?></span>     
                           </div>
                       </div>
                     </div>
                  </div>
               </div>
               
               <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing mb-5">
                  <div class="widget-content-area br-6 mt-2">
                     <div class="widget-header ml-4 mt-2">
                        <div class="row">
                           <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                              <h3>Docs details</h3>
                           </div>
                        </div>
                     </div>
                     <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th class="dt-no-sorting">Doc type</th>
                              <th class="dt-no-sorting">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php  
                              $count=1;
                              while ($data2=mysqli_fetch_array($get_acc_docs)) {
                              ?>
                           <tr>
                              <td><?php echo $count ?></td>
                              <td> <?php echo $data2['doc_name']; ?>
                              </td>
                              
                              <td>
                                    <a href="<?php echo $data2['doc_url'];?>" target="blank"><?php echo $data2['doc_url'];?></a>
                                </td>
                                
                              <td>
                                 <a href="delete_document.php?id=<?php echo $data2['id'];?>&table=accounting_docs&page=account_detail_page.php?id=<?php echo $id?>" onclick="return confirm('Are you sure?')"><i class="far fa-times-circle" style="color: red; font-size: 20px;" aria-hidden="true"></i></a>
                               
                                 
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
            <?php include_once 'includes/footer.php'; ?>
         </div>
         <!--  END CONTENT PART  -->
      </div>
      <!-- END MAIN CONTAINER -->
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
      <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
      <script src="plugins/font-icons/feather/feather.min.js"></script>
      <script >
         feather.replace();
         
         
      </script>
      <script src="plugins/highlight/highlight.pack.js"></script>
      <script src="assets/js/custom.js"></script>
      <script src="assets/js/scrollspyNav.js"></script>
      <script src="assetsss/plugins/dropzone/dist/dropzone.js"></script>
      <script src="plugins/table/datatable/datatables.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
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
                 url: "upload.php?id=<?php echo $id?>&is_company=0",
                 paramName: "file",
                 maxFilesize: 5,
                 maxFiles: 20,
             });
         });

         
      </script>
      <script>
           $('.select2').change(function(e){
            
               var doc_type= e.target.value;
               var file_id = e.target.getAttribute('data-file_id');
              
               $.get('update_doc_type_ajax.php?file_id='+file_id+'&doc_type='+doc_type).done(function(data){
                     console.log(data)
               })
            });
           setTimeout(()=> {
            $('#alert').hide('slow')
        }, 5000)
      </script>
      <script>
        $('#html7-extension').DataTable( {
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