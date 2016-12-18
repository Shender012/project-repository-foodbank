<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>food bank</title>
</head>

<body>
<?php 
	$agencycounty = $_POST["agency_county"];
	$agencycounty = addslashes($agencycounty);
	if ($agencycounty == ""){ 
		$agencycounty = "Not Specified";
	}
	$agencynumber = $_POST["agency_num"];
	$agencynumber = addslashes($agencynumber);
	$todaysdate = $_POST["todays_date"];
	if ($todaysdate == ""){ 
		$todaysdate = "0000-00-00";
	}
	$todaysdate = addslashes($todaysdate);
	$lastmonitordate = $_POST["last_monitor_date"];
	if ($lastmonitordate == ""){ 
		$lastmonitordate = "0000-00-00";
	}
	$lastmonitordate = addslashes($lastmonitordate);
	$agencyname = $_POST["agency_name"];
	if ($agencyname == ""){ 
		$agencyname = "Not Specified";
	}
	$agencyname = addslashes($agencyname);
	$parentagencyname = $_POST["parent_agency_name"];
	if ($parentagencyname == ""){ 
		$parentagencyname = "Not Specified";
	}
	$parentagencyname = addslashes($parentagencyname);
	$parentagencynumber = $_POST["parent_agency_numb"];
	if ($parentagencynumber == ""){ 
		$parentagencynumber = "0";
	}
	$parentagencynumber = addslashes($parentagencynumber);
	$siteaddress = $_POST["site_address"];
	if ($siteaddress == ""){ 
		$agensiteaddresscycounty = "Not Specified";
	}
	$siteaddress = addslashes($siteaddress);
	$sitephone = $_POST["site_phone"];
	if ($sitephone == ""){ 
		$sitephone = "Not Specified";
	}
	$sitephone = addslashes($sitephone);
	$contactname = $_POST["contact_name"];
	if ($contactname == ""){ 
		$contactname = "Not Specified";
	}
	$contactname = addslashes($contactname);
	$contactphone = $_POST["contact_phone"];
	if ($contactphone == ""){ 
		$contactphone = "Not Specified";
	}
	$contactphone = addslashes($contactphone);
	$directorsname = $_POST["directors_name"];
	if ($directorsname == ""){ 
		$directorsname = "Not Specified";
	}
	$directorsname = addslashes($directorsname);
	$directorphone = $_POST["directors_phone"];
	if ($directorphone == ""){ 
		$directorphone = "Not Specified";
	}
	$directorphone = addslashes($directorphone);
	$additionalcontactname = $_POST["additional_contact_name"];
	if ($additionalcontactname == ""){ 
		$additionalcontactname = "Not Specified";
	}
	$additionalcontactname = addslashes($additionalcontactname);
	$additionalcontactphone = $_POST["additional_contact_phone"];
	if ($additionalcontactphone == ""){ 
		$additionalcontactphone = "Not Specified";
	}
	$additionalcontactphone = addslashes($additionalcontactphone);
	$primaryemail = $_POST["primary_email"];
	if ($primaryemail == ""){ 
		$primaryemail = "Not Specified";
	}
	$primaryemail = addslashes($primaryemail);
	$dateofmostrecentfoodsafety = $_POST["date_most_recent_food_safety_training"];
	if ($dateofmostrecentfoodsafety == ""){ 
		$dateofmostrecentfoodsafety = "0000-00-00";
	}
	$dateofmostrecentfoodsafety = addslashes($dateofmostrecentfoodsafety);
	$verificationoftaxexemptstatus = $_POST["tax_veri"];
	if ($verificationoftaxexemptstatus == ""){ 
		$verificationoftaxexemptstatus = "No";
	}
	$verificationoftaxexemptstatus = addslashes($verificationoftaxexemptstatus);
	$irstaxverification = $_POST["irs_veri"];
	if ($irstaxverification == ""){ 
		$irstaxverification = "No";
	}
	$irstaxverification = addslashes($irstaxverification);
	$dateofverification = $_POST["date_of_verification"];
	if ($dateofverification == ""){ 
		$dateofverification = "0000-00-00";
	}
	$dateofverification = addslashes($dateofverification);
	$emergencyfoodprogram = $_POST["eep_veri"];
	if ($emergencyfoodprogram == ""){ 
		$emergencyfoodprogram = "No";
	}
	$emergencyfoodprogram = addslashes($emergencyfoodprogram);
	$dateofcontract = $_POST["date_of_contract"];
	if ($dateofcontract == ""){ 
		$dateofcontract = "0000-00-00";
	}
	$dateofcontract = addslashes($dateofcontract);
	$mealprogram = implode(', ',$_POST['meal_program']);
	$groceryprogram = implode(', ',$_POST['grocery_program']);
	$personinterviewed = $_POST["person_interviewed"];
	if ($personinterviewed == ""){ 
		$personinterviewed = "Not Specified";
	}
	$personinterviewed = addslashes($personinterviewed);
	$daysandtimesoperation = $_POST["days_times_operation"];
	if ($daysandtimesoperation == ""){ 
		$daysandtimesoperation = "Not Specified";
	}
	$daysandtimesoperation = addslashes($daysandtimesoperation);
	$orgrequiredsingleaudit = $_POST["optradio4"];
	if ($orgrequiredsingleaudit == ""){ 
		$orgrequiredsingleaudit = "No";
	}
	$orgrequiredsingleaudit = addslashes($orgrequiredsingleaudit);
	$agencyhandicapedaccessible = $_POST["optradio5"];
	if ($agencyhandicapedaccessible == ""){ 
		$agencyhandicapedaccessible = "No";
	}
	$agencyhandicapedaccessible = addslashes($agencyhandicapedaccessible);
	
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
	$foodsafetycertonfile = $_POST["fscofradio"];
	$nameanddate = $_POST["name_date"];
	$mealmembershipreq = $_POST["feesreq"]; /*change bad variable names */
	$membershipexplain = $_POST["membership_explaination"];
	$fundingsource = $_POST["funding_source"];
	$safefoodhandlingposted = $_POST["safe_food_hand_posted"];
	$operationtimeposted = $_POST["opt_times_posted"];
	$reqforfoodassist = $_POST["food_assist_require"];
	$avgnumpplserved = $_POST["ppl_served_per_month"];
	$residentsnumbers = $_POST["num_residents"];
	$mealsserveddaily = $_POST["num_meal_served_day"];
	$mealprepparticipation = $_POST["meal_prep_participation"];
	$freelunches = $_POST["free_lunches"];
	$reducedlunchnum = $_POST["reduced_lunches"];
	$lunchfee = $_POST["lunch_fee"];
	$reducedlunchfee = $_POST["reduced_lunche_fee"];
	
	/*Grocery Plan Page*/
	$distributionmethod = $_POST["distribution_method"];
	$otheroptionexplaination = $_POST["other_option"];
	$householdfoodrecieved = $_POST["household_receive_food"];
	$averagenumberofpplserved = $_POST["avg_num_ppl_served"];
	$estweightofhouseholdfood = $_POST["est_amnt_food_for_household_per_day_or_lb"];
	$desinatedgeographcservice = $_POST["desig_geo_service"];
	$foodsafetyclassattended = $_POST["food_safety_attended"];
	$datefoodsafety = $_POST["date_food_safety"];
	$namefoodsafety = $_POST["name_food_safety"];
	$grocerymembershipreq = $_POST["gr_memb_req"];
	$grocerymembershipexpl = $_POST["gr_membership_explaination"];
	$groceryfundingsource = $_POST["gr_funding"]; /*look for 'for' field in label */
	$groceryoperationtimeposted = $_POST["gr_operation_times"];
	$foodassistreq = $_POST["food_assist_require"];
	$clientparticipationtracking = $_POST["client_part_track"];
	$confidentialintake = $_POST["confidential_intake"];
	$groceryfooddelivertoclient = $_POST["gr_client_food_deliv"];
	
	/*Food Safety Page*/ 
	$healthdeptpermitreq = $_POST["hd_permit_req"];
	$score = $_POST["score"];
	$scoredate = $_POST["score_date"];
	$regcleaningscheduleposted = $_POST["reg_cleaning_posted"];
	$routinepestcontrol = $_POST["routine_pest_cntrl"];
	$pestinspector = $_POST["pest_inspector"];
	$pestinspectdate = $_POST["pest_inspect_date"];
	$isfoodstoredatlocation = $_POST["is_food_stored_local"];
	$foodstoragelocation = $_POST["food_storage_location"];
	$foodsixinchoffgrnd = $_POST["food_6in_off_grnd"];
	$fridgebtwntemps = $_POST["fridge_temps_35_or_40"];
	$freezerbtwntemps = $_POST["freeze_temps_0_below"]; /*look for 'for' field in label */
	$workingthermominstorage = $_POST["thermom_in_storage"];
	$templogsmaintainedandposted = $_POST["temp_logs"];
	
	/*Direct Connect Page*/
	$directconnectpart = $_POST["direct_conn_participation"];
	$coldfoodtransport = $_POST["cold_food_transport"];
	$pickuppaperworkcopy = $_POST["pickup_paperwork_copies"];
	$sampletempsdocumented = $_POST["doc_of_sample_temps"];
	$transporttempdevices = $_POST["transport_temp_devices"];
	
	/*Emergency Food Program Page*/
	$discriminationcomplaints = $_POST["discrimination_complaints"];
	$complaintsforwardedtofoodbank = $_POST["complaints_forwarded_to_foodbank"];
	$casesofEFPTANFininventory = $_POST["EFP_TANF_inventory"];
	$operateanotherprogram = $_POST["operate_antoher_program"];
	$foodsperated = $_POST["food_seperated_tracked"];
	$EFPmanualonsite = $_POST["efp_manual_onsite"];
	$operationhoursvisible = $_POST["operation_hours_visible"];
	$postersvisible = $_POST["posters_visible"];
	$religiousorg = $_POST["religious_org"];
	$beneficiaryrightsposter = $_POST["benef_rights_poster"];
	$clientsreferrednonrelig = $_POST["clients_referred_nonrelig"];
		/*program procedures*/
	$docsreqfrmclient = $_POST["docu_required"];
	$reqdocdescription = $_POST["types_of_docs"];
	$reqdocpurpose = $_POST["doc_request_purpose"];
	$householdreceivefood = $_POST["monthly_household_food"];
	$ousidereferralreq = $_POST["outside_ref_req"];
		/*efp grocery program*/
	$otherfoodtodistrib = $_POST["other_food_to_distribute"];
	$efppostersvisible = $_POST["efp_posters_visible"];
		/*signature docs, signsheet = signature-sheet*/
	$dhstanfsigndocsused = $_POST["DHS_TANF_docs_used"];
	$signsheetscorrectyr = $_POST["correct_yr_signsheets"];
	$foodbanknameonsignsheet = $_POST["fb_name_on_signsheet"];
	$dateonsignsheet = $_POST["date_on_signsheet"];
	$recipientsigreq = $_POST["recipient_signs_signsheet"];
	$clientsaddressonsignsheet = $_POST["client_addrs_on_signsheet"];
	$householdsizeonsignsheet = $_POST["household_size_on_signsheet"];
	$children18plusrecordintanf = $_POST["child_u18_recorded"];
		/*proxy docs*/
	$correctproxyyear = $_POST["correct_proxy_year"];
	$origsigonproxyform = $_POST["orig_sig_on_proxy_form"];
	$pantryperpresentforproxysig = $_POST["pantry_per_present_for_proxy_sig"];
	
	/*Forms Page*/
	$completedandsubmitedforms = $_POST["forms"];
	
	/*Part 7 & 8 Page*/
	$violationsorconcerns = $_POST["violations_concerns"];
	$commentsoraccolades = $_POST["comments_accolades"];
	$buildingneeds = $_POST["building_needs"];
	$FBrepsignature = $_POST["NIFB_rep_sign"];
	$FBrepsigdate = $_POST["NIFB_sign_date"];
	$agencysignature = $_POST["agency_sign"];
	$agencysigdate = $_POST["agency_sign_date"];
	
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
	$query_fb_agency = "insert into fb_agency (AgencyCounty, Agency_id, TodaysDate, DateOfLastMonitor, AgencyName, ParentAgencyName, ParentAgencyNumber, SiteAddress, SitePhone, ContactName, ContactPhoneNumber, DirectorName, DirectorPhoneNumber, AddtionalContactName, AdditonalContactPhoneNumber,PrimaryEmail, DateofMostRecentFoodSafteyTraining, TEOF_NorIll_HasCurrentVarificationOfTaxExemptStatusOnFile, TEOF_IRS_Varification, DateOfIRSVarification, EmergencyFoodProgram, DateOFContract, MealProgram, GroceryProgram, PersonInterview, DaysHoursOFOperation,OrgRequiredToHaveAudit, HandicappedAccessible) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmtA = $db->prepare($query_fb_agency);
    $stmtA->bind_param("sissssisssssssssssssssssssss", $agencycounty, $agencynumber, $todaysdate, $lastmonitordate, $agencyname, $parentagencyname, $parentagencynumber, $siteaddress, $sitephone, $contactname, $contactphone, $directorsname,$directorphone, $additionalcontactname, $additionalcontactphone, $primaryemail, $dateofmostrecentfoodsafety, $verificationoftaxexemptstatus, $irstaxverification, $dateofverification, $emergencyfoodprogram, $dateofcontract, $mealprogram, $groceryprogram, $personinterviewed, $daysandtimesoperation, $orgrequiredsingleaudit, $agencyhandicapedaccessible);
    $stmtA->execute();
    echo $stmtA->affected_rows." data inserted into database. ";
     
	/*Interview Table*/
	$query_intrw = "insert into fb_interview (Agency_id, Intrw_id) values (?, ?)";
    $stmtI = $db->prepare($query_intrw);
    $stmtI->bind_param("ii", $agencynumber, $agencynumber);
    $stmtI->execute();
    echo $stmtI->affected_rows." data inserted into database. ";
	
    mysqli_close($db);
?>
<h1><?php
echo "$agencycounty, $agencynumber, $todaysdate, $lastmonitordate, $agencyname, $parentagencyname, $parentagencynumber, $siteaddress, $sitephone, $contactname, $contactphone, 
	$directorsname,$directorphone, $additionalcontactname, $additionalcontactphone, $primaryemail, $dateofmostrecentfoodsafety, $verificationoftaxexemptstatus, $irstaxverification, $dateofverification,
	$emergencyfoodprogram, $dateofcontract, $mealprogram, $groceryprogram, $personinterviewed, $daysandtimesoperation, $orgrequiredsingleaudit, $agencyhandicapedaccessible";
?></h1>
</body>
</html>