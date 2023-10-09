
<?php
include_once('../db/db.php');
$success="";
$error="";
$id=$_GET['id'];


if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $phone=$_POST['phone'];    
    $type=$_POST['type'];
    $memo=$_POST['memo'];
    $email=$_POST['email'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $country=$_POST['country'];

    $add_vendor=mysqli_query($conn,"UPDATE vendors SET name='$name' ,phone='$phone' ,memo='$memo' ,type='$type' ,email='$email' ,street='$street' , city='$city' , state='$state' , zip='$zip' ,country='$country' where id='$id'");

    if($add_vendor){

        foreach($_FILES["doc"]["name"] as $key=>$name) {
         
            $image_Name = uniqid().date("Y-m-d-H-i-s").$_FILES['doc']['name'][$key];
            $doc_name= $_POST['docname'][$key];
            // File path configuration
            $uploadDir = "vendor_docs/";
            $fileName = basename($_FILES['doc']['name'][$key]);
            $uploadFilePath = $uploadDir.$image_Name;
   
            if (move_uploaded_file($_FILES['doc']['tmp_name'][$key], $uploadFilePath)) {
               $add_doc=mysqli_query($conn,"INSERT INTO vendor_docs(vendor_id,doc_name, doc_url) VALUES('$id','$doc_name','$uploadFilePath')");
               
            }
         }
         if($add_vendor){
            $success="Vendor added Successfully";
         }else{
             $error= $conn->error;
         } 
    }
    
}
$get_vendor=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM vendors where id='$id'"));

    $get_vendor_docs=mysqli_query($conn,"SELECT * FROM vendor_docs where vendor_id='$id'");
    
    $get_types=mysqli_query($conn,"SELECT * FROM service_type");

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
                                                <h2>Edit Vendor</h2>
                                            </div>                                                                        
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">
                                        <form action="" method="POST" enctype="multipart/form-data">

                                            <div class="form-row mb-4">
                                                <div class="form-group col-md-4">
                                                    <label for="">Name:</label>
                                                    <input class="form-control" type="text" name="name" id="name" placeholder="Enter Name" value="<?php echo $get_vendor['name']?>"  required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">Email:</label>
                                                    <input class="form-control" type="email" name="email" id="email" placeholder="Enter Email" value="<?php echo $get_vendor['email']?>" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">Phone:</label>
                                                    <input class="form-control" type="text" value="<?php echo $get_vendor['phone']?>" name="phone" id="phone" placeholder="Enter Phone" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">Vendor Type:</label>
                                                    <select class="form-control" name="type" id="type">
                                                        <option value="">Select Vendor Type</option>
                                                        <?php
														while($data=mysqli_fetch_array($get_types)){
                                                            if($data['id']==$get_vendor['type']){

                                                           
														?>
													        <option selected value="<?php echo $data['id']?>"><?php echo $data['name']?></option>
													<?php 
                                                             }else{
                                                                
                                                    ?>  
                                                            <option value="<?php echo $data['id']?>"><?php echo $data['name']?></option>
                                                    <?php            
                                                             }           
														}
														?>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="">Street:</label>
                                                    <input class="form-control" type="text" name="street" value="<?php echo $get_vendor['street']?>" id="street" placeholder="Enter Street" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">City:</label>
                                                    <input class="form-control" type="text" name="city" id="city" value="<?php echo $get_vendor['city']?>" placeholder="Enter City" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">State:</label>
                                                    <input class="form-control" type="text" name="state" value="<?php echo $get_vendor['state']?>" id="state" placeholder="Enter State" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">Zip:</label>
                                                    <input class="form-control" type="text" name="zip" value="<?php echo $get_vendor['zip']?>" id="zip" placeholder="Enter Zip" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">Country:</label>
                                                    <input class="form-control" type="text" name="country" value="<?php echo $get_vendor['country']?>" id="country" placeholder="Enter Country" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="">Memo:</label>
                                                    <textarea class="form-control" type="text" rows="5" placeholder="Enter Memo"  name="memo" id="memo" required><?php echo $get_vendor['memo']?></textarea>
                                                </div>
                                                <div class="col-md-9"></div>
                                                <div class="form-group col-md-3 ">
                                                    <button type="button" class="btn btn-dark" onclick="add_doc_row()">Add More Doc</button>
                                                </div>
                                                <div class="form-group col-md-12" id="doc_body">
                                                    <?php
                                                        while($data2=mysqli_fetch_array($get_vendor_docs)){
                                                    ?>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <input type="text" class="form-control" id="" value="<?php echo $data2['doc_name']?>" name="docname[]" placeholder="Enter Document Name" >
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <input type="file" class="form-control-file" id="" value="<?php echo $data2['doc_url']?>" name="doc[]" placeholder="Enter Document" >
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                        <a href="delete_document.php?id=<?php echo $data2['id'];?>&table=vendor_docs&page=edit_vendor.php?id=<?php echo $id?>"  class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-times" style="color: white;" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div> 
                                                    <?php
                                                        }
                                                    ?>     
                                                </div>
                                            

                                            </div>
                                       
                                            <center><button type="submit" class="btn btn-primary mt-4" name="submit"> Update Vendor </button></center>
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
        <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
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
			setTimeout(()=> {
                $('#alert').hide('slow')
            }, 5000);
		</script> 
    </body>
</html>