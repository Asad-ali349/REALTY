<!DOCTYPE html>
<html lang="en">
   <!--------------head----------->
   <?php
      require_once 'includes/db.php';
      include_once('includes/head.php');
      $case_number=$_GET['case_id'];
      $property=mysqli_query($conn,"SELECT * from property_case where case_id='$case_number'");
      $case_data=mysqli_fetch_assoc($property);
      
      $get_accounting=mysqli_query($conn,"Select property_accounting.*,service_type.name as service,vendors.name as vendor from property_accounting INNER JOIN service_type ON service_type.id=property_accounting.type INNER JOIN vendors ON vendors.id=property_accounting.vendor_id where property_accounting.case_id='$case_number'");
      
      
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
            <div class="layout-px-spacing">
               <div class="col-lg-12  layout-spacing">
                  <div class="statbox widget box box-shadow " style="">
                     <div class="widget-content widget-content-area">
                        
                        <h4 class="">Case-Number: <?php echo $case_number;?> </h4>
                        <p><b>Eligible bidders:</b> <span ><?php echo $case_data['eligible_bidders'];?></span></p>
                        <p><b>Bid Submission Deadline:</b> <span ><?php echo $case_data['bid_submission_dealine'];?></span></p>
                        
                        <div id="tabsIcons" class="col-lg-12 col-12 layout-spacing mt-4">
                           <div class="statbox widget box box-shadow">
                              <div class="widget-header">
                                 <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                       <h4>Property case details</h4>
                                    </div>
                                 </div>
                              </div>
                              <div class="widget-content widget-content-area icon-tab">
                                 <ul class="nav nav-tabs  mb-3 mt-3" id="iconTab" role="tablist">
                                    <li class="nav-item">
                                       <a class="nav-link active" id="icon-home-tab" data-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true">
                                         
                                          Property Info
                                       </a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link " id="icon-amin-tab" data-toggle="tab" href="#icon-amin" role="tab" aria-controls="icon-amin" aria-selected="false">
                                         
                                          Amenities 
                                       </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                       <a class="nav-link" id="icon-ad-tab" data-toggle="tab" href="#icon-ad" role="tab" aria-controls="icon-ad" aria-selected="false">
                                         
                                          Addendums
                                       </a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link " id="icon-agent-tab" data-toggle="tab" href="#icon-agent" role="tab" aria-controls="icon-agent" aria-selected="false">
                                          Agent Info
                                       </a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link " id="icon-acc-tab" data-toggle="tab" href="#icon-acc" role="tab" aria-controls="icon-acc" aria-selected="false">
                                          Account Info
                                       </a>
                                    </li>
                                    
                                 </ul>
                                 <div class="tab-content" id="iconTabContent-1">
                                    <div class="tab-pane fade show active" id="icon-home" role="tabpanel" aria-labelledby="icon-home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>Property INFO:</h4>

                                                    <p><b>Address:</b> <span ><?php echo $case_data['address'];?></span></p>
                                                    <p><b>Bed/Bath:</b> <span ><?php echo $case_data['bed']."/".$case_data['bath'];?></span></p>
                                                    <p><b>Total Rooms:</b> <span ><?php echo $case_data['rooms'];?></span></p>
                                                    <p><b>Square Feet:</b> <span ><?php echo $case_data['square_feet'];?></span></p>
                                                    <p><b>Year:</b> <span ><?php echo $case_data['year'];?></span></p>
                                                    <p><b>Housing Type:</b> <span ><?php echo $case_data['house_type'];?></span></p>
                                                    <p><b>Number of stories:</b> <span ><?php echo $case_data['number_of_stories'];?></span></p>
                                                    <p><b>HOA Fees:</b> <span ><?php echo $case_data['hoa_fees'];?></span></p>
                                                    <p><b>Revitalization Area:	</b> <span ><?php echo $case_data['revitalization_area'];?></span></p>
                                                    <p><b>Opportunity Zone:</b> <span ><?php echo $case_data['opportunity_zone'];?></span></p>
                                                    <p><b>FEMA Flood Zone:</b> <span ><?php echo $case_data['fema_flood_zone'];?></span></p>
                                                    <p><b>Lot Size:</b> <span ><?php echo $case_data['lot_size'];?></span></p>
                                            </div>
                                            <div class="col-md-6">
                                                <h4>Listing INFO:</h4>
                                                <p><b>List Date:</b> <span ><?php echo $case_data['list_date'];?></span></p>
                                                <p><b>Listing Period:</b> <span ><?php echo $case_data['listing_period'];?></span></p>
                                                <p><b>Period Deadline:	</b> <span ><?php echo $case_data['period_deadline'];?></span></p>
                                                <p><b>List Price:</b> <span ><?php echo $case_data['list_price'];?></span></p>
                                                <p><b>FHA Financing:</b> <span ><?php echo $case_data['fha_financing'];?></span></p>
                                                <p><b>203K Eligible:</b> <span ><?php echo $case_data['k_eligible'];?></span></p>
                                            </div>
                                            <div class="col-ms-12">
                                            <div class="row">
                                            <div class="col-lg-12 layout-spacing layout-top-spacing">
                                                <div class="statbox widget box box-shadow">
                                                    <div class="widget-header">
                                                        <div class="row">
                                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                <h4>Gallery</h4> 
                                                            </div>          
                                                        </div>
                                                    </div>
                                                    <div class="widget-content widget-content-area">

                                                        <div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="1">

                                                            <?php
                                                                $case_image_query=mysqli_query($conn,"SELECt * from case_images where case_id='$case_number'");
                                                                while ($case_images=mysqli_fetch_assoc($case_image_query)) {
                                                            
                                                            
                                                            ?>

                                                            <a class="img-6" href="<?php echo $case_images['image_url'];?>" data-size="1600x1067" data-med="<?php echo $case_images['image_url'];?>" data-med-size="1024x683" data-author="Thomas Lefebvre">
                                                                <img src="<?php echo $case_images['image_url'];?>" alt="image-gallery">
                                                               
                                                            </a>
                                                            <?php
                                                               }
                                                            ?>
                                                        </div>
                                                        
                                                        

                                                        <!-- Root element of PhotoSwipe. Must have class pswp. -->
                                                        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                                                            <!-- Background of PhotoSwipe. It's a separate element, as animating opacity is faster than rgba(). -->
                                                            <div class="pswp__bg"></div>

                                                            <!-- Slides wrapper with overflow:hidden. -->
                                                            <div class="pswp__scroll-wrap">
                                                                <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                                                                <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                                                                <div class="pswp__container">
                                                                    <div class="pswp__item"></div>
                                                                    <div class="pswp__item"></div>
                                                                    <div class="pswp__item"></div>
                                                                </div>

                                                                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                                                                <div class="pswp__ui pswp__ui--hidden">

                                                                    <div class="pswp__top-bar">

                                                                        <!--  Controls are self-explanatory. Order can be changed. -->
                                                                        <div class="pswp__counter"></div>
                                                                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                                                        <button class="pswp__button pswp__button--share" title="Share"></button>
                                                                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                                                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                                                        <!-- element will get class pswp__preloader--active when preloader is running -->
                                                                        <div class="pswp__preloader">
                                                                            <div class="pswp__preloader__icn">
                                                                            <div class="pswp__preloader__cut">
                                                                                <div class="pswp__preloader__donut"></div>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                                                        <div class="pswp__share-tooltip"></div> 
                                                                    </div>
                                                                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                                                    </button>
                                                                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                                                    </button>
                                                                    <div class="pswp__caption">
                                                                        <div class="pswp__caption__center"></div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade " id="icon-amin" role="tabpanel" aria-labelledby="icon-amin-tab">
                                        
                                            <div class="col-md-6">
                                           
                                                <p><b>Parking:</b> <span ><?php echo $case_data['parking'];?></span></p>
                                                <p><b>Foundation Type:</b> <span ><?php echo $case_data['foundation_type'];?></span></p>
                                               
                                           
                                            </div>

                                    </div>


                                    <div class="tab-pane fade" id="icon-ad" role="tabpanel" aria-labelledby="icon-ad-tab">
                                      
                                        <table id="style-3" class="table style-3  table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="checkbox-column text-center"> # </th>
                                                    <th class="text-center">Doc Name</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  
                                                    $count=0;
                                                    $case_doc_query=mysqli_query($conn,"select * from case_docs where case_id='$case_number'");
                                                    while ($case_doc=mysqli_fetch_assoc($case_doc_query)) {
                                                        $count++;
                                                ?>
                                                <tr>
                                                    <td class="checkbox-column text-center"> <?php echo $count; ?> </td>
                                                    <td class="text-center">
                                                        <a href="<?php echo $case_doc['doc_url'] ?>" target="blank"><?php echo $case_doc['doc_name'];?></a>
                                                    </td>
                                                    
                                                </tr>
                                                <?php        
                                                    }

                                                ?>
                                                
                                            </tbody>
                                        </table>
                                    
                                    </div>


                                    <div class="tab-pane fade" id="icon-agent" role="tabpanel" aria-labelledby="icon-agent-tab">
                                      
                                        <div class="row">
                                                <div class="col-md-6">
                                                    <h4>Asset Manager:</h4>

                                                        <p><b>Company Name::</b> <span ><?php echo $case_data['asset_company_name'];?></span></p>
                                                        <p><b>Contact Name:</b> <span ><?php echo $case_data['asset_contact_name']."/".$case_data['bath'];?></span></p>
                                                        <p><b>Address:</b> <span ><?php echo $case_data['asset_address'];?></span></p>
                                                        <p><b>Phone Number:</b> <span ><?php echo $case_data['asset_phone_number'];?></span></p>
                                                        <p><b>Fax Number:</b> <span ><?php echo $case_data['asset_fax'];?></span></p>
                                                        <p><b>Email:</b> <span ><?php echo $case_data['asset_email'];?></span></p>
                                                        <p><b>Website:</b> <span ><?php echo $case_data['asset_website'];?></span></p>
                                                        <p><b>Additional Comments:</b> <span ><?php echo $case_data['asset_additional_comments'];?></span></p>
                                                        
                                                        <hr>
                                                        <h4>Field Service Manager:</h4>

                                                        <p><b>Company Name::</b> <span ><?php echo $case_data['field_company_name'];?></span></p>
                                                        <p><b>Contact Name:</b> <span ><?php echo $case_data['field_contact_name']."/".$case_data['bath'];?></span></p>
                                                        <p><b>Address:</b> <span ><?php echo $case_data['field_address'];?></span></p>
                                                        <p><b>Phone Number:</b> <span ><?php echo $case_data['field_phone_number'];?></span></p>
                                                        <p><b>Fax Number:</b> <span ><?php echo $case_data['field_fax_number'];?></span></p>
                                                        <p><b>Email:</b> <span ><?php echo $case_data['field_email'];?></span></p>
                                                        <p><b>Website:</b> <span ><?php echo $case_data['field_website'];?></span></p>
                                                        <p><b>Additional Comments:</b> <span ><?php echo $case_data['field_comments'];?></span></p>

                                                </div>
                                                <div class="col-md-6">
                                                    <h4>Listing Broker:</h4>
                                                        <p><b>Company Name::</b> <span ><?php echo $case_data['listing_company_name'];?></span></p>
                                                        <p><b>Contact Name:</b> <span ><?php echo $case_data['listing_contact_name']."/".$case_data['bath'];?></span></p>
                                                        <p><b>Address:</b> <span ><?php echo $case_data['listing_address'];?></span></p>
                                                        <p><b>Phone Number:</b> <span ><?php echo $case_data['listing_phone_number'];?></span></p>
                                                        <p><b>Fax Number:</b> <span ><?php echo $case_data['listing_fax'];?></span></p>
                                                        <p><b>Email:</b> <span ><?php echo $case_data['listing_email'];?></span></p>
                                                        
                                                </div>
                                            </div>

                                        </div>
                                    
                                    </div>

         


                                    <div class="tab-pane fade" id="icon-gal" role="tabpanel" aria-labelledby="icon-gal-tab">
                                      
                                        
                                    </div>
                                
                              </div>
                           </div>
                        </div>


                     </div>
                  </div>
               </div>
               <div class="col-xl-12 col-lg-12 col-sm-12  ">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header ml-4 mt-2">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h3>Account Record</h3>
                                    </div>                                                                        
                                </div>
                            </div>
                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th class="dt-no-sorting">Type</th>
                                        <th class="dt-no-sorting">Vendor</th>
                                        <th class="dt-no-sorting">Amount</th>
                                        <th class="dt-no-sorting">Action</th>
                                        
                                    </tr>


                                </thead>
                                <tbody>
                                    <?php  
                                        $count=1;
                                        while ($data2=mysqli_fetch_array($get_accounting)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $count ?></td>
                                        <td><?php echo $data2['name']; ?></td>
                                        <td>
                                            <?php echo $data2['service']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data2['vendor']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data2['amount']; ?>
                                        </td>
                                        
                                        <td>
                                        <a href="account_detail_page.php?id=<?php echo $data2['id']?>"><i class="far fa-list-alt" style="color: green; font-size: 18px;margin-right: 10px" aria-hidden="true"></i></a>
                                            <a href="edit_account.php?id=<?php echo $data2['id'];?>"><i class="far fa-edit" style="color: blue; font-size: 18px;margin-right: 5px" aria-hidden="true"></i></a>
                                            <a href="delete_accounting.php?id=<?php echo $data2['id'];?>&case_id=<?php echo $data2['case_id'];?>" onclick="return confirm('Are you sure?')"><i class="far fa-times-circle" style="color: red; font-size: 20px;" aria-hidden="true"></i></a>
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


    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="plugins/lightbox/photoswipe.min.js"></script>
    <script src="plugins/lightbox/photoswipe-ui-default.min.js"></script>
    <script src="plugins/lightbox/custom-photswipe.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->



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
      </script>
   </body>
</html>