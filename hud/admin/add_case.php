<?php
	include_once("../db/db.php");

    $success="";
    $error="";
    if(isset($_POST['submit'])){
        $caseid=$_POST['caseid'];
        $street_address=$_POST['street_address'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $zip=$_POST['zip'];
        $country=$_POST['country'];
        $price=$_POST['price'];
        $bed=$_POST['bed'];
        $bath=$_POST['bath'];
        $bid_open_date=$_POST['bid_open_date'];
        $eligible_bidders=$_POST['eligible_bidders'];
        $bid_submission_deadline=$_POST['bid_submission_deadline'];
        $room=$_POST['room'];
        $square_feet=$_POST['square_feet'];
        $years=$_POST['years'];
        $house_type=$_POST['house_type'];
        $no_of_stories=$_POST['no_of_stories'];
        $hoa_fee=$_POST['hoa_fee'];
        $revitalization_area=$_POST['revitalization_area'];
        $opportunity_zone=$_POST['opportunity_zone'];
        $fema_flood_zone=$_POST['fema_flood_zone'];
        $lot_size=$_POST['lot_size'];
        $primary_image=$_FILES['primary_image'];
        $listing_date=$_POST['listing_date'];
        $listing_period=$_POST['listing_period'];
        $period_deadline=$_POST['period_deadline'];
        $list_price=$_POST['list_price'];
        $fha=$_POST['fha'];
        $k_eligible=$_POST['k_eligible'];
        $parking=$_POST['parking'];
        $foundation_type=$_POST['foundation_type'];
        $asset_company_name=$_POST['asset_company_name'];
        $asset_address=$_POST['asset_address'];
        $asset_contact_name=$_POST['asset_contact_name'];
        $asset_phone=$_POST['asset_phone'];
        $asset_fax=$_POST['asset_fax'];
        $asset_email=$_POST['asset_email'];
        $asset_website=$_POST['asset_website'];
        $asset_comments=$_POST['asset_comments'];
        $field_company=$_POST['field_company'];
        $field_contact=$_POST['field_contact'];
        $field_address=$_POST['field_address'];
        $field_number=$_POST['field_number'];
        $field_fax=$_POST['field_fax'];
        $field_email=$_POST['field_email'];
        $field_website=$_POST['field_website'];
        $field_comments=$_POST['field_comments'];
        $listing_name=$_POST['listing_name'];
        $listing_contact=$_POST['listing_contact'];
        $listing_address=$_POST['listing_address'];
        $listing_number=$_POST['listing_number'];
        $listing_fax=$_POST['listing_fax'];
        $listing_email=$_POST['listing_email'];

        $filename = date("Y-m-d-H-i-s").$_FILES["primary_image"]["name"]; 
        $tempname = $_FILES["primary_image"]["tmp_name"];     
        $folder = "PrimaryImages/".$filename;
        $allowed = array('gif', 'png', 'jpg','jpeg');
        $ext = pathinfo($filename, PATHINFO_EXTENSION);


        $already_exist=mysqli_query($conn,"SELECT * FROM property_case WHERE case_id='$caseid'");
        if(mysqli_num_rows($already_exist)>0){
            $error="Case Id Already Exist";
        }else{
            if (in_array($ext, $allowed)) {
                
                if (move_uploaded_file($tempname, $folder)) {
                    $add_case=mysqli_query($conn,"INSERT INTO property_case(case_id,address, city, state, zip, county, price, bed, bath, bid_open_date, eligible_bidders, bid_submission_dealine, rooms, square_feet,year, house_type, number_of_stories, hoa_fees, revitalization_area, opportunity_zone, fema_flood_zone, lot_size, primary_image, list_date, listing_period, period_deadline, list_price, fha_financing, k_eligible, parking, foundation_type, asset_company_name, asset_address, asset_contact_name, asset_phone_number, asset_fax, asset_email, asset_website, asset_additional_comments, field_company_name, field_contact_name, field_address, field_phone_number, field_fax_number, field_email, field_website, field_comments, listing_company_name, listing_contact_name, listing_address, listing_phone_number, listing_fax, listing_email) VALUES('$caseid','$street_address','$city','$state','$zip','$country','$price','$bed','$bath','$bid_open_date','$eligible_bidders','$bid_submission_deadline','$room','$square_feet','$years','$house_type','$no_of_stories','$hoa_fee','$revitalization_area','$opportunity_zone','$fema_flood_zone','$lot_size','$folder','$listing_date','$listing_period','$period_deadline','$list_price','$fha','$k_eligible','$parking','$foundation_type','$asset_company_name','$asset_address','$asset_contact_name','$asset_phone','$asset_fax','$asset_email','$asset_website','$asset_comments','$field_company','$field_contact','$field_address','$field_number','$field_fax','$field_email','$field_website','$field_comments','$listing_name','$listing_contact','$listing_address','$listing_number','$listing_fax','$listing_email')");
                }
            }else{
                $add_case=mysqli_query($conn,"INSERT INTO property_case(case_id,address, city, state, zip, county, price, bed, bath, bid_open_date, eligible_bidders, bid_submission_dealine, rooms, square_feet,year, house_type, number_of_stories, hoa_fees, revitalization_area, opportunity_zone, fema_flood_zone, lot_size, list_date, listing_period, period_deadline, list_price, fha_financing, k_eligible, parking, foundation_type, asset_company_name, asset_address, asset_contact_name, asset_phone_number, asset_fax, asset_email, asset_website, asset_additional_comments, field_company_name, field_contact_name, field_address, field_phone_number, field_fax_number, field_email, field_website, field_comments, listing_company_name, listing_contact_name, listing_address, listing_phone_number, listing_fax, listing_email) VALUES('$caseid','$street_address','$city','$state','$zip','$country','$price','$bed','$bath','$bid_open_date','$eligible_bidders','$bid_submission_deadline','$room','$square_feet','$years','$house_type','$no_of_stories','$hoa_fee','$revitalization_area','$opportunity_zone','$fema_flood_zone','$lot_size','$listing_date','$listing_period','$period_deadline','$list_price','$fha','$k_eligible','$parking','$foundation_type','$asset_company_name','$asset_address','$asset_contact_name','$asset_phone','$asset_fax','$asset_email','$asset_website','$asset_comments','$field_company','$field_contact','$field_address','$field_number','$field_fax','$field_email','$field_website','$field_comments','$listing_name','$listing_contact','$listing_address','$listing_number','$listing_fax','$listing_email')");
            }

            if($add_case){
                $success= "added";
                header("Location: case_gallery.php?caseid=".$caseid);
            }else{
                $error =$conn->error;
            }
        }
        


    }
	
	
	$get_states=mysqli_query($conn,"Select * from property_state");
	
	?>
<!DOCTYPE html>
<html lang="en">
	<!--------------head----------->
	<?php include_once('includes/head.php');?>
	<link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="plugins/font-icons/fontawesome/css/fontawesome.css">
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
									<h2>Add New Propert-Case</h2>
									<div>                                                                  
									</div>
								</div>
								<div class="widget-content widget-content-area">
									<form action="" method="POST" enctype="multipart/form-data">
										<div class="form-row mb-4">
											<div class="form-group col-md-12">
												<h6>Property Info:</h6>
											</div>
											<div class="form-group col-md-4">
												<label>Case Id:</label>
												<input type="text" class="form-control" id="name" name="caseid" placeholder="Property-Case ID" required>
											</div>
											<div class="form-group col-md-4">
												<label>Street Address:</label>
												<input type="text" class="form-control" id="email" name="street_address" placeholder="Enter Street Address" >
											</div>
											<div class="form-group col-md-4">
												<label>City:</label>
												<input type="text" class="form-control" id="" name="city" placeholder="Enter City" >
											</div>
											<div class="form-group col-md-4">
												<label>State:</label>
												<select class="form-control select2" name="state" >
													<option >Select State</option>
													<?php
														while($data=mysqli_fetch_array($get_states)){
														?>
													<option value="<?php echo $data['id']?>"><?php echo $data['name']?></option>
													<?php            
														}
														?>
												</select>
											</div>
											<div class="form-group col-md-4">
												<label>ZIP:</label>
												<input type="number" class="form-control" id="" name="zip" placeholder="Enter ZIP" >
											</div>
											<div class="form-group col-md-4">
												<label>Country:</label>
												<input type="text" class="form-control" id="" name="country" placeholder="Enter Country" >
											</div>
											<div class="form-group col-md-4">
												<label>Price:</label>
												<input type="text" class="form-control" id="name" name="price" placeholder="Enter Price" required>
											</div>
											<div class="form-group col-md-4">
												<label>Bed:</label>
												<input type="text" class="form-control" id="email" name="bed" placeholder="Enter Bed" >
											</div>
											<div class="form-group col-md-4">
												<label>Bath:</label>
												<input type="text" class="form-control" id="" name="bath" placeholder="Enter Bath" >
											</div>
											<div class="form-group col-md-4">
												<label>Bid Open Date:</label>
												<input type="date" class="form-control" id="" name="bid_open_date" placeholder="Enter Bid Open Date" >
											</div>
											<div class="form-group col-md-4">
												<label>Eligile Bidders:</label>
												<input type="text" class="form-control" id="" name="eligible_bidders" placeholder="Enter Eligile Bidders" >
											</div>
											<div class="form-group col-md-4">
												<label>Bid Submission DeadLine:</label>
												<input type="date" class="form-control" id="" name="bid_submission_deadline" placeholder="Enter Bid Submission DeadLine" >
											</div>
											<div class="form-group col-md-4">
												<label>Room:</label>
												<input type="text" class="form-control" id="name" name="room" placeholder="Enter Room" required>
											</div>
											<div class="form-group col-md-4">
												<label>Square Feet:</label>
												<input type="text" class="form-control" id="email" name="square_feet" placeholder="Enter Square Feet" >
											</div>
											<div class="form-group col-md-4">
												<label>Years:</label>
												<input type="text" class="form-control" id="" name="years" placeholder="Enter Years" >
											</div>
											<div class="form-group col-md-4">
												<label>House Type:</label>
												<input type="text" class="form-control" id="" name="house_type" placeholder="Enter House Type" >
											</div>
											<div class="form-group col-md-4">
												<label>Number of Stories:</label>
												<input type="text" class="form-control" id="" name="no_of_stories" placeholder="Enter Number of Stories" >
											</div>
											<div class="form-group col-md-4">
												<label>Hoa fees:</label>
												<input type="text" class="form-control" id="" name="hoa_fee" placeholder="Enter Hoa fees" >
											</div>
											<div class="form-group col-md-4">
												<label>Revitalization Area:</label>
												<select class="form-control select2" name="revitalization_area" >
													<option >Select Revitalization Area</option>
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<div class="form-group col-md-4">
												<label>Opportunity Zone:</label>
												<select class="form-control select2" name="opportunity_zone" >
													<option >Select Opportunity Zone</option>
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											<div class="form-group col-md-4">
												<label>Fema Flood Zone:</label>
												<input type="text" class="form-control" id="" name="fema_flood_zone" placeholder="Enter Flood Zone" >
											</div>
											<div class="form-group col-md-4">
												<label>Lot Size:</label>
												<input type="number" class="form-control" id="" name="lot_size" placeholder="Enter Lot Size" >
											</div>
											<div class="form-group col-md-4">
												<label>Primary Image:</label>
												<input type="file" class="form-control-file" id="" name="primary_image" placeholder="Enter Primary Image" >
											</div>
											<div class="form-group col-md-9">
												<h5>Listing Info</h5>
											</div>
											<div class="form-group col-md-4">
												<label>List Date:</label>
												<input type="date" class="form-control" id="" name="listing_date" placeholder="Enter List Date" >
											</div>
											<div class="form-group col-md-4">
												<label>Listing Period:</label>
												<input type="text" class="form-control" id="" name="listing_period" placeholder="Enter Listing Period" >
											</div>
											<div class="form-group col-md-4">
												<label>Period Deadline:</label>
												<input type="date" class="form-control" id="name" name="period_deadline" placeholder="Enter Period Deadline" required>
											</div>
											<div class="form-group col-md-4">
												<label>List Price:</label>
												<input type="text" class="form-control" id="email" name="list_price" placeholder="Enter List Price" >
											</div>
											<div class="form-group col-md-4">
												<label>Fha Financing:</label>
												<input type="text" class="form-control" id="" name="fha" placeholder="Enter Fha Financing" >
											</div>
											<div class="form-group col-md-4">
												<label>K Eligible:</label>
												<select class="form-control select2" name="k_eligible" >
													<option >Select K Eligible</option>
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											

                                            <div class="form-group col-md-9">
												<h5>Amenities Info</h5>
											</div>
											<div class="form-group col-md-4">
												<label>Parking:</label>
												<input type="text" class="form-control" id="" name="parking" placeholder="Enter Parking" >
											</div>
											<div class="form-group col-md-4">
												<label>Foundation Type:</label>
												<input type="text" class="form-control" name="foundation_type" required placeholder="Enter Foundation Type ">
													
											</div>
                                            <div class="form-group col-md-9">
												<h5>Agent Info</h5>
											</div>
											<div class="form-group col-md-12">
												<h6>Asset Manager:</h6>
											</div>
											<div class="form-group col-md-4">
												<label>Company Name:</label>
												<input type="text" class="form-control" id="name" name="asset_company_name" placeholder="Enter company Name" required>
											</div>
											<div class="form-group col-md-4">
												<label> Contact Name:</label>
												<input type="text" class="form-control" id="email" name="asset_contact_name" placeholder="Enter Contact Name" >
											</div>
											<div class="form-group col-md-4">
												<label> Address:</label>
												<input type="text" class="form-control" id="" name="asset_address" placeholder="Enter Address" >
											</div>
											<div class="form-group col-md-4">
												<label> Phone Number:</label>
												<input type="number" class="form-control" id="" name="asset_phone" placeholder="Enter Phone Number" >
											</div>
											<div class="form-group col-md-4">
												<label> Fax:</label>
												<input type="number" class="form-control" id="" name="asset_fax" placeholder="Enter Fax" >
											</div>
											<div class="form-group col-md-4">
												<label> Email:</label>
												<input type="text" class="form-control" id="" name="asset_email" placeholder="Enter Email" >
											</div>
											<div class="form-group col-md-12">
												<label> Additional Comments:</label>
												<textarea type="text" class="form-control" rows="3" id="email" name="asset_comments" placeholder="Enter Additional Comments" ></textarea>
											</div>
											<div class="form-group col-md-4">
												<label> Website:</label>
												<input type="text" class="form-control" id="name" name="asset_website" placeholder="Enter Website" required>
											</div>
											
											<div class="form-group col-md-12">
												<h6>Field Service Manager:</h6>
											</div>
											<div class="form-group col-md-4">
												<label>company name:</label>
												<input type="text" class="form-control" id="" name="field_company" placeholder="Enter company name" >
											</div>
											<div class="form-group col-md-4">
												<label>Contact Name:</label>
												<input type="text" class="form-control" id="" name="field_contact" placeholder="Enter  Contact Name" >
											</div>
											<div class="form-group col-md-4">
												<label>Address:</label>
												<input type="text" class="form-control" id="" name="field_address" placeholder="Enter Address" >
											</div>
											<div class="form-group col-md-4">
												<label>Phone Number:</label>
												<input type="text" class="form-control" id="" name="field_number" placeholder="Enter Phone Number" >
											</div>
											<div class="form-group col-md-4">
												<label>Fax Number:</label>
												<input type="text" class="form-control" id="name" name="field_fax" placeholder="Enter Fax Number" required>
											</div>
											<div class="form-group col-md-4">
												<label>Email:</label>
												<input type="email" class="form-control" id="email" name="field_email" placeholder="Enter Email" >
											</div>
											<div class="form-group col-md-12">
												<label>Comments:</label>
												<textarea type="text" class="form-control" rows="3" id="" name="field_comments" placeholder="Enter Comments" ></textarea>
											</div>
											<div class="form-group col-md-4">
												<label>Website:</label>
												<input type="text" class="form-control" id="" name="field_website" placeholder="Enter Website" >
											</div>
											
											<div class="form-group col-md-12">
												<h6>Listing Broker:</h6>
											</div>
											<div class="form-group col-md-4">
												<label>Company Name:</label>
												<input type="text" class="form-control" id="" name="listing_name" placeholder="Enter Company Name" >
											</div>
											<div class="form-group col-md-4">
												<label>Contact Name:</label>
												<input type="text" class="form-control" id="" name="listing_contact" placeholder="Enter Contact Name" >
											</div>
											<div class="form-group col-md-4">
												<label>Address:</label>
												<input type="text" class="form-control" id="name" name="listing_address" placeholder="Enter Address" required>
											</div>
											<div class="form-group col-md-4">
												<label>Phone Number:</label>
												<input type="text" class="form-control" id="email" name="listing_number" placeholder="Enter Phone Number" >
											</div>
											<div class="form-group col-md-4">
												<label>Fax:</label>
												<input type="text" class="form-control" id="" name="listing_fax" placeholder="Enter Fax" >
											</div>
											<div class="form-group col-md-4">
												<label>Email:</label>
												<input type="email" class="form-control" id="" name="listing_email" placeholder="Enter Email" >
											</div>
										</div>
                                        <center><button class="btn btn-primary" type="submit" name="submit"> Add Gallery</button></center>
									</form>
								</div>
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

            $(document).ready(function() {
            $('.select2').select2();
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
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
		
	</body>
</html>