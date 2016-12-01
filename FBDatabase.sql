CREATE DATABASE ni_monitoring;

CREATE TABLE fb_agency (
	/*Network Partner Monitoring Form */
    P_id int NOT NULL PRIMARY KEY,
    AgencyCounty varchar(255),
    AgencyNumber int,
    TodaysDate date,
    DateOfLastMonitor date,
    AgencyName varchar(255),
    AgencyNumber int,
    ParentAgencyName varchar(255),
    ParentAgencyNumber int,
    ContactName varchar(255),
    ContactPhoneNumber int,
    DirectorName varchar(255),
    DirectorPhoneNumber int,
    AddtionalContactName varchar(255),
    AdditonalContactPhoneNumber int,
    PrimaryEmail varchar(255),
    DateofMostRecentFoodSafteyTraining date,
    TEOF_NorIll_HasCurrentVarificationOfTaxExemptStatusOnFile boolean,
    TEOF_IRS_Varification tinyint, /*for boolean - store 0 or 1*/
    DateOfIRSVarification date,
    EmergencyFoodProgram boolean,
    DateOFContract date,

    ,
  
 );

CREATE TABLE fb_interview (
    Agency_id int, /*this links the interview to a particular agency*/
    Intrw_id int,
    PersonInterview varchar(255),
    DaysOfOperation varchar(255), /*Need to know if "days' (varchar) or dates (date) */
    TimeOfOperationStart time,
    TimeOfOperationStop time,
    IsYourOrgRequiredToHaveASingleAudit boolean,
    DoesTheAgencyAppearToBeHandicappedAccessible boolean,

    /*Part III: Food Safety, Storage and Inventory*/
    DoesTheLocalHealthDepartmentRequireAPermit boolean,
    IfYesProvideDateOfLastInspection date,
    IfYesProvideCopyOfPermitOfLastInspectionScore int, //What to do fro conditional variables
    IsThereACleaningScheduleEstablishedAndPosted boolean,
    PestControlRoutine boolean,
    PestControlCompany varchar(255),
    PestControlLastVisit date,
    IsAllFoodStoredAtLocation boolean,
    IfNoWhereIsFoodStored varchar(255), //What to do fro conditional variables
    IsAllFoodStoredSixInchesOffFloor boolean,
    RefrigeratorTempBetween35and40F boolean,
    RefrigeratorTemp int,
    FreezerTemp0orBelow boolean,
    FreezerTemp int,
    WorkingThermometersInStorageAreas boolean,
    ThermometerTempsInProperRange boolean,
    TempLogsMaintainedAndPosted boolean,
    PRIMARY KEY(Agency_id, Intrw_id), /* composite primary key*/
    CONSTRAINT fb_interview_fk_agency
        FOREIGN KEY (Agency_id) REFERENCES fb_agency(P_id) /* this creates a FK constraint*/
	//link optional parts

);

CREATE TABLE meal_program_information (
    meal_id int primary key auto_increment, 
    Intrw_id int,
    
    
    MP_SoupKitchen boolean,
    MP_GroupHome boolean,
    MP_Shelter_TransitionalLiving boolean,
    MP_DayCare boolean,
    MP_YouthProgramAfterSchool boolean
    MonthlyServiceData boolean,
	NumberOfMealsServerdLastMonth int,
	DoesFoodBankHaveSafeHandlingCertification boolean,
	SafeHandlingCertName varchar(255),
	SafeHandlingCertDate date,
	FeesDonationsMembershipsRequired	boolean,
	FeesDonationMembershipsExplaination varchar(255),
	FundingSource varchar(255),
	SafeHandlingCertPostedInKitchen boolean,
	DaysOfOperationPostedVisible boolean,
	RequirementsForFoodAssistance varchar(255),
	AverageNumberOfServed int
	GRPHOME_NumOfResidents int,
	GRPHOME_NumOfMealsServed int,
	GRPHOME_WhoParticipatedInMealPrograms varchar(255),
	SCHL_NumOfFreeLunches int,
	SCHL_NumOfReducedLunches int,
	SCHL_LunchFee int,
	SCHL_ReducedLunchFee int
);
CREATE TABLE grocery_program_information (
    grocery_id int primary key auto_increment,
    Intrw_id int,
    
    GP_FoodPantry tinyint, /*boolean*/
    GP_Seasonal boolean,
    GP_MobilePantry boolean,
    GP_Backpack boolean,
	DistMthd_ChoicePantry boolean,
	DistMthd_Traditional boolean,
	DistMthd_Combination boolean,
	DistMthd_Other boolean,
	DistMthd_OtherMethod varchar(255),
	HowOftenDoesHouseholdReceiveFood varchar(255),
	AvgNumOfServedPerMonth int,
	AvgNumOfHouseHoldsServedPerMonth int,
	AvgAmntOfFoodPerHouseInLBORDays int,
	DesignatedGeographicalServiceArea boolean,
	MemberAttendedFoodSafetyClass boolean,
	MemberName varchar(255),
	SafetyClassDate date,
	FeesDonationsMembershipsRequired boolean,
	FeesDonationMembershipsExplaination varchar(255),
	FundingSources varchar(255),
	DaysOfOperationPostedVisible boolean,
	RequirementsForFoodAssistance varchar(255),
	ClientParticipationTracking boolean,
	IntakeDoneInConfidential boolean,
	FoodDeliveredToClients boolean
);
CREATE TABLE direct_connect_program (
	dc_id int primary key, 
    Intrw_id int,
	ColdFoodProcess varchar(255),
	CopiesOfPickupPapers boolean,
	SampleTempsDocumentedAtTimeOfPickUpandDelivery boolean,
	TempControlledDevicesForFoodTransport boolean
);
CREATE TABLE emergency_food_program_EEP_information ( /*this should be with interview*/
    Intrw_id int,
	DiscriminationComplaintsInPastYear boolean,
	HaveComplaintsBeenForwardedToFoodBank boolean,
	TotalCasesOfEFP_TANFProductInInventory int,
	DoesThePartnerOperateAnotherProgram boolean,
	IsFoodSeperatedandTrackedForTheTwoProgram boolean,
	DoesProgramHaveEFPSiteManualOnSite boolean,
	VisibleSignsPostedAnnouncingOperationHours boolean,
	AJFAPosterVisible boolean,
	Religiousorganization boolean,
	WrittenNoticeOfBeneficiaryRightPosterVisible boolean,
	ClientsOfferedAReferralToANonReligousEFPFeedingProgram boolean,
	/*Program Procedures*/
	DocumentsRequiredFromClient boolean,
	TypesOfDocumentsRequested varchar(255),
	PurposeForRequestingDocumentation varchar(255),
	AreHouseHoldsAllowedToReceiveFoodAtLeastOnceEvery30days boolean,
	AreClientsRequiredToObtainReferralFromOutsideAgency boolean,
	/*Signature Documents*/
	DoesPantryHaveOtherFoodsToDistricuteWithGovCommodities boolean,
	PostersVisible boolean,
	AreDHS_TANFSignaturesDocumentsUsed boolean,
	SignatureSheetsForCorrectYears boolean,
	IsFoodBankNameOnSheet boolean,
	IsDateOnSignatureSheet boolean,
	DoesReciptientSignTheirName boolean,
	ClientAddressRecorded boolean,
	HouseholdSizeRecorded boolean,
	NumOfChildren18andUnderRecordedInTheTANFBox boolean,
	/*Questions if proxy forms are used*/
	AreProxyFormsForCorrectYear boolean,
	ProxyFormContainsOriginalSignatureOfRecipient boolean,
	DesignatedProxySignTheProxyFormInPresebceOfPantryPersonnel boolean
);
CREATE TABLE forms ( /*put with interview or agency*/
  
	AgencyMembershipAgreementandLiabilityRelease varchar(255), /*store url*/
	IllinoisFoodSanitationLicense boolean,
	HealthDepartentPermitandInspection boolean,
	PestControl boolean
//research how to store pdf or jpg in SQL (feature of application could be to upload a picture to form)
);
CREATE TABLE violations_concerns ( /* put with interview*/
    Intrw_id int,
	CommentsFromAgencyStaff text
);
CREATE TABLE comments_accolades (  /*add to interview*/
	Intrw_id int,
    CommentsFromAgencyStaff varchar(255),
    AgencyNeeds_Volunteers boolean,
    AgencyNeeds_Equiptment boolean,
    AgencyNeeds_Funding boolean,
    AgencyNeeds_Training boolean,
    DigitalSignNIFBRep //possibly jpg of sig?
    DateOfDSNIFBRep date,
    DigitalSignAgencyRep //Same^
    DataOfDSAgencyRep date
);
