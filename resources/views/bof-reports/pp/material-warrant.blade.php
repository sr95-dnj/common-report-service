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
                               <u> <span>দ্রব্যের হুকুমনামা</span></u>
                            </td>
            </tr>
        </table>
		
            <table width="100%">
            <tr>
                <td style="width: 30%">{{$Controller::enToBnConveter($data->master->financialYear->financialYear)}}</td>
                <td style="width: 2%"></td>
                <td style="width: 20%"></td>
                <td style="width: 5%"></td>
                <td style="width: 20%"> শাখা নম্বর</td>
                <td style="width: 2%;">:</td>
                <td style="width: 30%;">{{($data->master->sectionNo ? $data->master->sectionNo : '')}}</td>
            </tr>

            <tr>
                <td style="width: 30%">উৎপাদনী শাখা </td>
                <td style="width: 2%">:</td>
                <td style="width: 20%">
                    {{($data->master->section ? $data->master->section->banglaName : '')}}

                </td>
            </tr>

            <tr>
                <td style="width: 30%">বস্তুর নাম</td>
                <td style="width: 2%">:</td>
                <td style="width: 20%">
                    {{($data->master->productCode->mcProduct ? $data->master->productCode->mcProduct->nameBn : $data->master->productCode->component->nameBn)}}
                </td>
                <td style="width: 5%"></td>
                <td style="width: 20%">প্রয়োজনীয় সংখ্যা/সেট </td>
                <td style="width: 2%;">:</td>
                <td style="width: 30%;">
                   {{($data->master->requiredNumber ? $data->master->requiredNumber : '')}}
                </td>
            </tr>
			
			<tr>
                <td style="width: 30%">অঙ্কন নম্বর </td>
                <td style="width: 2%">:</td>
                <td style="width: 20%">
                    
                </td>
            </tr>
			
			<tr>
                <td style="width: 30%">সংক্ষিপ্ত ফরমায়েশনামা</td>
                <td style="width: 2%">:</td>
                <td style="width: 20%">
                    {{($data->master->shortOrderNo ? $data->master->shortOrderNo : '')}}
                </td>
                <td style="width: 5%"></td>
                <td style="width: 20%">তারিখ  </td>
                <td style="width: 2%;">:</td>
                <td style="width: 30%;">
				{{$Controller::enToBnConveter($Controller::dateFormatter($data->master->orderDate))}}
                </td>
            </tr>
			
			<tr>
                <td style="width: 30%">হুকুমনামা নম্বর ও তারিখ </td>
                <td style="width: 2%">:</td>
                <td style="width: 20%">
                    {{($data->master->warrantNo ? $data->master->warrantNo : '')}}, {{$Controller::enToBnConveter($Controller::dateFormatter($data->master->warrantDate))}}
                </td>
                <td style="width: 5%"></td>
                <td style="width: 20%">হার তালিকা নম্বর </td>
                <td style="width: 2%;">:</td>
                <td style="width: 30%;">
				 {{($data->master->listNo ? $data->master->listNo : '')}}
                </td>
            </tr>
			
			<tr>
                <td style="width: 30%">হুকুমনামা নম্বর ও তারিখ </td>
                <td style="width: 2%">:</td>
                <td style="width: 20%">
                    {{($data->master->warrantNo ? $data->master->warrantNo : '')}}, {{$Controller::enToBnConveter($Controller::dateFormatter($data->master->warrantDate))}}
                </td>
                <td style="width: 5%"></td>
                <td style="width: 20%">হার তালিকা নম্বর </td>
                <td style="width: 2%;">:</td>
                <td style="width: 30%;">
				 {{($data->master->listNo ? $data->master->listNo : '')}}
                </td>
            </tr>
			
			<tr>
                <td style="width: 30%">সম্পূরক কার্যাদেশ নম্বর </td>
                <td style="width: 2%">:</td>
                <td style="width: 20%">
                    {{($data->master->supplementaryOrderNo ? $data->master->supplementaryOrderNo : '')}}
                </td>
                <td style="width: 5%"></td>
                <td style="width: 20%">প্রাক্কলন নম্বর  </td>
                <td style="width: 2%;">:</td>
                <td style="width: 30%;">
				 {{($data->master->estimateNo ? $data->master->estimateNo : '')}}
                </td>
            </tr>
			
			<tr>
                <td style="width: 30%">সরবারহের সূচি </td>
                <td style="width: 2%">:</td>
                <td style="width: 20%">
                    {{$Controller::enToBnConveter($Controller::dateFormatter($data->master->lastDateOfSupply))}}
                </td>
                <td style="width: 5%"></td>
                <td style="width: 20%">সমাপ্তির তারিখ </td>
                <td style="width: 2%;">:</td>
                <td style="width: 30%;">
				 {{$Controller::enToBnConveter($Controller::dateFormatter($data->master->completionDate))}}
                </td>
            </tr>
			
        </table>
		
		<table width="100%">
                <tr>
                    <td style="width: 100% !important; text-align: center;">
                      <u> <span style="font-size: 16px;"> ০১ মিলিয়নের জন্য মঞ্জুরকৃত দ্রব্যের বিবরণ  </span> </u>
                    </td>
                </tr>
            </table>
			
			 <!--    Details Table-->
			 
			 <table class="rootTable" width="100%">
                <tr class="rootTable">
                    <td class="rootTable text-center" style="width: 5%">ক্রমিক </td>
                    <td class="rootTable text-center" style="width: 20%">বরাদ্দকৃত </td>
                    <td class="rootTable text-center" style="width: 40%">সঠিক বিবরণ</td>
                    <td class="rootTable text-center" style="width: 10%">একক </td>
                    <td class="rootTable text-center" style="width: 10%">পরিমান/ওজন </td>
                    <td class="rootTable text-center" style="width: 15%">ফলিও নম্বর </td>
                </tr>
                @foreach ($data->details as $index => $item)
                    <tr>
                        <td class="rootTable text-center">
                        {{$Controller::entoBn( $index + 1,'number')}} |</td>
                        <td class="rootTable text-left">{{($item->itemMaster ? $item->itemMaster->itemNameBn : '')}}</td>
                        <td class="rootTable text-center">
                        {{($item->itemMaster ? $item->itemMaster->itemSpecification : '')}}
                        </td>
                        <td class="rootTable text-center">
                        {{($item->itemMaster->mcItemUnit ? $item->itemMaster->mcItemUnit->nameBn : '')}}
                        </td>
                        <td class="rootTable text-center">
                        {{($item->quantity ? $item->quantity : '')}}
                        </td>
                        <td class="rootTable text-center">
                        {{($item->itemMaster ? $item->itemMaster->itemClassRefNo : '')}}
                        </td>
                    </tr>
                @endforeach

            </table>
			  
			 
            
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
