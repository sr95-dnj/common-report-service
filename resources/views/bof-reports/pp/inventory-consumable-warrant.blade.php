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


<body class="landscapePage">
    <?php
    $data = json_decode($val['data']);
    ?>


    <!--    master table-->
    <div>
	<table width="100%">
	<tr>
                    <td style="width: 100% !important; text-align: right;">
						বিওএফ নং: ১০১
                    </td>
                </tr>
            <tr>
                <td style="width: 100% !important; text-align: center;">
                                <span style="font-size: 18px;">বাংলাদেশ সমরাস্ত্র কারখানা</span><br>
                                <span style="font-size: 16px;">গাজীপুর সেনানিবাস</span><br>
                               <u> <span> ইনভেন্ট্রি/ কনজুমেবল দ্রব্যের হুকুমনামা</span></u>
                            </td>
            </tr>
        </table>
		
		<table  width="100%">
		<tr>
			<td>কারিগরী শাখার নাম :  {{($data->section ? $data->section->banglaName : '')}}</td>
			<td>শাখা কোড নম্বর: {{($data->sectionNo ? $data->sectionNo : '')}}</td>
		</tr>
		<tr>
			<td>সংক্ষিপ্ত ফরমায়েশনামা: {{($data->shortOrderNo ? $data->shortOrderNo : '')}}</td>
			<td>তারিখ: {{$Controller::enToBnConveter($Controller::dateFormatter($data->orderDate))}}</td>
		</tr>
		<tr>
			<td>হুকুমনামা নম্বর:   {{($data->warrantNo ? $data->warrantNo : '')}}</td>
			<td>তারিখ: {{$Controller::enToBnConveter($Controller::dateFormatter($data->warrantDate))}}</td>
		</tr>
		<tr>
			<td colspan="2">হার তালিকা নম্বর:   {{($data->listNo ? $data->listNo : '')}}</td>
		</tr>
		<tr>
			<td colspan="2">সম্পূরক কার্যাদেশ নম্বর :  {{($data->supplementaryOrderNo ? $data->supplementaryOrderNo : '')}}</td>
		</tr>
		<tr>
			<td colspan="2">হুকুমনামার কার্যকারিতার মেয়াদ :  {{$Controller::enToBnConveter($Controller::dateFormatter($data->warrantValidityFrom))}}
			- {{$Controller::enToBnConveter($Controller::dateFormatter($data->warrantValidityTo))}}
			</td>
		</tr>
		<tr>
		@if($data->specialComments != null)
                <td colspan="2" style="text-align: left"> বিশেষ মন্তব্য : {!! ($data->specialComments) !!}</td>
                @endif
		</tr>
		<tr>
			<td colspan="2">চাহিদাকৃত দ্রব্যের হুকুমনামা :  {{($data->supplementaryOrderNo ? $data->supplementaryOrderNo : '')}}</td>
		</tr>
		<tr>
			<td colspan="2">প্রয়োজনীয় দ্রব্যের সংখ্যা/সেট: {{($data->requiredNumber ? $data->requiredNumber : '')}} </td>
		</tr>
</table>

<br>
<br>
<br>
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
						বিওএফ নং: ১০১
                    </td>
                </tr>
                <tr>
                    <td style="width: 100% !important; text-align: center;">
                      <u> <span style="font-size: 16px;">তলবি দ্রব্যের বিবরণ  </span> </u>
                    </td>
                </tr>
            </table>
			 <table class="rootTable" width="100%">
			 <tr class="rootTable">
                    <td class="rootTable text-center">দ্রব্যের পরিমান ও সঠিক বিবরণ </td>
                    <td class="rootTable text-center">একক  </td>
                    <td class="rootTable text-center">চাহিদার পরিমান বা ওজন </td>
                    <td class="rootTable text-center">দেয় পরিমান বা ওজন  </td>
                    <td class="rootTable text-center">মোট পরিমান বা ওজন </td>
                    <td class="rootTable text-center">তলবি নোট নম্বর ও তারিখ  </td>
                </tr>
				<tr class="rootTable" style="height: 50px !important; display: block; overflow: auto;">
                    <td class="rootTable text-center" style="height: 400px;"> </td>
                    <td class="rootTable text-center" style="height: 400px;"> </td>
                    <td class="rootTable text-center" style="height: 400px;"></td>
                    <td class="rootTable text-center" style="height: 400px;"> </td>
                    <td class="rootTable text-center" style="height: 400px;"> </td>
                    <td class="rootTable text-center" style="height: 400px;"> </td>
                </tr>
			 </table>
			 <br>
			 <table width="100%">
                <tr>
                    <td style="width: 100% !important; text-align: center;">
                      <u> <span style="font-size: 16px;">পুনুরুদ্ধারকৃত দ্রব্যের বিবরণ  </span> </u>
                    </td>
                </tr>
            </table>
			 <table class="rootTable" width="100%">
			 <tr class="rootTable">
                    <td class="rootTable text-center">দ্রব্যের পরিমান ও সঠিক বিবরণ </td>
                    <td class="rootTable text-center">একক  </td>
                    <td class="rootTable text-center">দ্রব্যের পরিমান বা ওজন</td>
                    <td class="rootTable text-center">মোট পরিমান বা ওজন </td>
                    <td class="rootTable text-center">পুনুরুদ্ধারকৃত নোটের নম্বর ও তারিখ  </td>
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
