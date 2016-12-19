<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>food bank</title>
</head>

<body>
<?php 
	$agencycounty = $_POST["agency_county"];
	$agencynumber = $_POST["agency_num"];
	$todaysdate = $_POST["todays_date"];
	$lastmonitordate = $_POST["last_monitor_date"];
	$agencyname = $_POST["agency_name"];
	$parentagencyname = $_POST["parent_agency_name"];
	$parentagencynumber = $_POST["parent_agency_num"];
	$siteaddress = $_POST["site_address"];
	$sitephone = $_POST["site_phone"];
	$contactname = $_POST["contact_name"];
	$contactphone = $_POST["contact_phone"];
	$directorsname = $_POST["directors_name"];
	$directorphone = $_POST["directors_phone"];
	$additionalcontactname = $_POST["additional_contact_name"];
	$additionalcontactphone = $_POST["additional_contact_phone"];
	$primaryemail = $_POST["primary_email"];
	$dateofmostrecentfoodsafety = $_POST["date_most_recent_food_safety_training"];
	$verificationoftaxexemptstatus = $_POST["tax_veri"];
	$irstaxverification = $_POST["irs_veri"];
	$dateofverification = $_POST["date_of_verification"];
	$emergencyfoodprogram = $_POST["eep_veri"];
	$dateofcontract = $_POST["date_of_contract"];
	$mealprogram = $_POST["meal_program"];
	$personinterviewed = $_POST["person_interviewed"];
	$daysandtimesoperation = $_POST["days_times_operation"];
	$orgrequiredsingleaudit = $_POST["optradio4"];
	$agencyhandicapedaccessible = $_POST["optradio5"];
	
	/*Meal Plan Page*/
	
	$monthlyservicedata = $_POST["msdradio"];
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
	}
	
	$query = insert into fb_agency values (?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?);
	$stmt = $db->prepare($query);
	$stmt->bind_param("si",$agencycounty, $agencynumber, $todaysdate, $lastmonitordate, $agencyname, $parentagencyname, $parentagencynumber, $siteaddress, $sitephone, $contactname, $contactphone, 
	$directorsname, $directorphone, $additionalcontactname, $additionalcontactphone, $primaryemail, $dateofmostrecentfoodsafety, $verificationoftaxexemptstatus, $irstaxverification, $dateofverification,
	$emergencyfoodprogram, $dateofcontract, $mealprogram, $personinterviewed, $daysandtimesoperation, $orgrequiredsingleaudit, $agencyhandicapedaccessible);
	$stmt->execute();
    echo $stmt->affected_rows." data entered in successfully";
    mysqli_close($db);
?>> 

</html>