<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>
    /* table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    } */

    @page {
        size: landscape;
        orientation: landscape;

    }
    @media print {
        .page-break {page-break-after: always;}
    }
    body {
        writing-mode: tb-rl;
    }
    table.center {
        margin-left: auto;
        margin-right: auto;
        width: 100% !important;
        padding: 5px;
    }

    .rootTable{
        border: 1px solid;
        border-collapse: collapse;
    }
    .left-border{
        border-left: 1px solid;
        border-collapse: collapse;
    }
    .right-border{
        border-right: 1px solid;
        border-collapse: collapse;
    }
    .top-border{
        border-top: 1px solid;
        border-collapse: collapse;
    }
    .bottom-border{
        border-bottom: 1px solid;
        border-collapse: collapse;
    }

    @page {
        margin-top: 5px;
    }

    td {
        vertical-align: top !important;
    }
    </style>

</head>


<body class="landscapePage" style="font-size: 24px;">
    <?php
    $data = json_decode($val['data']);
    ?>


    <!--    master table-->
    <div style="font-size: 24px; ">
	<table width="100%">
	<tr>
                    <td style="width: 100% !important; text-align: right;">
						বিওএফ নং:
                    </td>
                </tr>
            <tr>
                <td style="width: 100% !important; text-align: center;">
                                <h2>বাংলাদেশ সমরাস্ত্র কারখানা</h2>
                                <h3>গাজীপুর সেনানিবাস</h3>
                               <u> <span>উৎপাদনী হুকুমনামা </span></u>
                            </td>
            </tr>
        </table>
		
            <table class="rootTable" width="100%">
		<tr>
			<td class="rootTable" colspan="2">উন্নয়নমূলক  <br>
			{{$Controller::enToBnConveter($data->financialYear->financialYear)}} <br>
			উৎপাদনী শাখা: {{$Controller::enToBnConveter($data->section)}}
			</td>
			<td class="rootTable" colspan="2">শাখা: {{($data->sectionNo ? $data->sectionNo : '')}}</td>
		</tr>
		<tr>
			<td class="rootTable" colspan="2">বস্তুর নাম:  {{($data->itemMaster->itemNameBn ? $data->itemMaster->itemNameBn : '')}}</td>
			<td class="rootTable" colspan="2">প্রয়োজনীয় সংখ্যা/সেট : {{($data->requiredNumber ? $data->requiredNumber : '')}}</td>
		</tr>
		<tr>
			<td class="rootTable" colspan="2">অঙ্কন নম্বর:  {{($data->drawingNo ? $data->drawingNo : '')}}</td>
			<td class="rootTable" colspan="2"></td>
		</tr>
		<tr>
			<td class="rootTable">সংক্ষিপ্ত ফরমায়েশনামা:</td>
			<td class="rootTable"> {{($data->shortOrderNo ? $data->shortOrderNo : '')}}</td>
			<td class="rootTable">তারিখ:</td>
			<td class="rootTable">{{$Controller::enToBnConveter($Controller::dateFormatter($data->warrantDate))}}</td>
		</tr>
		<tr>
			<td class="rootTable">হুকুমনামা নম্বর ও তারিখ:</td>
			<td class="rootTable">{{($data->warrantNo ? $data->warrantNo : '')}}, {{$Controller::enToBnConveter($Controller::dateFormatter($data->warrantDate))}}</td>
			<td class="rootTable">হার তালিকা নম্বর :</td>
			<td class="rootTable"> {{($data->listNo ? $data->listNo : '')}}</td>
		</tr>
		<tr>
			<td class="rootTable">সম্পূরক কার্যাদেশ নম্বর:</td>
			<td class="rootTable">{{($data->supplementaryOrderNo ? $data->supplementaryOrderNo : '')}}</td>
			<td class="rootTable">প্রাক্কলন নম্বর:</td>
			<td class="rootTable">{{($data->estimateNo ? $data->estimateNo : '')}}</td>
		</tr>
		<tr>
			<td class="rootTable">সরবারহের সূচি:</td>
			<td class="rootTable"> {{$Controller::enToBnConveter($Controller::dateFormatter($data->lastDateOfSupply))}}</td>
			<td class="rootTable">সমাপ্তির তারিখ:</td>
			<td class="rootTable">{{$Controller::enToBnConveter($Controller::dateFormatter($data->completionDate))}}</td>
		</tr>
		<tr>
			<td class="rootTable">সরবরাহের শেষ তারিখ :</td>
			<td class="rootTable"> ..............</td>
			<td class="rootTable">প্রাপক :</td>
			<td class="rootTable">{{($data->estimateNo ? $data->employeePersonalInformation->employeeNameBangla : '')}}</td>
		</tr>
</table>
 <table width="100%">
            <tr> 
                @if($data->specialComments != null)
                <td style="width: 10%" > বিশেষ মন্তব্য : </td>
                <td style="text-align: left">{!! ($data->specialComments) !!}</td>
                @endif
            </tr>
        </table>
		<br>
			
			 <!--    Details Table-->
			 <table class="rootTable" width="100%">
			 <tr class="rootTable">
                    <td class="rootTable text-center">ক্রমিক</td>
                    <td class="rootTable text-center">প্রক্রিয়া বিবরণী </td>
                    <td class="rootTable text-center">হার </td>
                    <td class="rootTable text-center">ঘন্টা/মিলিয়ন </td>
                </tr>
				<tr class="rootTable" style="height: 50px !important; display: block; overflow: auto;">
                    <td class="rootTable text-center" style="height: 500px;"> </td>
                    <td class="rootTable text-center" style="height: 500px;"> </td>
                    <td class="rootTable text-center" style="height: 500px;"></td>
                    <td class="rootTable text-center" style="height: 500px;"> </td>
                </tr>
			 </table>
			<br>
			 <br>
			 
			<footer style="position: fixed; bottom: 0; width: 100%; font-size: 24px; text-align: center">
<table width="100%">
       <tr>
                <td style="width: 30%">প্রস্তুতকারক: </td>
                <td style="width: 20%">
                    
                </td>
                <td style="width: 5%"></td>
                <td style="width: 20%">পসহকারী প্রকৌশলী পরিকল্পনা</td>
                <td style="width: 30%;">
                   
                </td>
            </tr>
			<tr>
                <td style="width: 30%">তারিখ : </td>
                <td style="width: 20%">
                    
                </td>
                <td style="width: 5%"></td>
                <td style="width: 20%">পক্ষে কমান্ড্যান্ট</td>
                <td style="width: 30%;">
                   
                </td>
            </tr>
			
			<tr>
                <td style="width: 30%"></td>
                <td style="width: 20%">
                    
                </td>
                <td style="width: 5%"></td>
                <td style="width: 20%">তারিখ:</td>
                <td style="width: 30%;">
                   
                </td>
            </tr>
			</table>

    </footer>  
			  
			 
            
    </div>
	
	<div class="page-break"></div>
 <div style="font-size: 24px; ">
 <table width="100%">
 <tr>
                    <td style="width: 100% !important; text-align: right;">
						বিওএফ নং:
                    </td>
                </tr>
                <tr>
                    <td style="width: 100% !important; text-align: center;">
                      <u> <h3>খুচরা কাজের বিবরণ </h3> </u>
                    </td>
                </tr>
                <tr>
                    <td style="width: 100% !important; text-align: left;">
                      <h3>আদেশকৃত সংখ্যা :.............................</h3> 
                    </td>
                </tr>
				<tr>
                    <td style="width: 100% !important; text-align: center;">
                      <u> <h3>জমা/খরচের হিসাব </h3> </u>
                    </td>
                </tr>
            </table>
			 <table class="rootTable" width="100%">
			 <tr class="rootTable">
                    <td class="rootTable text-center">তারিখ </td>
                    <td class="rootTable text-center">সংখ্যা/সেট   </td>
                    <td class="rootTable text-center">গ্রহণকারী/পরিদর্শন  </td>
                    <td class="rootTable text-center">পরিদর্শন নোটের নম্বর </td>
                    <td class="rootTable text-center">তারিখ  </td>
                    <td class="rootTable text-center">বাকি </td>
                    <td class="rootTable text-center">বাতিল  </td>
                </tr>
				<tr class="rootTable" style="height: 50px !important; display: block; overflow: auto;">
                    <td class="rootTable text-center" style="height: 400px;"> </td>
                    <td class="rootTable text-center" style="height: 400px;"> </td>
                    <td class="rootTable text-center" style="height: 400px;"></td>
                    <td class="rootTable text-center" style="height: 400px;"> </td>
                    <td class="rootTable text-center" style="height: 400px;"> </td>
                    <td class="rootTable text-center" style="height: 400px;"> </td>
                    <td class="rootTable text-center" style="height: 400px;"> </td>
                </tr>
			 </table>
			 <br>
			 <table width="100%">
                <tr>
                    <td style="width: 100% !important; text-align: center;">
                      <u> <h3>সংশোধনী বিবরণী </h3> </u>
                    </td>
                </tr>
            </table>
			 <table class="rootTable" width="100%">
			 <tr class="rootTable">
                    <td class="rootTable text-center">ক্রমিক </td>
                    <td class="rootTable text-center">প্রক্রিয়া বিবরণী   </td>
                    <td class="rootTable text-center">পরিবর্তিত হার </td>
                    <td class="rootTable text-center">একক </td>
                    <td class="rootTable text-center">কোন অধিকার বলে </td>
                </tr>
				<tr  >
                    <td class="rootTable text-center" style="height: 400px;"> </td>
                    <td class="rootTable text-center" style="height: 400px;"> </td>
                    <td class="rootTable text-center" style="height: 400px;"></td>
                    <td class="rootTable text-center" style="height: 400px;"> </td>
                    <td class="rootTable text-center" style="height: 400px;"> </td>
                </tr>
			 </table>
 </div>

</body>