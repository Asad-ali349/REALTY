<?php
header('Content-Type: text/html; charset=utf-8');
require_once '../db/db.php'; ?>
<html>
    <head>
        <title>Coder</title>
    </head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">

<body>
<style>
* {
    font-family: 'Karla';
    outline: 0!important;
    text-decoration:none!important;
}

.dt-buttons a:hover {
    color:#fff!important;
}

body {
  line-height: 1.25;
  font-family:'Karla';
}
form {
    margin: 0 auto;
    display: table;
    zoom: 1.5;
}
table {
  border: 1px solid #ccc
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  font-size: 13px;
}

table caption {
    margin: 2rem 0;
    margin-bottom: 0;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align:center;
}

table th {
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }


  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}

.holder {
    max-width:60rem;
    margin:0 auto;
}


</style>
<div class="holder">
<?php

/* START PART OF SCRAPING WEBSITE  */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.hudhomestore.gov/Listing/PropertySearchResult.aspx?zipCode=&city=&county=&street=&sState=FL&fromPrice=0&toPrice=0&fcaseNumber=&bed=0&bath=0&buyerType=0&Status=0&indoorAmenities=&outdoorAmenities=&housingType=&stories=&parking=&propertyAge=&sLanguage=ENGLISH');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
//for debug only!
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$headers = array();
$headers[] = 'Connection: keep-alive';
$headers[] = 'Cache-Control: max-age=0';
$headers[] = 'Sec-Ch-Ua: \" Not A;Brand\";v=\"99\", \"Chromium\";v=\"98\", \"Google Chrome\";v=\"98\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'Sec-Fetch-Site: cross-site';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Accept-Language: en-US,en;q=0.9,fr;q=0.8';
$headers[] = 'Cookie: ASP.NET_SessionId=mex003qnyo4wqrix5aatqhei; TemplateStyle=ImageFolder=../templates/ResCorpInnerStyle; MySearches0=MySearchesString=zipCode=^city=^county=^sState=FL^fromPrice=0^toPrice=0^fCaseNumber=^bed=0^bath=0^street=^buyerType=0^specialProgram=^Status=0^indoorAmenities=^outdoorAmenities=^housingType=^stories=^parking=^propertyAge=; propertyListings=zipCode=&city=&county=&sState=FL&fromPrice=0&toPrice=0&fCaseNumber=&bed=0&bath=0&street=&buyerType=0&specialProgram=&Status=0&indoorAmenities=&outdoorAmenities=&housingType=&stories=&parking=&propertyAge=&SortPageQueryString=zipCode=^city=^county=^sState=FL^fromPrice=0^toPrice=0^fCaseNumber=^bed=0^bath=0^street=^buyerType=0^specialProgram=^Status=0^indoorAmenities=^outdoorAmenities=^housingType=^stories=^parking=^propertyAge=^OrderbyName=SCASENUMBER^OrderbyValue=ASC^sPageSize=10^pageId=1; hudcookie=1212040458.20480.0000; __utma=62904501.1092929371.1645052219.1645052219.1645052219.1; __utmc=62904501; __utmz=62904501.1645052219.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); __utmb=62904501.1.10.1645052219; detailTabs1=0';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$dom = new DOMDocument;
@$dom->loadHTML($result);
$xpath = new DOMXPath($dom);
$elements = $xpath->query('//table[@id="dgPropertyList"] //tr');
/* END PART OF SCRAPING WEBSITE  */

$Price_Percentage = 0; // Price Percentage

$email = " realtybywolf@gmail.com";
function Send_notification($Subject,$Message,$email){
    
        $subject = $Subject;
        $message = $Message;
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: <hud@re4lty.com>" . "\r\n";
        // $headers .= "Cc:  homesbycosette@aol.com" . "\r\n";
        // $headers .= "Bcc: homesbycosette@aol.com" . "\r\n";

        if(mail($email, $subject, $message, $headers)){
           // echo 'send done'; ==> For Testing
        }else {
          //    echo 'not send'; ==> For Testing
        }

}

$Found_Elements = $elements->length;


// Let's Check Last Found Element 
$Get_Element = mysqli_query($conn,"SELECT Count_Property FROM `proprety` WHERE `proprety`.`id` = 1 LIMIT 1");
$Last_Num_Elements = mysqli_fetch_assoc($Get_Element)['Count_Property'];





echo '<table>';
$Proprety = 0;
foreach ($elements as $row){
    $td = $row->childNodes;
    if($Proprety == 0){
        echo "<thead>";
            echo "<tr>";
                echo "<td>#</td>";
                echo "<td>Property Case</td>";
                echo "<td>Address</td>";
                echo "<td>Price</td>";
                echo "<td>Status</td>";
                echo "<td>Bed</td>";
                echo "<td>Listing Period</td>";
                echo "<td>Bid Open Date</td>";
            echo "</tr>";
        echo "</thead>";
    }else {

    echo "<tr>";
        echo '<td><img style="height:50px;width:66px;" src="'.$xpath->query(".//img", $row)->item(0)->getAttribute('src').'"></td>';
        echo '<td>'.$td->item(2)->nodeValue.'</td>';
        echo '<td>'.$td->item(3)->nodeValue.'</td>';
        $originalPrice_p = trim($td->item(4)->nodeValue);
        $originalPrice = str_replace('$','',$originalPrice_p);
        $originalPrice = trim($originalPrice);
		$originalPrice = floatval($originalPrice);
        $numberToAdd = ($originalPrice / 100) * $Price_Percentage;
        $newPrice = $originalPrice + $numberToAdd;
        echo '<td>'. $originalPrice_p.'</td>';
        if(!empty($xpath->query(".//img", $td->item(5))->item(0))){
            echo '<td><img style="height:50px;width:66px;" src="'.str_replace('..','https://www.hudhomestore.gov/',$xpath->query(".//img", $td->item(5))->item(0)->getAttribute('src')).'"></td>';
        }else {
            echo '<td>N/A</td>';
        }
        echo '<td>'.$td->item(6)->nodeValue.'</td>';
        echo '<td>'.$td->item(7)->nodeValue.'</td>';
        echo '<td>'. $td->item(9)->nodeValue.'</td>';
    echo "</tr>";
    $Propert_ID = trim($td->item(2)->nodeValue);
    $originalPrices[] = str_replace(',','',$originalPrice_p);

    $NewPrices[] = array (
        'Key' => $Propert_ID,
        'Price' => str_replace(',','',$originalPrice_p)
    );

    $Propert_IDs[] = $Propert_ID;
    $ADDRESSES[] = array (
        'Key' => $Propert_ID,
        'Address' => trim($td->item(3)->nodeValue)
    );
    }
    $Proprety = $Proprety + 1;
}
echo '</table>';


if(!empty($Found_Elements) && $Found_Elements > 0){
	
$originalPrices_Table = $originalPrices;
$PropertyItems = array_combine($originalPrices_Table,$Propert_IDs);
$PropertyItems = array_flip($PropertyItems);

$originalPrices_Table = serialize($PropertyItems);

$Get_Prices = mysqli_query($conn,"SELECT prcies FROM `proprety` WHERE `proprety`.`id` = 1 LIMIT 1");
$Get_Prices = mysqli_fetch_assoc($Get_Prices)['prcies'];
$originalPrices_Saved = $Get_Prices;
$originalPrices_Saved = preg_replace_callback(
    '!s:(\d+):"(.*?)";!', 
    function($m) { 
        return 's:'.strlen($m[2]).':"'.$m[2].'";'; 
    }, 
    $Get_Prices);

$originalPrices_Saved = unserialize($originalPrices_Saved);

// Grabbed Data
//echo '<pre>';
//echo 'Grabbed Data : ';
//print_r($PropertyItems);
//array_shift($PropertyItems); // For Test Delete

$All_Addreses = array();
foreach($ADDRESSES as $key=>$animal) {
   $All_Addreses[$animal['Key']] = $animal["Address"];
}

// For New Prices

$AllNewPrices = array();
foreach($NewPrices as $key=>$PerPrice) {
   $AllNewPrices[$PerPrice['Key']] = $PerPrice["Price"];
}

// Saved Data
//echo '<pre>';
//echo 'Saved Data : ';
//print_r($originalPrices_Saved);


// Compare Values
$Prices_Compare = array_diff($originalPrices_Saved,$originalPrices);

// The Difference
//echo '<pre>';
//echo 'Difference Data : ';
//print_r($Prices_Compare);

// For Prices Changes
if(!empty($Prices_Compare)){
        
        $Message = "";
        $Subject = "Properties Price Changed";
        if(count($Prices_Compare) == 1){
            
            foreach($Prices_Compare as $key=>$Item){
                $Property_ID = $key;
                $Price = $AllNewPrices[$Property_ID];
                $Address = $All_Addreses[$Property_ID];
            }
            
            $Subject = "Property ".$Property_ID." Price Changed";
            
            
            $Address_last = preg_split('/[0-9]+/',$Address);
            $Address_last = $Address_last[count($Address_last)-1];
             $Address_last = str_replace('County','',$Address_last);
            $Address = str_replace($Address_last,'',$Address);
              $Address = str_replace('County','',$Address);
           $Message   = ' 
    <html> 
    <head> 
        <title>Updated Price</title> 
    </head> 
    <body> 
        <h3>Updated Price</h3> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Property-case:</th><td>'.$Property_ID.'</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Price:</th><td>'.$Price.'</td> 
            </tr>
            <tr style="background-color: #e0e0e0;"> 
              <th>Address:</th><td>'.$Address.'</td> 
             </tr> 
            <tr style="background-color: #e0e0e0;"> 
              <th>County:</th><td>'.$Address_last.'</td> 
             </tr> 
            
        </table> 
    </body>
    
    </html>'; 
            

            
            // $Message = "The $Property_ID price has been changed to this new $Price. Adress is :  $Address";
            
        }else {
            
            $Message = "";
            foreach($Prices_Compare as $key=>$Item){
                $Property_ID = $key;
                $Price = $AllNewPrices[$Property_ID];
                $Address = $All_Addreses[$Property_ID];
                $Address_last = preg_split('/[0-9]+/',$Address);
                $Address_last = $Address_last[count($Address_last)-1];
                $Address_last = str_replace('County','',$Address_last);
                $Address = str_replace($Address_last,'',$Address);
                  $Address = str_replace('County','',$Address);
                
                // Render Message
                $Message .= ' 
    <html> 
    <head> 
        <title>Updated Price</title> 
    </head> 
    <body> 
        <h3>Updated Price Info</h3> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Property-case:</th><td>'.$Property_ID.'</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Price:</th><td>'.$Price.'</td> 
            </tr>
            <tr style="background-color: #e0e0e0;"> 
              <th>Address:</th><td>'.$Address.'</td> 
             </tr> 
            <tr style="background-color: #e0e0e0;"> 
              <th>County:</th><td>'.$Address_last.'</td> 
             </tr> 
            
        </table> 
    </body>
  
    </html>'; 
            }
        }
        
        Send_notification($Subject,$Message,$email);
}

// For Deleted Items
foreach ($PropertyItems as $key=>$Property){
    $Added_Items[] = $key;
}
foreach ($originalPrices_Saved as $key=>$Property){
    $Saved_Items[] = $key;
}

$Deleted_Items = array_diff($Saved_Items,$Added_Items);
if(!empty($Deleted_Items)){
        $Message = "";
        $Subject = "Properties Deleted";
        if(count($Deleted_Items) == 1){
            $Property_ID = $Deleted_Items[0];
            
            $Subject = "Property ".$Property_ID." is deleted";
            $Message = "The $Property_ID is deleted. ";

        }else {
            
            $Message = "";
            foreach($Deleted_Items as $Item){
                $Property_ID = $Item;
                // Render Message
                $Message .= "The $Property_ID is deleted. <br>\n";
            }
        }
        
        Send_notification($Subject,$Message,$email);
}

// For Add Items

$New_Items = array_diff($Added_Items,$Saved_Items);
foreach($New_Items as $item){
    $New_ItemsNew[] = $item;
}

if(!empty($New_ItemsNew)){
        $Message = "";
        $Price = "";
        $Property_ID = "";
        $Subject = "New listings found";
        if(count($New_ItemsNew) == 1){

            foreach($New_ItemsNew as $key=>$Item){
                $Property_ID = $Item;
                $Price = $AllNewPrices[$Property_ID];
                $Address = $All_Addreses[$Property_ID];
                $Address_last = preg_split('/[0-9]+/',$Address);
                $Address_last = $Address_last[count($Address_last)-1];
                 $Address_last = str_replace('County','',$Address_last);
                $Address = str_replace($Address_last,'',$Address);
                  $Address = str_replace('County','',$Address);
                
            }            
            
            $Subject = "New listing Added ".$Property_ID."";
            
            
            $Message = ' 
    <html> 
    <head> 
        <title>New Listing Found</title> 
    </head> 
    <body> 
        <h3>Updated Price Info</h3> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Property-case:</th><td>'.$Property_ID.'</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Price:</th><td>'.$Price.'</td> 
            </tr>
            <tr style="background-color: #e0e0e0;"> 
              <th>Address:</th><td>'.$Address.'</td> 
             </tr> 
            <tr style="background-color: #e0e0e0;"> 
              <th>County:</th><td>'.$Address_last.'</td> 
             </tr> 
            
        </table> 
    </body>
  
    </html>'; 
            
     

        }else {
            
            $Message = "";
            foreach($New_ItemsNew as $key=>$Item){
                $Property_ID = $Item;
                $Price = $AllNewPrices[$Property_ID];;
                $Address = $All_Addreses[$Property_ID];
                $Address_last = preg_split('/[0-9]+/',$Address);
                $Address_last = $Address_last[count($Address_last)-1];
                 $Address_last = str_replace('County','',$Address_last);
                
                $Address = str_replace($Address_last,'',$Address);
                $Address = str_replace('County','',$Address);
                
                
                // Render Message
                $Message .= ' 
    <html> 
    <head> 
        <title>New Listing Found</title> 
    </head> 
    <body> 
        <h3>Updated Price Info</h3> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Property-case:</th><td>'.$Property_ID.'</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Price:</th><td>'.$Price.'</td> 
            </tr>
            <tr style="background-color: #e0e0e0;"> 
              <th>Address:</th><td>'.$Address.'</td> 
             </tr> 
            <tr style="background-color: #e0e0e0;"> 
              <th>County:</th><td>'.$Address_last.'</td> 
             </tr> 
            
        </table> 
    </body>
  
    </html>'; 
            }
        }
        
        Send_notification($Subject,$Message,$email);
}


// UPDATE DATA

	mysqli_query($conn,"UPDATE `proprety` SET `Count_Property` = '$Found_Elements' WHERE `proprety`.`id` = 1");
	mysqli_query($conn,"UPDATE `proprety` SET `prcies` = '$originalPrices_Table' WHERE `proprety`.`id` = 1");
}
?>
</div>
</body>
</html>
