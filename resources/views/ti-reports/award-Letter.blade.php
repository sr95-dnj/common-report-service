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
  </style>
</head>



<body>
  <?php
  $en = [
    'GovernmentPeopleRepublicBangladesh' => 'Government People Republic Bangladesh',
    'MinistryOfPlanning' => 'Ministry Of Planning',
    'PlanningDivision' => 'Planning Division',
    'SocialScienceResearchCouncil' => 'Social Science Research Council',
    'SherEbanglaNagarDhaka' => 'Sher-e-Bangla Nagar, Dhaka',
    'webSite' => 'www.ssrc.portal.govt.bd',
    'MemorandumNo' => 'Memorandum No',
    'Date' => 'Date',
    'Subject' => 'Subject ',
    'proposal_traning_institude_name' => 'Name Of Institute',
    'proposal_traning_institude_name2' => 'Name of Institute',
    'update' => 'Update',
    'save' => 'Save',
    'action' => 'Action',
    'required' => "is required!",
  ];

  $bn = [
    // new for view Page
    'GovernmentPeopleRepublicBangladesh' => 'গণপ্রজাতন্ত্রী বাংলাদেশ সরকার ',
    'MinistryOfPlanning' => 'পরিকল্পনা মন্ত্রণালয়',
    'PlanningDivision' => 'পরিকল্পনা বিভাগ',
    'SocialScienceResearchCouncil' => 'সামাজিকবিজ্ঞান গবেষণা পরিষদ',
    'SherEbanglaNagarDhaka' => 'শেরেবাংলা নগর, ঢাকা ',
    'webSite' => 'www.ssrc.portal.govt.bd',
    'MemorandumNo' => 'স্মারক নং',
    'Date' => 'তারিখঃ ',
    'Subject' => 'বিষয়ঃ ',
    'proposal_traning_institude_name' => 'প্রতিষ্ঠানের নাম',
    'proposal_traning_institude_name2' => 'প্রতিষ্ঠানের নাম',
    'update' => 'আপডেট করুন',
    'save' => 'সংরক্ষন করুন',
    'action' => 'একশন',
    'required' => "দরকার!",
  ];

  $L = ${$lng};
  $request_data = json_decode($val['latter']);
  // dd($request_data);
  // var_dump($request_data);
  // exit();
  //echo '<pre>',print_r($rr->researchTitle),'</pre>';
  //$request_data=json_decode($data['val']['finalReportOfProposalSubmission']);	
  //echo $request_data->objectSummary;die;

  ?>



  <div>

    <div class="mt-5">
      <div class="text-align-centre header-font-size" style=" line-height: 1.5; ">
        <div style="font-size: 120%;"><strong>{{$L['GovernmentPeopleRepublicBangladesh']}}</strong></div>
        <div><strong>{{$L['MinistryOfPlanning']}}</strong></div>
        <div><strong>{{$L['PlanningDivision']}}</strong></div>
        <div><strong>{{$L['SocialScienceResearchCouncil']}}</strong></div>
        <div><strong>{{$L['SherEbanglaNagarDhaka']}}</strong></div>
        <div><strong><u>{{$L['webSite']}}</u></strong></div>
      </div>

      <div class="mt-5">
        <table class="w-full" align="right">
          <tbody>
            <tr style="border: none;">

              <td rowspan="2" style="width: 70%; border: none;"> <b>{{$L['MemorandumNo']}} :</b> {{$request_data->memorandumNo}} </td>
              <td rowspan="2" style="border: none;  text-align: left;"><b>{{$L['Date']}}:</b></td>
              <td style="border: none;  ">
                {{$request_data->nothiDateEn}}
              </td>

            </tr>
            <tr style="border:  none;">


              <td style="border:none;  ">----------------------<br>{{$request_data->nothiDateBn}}</td>
            </tr>

            <tr>
              <td colspan="3"> <br>
                <strong>{{$request_data->userDto->name}}</strong> <br>
                <?php if ($request_data->isInstitutional == false) { ?>
                  <span>
                    {{$request_data->preDivisionDto->nameEn}}
                    {{$request_data->preDivisionDto->nameEn}} ,
                    {{$request_data->preDivisionDto->nameEn}}
                  </span>
                <?php } ?>

                <?php if ($request_data->isInstitutional == true) { ?>
                  <span>
                    {{$request_data->instAddressDetails}}
                  </span>
                <?php } ?>

              </td>
            </tr>
            <br>
            <tr class="mt-5">
              <td colspan="3"> <br>
                <span><strong>{{$L['Subject']}}</strong> : </span>
                {{$request_data->subject}}
              </td>
            </tr>
            <br>
            <tr>
              <td colspan="3" class="text-justify"> <br>
                <span> {!!$request_data->mailBody!!}</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>