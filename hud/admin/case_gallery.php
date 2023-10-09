
<?php
$case_id=$_GET['caseid'];

?>

<!DOCTYPE html>
<html lang="en">
    <!--------------head----------->
    <?php include_once('includes/head.php');?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
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
                                                <h2>Add Gallery</h2>
                                            </div>                                                                        
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">
                                        <form action="" method="POST">
                                           
                                            <div class="form-row mb-4">
                                                <div class="col-md-12">
                                                    <div class="dropzone mt-4" id="myDropzone" name="docs" ></div>
                                                </div>
                                            

                                            </div>
                                       
                                            <center><button type="submit" class="btn btn-primary mt-4" id="submit-all"> Add Documents </button></center>
                                        </form>
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
       
        <script>
        Dropzone.options.myDropzone= {
            url: 'upload_gallery_docs.php',
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 50,
            maxFiles: 50,
            maxFilesize: 20,
            acceptedFiles: 'image/*',
            addRemoveLinks: true,
            success: function(file, response){
                Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: "Request Sent",
                showConfirmButton: false,
                timer: 1500,
                width:420
                })

                setTimeout(()=> {
                    window.location.href="add_case_docs.php?id="+response;
                }, 1500)
                    
            },
            init: function() {
                dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

                // for Dropzone to process the queue (instead of default form behavior):
                document.getElementById("submit-all").addEventListener("click", function(e) {
                    // Make sure that the form isn't actually being sent.
                    e.preventDefault();
                    e.stopPropagation();
                    dzClosure.processQueue();
                });

                //send all the form data along with the files:
                this.on("sendingmultiple", function(data, xhr, formData) {
                    formData.append("case_id", <?php echo $case_id?>);
                });
            }
        }
    </script> 
    </body>
</html>