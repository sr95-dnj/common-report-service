<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>
        @page {
        margin-top: 5px;
       }
        /* table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    } */

        table.center {
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            padding: 5px;
        }
    </style>

</head>


<body>
<?php
$en = [];

$bn = [];
$data = json_decode($val['data']);

?>

<div style="font-size: 24px; ">
    <table width="100%">
        <tr>
            <td style="width: 33%"></td>
            <td style="width: 34%; text-align: center;">
                সীমিত 
                <br>
                <u>দৈনিক আদেশনামা ২য় খন্ড</u>
                <br>
                <u>বেসামরিক</u>
                
            </td>
            <td style="width: 33%; text-align: center;">
                <!-- <br>
                বিওএফ নম্বরঃ -->
            </td>
        </tr>
    </table>


    <table width="100%">
        <tr>
            <td style="width: 30%">ইউনিট</td>
            <td style="width: 3%">:</td>
            <td style="width: 20%">বাংলাদেশ সমরাস্ত্র কারখানা</td>
            <td style="width: 5%"></td>
            <td style="width: 10%">স্থান</td>
            <td style="width: 3%;">:</td>
            <td style="width: 30%;">গাজীপুর সেনানিবাস</td>
        </tr>

        <tr>
            <td style="width: 30%">ক্রমিক নম্বর</td>
            <td style="width: 3%">:</td>
            <td style="width: 20%">
			@if($data->master->presentDailyOrder != null && $data->master->presentDailyOrder->orderNumber != null)
                    <sapn>{{$Controller::enToBnConveter(optional($data->master->presentDailyOrder)->orderNumber)}} </sapn>
                @endif
			</td>
            <td style="width: 5%"></td>
            <td style="width: 10%">তারিখ</td>
            <td style="width: 3%;">:</td>
             <td style="width: 30%;">
			 @if($data->master->presentDailyOrder != null && $data->master->presentDailyOrder->banglaDate != null)
                    <sapn>{{($data->master->presentDailyOrder->banglaDate)}} &nbsp;/ &nbsp;</sapn>
                @endif

                    @if($data->master->presentDailyOrder != null && $data->master->presentDailyOrder->entryDate != null)
                        <span> {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data->master->presentDailyOrder)->entryDate))}}
                        </span>
                    @endif
					</td>
        </tr>

        <tr>
            <td style="width: 30%">পূর্বে প্রকাশিত দৈনিক আদেশ নামা ২য় খন্ড নম্বর</td>
            <td style="width: 3%">:</td>
            <td style="width: 20%">
			@if($data->master->previousDailyOrder != null && $data->master->previousDailyOrder->orderNumber != null)
                    <sapn>{{$Controller::enToBnConveter(optional($data->master->previousDailyOrder)->orderNumber)}} </sapn>
                @endif</td>
            <td style="width: 5%"></td>
            <td style="width: 10%">তারিখ</td>
            <td style="width: 3%;">:</td>
            <td style="width: 30%;">
			@if($data->master->previousDailyOrder != null && $data->master->previousDailyOrder->banglaDate != null)
                    <sapn>{{($data->master->previousDailyOrder->banglaDate)}} &nbsp;/ &nbsp;</sapn>
                @endif

                    @if($data->master->previousDailyOrder != null && $data->master->previousDailyOrder->entryDate != null)
                        <span> {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data->master->previousDailyOrder)->entryDate))}}
                        </span>
                    @endif
					</td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td style="text-align: center;">
                <br>
                @if($master->divison != null)
                <strong><u>{{($master->divison)}}</u></strong>
                @endif
            </td>
        </tr>
    </table>

    <!-- subject part -->

    <table width="100%">
        <tr>
           @if($master->subject != null)
            <td><b><u>{{($master->subject)}}</u></b> </td>
            @endif
        </tr>
    </table>
    <!-- subject part -->

    <!-- header part -->

    <table width="100%">
        <tr>
             @if($master->header != null)
            <td>{!! ($master->header) !!}</td>
            @endif
        </tr>
    </table>

    <!-- header part -->

 <br>
    <div style="text-align: center;">
    <table class="center tbBorder" style="text-align: center; padding: 5px;">
            <thead>
                  <tr>
                        <th style="width: 5%; padding: 2px; ">ক্রমিক</th>
                        <th style="width: 15%; padding: 2px; ">ব্যক্তিগত নম্বর</th>
						<th style="width: 15%; padding: 2px; ">পদবি ও শাখা </th>
						<th style="width: 15%; padding: 2px; ">নাম</th>
						<th style="width: 15%; padding: 2px; ">হইতে</th>
						<th style="width: 15%; padding: 2px; ">পর্যন্ত</th>
						<th style="width: 10%; padding: 2px; ">মোট দিন </th>
						<th style="width: 10%; padding: 2px; ">মন্তব্য</th>
                    </tr>

            </thead>
    </table>
	<table class="center" style="text-align: center; padding: 5px;">
                <tbody>
                    @foreach ($data->details as $index => $list)
                    <tr>
                        <td style="width: 5%; padding: 2px; ">{{$Controller::entoBn($index+1,'number')}} |</td>
                      
                        <td style="text-align: left; width: 15%; padding: 2px;">
						@if($list->employee != null)
							<sapn>{{$Controller::enToBnConveter(optional($list->employee)->code)}} </sapn>
							@endif
						</td>
						
                        <td style="text-align: left; width: 15%; padding: 2px;">
						@if($list->employee != null && $list->employee->employeeOfficialInformation && $list->employee->employeeOfficialInformation->designation)
							<sapn>{{optional($list->employee->employeeOfficialInformation->designation)->banglaName}}</sapn>
							<br>
							@endif
						@if($list->employee != null && $list->employee->employeeOfficialInformation && $list->employee->employeeOfficialInformation->branch)
							<sapn>{{optional($list->employee->employeeOfficialInformation->branch)->banglaName}}</sapn>
							@endif
						</td>
						
                        <td style="text-align: left; width: 15%; padding: 2px;">
						@if($list->employee != null)
							<sapn>{{optional($list->employee)->employeeNameBangla}}</sapn>
							@endif
						</td>
						
						
						<td style="text-align: left; width: 15%; padding: 2px;">
						<span>
						<span>{{$Controller::enToBnConveter($Controller::dateFormatter(optional($list)->fromDate))}}</span> 
						</span> 
						</td>
						
						<td style="text-align: left; width: 15%; padding: 2px;">
						<span>
						<span>{{$Controller::enToBnConveter($Controller::dateFormatter(optional($list)->toDate))}}</span> 
						</span> 
						</td>
						
						
						<td style="text-align: left; width: 10%; padding: 2px;">
						<span>
						{{$Controller::enToBnConveter(optional($list)->totalDays)}} দিন
						</span> 
						</td>
						
						
						
						<td style="text-align: left; width: 10%; padding: 2px;">
						<span>{{optional($list)->remarks}}</span> 
						</td>
                    </tr>
                    @endforeach
                </tbody>
                <br>
                <br>
    </table>
    
   <table width="100%">
        <tr>
            <td>মোট প্রকাশনা সংখ্যা  ({{$Controller::entoBn(count($data->details),'number')}}) মাত্র</td>
        </tr>
        
    </table>      
 <br>		 

  <!-- body part -->

			
     <table width="100%">
        <tr>
           @if($master->body != null)
            <td>{!! ($master->body) !!}</td>
            @endif
        </tr>
        
    </table>

    <br>

   <!-- body part -->

   <table width="100%" style="text-align: center;">
        <tr>
             @if($master->presentDailyOrder != null)
            <td><u>{{$Controller::enToBnConveter(optional($master->presentDailyOrder)->referenceNo)}}</u></td>
            @endif
        </tr>
        
    </table>

   <br>


   <!-- footer part -->

   <table width="100%">
        <tr>
            <td width="50%">{!! (optional($data->master)->footer) !!}</td>
            <td width="20%"></td>
            <td width="30%">

            <div style="float: right;">
			@if($data->master->presentDailyOrder != null && $data->master->presentDailyOrder->manager != null)
				<span>{{ optional($data->master->presentDailyOrder->manager)->employeeNameBangla }}</span>
				<br>
				@endif
			@if($data->master->presentDailyOrder != null && $data->master->presentDailyOrder->managerDesignation != null)
				<span>{{ optional($data->master->presentDailyOrder->managerDesignation)->banglaName }}</span>
				@endif

            </div>

            
            
            </td>
        </tr>
        
    </table>
           

   <!-- footer part -->


           
	

    </div>
</div>