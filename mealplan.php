<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>food bank</title>
</head>

<body>
<?php 
	/*
	echo "$agencycounty, $agencynumber, $todaysdate, $lastmonitordate, $agencyname, $parentagencyname, $parentagencynumber, $siteaddress, $sitephone, $contactname, $contactphone, 
	$directorsname,$directorphone, $additionalcontactname, $additionalcontactphone, $primaryemail, $dateofmostrecentfoodsafety, $verificationoftaxexemptstatus, $irstaxverification, $dateofverification,
	$emergencyfoodprogram, $dateofcontract, $mealprogram, $personinterviewed, $daysandtimesoperation, $orgrequiredsingleaudit, $agencyhandicapedaccessible";
	
	/*Meal Plan Page*/
	
	$monthlyservicedata = $_POST["msdradio"];
	if ($monthlyservicedata == ""){ 
		$monthlyservicedata = "0";
	}
	$nummealsserved = $_POST["num_of_meals_served_last_mon"];
	if ($nummealsserved == ""){ 
		$nummealsserved = "0";
	}
	$foodsafetycertonfile = $_POST["fscofradio"];
	if ($foodsafetycertonfile == ""){ 
		$foodsafetycertonfile = "0";
	}
	$nameanddate = $_POST["name_date"];
	if ($nameanddate == ""){ 
		$nameanddate = "0";
	}
	$mealmembershipreq = $_POST["feesreq"]; 
	if ($mealmembershipreq == ""){ 
		$mealmembershipreq = "0";
	}
	$membershipexplain = $_POST["membership_explaination"];
	if ($membershipexplain == ""){ 
		$membershipexplain = "0";
	}
	$fundingsource = $_POST["funding_source"];
	if ($fundingsource == ""){ 
		$fundingsource = "0";
	}
	$safefoodhandlingposted = $_POST["safe_food_hand_posted"];
	if ($safefoodhandlingposted == ""){ 
		$safefoodhandlingposted = "0";
	}
	$operationtimeposted = $_POST["opt_times_posted"];
	if ($operationtimeposted == ""){ 
		$operationtimeposted = "0";
	}
	$reqforfoodassist = $_POST["food_assist_require"];
	if ($reqforfoodassist == ""){ 
		$reqforfoodassist = "0";
	}
	$avgnumpplserved = $_POST["ppl_served_per_month"];
	if ($avgnumpplserved == ""){ 
		$avgnumpplserved = "0";
	}
	$residentsnumbers = $_POST["num_residents"];
	if ($residentsnumbers == ""){ 
		$residentsnumbers = "0";
	}
	$mealsserveddaily = $_POST["num_meal_served_day"];
	if ($mealsserveddaily == ""){ 
		$mealsserveddaily = "0";
	}
	$mealprepparticipation = $_POST["meal_prep_participation"];
	if ($mealprepparticipation == ""){ 
		$mealprepparticipation = "0";
	}
	$freelunches = $_POST["free_lunches"];
	if ($freelunches == ""){ 
		$freelunches = "0";
	}
	$reducedlunchnum = $_POST["reduced_lunches"];
	if ($reducedlunchnum == ""){ 
		$reducedlunchnum = "0";
	}
	$lunchfee = $_POST["lunch_fee"];
	if ($lunchfee == ""){ 
		$lunchfee = "0";
	}
	$reducedlunchfee = $_POST["reduced_lunche_fee"];
	if ($reducedlunchfee == ""){ 
		$reducedlunchfee = "0";
	}
	
echo "$monthlyservicedata, $nummealsserved, $foodsafetycertonfile,$foodsafetycertonfile,$nameanddate,$mealmembershipreq,$membershipexplain,$fundingsource,$safefoodhandlingposted,$operationtimeposted,$reqforfoodassist,$avgnumpplserved,$residentsnumbers,$mealsserveddaily,$mealprepparticipation,$freelunches,$reducedlunchnum,$lunchfee,$reducedlunchfee";
   
	//need to format data to prevent sql injections
	
	//connect to the database 
	@ $db = new mysqli('localhost','alanwoshea','230014354', 'foodbank');
	if ($db->connect_error) { 
		die('Connect Error ' . $db->connect_errno . ': ' . $db->connect_errr); 
		echo "connection error";
	} else { 
		echo "connection successful";
	}
 	/*Agency Table*/
	$query_meal= "insert into meal_program_information (Intrw_id, MonthlyServiceData, NumberOfMealsServerdLastMonth, DoesFoodBankHaveSafeHandlingCertification, SafeHandlingCertName, FeesDonationsMembershipsRequired, FeesDonationMembershipsExplaination, FundingSource,SafeHandlingCertPostedInKitchen, DaysOfOperationPostedVisible, RequirementsForFoodAssistance,AverageNumberOfServed, GRPHOME_NumOfResidents, GRPHOME_NumOfMealsServed,GRPHOME_WhoParticipatedInMealPrograms, SCHL_NumOfFreeLunches, SCHL_NumOfReducedLunches, SCHL_LunchFee, SCHL_ReducedLunchFee) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmtM = $db->prepare($query_fb_agency);
    $stmtM->bind_param("iiiiiiiississiisiiisiiii", '1', $monthlyservicedata, $nummealsserved, $foodsafetycertonfile,$nameanddate,$mealmembershipreq,$membershipexplain,$fundingsource,$safefoodhandlingposted,$operationtimeposted,$reqforfoodassist,$avgnumpplserved,$residentsnumbers,$mealsserveddaily,$mealprepparticipation,$freelunches,$reducedlunchnum,$lunchfee,$reducedlunchfee);
    $stmtM->execute();
    echo $stmtM->affected_rows." data inserted into database. ";
     
	
	echo "$monthlyservicedata, $nummealsserved, $foodsafetycertonfile,$foodsafetycertonfile,$nameanddate,$mealmembershipreq,$membershipexplain,$fundingsource,$safefoodhandlingposted,$operationtimeposted,$reqforfoodassist,$avgnumpplserved,$residentsnumbers,$mealsserveddaily,$mealprepparticipation,$freelunches,$reducedlunchnum,$lunchfee,$reducedlunchfee";
    mysqli_close($db);
?>
<h1><?php
echo "$monthlyservicedata";

		?></h1>
</body>
</html>