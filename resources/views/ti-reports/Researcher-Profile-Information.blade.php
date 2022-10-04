<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">
    
    <style>    
    .text-green {
        font-weight: 600;
        color: green;
    }

    .text-medium {
        font-size: 17px;
        font-weight: bold;
    }

    .text-small {
        font-size: 13px;
        font-weight: bold;
    }

    .text-xl {
        font-size: 1.25rem;
        /* 20px */
        line-height: 1.75rem;
        /* 28px */
    }

    .text-xxl {
        font-size: 2.25rem;
        /* 20px */
        line-height: 1.75rem;
        /* 28px */
    }

    .font-semibold {
        font-weight: 600;
    }

    .font-full-bold {
        font-weight: bold;
    }

    .text-justify {
        text-align: justify;
    }

    .text-center {
        text-align: center;
    }

    .margin-top {
        margin-top: 20px;
    }

    .text-align-centre {
        text-align: center;
    }

    .header-font-size {}

   .notApplicableMainDiv{
        border:1px solid #CCC;
    }
    .notApplicableTitle{
        text-align: left; 
        padding: 5px; 
        background-color: #90cec5;
    }
    .notApplicable{
        border: 1px solid #CCC;
        padding: 8x;
        text-align: center;
        background: #dda0a0;
        font-size: 12px;
        font-weight: bold;
    }
    </style>
</head>



<body>
    <?php
    $en = [
        'headerTitle'=> 'Researcher Profile Information',
        'headerSubTitle'=> 'Home > Researcher Profile Information',

        'headerTitle4'=> 'My Profile',
        'headerSubTitle4'=> 'Home > My Profile',

        'headerTitle5'=>'Profile List',
        'headerSubTitle5'=> 'Home > Profile List',

        'headerTitle2'=> 'Update Profile',
        'headerSubTitle2'=> 'Home > Update Profile',

        'headerTitle3'=> 'Institutional Profile Information',
        'headerSubTitle3'=> 'Home > Institutional Profile Information',

        

        'research_proposal'=> 'Research Proposal',
        //Tab Title
        'tab_1_title'=> 'Personal Information',
        'tab_2_title'=> 'Emergency Contact',
        'tab_3_title'=> 'Education Information',
        'tab_4_title'=> 'Publication Information',
        'tab_5_title'=> 'Professional Experience',
        'tab_6_title'=> 'Research Experience',
        'tab_7_title'=> 'Training Information',
        'inst_title'=> 'Institute Information',

        //Tab 1 Details
        'name'=> 'Researcher Name',
        'nameTd'=> 'Researcher / Institute Name',
        'declaration'=> 'Declaration',
        'bd'=> 'Date of Birth',
        'trainingOfResearch'=> 'Training of Research',
        'age'=> 'Age',
        'fatherName'=> "Father's Name",
        'motherName'=> "Mother's Name",
        'email'=> 'E-mail',
        'tin'=> 'TIN',
        'nid'=> 'NID',
        'verification'=> 'Verification',
        'mobileNo'=> 'Mobile No',
        'ocupation'=> 'Occupation',
        'designation'=> 'Designation',
        'totalReseachNo'=> 'Total No of Researches',
        'uploadProfileImage'=> 'Upload Photo',
        'uploadSignatureImage'=> 'Upload Signature',

        'division'=> 'Division',
        'district'=> 'District',
        'upzilla'=> 'Upozila/Thana',
        'union'=> 'Union',
        'anotherAddress'=> 'Address(Village/ Mahalla/ Union)', // Change date 24/01/2022 'Village / Mahalla / Union',

        'presentAddessDetails'=> 'Present Address Details',
        'addressCheckTitle'=> 'If the current and permanent addresses are the same, click on the box',

        //Inner card header
        'cardHeader1'=> 'Basic Details',
        'cardHeader2'=> 'Permanent Address Details',
        'cardHeader3'=> 'Present Address Details',

        //Tab 2
        'cardHeader1_t2'=> 'Emergency Contact',
        'name_t2'=> 'Name',
        'email_address_t2'=> 'E-mail',
        'mobile_no_t2'=> 'Mobile No',
        'present_address_t2'=> 'Present Address',
        'permanent_address_t2'=> 'Permanent Address',
        'nid_number_t2'=> 'NID',
        'Thesis'=> 'Thesis',
        'subject'=> 'Subject',
        'Division_Class'=> 'Division / Class',
        'CGPA'=> 'CGPA',

        //Tab 3
        'cardHeader1_t3'=> 'Education Information',
        'certification_name'=> 'Degree',
        'passing_year_month'=> 'Passing Year',
        'divsion'=> 'Division/Class or CGPA',
        'onlydivsion'=> 'Division/Class',
        'or_CGPA'=> 'CGPA',
        'institute_name'=> 'Institute Name',
        'is_foreign'=> 'Foreign( If Any)',
        'upload_certificate_image'=> 'Upload Certificate',
        'university_reg_no_for_PhD_MPhil'=> 'Registration No',
        'discipline'=> 'Discipline',
        'RegNo'=> 'Registration No',


        //Tab 4
        'published_in'=> 'Published In (Journal)',
        'article_title'=> 'Article Title',
        'role_in_team'=> 'Role In Team',
        'journal_paper_nature'=> 'Journal Paper Nature',
        'publication_date'=> 'Publication Date',
        'ISSN'=> 'ISSN',
        'ISBN'=> 'ISBN',
        'upload_relevant_doc'=> 'Upload Relevant Document',
        'Govt'=> 'Govt.',
        'Private'=> 'Private',
        'Others'=> 'Others',

        //Tab 5
        'organization_name'=> 'Organization Name',
        'is_gov_employee'=> 'Employee Type',
        'from_date'=> 'From',
        'to_date'=> 'To',
        'is_continue'=> 'Till Date',
        'responsibility_detail'=> 'Detail of Responsibility ',
        'scale'=> 'Scale',
        'research_objective'=> 'Research Objectives',

        //Tab 6
        'research_type'=> 'Research Organization',
        'research_topic'=> 'Research Topic',
        'research_year'=> 'Research Year',
        'research_status'=> 'Research Status',
        'research_value_in_BDT'=> 'Research Grant (BDT)',
        'research_finding_and_importance'=> 'Summary of Research',
        'total_research_exp'=> 'Total Research Experience',
        'funding_organization'=> 'Funding Organization',

        //Tab 7
        'training_name'=> 'Training Type',
        'institute_or_center_name'=> 'Institute Name',
        'training_topic'=> 'Training Topic',
        'duration'=> 'Training Duration',
        'result'=> 'Training Year',

        //List Page
        'sl_no'=> 'Serial No',
        'reg_no'=> 'Registration No',
        'mobile_no'=> 'Mobile No',
        'proposal_info'=> 'Proposal Information',


        // Button in bottom
        'previous'=> 'Previous',
        'save_and_next'=> 'Save & Next',
        'save'=> 'Save',
        'next'=> 'Next',
        'update'=> 'Update',
        'update_and_next'=> 'Update & Next',
        'add_more'=> 'Add More',

        'updateProfile'=> 'Update Profile',
        'updateProfile2'=> 'Create Profile',
        'action'=> 'Action',
        'edit_profile'=> 'Edit Profile',

        //View Page
        'spouseName'=> 'Spouse Name',
        'pAddress'=> 'Present Address',
        'PermanentAddress'=> 'Permanent Address',
        'DateOfBirth'=> 'Date of Birth',
        'Citizenship'=> 'Citizenship',
        'EducationInformation'=> 'Education Information',
        'Sl'=> 'SL',
        'Subject'=> 'Subject',
        'Degree'=> 'Degree',
        'PassingYear'=> 'Passing Year',
        'Result'=> 'Result',
        'InstitutionName'=> 'Institution Name',
        'OrganizationName'=> 'Organization Name',
        'Designation'=> 'Designation',
        'DeclarationReq'=> 'Declaration Is Required',
        'From'=> 'From',
        'To'=> 'To',
        'IsGovt'=> 'Is Govt',
        'PublicationInformation'=> 'Publication Information',
        'ArticleTitle'=> 'Article Title',
        'PublishedIn'=> 'Published In',
        'Role'=> 'Role',
        'PublicationDate'=> 'Publication Date',
        'ResearchExperiences'=> 'Research Experiences',
        'ResearchTitle'=> 'Research Title',
        'SupervisorEvaluation'=> 'Supervisor/Evaluation',
        'Category'=> 'Category',
        'FiscalYear'=> 'Fiscal Year',
        'ResearchStatus'=> 'Research Status',
        'NameOfTraining'=> 'Name Of Training',
        'InstitutionCenter'=> 'Institution Center',
        'Duration'=> 'Duration',
        'Year'=> 'Year',
        'Name'=> 'Name',
        'Email'=> 'E-mail',
        'MobileNo'=> 'Mobile No',
        'NID'=> 'NID',
        'ProfessionalExperiences'=> 'Professional Experiences',
        'TrainingInformation'=> 'Training Information',
        'EmergencyContact'=> 'Emergency Contact',
        'Declaration'=> 'Declaration',
        'download'=> 'Download',
        'print'=> 'Print',
        'title'=> 'CURRICULUM VITAE OF',

        'Union'=> 'Union',
        'Upazila'=> 'Upazila',
        'District'=> 'District',
        'Division'=> 'Division',
        'AnotherAddress'=> 'Address',
        'Personal_Digital_Information'=> "Personal Digital Information",
        'view_details'=> '',

        //========================================================================
        'ResearcherProposal'=> 'Researcher Proposal',
        'Info'=> 'Information',
        'InstituteInformation'=> 'Institute Information',
        'RscWorkingInOrg'=> 'Researcher Working in Organization',
        'UploadDoc'=> 'Upload Document',
        'SupervisorInfo'=> 'Researcher Supervisor Information',
        'ActionPlan'=> 'Action Plan',
        'BudgetDetails'=> 'Budget Details',

        'ProfilePersonalInfo'=> 'Profile Personal Information',
        //'FiscalYear'=> 'Fiscal Year',
        'ResearchCatType'=> 'Research Category Type',
        'Sector'=> 'Field',
        'SubSector'=> 'Sub Field',
        //'ResearchTitle'=> 'Research Title',
        'SdgsGoals'=> 'SDGs',
        'IsCancelled'=> 'Is Cancelled',
        'CancellationNote'=> 'Cancellation Note',
        'IsEditable'=> 'Is Editable?',

        'Information'=> 'Information',
        'Introduction'=> 'Introduction',
        'ObjectivesOfTheStudy'=> 'Objectives of the Study',
        'FormulationResearch'=> 'Formulation Research',
        'ConceptualFramework'=> 'Conceptual Framework',
        'ReviewOfLiterature'=> 'Review of Literature',
        'RationaleOfTheStudy'=> 'Rationale of the Study',
        'ScopeOfTheStudy'=> 'Scope of the Study',
        'MethodsOfTheStudy'=> 'Methods of the Study',
        'ExpectedOutput'=> 'Expected Output',
        'RelationWithSocialPolicy'=> 'RelationWith Social Policy',
        'TentativeChapterization'=> 'Tentative Chapterization',
        'ActionPlanTentativeBudget'=> 'Action Plan Tentative Budget',
        'BibliographyReferences'=> 'Bibliography References',
        'AdditionalInfoTopicProposal'=> 'Additional Information Topic Proposal',

        'InstituteName'=> 'Institute Name',
        'AddressDetails'=> 'Address Details',
        'YearOfEstablishment'=> 'Year of Establishment',
        'RegistrationNo'=> 'Registration No',
        'TelephoneNo'=> 'Telephone No',
        'EmailAddress'=> 'E-mail Address',
        'TinNo'=> 'TIN No',
        'TaxTokenImgOfCurrentYear'=> 'Tax Token Image of Current Year',
        'phD'=> 'PhD (Person No)',
        'Mphil'=> 'MPhil (Person No)',
        'Masters'=> 'Masters (Person No)',

        'ResearcherName'=> 'Researcher Name',
        //'MobileNo'=> 'Mobile No',
        'NidNo'=> 'NID No',
        //'Designation'=> 'Designation',
        'EducationQualification'=> 'Educational Qualification (Last Degree)',
        'SupervisorName'=> 'Supervisor Name',
        'PresentOfficeName'=> 'Present Office Name',
        'PresentOfficeAddress'=> 'Present Office Address',

        'TaskName'=> 'Task Name',
        'StartDate'=> 'Start Date',
        'EndDate'=> 'End Date',
        'Remarks'=> 'Remarks ',

        'ExpenditureItem'=> 'Expenditure Item',
        'Purpose'=> 'Purpose ',
        'TotalAmount'=> 'Total Amount ',


        //=============================
        'researcherProposalList'=> 'Researcher Proposal List',
        'researchCategory'=> 'Research Category',
        'researcherName'=> 'Researcher Name',
        'researchTitle'=> 'Research Title',
        'field'=> 'Field',
        'subField'=> 'Sub Field',
        'evaluatorName'=> 'Evaluator Name',
        //'action'=> 'Action',
        'financialYearName'=> 'Financial Year Name',

        'search'=> 'Search',
        //'download'=> 'Download',
        'viewDetails'=> 'View Details',


        'ResearcherWorkingInOrganization'=> 'Researcher Working In Organization',
        //'RscWorkingInOrg'=> 'Researcher Working in Organization',
        'AddMore'=> 'Add More',
        'Organization'=> 'Organization',
        //'ResearcherName'=> 'Researcher Name',
        'Age'=> 'Age',
        'Occupation'=> 'Occupation',
        'ResearcherNameReq'=> 'Researcher name required',
        ///'TelephoneNo'=> 'Telephone No',
        'TelephoneNoReq'=> 'Telephone no required',
        //'MobileNo'=> 'Mobile No',
        'MobileNoReq'=> 'Mobile no required',
        // 'EmailAddress'=> 'Email',
        'EmailAddressReq'=> 'E-mail required',
        // 'NidNo'=> 'NID No',
        'NidNoReq'=> 'NID no required',
        //'Designation'=> 'Designation',
        'DesignationReq'=> 'Designation required',
        //'EducationQualification'=> 'Education Qualification',
        'EducationQualificationReq'=> 'Education qualification required',
        //'IsEditable'=> 'Is Editable?',
        'IsEditableReq'=> 'Is editable required',
        'IsMainResearcher'=> 'Main Researcher',

        // table
        'time_allocation'=> 'Time Allocation',
        'schedule'=> 'Schedule',
        'concerned_individuals'=> 'Concerned Individuals',
        'presentation_of_research_paper'=> 'Presentation of Research Paper',
        'review'=> 'Review ',
        'Heading'=> 'Research Title',
        'message'=> 'I hereby declare that the details mentioned above in this profile are correct to the best of my knowledge and belief. I bear the responsibility of  any error or mistake in the data if occur in future.',
        'Notapplicable'=> 'Not Applicable',
        'Applicable'=> 'Applicable',


        'headerTitleSeminar'=> 'Seminar Details',
        'headerSubTitleSeminar'=> 'Home > Seminar Details',
        'Name_and_address_of_the_researcher'=> 'Name and address of the researcher',
        'Evaloitor_name_and_address'=> "Evaloitor's name and address",
        'research_category'=> 'Research Category',
        'details'=> 'ResearcherName / Designation / Mobile No/ Email Address / TelephoneNo',
        'Article_title_is_required'=> 'Article title is required!',
        'Published_in_is_required'=> 'Published in is required!',
        'Role_in_team_is_required'=> 'Role in team is required!',
        'Journal_paper_nature_is_required'=> 'Journal paper nature is required!',
        'Publication_date_is_required'=> 'Publication date is required!',
        'File_is_required'=> 'File is required!',
        'Declaration_m'=> 'I hereby declare that the details mentioned above in this profile are correct to the best of my knowledge and belief. I bear the responsibility of  any error or mistake in the data if occur in future.',
        'profileInfo' => 'Your profile is not completed yet. Please complete your profile.',

    ];

    $bn = [
        'headerTitle'=> 'গবেষকের প্রোফাইলের তথ্য',
        'headerSubTitle'=> 'হোম > গবেষকের প্রোফাইলের তথ্য',

        'headerTitle4'=> 'আমার প্রোফাইল',
        'headerSubTitle4'=> 'হোম > আমার প্রোফাইল',

        'headerTitle5'=>'প্রোফাইল তালিকা',
        'headerSubTitle5'=> 'হোম > প্রোফাইল তালিকা',

        'headerTitle2'=> 'আপডেট প্রোফাইল',
        'headerSubTitle2'=> 'হোম > আপডেট প্রোফাইল',

        'headerTitle3'=> 'প্রাতিষ্ঠানিক প্রোফাইল তথ্য',
        'headerSubTitle3'=> 'বাড়ি > প্রাতিষ্ঠানিক প্রোফাইল তথ্য',

        //Tab Title
        'tab_1_title'=> 'ব্যক্তিগত তথ্য',
        'tab_2_title'=> 'জরুরী যোগাযোগ',
        'declaration'=> 'ঘোষণা',
        'tab_3_title'=> 'শিক্ষার তথ্য',
        'tab_4_title'=> 'প্রকাশনার তথ্য',
        'tab_5_title'=> 'পেশাগত অভিজ্ঞতা',
        'tab_6_title'=> 'গবেষণা অভিজ্ঞতা',
        'tab_7_title'=> 'প্রশিক্ষণ তথ্য',
        'inst_title'=> 'প্রতিষ্ঠানের তথ্য',

        //Tab 1 Details
        'name'=> 'গবেষকের নাম',
        'nameTd'=> 'গবেষকের / ইনস্টিটিউটের নাম',
        'bd'=> 'জন্ম তারিখ',
        'trainingOfResearch'=> 'গবেষণার প্রশিক্ষণ',
        'age'=> 'বয়স',
        'fatherName'=> 'পিতার নাম ',
        'motherName'=> 'মাতার নাম',
        'email'=> 'ই-মেইল',
        'verification'=> 'প্রতিপাদন',
        'mobileNo'=> 'মোবাইল নাম্বার',
        'tin'=> 'টিআইএন',
        'nid'=> 'জাতীয় পরিচয়পত্র',
        'ocupation'=> 'পেশা',
        'designation'=> 'পদবী',
        'totalReseachNo'=> 'গবেষণার মোট সংখ্যা',
        'uploadProfileImage'=> 'ছবি আপলোড করুন',
        'uploadSignatureImage'=> 'স্বাক্ষরের আপলোড করুন',

        'division'=> 'বিভাগ',
        'district'=> 'জেলা',
        'upzilla'=> 'উপজেলা/থানা',
        'union'=> 'ইউনিয়ন',
        'anotherAddress'=> 'ঠিকানা(গ্রামঃ/ মহল্লাঃ /ইউনিয়ন)', //Change date 24/01/2022,
        'scale'=> 'স্কেল',
        'presentAddessDetails'=> 'বর্তমান ঠিকানা বিবরণ',
        'addressCheckTitle'=> 'বর্তমান ও স্থায়ী ঠিকানা একই হলে বক্সে ক্লিক করুন',

        //Inner card header
        'cardHeader1'=> 'প্রাথমিক বিবরণ',
        'cardHeader2'=> 'স্থায়ী ঠিকানা বিবরণ',
        'cardHeader3'=> 'বর্তমান ঠিকানা বিবরণ',

        //Tab 2
        'cardHeader1_t2'=> 'জরুরী যোগাযোগ',
        'name_t2'=> 'নাম',
        'email_address_t2'=> 'ই-মেইল',
        'mobile_no_t2'=> 'মোবাইল নাম্বার',
        'present_address_t2'=> 'বর্তমান ঠিকানা',
        'permanent_address_t2'=> 'স্থায়ী ঠিকানা',
        'nid_number_t2'=> 'জাতীয় পরিচয়পত্র',
        'Thesis'=> 'থিসিস',
        'subject'=> 'বিষয়',
        'Division_Class'=> 'বিভাগ / শ্রেণী',
        'CGPA'=> 'সিজিপিএ',

        //Tab 3
        'cardHeader1_t3'=> 'শিক্ষার তথ্য',
        'certification_name'=> 'ডিগ্রী',
        'passing_year_month'=> 'পাশের সন',
        'divsion'=> 'বিভাগ/শ্রেণী বা সিজিপিএ',
        'onlydivsion'=> 'বিভাগ/শ্রেণী',
        'or_CGPA'=> 'সিজিপিএ',
        'institute_name'=> 'প্রতিষ্ঠানের নাম',
        'is_foreign'=> 'বৈদেশিক ডিগ্রী (প্রযোজ্য হলে)',
        'upload_certificate_image'=> 'আপলোড সার্টিফিকেট',
        'university_reg_no_for_PhD_MPhil'=> 'বিশ্ববিদ্যালয়ের রেজঃ নং',
        'discipline'=> 'অনুষদ',
        'RegNo'=> 'নিবন্ধন নম্বর',


        //Tab 4
        'published_in'=> '(জার্নাল) এ প্রকাশিত',
        'article_title'=> 'আর্টিকেল শিরোনাম',
        'role_in_team'=> 'দলে ভূমিকা',
        'journal_paper_nature'=> 'জার্নাল পেপার ধরন',
        'publication_date'=> 'প্রকাশের তারিখ',
        'ISSN'=> 'আইএসএসএন',
        'ISBN'=> 'আইএসবিএন',
        'upload_relevant_doc'=> 'প্রাসঙ্গিক তথ্য আপলোড',
        'Govt'=> 'সরকারি',
        'Private'=>'প্রাইভেট',
        'Others' => 'অন্যান্য',

        //Tab 5
        'organization_name'=> 'প্রতিষ্ঠানের নাম',
        'is_gov_employee'=> 'পেশার ধরন',
        'from_date'=> 'শুরুর তারিখ',
        'to_date'=> 'শেষ তারিখ',
        'is_continue'=> 'চলমান',
        'responsibility_detail'=> 'দায়িত্বের বিস্তারিত',
        'research_objective'=> 'গবেষণার লক্ষ্য',

        //Tab 6
        'research_type'=> 'গবেষণা সংস্থা',
        'research_topic'=> 'গবেষণা বিষয়',
        'research_year'=> 'গবেষণার বছর',
        'research_status'=> 'গবেষণার অবস্থা',
        'research_value_in_BDT'=> 'গবেষণা অনুদান (টাকা)',
        'research_finding_and_importance'=> 'গবেষণার সারাংশ',
        'total_research_exp'=> 'মোট গবেষণার অভিজ্ঞতা',
        'funding_organization'=> 'অর্থায়ন সংস্থা',

        //Tab 7
        'training_name'=> 'প্রশিক্ষণের ধরন',
        'institute_or_center_name'=> 'প্রতিষ্ঠানের নাম',
        'training_topic'=> 'প্রশিক্ষণের বিষয়',
        'duration'=> 'প্রশিক্ষণের সময়কাল',
        'result'=> 'প্রশিক্ষণ বছর',

        //List Page
        'sl_no'=> 'ক্রমিক নং',
        'reg_no'=> 'রেজিস্ট্রেশন নম্বর',
        'mobile_no'=> 'মোবাইল নাম্বার',
        'proposal_info'=> 'প্রস্তাবনার তথ্য',
        'research_proposal'=> 'গবেষণা প্রস্তাব',

        // Button in bottom
        'previous'=> 'আগে',
        'save_and_next'=> 'সংরক্ষণ করুন এবং পরবর্তী',
        'save'=> 'সংরক্ষণ',
        'next'=> 'পরবর্তী',
        'update'=> 'আপডেট',
        'update_and_next'=> 'আপডেট করুন এবং পরবর্তী',
        'add_more'=> 'আরো যোগ করুন',
        'updateProfile'=> 'প্রোফাইল আপডেট করুন',
        'updateProfile2'=> 'প্রোফাইল যোগ করুন',
        'action'=> 'অ্যাকশন',
        'edit_profile'=> 'আপডেট প্রোফাইল',

        //View Page
        'spouseName'=> 'স্বামী বা স্ত্রী নাম',
        'pAddress'=> 'বর্তমান ঠিকানা',
        'PermanentAddress'=> 'স্থায়ী ঠিকানা',
        'DateOfBirth'=> 'জন্ম তারিখ',
        'Citizenship'=> 'নাগরিকত্ব',
        'EducationInformation'=> 'শিক্ষা তথ্য',
        'Sl'=> 'SL',
        'Subject'=> 'বিষয়',
        'Degree'=> 'ডিগ্রী',
        'PassingYear'=> 'পাসিং বছর',
        'Result'=> 'ফলাফল',
        'InstitutionName'=> 'প্রতিষ্ঠানের নাম',
        'OrganizationName'=> 'প্রতিষ্ঠানের নাম',
        'Designation'=> 'পদবী',
        'From'=> 'থেকে',
        'To'=> 'প্রতি',
        'IsGovt'=> 'সরকার হয়',
        'PublicationInformation'=> 'প্রকাশনার তথ্য',
        'ArticleTitle'=> 'প্রবন্ধের শিরোনাম',
        'PublishedIn'=> 'প্রকাশিত',
        'Role'=> 'ভূমিকা',
        'PublicationDate'=> 'প্রকাশনার তারিখ',
        'ResearchExperiences'=> 'গবেষণা অভিজ্ঞতা',
        'ResearchTitle'=> 'গবেষণা শিরোনাম',
        'SupervisorEvaluation'=> 'সুপারভাইজার/মূল্যায়ন',
        'Category'=> 'শ্রেণী',
        'FiscalYear'=> 'অর্থবছর',
        'ResearchStatus'=> 'গবেষণা অবস্থা',
        'NameOfTraining'=> 'প্রশিক্ষণের নাম',
        'InstitutionCenter'=> 'প্রতিষ্ঠান কেন্দ্র',
        'Duration'=> 'সময়কাল',
        'Year'=> 'বছর',
        'Name'=> 'নাম',
        'Email'=> 'ই-মেইল',
        'MobileNo'=> 'মোবাইল নাম্বার',
        'NID'=> 'এন আইডি',
        'ProfessionalExperiences'=> 'পেশাগত অভিজ্ঞতা',
        'TrainingInformation'=> 'প্রশিক্ষণ তথ্য',
        'EmergencyContact'=> 'জরুরী যোগাযোগ',
        'Declaration'=> 'ঘোষণা',
        'download'=> 'ডাউনলোড করুন',
        'print'=> 'প্রিন্ট',
        'title'=> '',
        'Union'=> 'ইউনিয়ন',
        'Upazila'=> 'উপজেলা',
        'District'=> 'জেলা',
        'Division'=> 'বিভাগ',
        'AnotherAddress'=> 'ঠিকানা(গ্রামঃ/ মহল্লাঃ /ইউনিয়ন)',



        //===================================================


        'ResearcherProposal'=> 'গবেষকের প্রস্তাব',
        'Info'=> 'তথ্য',
        'InstituteInformation'=> 'ইনস্টিটিউট তথ্য',
        'RscWorkingInOrg'=> 'প্রতিষ্ঠানে কর্মরত গবেষক',
        'UploadDoc'=> 'নথি আপলোড করুন',
        'SupervisorInfo'=> 'গবেষক সুপারভাইজার তথ্য',
        'ActionPlan'=> 'কর্ম পরিকল্পনা',
        'BudgetDetails'=> 'বাজেটের বিবরণ',
        'phD'=> 'পিএইচডি (ব্যক্তির সংখ্যা )',
        'Mphil'=> 'এমফিল (ব্যক্তির সংখ্যা )',
        'Masters'=> 'মাস্টার্স (ব্যক্তির সংখ্যা )',

        'ProfilePersonalInfo'=> 'প্রোফাইল ব্যক্তিগত তথ্য',
        ///'FiscalYear'=> 'অর্থবছর',
        'ResearchCatType'=> 'গবেষণা বিভাগের ধরন',
        'Sector'=> 'ক্ষেত্র',
        'SubSector'=> 'উপ-ক্ষেত্র',
        //'ResearchTitle'=> 'গবেষণা শিরোনাম',


        'Information'=> 'Information',
        'Introduction'=> 'Introduction',
        'ObjectivesOfTheStudy'=> 'Objectives of the Study',
        'FormulationResearch'=> 'Formulation Research',
        'ConceptualFramework'=> 'Conceptual Framework',
        'ReviewOfLiterature'=> 'Review of Literature',
        'RationaleOfTheStudy'=> 'Rationale of the Study',
        'ScopeOfTheStudy'=> 'Scope of the Study',
        'MethodsOfTheStudy'=> 'Methods of the Study',
        'ExpectedOutput'=> 'Expected Output',
        'RelationWithSocialPolicy'=> 'RelationWith Social Policy',
        'TentativeChapterization'=> 'Tentative Chapterization',
        'ActionPlanTentativeBudget'=> 'Action Plan Tentative Budget',
        'BibliographyReferences'=> 'Bibliography References',
        'AdditionalInfoTopicProposal'=> 'Additional Information Topic Proposal',

        'InstituteName'=> 'প্রতিষ্ঠানের নাম',
        'AddressDetails'=> 'বিস্তারিত ঠিকানা',
        'YearOfEstablishment'=> 'সংস্থাপন বছর',
        'RegistrationNo'=> 'নিবন্ধন নম্বর',
        'TelephoneNo'=> 'টেলিফন নম্বর',
        'EmailAddress'=> 'ই-মেইল',
        'TinNo'=> 'টিআইএন নং',
        'TaxTokenImgOfCurrentYear'=> 'বর্তমান বছরের ট্যাক্স টোকেন এর ছবি',
        'ResearcherWorkingInOrganization'=> 'প্রতিষ্ঠানে কর্মরত গবেষক',

        'ResearcherName'=> 'গবেষকের নাম',
        //'MobileNo'=> 'মোবাইল নাম্বার',
        'NidNo'=> 'জাতীয় পরিচয়পত্র নম্বর',
        //'Designation'=> 'Designation',
        'EducationQualification'=> 'শিক্ষাগত যোগ্যতা (শেষ ডিগ্রি)',

        'SupervisorName'=> 'Supervisor Name',
        'PresentOfficeName'=> 'Present Office Name',
        'PresentOfficeAddress'=> 'Present Office Address',

        'TaskName'=> 'Task Name',
        'StartDate'=> 'Start Date',
        'EndDate'=> 'End Date',
        'Remarks'=> 'Remarks ',

        'ExpenditureItem'=> 'Expenditure Item',
        'Purpose'=> 'Purpose ',
        'TotalAmount'=> 'Total Amount ',
        'Personal_Digital_Information'=>"ব্যক্তিগত ডিজিটাল তথ্য",


        //=============================
        'researcherProposalList'=> 'গবেষক প্রস্তাবের তালিকা',
        'researchCategory'=> 'গবেষণা বিভাগ',
        'researcherName'=> 'গবেষকের নাম',
        'researchTitle'=> 'গবেষণা শিরোনাম',
        'field'=> 'মাঠ',
        'subField'=> 'সাব ফিল্ড',
        'evaluatorName'=> 'মূল্যায়নকারীর নাম',
        //'action'=> 'কর্ম',
        'financialYearName'=> 'আর্থিক বছরের নাম',

        'search'=> 'অনুসন্ধান করুন',
        //'download'=> 'ডাউনলোড করুন',
        'viewDetails'=> 'বিস্তারিত দেখুন',

        //'RscWorkingInOrg'=> 'প্রতিষ্ঠানে কর্মরত গবেষক',
        'AddMore'=> 'আরো যোগ করুন',
        'Organization'=> 'প্রতিষ্ঠান',
        // 'ResearcherName'=> 'গবেষকের নাম',
        'Age'=> 'বয়স',
        'Occupation'=> 'পেশা',
        'ResearcherNameReq'=> 'গবেষকের নাম প্রয়োজন',
        //'TelephoneNo'=> 'টেলিফোন নাম্বার',
        'TelephoneNoReq'=> 'টেলিফোন নাম্বার প্রয়োজন',
        // 'MobileNo'=> 'মোবাইল নাম্বার',
        'MobileNoReq'=> 'মোবাইল নাম্বার প্রয়োজন',
        // 'EmailAddress'=> 'ই-মেইল',
        'EmailAddressReq'=> 'ই-মেইল প্রয়োজন',
        // 'NidNo'=> 'জাতীয় পরিচয়পত্র নম্বর',
        'NidNoReq'=> 'জাতীয় পরিচয়পত্র নম্বর প্রয়োজন',
        // 'Designation'=> 'পদবি',
        'DesignationReq'=> 'পদবি প্রয়োজন',
        //'EducationQualification'=> 'শিক্ষাগত যোগ্যতা',
        'EducationQualificationReq'=> 'শিক্ষাগত যোগ্যতা প্রয়োজন',
        'IsEditable'=> 'সম্পাদনাযোগ্য?',
        'IsEditableReq'=> 'সম্পাদনাযোগ্য প্রয়োজন',
        'IsMainResearcher'=> 'প্রধান গবেষক',

        // table
        'time_allocation'=> 'সময় বন্টন',
        'schedule'=> 'অনুষ্ঠানসূচী',
        'concerned_individuals'=> 'সংশ্লিষ্ট ব্যক্তিবর্গ',
        'presentation_of_research_paper'=> 'রিসার্চ পেপার উপস্থাপনা',
        'review'=> 'পুনঃমূল্যায়ন ',
        'Heading'=> 'গবেষণার শিরোনাম',
        'message'=> 'আমি এতদ্বারা ঘোষণা করছি যে এই প্রোফাইলে উপরে উল্লিখিত বিবরণগুলি আমার সর্বোত্তম জ্ঞান এবং বিশ্বাস অনুসারে সঠিক। ভবিষ্যতে যদি ডেটাতে কোনও ত্রুটি বা ভুল হয় তার দায়ভার আমি বহন করব।',
        'Notapplicable'=> 'প্রযোজ্য নয় হলে',
        'Applicable'=> 'প্রযোজ্য',

        'headerTitleSeminar'=>'সেমিনারের বিস্তারিত',
        'headerSubTitleSeminar'=> 'হোম > সেমিনারের বিস্তারিত',
        'Name_and_address_of_the_researcher'=>'গবেষকের নাম ও ঠিকানা',       
        'Evaloitor_name_and_address' => " মূল্যায়নকারীর নাম ও  ঠিকানা",
        'research_category'=>'গবেষণা বিভাগ',
        'details'=>'গবেষকের নাম / পদবী / মোবাইল নম্বর / ইমেল ঠিকানা / টেলিফোন নম্বর',
        'Article_title_is_required'=>'নিবন্ধের শিরোনাম প্রয়োজন!',
        'Published_in_is_required'=> 'এ প্রকাশিত প্রয়োজন!',
        'Role_in_team_is_required'=> 'দলে ভূমিকা প্রয়োজন!',
        'Journal_paper_nature_is_required'=> 'আমাদের কাগজ প্রকৃতি প্রয়োজন!',
        'Publication_date_is_required'=> 'প্রকাশের তারিখ প্রয়োজন!',
        'File_is_required'=> 'ফাইল প্রয়োজন!',
        'Declaration_m'=>'আমি এতদ্বারা ঘোষণা করছি যে এই প্রোফাইলে উপরে উল্লিখিত বিবরণগুলি আমার সর্বোত্তম জ্ঞান এবং বিশ্বাস অনুসারে সঠিক। ভবিষ্যতে যদি ডেটাতে কোনও ত্রুটি বা ভুল হয় তার দায়ভার আমি বহন করব।',
        'profileInfo' => 'আপনার প্রোফাইল এখনও সম্পূর্ণ হয়নি. আপনার প্রোফাইল সম্পূর্ণ করুন.',
    ];

    $L = ${$lng};
    $data = json_decode($val['data']);
    $userDetails = json_decode($val['userDetails']);
    $isInstitutional = json_decode($val['isInstitutional']);
    $name=json_decode($val['name']);

    $class = ($lng =='bn') ? 'bnTable' : 'enTable';
    ?>


    <div style="text-align: center; padding: 5px;  font-size: 24px; ">
        <b> {{$L['headerTitle']}}</b>
    </div>
    <br><br>


    <div class="sfont">
    †KvwfW-19 ˆewk¦K gnvgvixi Kvi‡Y A_©‰bwZK ev¯ÍeZvi †h wPÎ jÿ¨ Kiv hvq Zv‡Z g‡b nq ‡cÖwÿZ cwiKíbv 2041-G AšÍ©f‚³ iæcvšÍi‡hvM¨ cÖZ¨vkvmg~n AR©b AwaK ঝুঁwKc~Y© n‡q D‡V‡Q| ZeyI cÖe„w× Z¡ivwš^Z Kivi j‡ÿ¨ Ges AvMvgx `yB `kK Gi MwZ a‡i ivL‡Z  bxwZwba©viK‡`i cÖ‡qvRb mvgwóK A_©‰bwZK w¯’wZkxjZv eRvq ivLv, D”P¸Y m¤úbœ gvbe cuywR I RwUj AeKvVv‡gvi Rb¨ ch©vß m¤ú` msMÖn Kiv Ges cÖ‡qvRbxq g¨vbyd¨vKPvwis I †mevLv‡Zi Dbœqb Kiv, hv‡Z G¸‡jv wek¦evRv‡ii Dc‡hvMx n‡q D‡V| Gi cvkvcvwk, ‡cÖwÿZ cwiKíbv 2041 G †hgb ¸iæZ¡ ‡`qv n‡q‡Q ‡Zgwb cÖvwZôvwbK I Mfb©¨vÝ Gi †ÿ‡Î D‡jøL‡hvM¨ DbœwZ mvab Ki‡Z n‡e| G wel‡q miKv‡ii Dcjwä n‡jv †h,  wb¤œ Avq I wb¤œ ga¨g Av‡qi  †`k¸‡jv‡Z Mf©b¨vÝ I cÖwZôv‡bi †h KvVv‡gv †`Lv hvq Zv †_‡K D”P ga¨g Av‡qi †`k Ges D”P Av‡qi †`‡ki Mfb©¨vm Ges cÖvwZôvwbK KvVv‡gvi e¨vcK cv_©K¨ i‡q‡Q|
    </div>
@if($isInstitutional=='false')
    <div>
        <table class="tblClass {{$class}}">
            <tr>
                <th style="text-align: left; width: 25%;">{{$L['name']}}:</th>
                <td   style=" width: 40%; "> {{$name ? $name : ""}}</td>
                <td class="table-border " rowspan="9" style="   text-align: center;  width: 35%;">
                    <div style="    ">
                        <div style="   text-align: center;">                   
                        
                            <img src="{{$data->minio}}{{$data->personalInfo?$data->personalInfo->rmsUserImageId->userImageUrl : ""}}"
                                alt="Trulli" width="30%" height="30%" style=" background-color: #90cec5; ">
                        </div>                       
                        <div>
                            <img src="{{$data->minio}}{{$data->personalInfo?$data->personalInfo->rmsUserSignatureId->signatureImageUrl :""}}"
                                alt="Trulli" width="30%" height="8%">
                        </div>
                    </div>

                </td>
            </tr>
            <tr>
                <th style="text-align: left; width: 25%;">{{$L['fatherName']}}:</th>
                <td>{{$data->personalInfo->fatherName}}</td>
            </tr>

            <tr>
                <th style="text-align: left; width: 25%;">{{$L['motherName']}}:</th>
                <td>{{$data->personalInfo->motherName}}</td>
            </tr>
            <!-- k============================================================= -->
            <tr>
                <th style="text-align: left;">{{$L['pAddress']}}:</th>
                <td><b>{{$L['Union']}}: </b></td>
            </tr>
            <tr>
                <th style="text-align: left;"> </th>
                <td><b>{{$L['Upazila']}}: </b> {{$data->personalInfo->preUpzilaDto->nameEn}} </td>
            </tr>
            <tr>
                <th style="text-align: left;"> </th>
                <td><b>{{$L['District']}}: </b> {{$data->personalInfo->preDistrictDto->nameEn}}</td>
            </tr>
            <tr>
                <th style="text-align: left;"> </th>
                <td><b>{{$L['Division']}}: </b> {{$data->personalInfo->preDivisionDto->nameEn}}</td>
            </tr>
            <tr>
                <th style="text-align: left;"> </th>
                <td><b>{{$L['AnotherAddress']}}: </b> {{$data->personalInfo->preAnotherDetails}}</td>
            </tr>

            <!-- <============================================================ -->
            <tr>
                <th style="text-align: left;">{{$L['PermanentAddress']}}:</th>
                <td><b>{{$L['Union']}}: </b> {{$data->personalInfo->unionId}} </td>
            </tr>
            <tr>
                <th style="text-align: left;"> </th>
                <td><b>{{$L['Upazila']}}: </b> {{$data->personalInfo->upzilaDto->nameEn}}</td>
            </tr>
            <tr>
                <th style="text-align: left;"> </th>
                <td><b>{{$L['District']}}: </b> {{$data->personalInfo->districtDto->nameEn}}</td>
            </tr>
            <tr>
                <th style="text-align: left;"> </th>
                <td><b>{{$L['Division']}}: </b> {{$data->personalInfo->divisionDto->nameEn}}</td>
            </tr>
            <tr>
                <th style="text-align: left;"> </th>
                <td><b>{{$L['AnotherAddress']}}:</b> {{$data->personalInfo->anotherDetails}} </td>
            </tr>
            <br>
            <br>
            
            <tr>
                <th style="text-align: left;">{{$L['DateOfBirth']}}:</th>
                <td>
                <?php
                    echo date('d-m-Y', strtotime($data->personalInfo->dateOfBirth));
                    /*
                    if ($lng == 'en') {
                            echo date('d-m-Y', strtotime($data->personalInfo->dateOfBirth));
                        } else {
                            $d = explode("-", $data->personalInfo->dateOfBirth);
                            echo $Controller::entoBn($d[2], 'number') . '-';
                            echo $Controller::entoBn($d[1], 'number') . '-';
                            echo $Controller::entoBn($d[0], 'number');
                        }
                    */
                    ?>
                </td>
            </tr>            
        </table>
    </div>
    @endif


@if($isInstitutional=='true')
    
        <table class="tblClass {{$class}}" style="text-align: left; width: 100%;">

            <tr>
                <th style="text-align: left; width: 25%;">{{$L['InstituteName']}}:</th>
                <td   style=" width: 40%; "> {{$name ? $name : ""}}</td>                
            </tr>

            <tr>
                <th style="text-align: left; width: 25%;">{{$L['YearOfEstablishment']}}:</th>
                <td>{{$data->personalInfo->instYearOfEstablishment}}</td>
            </tr>

            <tr>
                <th style="text-align: left; width: 25%;">{{$L['AddressDetails']}}:</th>
                <td>{{$data->personalInfo->instAddressDetails}}</td>
            </tr>


            <tr>
                <th style="text-align: left; width: 25%;">{{$L['TelephoneNo']}}:</th>
                <td   style=" width: 40%; "> {{$data->personalInfo->instTelephoneNo}}</td>                
            </tr>

            <tr>
                <th style="text-align: left; width: 25%;">{{$L['EmailAddress']}}:</th>
                <td>{{$data->personalInfo->emailAddress}}</td>
            </tr>

            <tr>
                <th style="text-align: left; width: 25%;">{{$L['RegistrationNo']}}:</th>
                <td>{{$data->personalInfo->instRegistrationNo}}</td>
            </tr>

            <tr>
                <th style="text-align: left; width: 25%;">{{$L['TinNo']}}:</th>
                <td style=" width: 40%;">{{$data->personalInfo->tinnumber ? $data->personalInfo->tinnumber: ""}}</td>                
            </tr>

            <tr>
                <th style="text-align: left; width: 25%;">{{$L['MobileNo']}}:</th>
                <td>
                    {{$Controller::entoBn($data->personalInfo->mobileNo, 'number', $lng)}}
                </td>
            </tr>

            <tr>
                <th style="text-align: left; width: 25%;">{{$L['phD']}}:</th>
                <td>{{$Controller::entoBn($data->personalInfo->phd, 'number', $lng)}}</td>
            </tr>

            <tr>
                <th style="text-align: left; width: 25%;">{{$L['Mphil']}}:</th>
                <td style=" width: 40%; ">
                {{$Controller::entoBn($data->personalInfo->mphil, 'number', $lng)}}
                </td>                
            </tr>

            <tr>
                <th style="text-align: left; width: 25%;">{{$L['Masters']}}:</th>
                <td>
                    {{$Controller::entoBn($data->personalInfo->masters, 'number', $lng)}}
                </td>
            </tr>           
                                  
        </table>
    </div>
@endif
<br><br>
    <!-- ========================== -->
@if($isInstitutional=='false')
<div>
    @if(!empty($data->educationInfos))
    <div style="text-align: left; padding: 5px; background-color: #90cec5;">
        <b> {{$L['EducationInformation']}}</b>
    </div>

    <div>
        <table class="table-border {{$class}}" style="  width: 100%;">

            <tr>
                <th class="table-border ">{{$L['sl_no']}}</th>
                <th class="table-border ">{{$L['Subject']}} </th>
                <th class="table-border "> {{$L['Degree']}}</th>
                <th class="table-border "> {{$L['PassingYear']}}</th>
                <th class="table-border "> {{$L['Result']}}</th>
                <th class="table-border "> {{$L['InstitutionName']}}</th>
            </tr>

            @foreach( $data->educationInfos as $index=> $item)  
            <tr>
                <td class="table-border text-center">{{$Controller::entoBn($index +1, 'number', $lng)}}</td>
                <td class="table-border ">{{$item->subject}}</td>
                <td class="table-border ">{{$item->certificationName}}</td>
                <td class="table-border ">{{$item->passingYearMonth}}</td>
                <td class="table-border ">GPA {{$item->cgpa}} Out of {{$item->scale}} </td>
                <td class="table-border ">{{$item->instituteName}}</td>
            </tr>
             @endforeach
        </table>
    </div><br><br>
    @endif

@if(empty($data->educationInfos))
   <div class="notApplicableMainDiv">
        <div class="notApplicableTitle">{{$L['EducationInformation']}}</div>
        <div class="notApplicable">
           {{$L['Notapplicable']}}
        </div>
    </div>
<br><br>
@endif

    <!-- ======================= -->

     @if(!empty($data->professionalExperiences))
    <div style="text-align: left;padding: 5px; background-color: #90cec5;">
        <b> {{$L['ProfessionalExperiences']}}</b>
    </div>

    <div>
        <table class="table-border {{$class}}" style="  width: 100%;">
            <tr>
                <th class="table-border ">{{$L['sl_no']}}</th>
                <th class="table-border ">{{$L['OrganizationName']}} </th>
                <th class="table-border ">{{$L['Designation']}} </th>
                <th class="table-border "> {{$L['From']}} </th>
                <th class="table-border "> {{$L['To']}} </th>
                <th class="table-border "> {{$L['IsGovt']}} </th>
            </tr>
            @foreach( $data->professionalExperiences as $index=> $item)  
            <tr>
                <td class="table-border text-center">{{$Controller::entoBn($index +1, 'number', $lng)}}</td>
                <td class="table-border ">{{$item->organizationName}}</td>
                <td class="table-border ">{{$item->designation}}</td>
                <td class="table-border ">
                <?php echo date('d-m-Y', strtotime($item->fromDate));?>
                </td>
                <td class="table-border ">{{$item->isContinue ? 'Continue' : date('d-m-Y',strtotime($item->toDate))}}</td>
               <td class="table-border "><?php print($item->isGovEmployee ===1) ? 'Govt' : print($item->isGovEmployee ===2 )? 'Private' :'Others' ?></td>
            </tr>
             @endforeach
        </table>
    </div><br><br>
    @endif
    @if(empty($data->professionalExperiences))
    <div class="notApplicableMainDiv">
        <div class="notApplicableTitle">{{$L['ProfessionalExperiences']}}</div>
        <div class="notApplicable">
            {{$L['Notapplicable']}}
        </div>
    </div>
<br><br>
@endif
    <!-- ======== -->



 @if(!empty($data->publicationInfos))
    <div style="text-align: left; padding: 5px; background-color: #90cec5;">
        <b>
            {{$L['PublicationInformation']}}
        </b>
    </div>

    
    <div>
        <table class="table-border {{$class}}" style="  width: 100%;">
            <tr>
                <th class="table-border ">{{$L['sl_no']}}</th>
                <th class="table-border "> {{$L['ArticleTitle']}}</th>
                <th class="table-border "> {{$L['PublishedIn']}}</th>
                <th class="table-border "> {{$L['Role']}}</th>
                <th class="table-border "> {{$L['PublicationDate']}}</th>
                <th class="table-border "> {{$L['ISSN']}}</th>
                <th class="table-border "> {{$L['ISBN']}}</th>
            </tr>            
        @foreach( $data->publicationInfos as $index=> $item)  
            <tr>
                <td class="table-border text-center">
                {{$Controller::entoBn($index +1, 'number', $lng)}}
                </td>
                <td class="table-border ">{{$item->articleTitle}}</td>
                <td class="table-border ">{{$item->publishedIn}}</td>
                <td class="table-border ">{{$item->roleInTeam}}</td>
                <td class="table-border ">
                 <?php echo date('d-m-Y', strtotime($item->publicationDate));?>
                </td>
                <td class="table-border ">{{$item->issn}}</td>
                <td class="table-border ">{{$item->isbn}}</td>
            </tr>
         @endforeach
        </table>
    </div> <br><br>
     @endif
     @if(empty($data->publicationInfos))
     <div class="notApplicableMainDiv">
        <div class="notApplicableTitle">{{$L['PublicationInformation']}}</div>
        <div class="notApplicable">
            {{$L['Notapplicable']}}
        </div>
    </div>
<br><br>
@endif

     
    <!-- ================================ -->
    @if(!empty($data->researchExperiences))
    <div style="text-align: left; padding: 5px; background-color: #90cec5;">
        <b> {{$L['ResearchExperiences']}}</b>
    </div>
    <div>
        <table class="table-border {{$class}}" style="  width: 100%;">
            <tr>
                <th class="table-border ">{{$L['sl_no']}}</th>
                <th class="table-border "> {{$L['ResearchTitle']}}</th>
                {{-- <th class="table-border "> {{$L['Category']}}</th> --}}
                <th class="table-border "> {{$L['FiscalYear']}}</th>
                <th class="table-border "> {{$L['ResearchStatus']}}</th>
            </tr>

        @foreach( $data->researchExperiences as $index=> $item)  
            <tr>
                <td class="table-border text-center">{{$Controller::entoBn($index +1, 'number', $lng)}}</td>
                <td class="table-border ">{{$item->researchTopic}}</td>
                {{-- <td class="table-border ">{{$item->researchYear}}</td> --}}
                <td class="table-border ">{{$item->researchYear}}</td>
                <td class="table-border ">{{$item->researchStatus}}</td>
            </tr>
        @endforeach

        </table>
    </div>
    <br><br>
     @endif
     @if(empty($data->researchExperiences))
     <div class="notApplicableMainDiv">
        <div class="notApplicableTitle">{{$L['ResearchExperiences']}}</div>
        <div class="notApplicable">
            {{$L['Notapplicable']}}
        </div>
    </div>
<br><br>
@endif
    <!-- ================= -->

@if(!empty($data->trainings))
    <div style="text-align: left; padding: 5px; background-color: #90cec5;">
        <b> {{$L['TrainingInformation']}}</b>
    </div>
    <div>
        <table class="table-border {{$class}}" style="  width: 100%;">
            <tr>
                <th class="table-border ">{{$L['sl_no']}}</th>
                <th class="table-border "> {{$L['NameOfTraining']}}</th>
                <th class="table-border "> {{$L['InstitutionCenter']}}</th>
                <th class="table-border "> {{$L['Duration']}}</th>
                <th class="table-border "> {{$L['Year']}}</th>
            </tr>
        @foreach( $data->trainings as $index=> $item)  
            <tr>
                <td class="table-border text-center"> 
                    {{$Controller::entoBn($index +1, 'number', $lng)}}
                </td>
                <td class="table-border ">{{$item->trainingName}}</td>
                <td class="table-border ">{{$item->instituteOrCenterName}}</td>
                <td class="table-border ">{{$item->duration}}</td>
                <td class="table-border ">{{$item->result}}</td>
            </tr>
        @endforeach
        </table>
    </div>
    <br><br>
     @endif

     @if(empty($data->trainings))
     <div class="notApplicableMainDiv">
        <div class="notApplicableTitle">{{$L['TrainingInformation']}}</div>
        <div class="notApplicable">
            {{$L['Notapplicable']}}
        </div>
    </div>
<br><br>
@endif
    <!-- ================= -->

@if(!empty($data->relativeInfos))
    <div style="text-align: left; padding: 5px; background-color: #90cec5;">
        <b> {{$L['EmergencyContact']}}</b>
    </div>
    <div>
        <table class="table-border {{$class}}" style="  width: 100%;">
            <tr>
                <th class="table-border ">{{$L['sl_no']}}</th>
                <th class="table-border "> {{$L['Name']}}</th>
                <th class="table-border "> {{$L['Email']}}</th>
                <th class="table-border "> {{$L['MobileNo']}}</th>
                <th class="table-border "> {{$L['NID']}}</th>
                <th class="table-border "> {{$L['pAddress']}}</th>
                <th class="table-border "> {{$L['PermanentAddress']}}</th>
            </tr>            

            @foreach( $data->relativeInfos as $index=> $item) 
            <tr>
                <td class="table-border text-center"><?php echo $Controller::entoBn($index +1, 'number'); ?></td>
                <td class="table-border ">{{$item->name}}</td>
                <td class="table-border ">{{$item->email}}</td>
                <td class="table-border ">{{$Controller::entoBn($item->phoneNo, 'number', $lng)}}</td>
                <td class="table-border ">{{$Controller::entoBn($item->nid, 'number', $lng)}}</td>
                <td class="table-border ">{{$item->presentAddress}}</td>
                <td class="table-border ">{{$item->permanentAddress}}</td>               
            </tr>
             @endforeach
        </table>
    </div>
    <br><br>
    @endif
@endif


    <!-- ================= -->
@if($isInstitutional=='true')  
@if(!empty($data->researcherProfileRscWorkingInOrgList))  
    <div style="text-align: left; padding: 5px; background-color: #90cec5;">
        <b> {{$L['ResearcherWorkingInOrganization']}}</b>
    </div>

    <div>
        <table class="table-border {{$class}}" style="  width: 100%;">
            <tr>
                <th class="table-border text-center">{{$L['sl_no']}}</th>
                <th class="table-border "> {{$L['details']}}</th>
                <th class="table-border "> {{$L['Age']}}</th>
                <th class="table-border "> {{$L['Occupation']}}</th>
                <th class="table-border "> {{$L['NidNo']}}</th>
                <th class="table-border "> {{$L['EducationQualification']}}</th>
                <th class="table-border "> {{$L['Personal_Digital_Information']}}</th>                
            </tr>        

              @foreach( $data->researcherProfileRscWorkingInOrgList as $index=> $item)                           
            <tr>
                <td class="text-center">
                    <?php 
                        echo $Controller::entoBn($index +1, 'number', $lng); 
                    ?>
                </td>
                <td class="table-border ">
                <span style="color: rgb(8, 10, 9);">{{$L['researcherName']}} :
                                                {{$item->researcherName}}</span><br>
                                            <span style="color: rgb(6, 241, 104);">{{$L['Designation']}}</span>
                                            : <span>{{$item->designation}}</span><br>
                                            <span style="color: rgb(117, 245, 12);">{{$L['MobileNo']}}</span> :
                                            <span>
                                            {{$Controller::entoBn($item->mobileNo, 'number', $lng)}}</span><br>
                                            <span style="color: rgb(226, 223, 7);">{{$L['EmailAddress']}}</span>
                                            : <span>{{$item->emailAddress}}</span><br>
                                            <span style="color: rgb(235, 84, 25);">{{$L['TelephoneNo']}}</span>
                                            : <span>{{$item->telephoneNo}}</span>
                </td>               
                <td class="table-border ">
                    {{$Controller::entoBn($item->age, 'number', $lng)}}
                </td>
                <td class="table-border ">{{$item->occupation}}</td>
                <td class="table-border ">{{$Controller::entoBn($item->nidNo, 'number', $lng)}}</td>
                <td class="table-border ">{{$item->educationQualification}}</td>
                <td class="table-border ">{{$item->personalDigitalInformation}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <br><br>
    @endif

    @if(empty($data->researcherProfileRscWorkingInOrgList))
     <div class="notApplicableMainDiv">
        <div class="notApplicableTitle">{{$L['ResearcherWorkingInOrganization']}}</div>
        <div class="notApplicable">
            {{$L['Notapplicable']}}
        </div>
    </div>
<br><br>
@endif

@endif
    


  @if($isInstitutional=='false')
    <div style="text-align: left; padding: 5px; background-color: #90cec5;">
        <b> {{$L['Declaration']}}</b>
    </div>
  @if($data->personalInfo->declaration)
    <div style="text-align: left; padding: 5px;  ">    
        {{$L['message']}}      
    </div>
  @endif
  @endif

</body>

</html>