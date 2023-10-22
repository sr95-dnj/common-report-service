<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>


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
            font-size: 10px;
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

        td th{
            vertical-align: top !important;
            padding-left: 7px !important;
            padding-right: 7px !important;
        }
        .top-align{
            vertical-align: top !important;
        }
    </style>

</head>


<body>
<?php
$data = json_decode($val['data']);
//dd($data);
?>


<div class="landscapePage">
    <div style="text-align: right; font-size: 12px;">BOF NO: 199</div>
    <div>
            <table width="100%">
                <tr>
                    <td style="width: 100% !important; text-align: left;">
                        <span style="font-size: 18px;">বাংলাদেশ সমরাস্ত্র কারখানা</span><br>
                        <span style="font-size: 16px;">গাজীপুর সেনানিবাস, গাজীপুর।</span>
                    </td>
                </tr>
                <tr>
                    <td width="70%">ডিমান্ড নং:
                        <span>
                            @if(isset($data->master->demandNo))
                                {{($data->master->demandNo)}}
                            @endif
                            </span>&nbsp;&nbsp;
                        <span> তারিখ: &nbsp;
                            @if(isset($data->master->demandDate))
                                {{$Controller::enToBnConveter($Controller::dateFormatter($data->master->demandDate))}}
                            @endif
                        </span>
                    </td>
                    <td width="30%">
                        <span>

                        </span>
                    </td>
                </tr>
            </table>
            <table class="rootTable" width="100%">
                <tr class="rootTable">
                    <td class="rootTable text-center" style="width: 5%;">SL</td>
                    <td class="rootTable text-center" style="width: 5%;">Folio No</td>
                    <td class="rootTable text-center" style="width: 14%;">Name of Item and Specification</td>
                    <td class="rootTable text-center" style="width: 5%;">Unit</td>
                    <td class="rootTable text-center" style="width: 5%;">Demand Qty</td>
                    <td class="rootTable text-center" style="width: 5%;">Price</td>
                    <td class="rootTable text-center" style="width: 7%;">Total Value</td>
                    <td class="rootTable text-center" style="width: 10%;">Demand Type</td>
                    <td class="rootTable text-center" style="width: 7%;">Purpose of Use</td>
                    <td class="rootTable text-center" style="width: 5%;">Country of Origin</td>
                    <td class="rootTable text-center" style="width: 7%;">Country Recommended</td>
                    <td class="rootTable text-center" style="width: 20%;">Remarks</td>
                </tr>
                @foreach ($data->details as $index => $item)
                    <tr>
                        <td class="rootTable text-center">{{($index + 1)}}</td>
                        <td class="rootTable text-center">
                            @if(isset($item->itemMaster))
                                {{($item->itemMaster->itemClassRefNo)}}
                            @endif
                        </td>
                        <td class="rootTable">
                            @if(isset($item->itemMaster))
                                <span>{{($item->itemMaster->itemNameEn)}}</span><br>
                                <span>{{($item->specification)}}</span>
                            @endif

                        </td>
                        <td class="rootTable text-center">
                            @if(isset($item->itemUnit))
                                {{($item->itemUnit->nameEn)}}
                            @endif
                        </td>

                        <td class="rootTable text-center">
                            @if( isset($item->demandQty))
                                {{($item->demandQty)}}
                            @endif
                        </td>
                        <td class="rootTable text-center">
                            @if(isset($item->price))
                                {{($item->price)}}
                            @endif
                        </td>
                        <td class="rootTable text-center">
                            @if(isset($item->demandQty) && isset($item->price))
                                {{($item->demandQty * $item->price)}}
                            @endif
                        </td>
                        <td class="rootTable text-center">
                            {{$item->demandType ? $item->demandType : ""}}
                        </td>
                        <td class="rootTable text-center">
                            {{$item->purposeOfUse ? $item->purposeOfUse : ""}}
                        </td>
                        <td class="rootTable text-center">
                            {{$item->countryOfOrigin ? $item->countryOfOrigin : ""}}
                        </td>
                        <td class="rootTable text-center">
                            @if(isset($item->recommendedCountries))
                                @foreach ($item->recommendedCountries as $indx => $country)
                                    @if(isset($country->country))
                                        {{($country->country->banglaName)}} @if(!$loop->last),<br>@endif
                                    @endif
                                @endforeach
                            @endif

                        </td>
                        <td class="rootTable">
                            @if($item->remarks != null)
                                {{($item->remarks)}}
                            @endif
                        </td>

                    </tr>
                @endforeach
            </table>
    </div>

</div>



</body>
