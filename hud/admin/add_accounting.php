<?php
include_once('../db/db.php');
session_start();
$success="";
$error="";
$case_id=$_GET['case_id'];
$get_types=mysqli_query($conn,"SELECT * FROM service_type");
$get_vendors=mysqli_query($conn,"SELECT * FROM vendors");
if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $type=$_POST['type'];
    $date=$_POST['date'];
    $amount=$_POST['amount'];
    // $bill_image=$_POST['bill_image'];
    $vendor=$_POST['vendor'];
    $memo=$_POST['memo'];


    $add_accounting=mysqli_query($conn,"INSERT INTO property_accounting(`case_id`, `name`, `type`, `date`, `amount`, `memo`, `vendor_id`) VALUES('$case_id', '$name', '$type', '$date', '$amount', '$memo', '$vendor')");

    if($add_accounting){
        $get_accounting_id=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM property_accounting where case_id='$case_id' AND  name='$name' AND type='$type' AND date='$date' AND  amount='$amount' AND  memo='$memo' AND vendor_id='$vendor'"));
        $acc_id=$get_accounting_id['id'];

        foreach($_FILES["doc"]["name"] as $key=>$name) {
         
            $image_Name = uniqid().date("Y-m-d-H-i-s").$_FILES['doc']['name'][$key];
            $doc_name= $_POST['docname'][$key];
            // File path configuration
            $uploadDir = "Bill_Images/";
            $fileName = basename($_FILES['doc']['name'][$key]);
            $uploadFilePath = $uploadDir.$image_Name;
   
   
            if (move_uploaded_file($_FILES['doc']['tmp_name'][$key], $uploadFilePath)) {
               $add_doc=mysqli_query($conn,"INSERT INTO accounting_docs(account_id,doc_name, doc_url) VALUES('$acc_id','$doc_name','$uploadFilePath')");
               
            }
         }

    }

    
    if($add_accounting){
        $success= "Added Successfully";
    }else{
        $error= "error : $conn->error";
    }

}


?>
<!DOCTYPE html>
<html lang="en">
    <!--------------head----------->
    <?php include_once('includes/head.php');?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <body class="sidebar-noneoverflow">
        <!--------------topbar----------->
        <?php include_once('includes/topbar.php');?>
       
        <div class="main-container" id="container">
           
            <!--------------side bar----------->
            <?php include_once('includes/sidenav.php');?>
            <div id="content" class="main-content">

                <div class="layout-px-spacing mt-4">
                         <?php 
                            if ($success!="") {

                        ?>        
                                <div class="alert alert-success mt-4 " role="alert" id="alert">
                                    
                                    <strong>Success! </strong><?php echo $success;?>
                                </div> 
                        <?php        
                                
                                $success="";
                            }elseif ($error!="") {
                        ?>        
                                <div class="alert alert-danger mt-4" role="alert" id="alert">
                                    
                                    <strong>Error! </strong><?php echo $error;?>

                                </div> 
                        <?php  
                               
                                $error="";      
                            }
                        ?>     
                    <div class="col-lg-12 col-12 layout-spacing" >
                        <div class="statbox widget box box-shadow mb-4">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h2>Add Accounting</h2>
                                    <div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-row mb-4">
                                       
                                        <div class="form-group col-md-4">
                                            <label >Name:</label>
                                            <input type="text" class="form-control"  name="name" placeholder="Name" >
                                        </div>
                                            <div class="form-group col-md-4">
                                            <label >Type:</label>
                                            <select class="form-control" name="type" id="type">
                                                <option value="">Select Service Type</option>
                                                <?php 
                                                    while($data=mysqli_fetch_array($get_types)){
                                                ?>
                                                    <option value="<?php echo $data['id']; ?>"><?php echo $data['name']?></option>
                                                <?php            
                                                    }
                                                ?>
                                            </select>

                                            
                                        </div>
                                            <div class="form-group col-md-4">
                                            <label >Date:</label>
                                            <input type="date" class="form-control" name="date" placeholder="Enter Date" >
                                        </div>
                                            <div class="form-group col-md-4">
                                            <label >Amount:</label>
                                            <input type="text" class="form-control" id="" name="amount" placeholder="Enter Amount " >
                                        </div>
                                       
                                        <div class="form-group col-md-4">
                                            <label >Vendor:</label>
                                            <select class="form-control" name="vendor" id="vendor">
                                                <option value="">Select Vendor</option>
                                                <?php 
                                                    while($data2=mysqli_fetch_array($get_vendors)){
                                                ?>
                                                    <option value="<?php echo $data2['id']; ?>"><?php echo $data2['name']?></option>
                                                <?php            
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label >Memo:</label>
                                            <textarea class="form-control" type="text" rows="5" placeholder="Enter Memo"  name="memo" id="memo" required></textarea>
                                        </div>
                                        <div class="col-md-9"></div>
                                        <div class="form-group col-md-3 ">
                                            <button type="button" class="btn btn-dark" onclick="add_doc_row()">Add More Doc</button>
                                        </div>
                                        <div class="form-group col-md-12" id="doc_body">
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <input type="text" class="form-control" id="" name="docname[]" placeholder="Enter Document Name" >
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="file" class="form-control-file" id="" name="doc[]" placeholder="Enter Document" >
                                                </div>
                                                
                                            </div>      
                                        </div>
                                    </div>
                                    <center><button type="submit" name="submit" class="btn btn-primary mt-3">Update Accounting</button></center>
                                </form>
                            </div>
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
            }, 5000);
        </script>
        <script src="assets/js/custom.js"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src="plugins/apex/apexcharts.min.js"></script>
        <script src="assets/js/dashboard/dash_1.js"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script>
			var count=2;
			function add_doc_row(){
			    
			    var additionalhtml='<div class="form-row mt-4" id="'+count+'">'+
			                            '<div class="form-group col-md-4">'+
			                                '<input type="text" class="form-control" name="docname[]" placeholder="Enter Document Name" >'+
			                            '</div>'+
			                            '<div class="form-group col-md-4">'+
			                                '<input type="file" class="form-control-file" name="doc[]" placeholder="Enter Document" >'+
			                            '</div>'+
			                            '<div class="form-group col-md-1">'+
			                                '<button type="button" class="btn btn-danger" onclick="remove_row('+count+')"><i class="fa fa-times" style="color: white;" aria-hidden="true"></i></button>'+
			                            '</div>'+
			                        '</div>';
			
			        $("#doc_body").append(additionalhtml);
			}
			
			function remove_row(id){
			    $('#'+id).remove();
			}
			
		</script>
    </body>
</html>