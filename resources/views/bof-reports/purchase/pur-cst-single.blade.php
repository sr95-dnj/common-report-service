<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>
        @page {
            margin-top: 5px; !important;
        }

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
            .page-break {
                page-break-after: always;
            }
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

        .rootTable {
            border: 1px solid;
            border-collapse: collapse;
        }

        .left-border {
            border-left: 1px solid;
            border-collapse: collapse;
        }

        .right-border {
            border-right: 1px solid;
            border-collapse: collapse;
        }

        .top-border {
            border-top: 1px solid;
            border-collapse: collapse;
        }

        .bottom-border {
            border-bottom: 1px solid;
            border-collapse: collapse;
        }

        td {
            vertical-align: top !important;
        }
    </style>

</head>

{{-- style="font-size: 24px;" --}}
<body class="landscapePage">
<?php
$data = json_decode($val['data']);
?>


        <!--    master page-->
<div style="font-size: 24px; ">
    <br>
    <br>
    <br>
    <table width="100%">
        <tr>
            <td style="width: 100% !important; text-align: center;">
                <h3>
                    <u>বাংলাদেশ সমরাস্ত্র কারখানা, গাজীপুর সেনানিবাস</u><br>
                    <u>তুলনামূলক দরপত্রের বিবরণী (সিএসটি)</u><br>
                </h3>
            </td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td style="width: 100% !important; text-align: left;">
                দরপত্র নং- {{$data-> tenderNo}}
                তারিখঃ {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data)->createdDate))}}
            </td>
        </tr>
    </table>

    <table style="margin-top: 6px" class="rootTable" width="100%">


        @foreach ($data->itemList as $index => $list)
            <tr class="rootTable">
                <td style="width: 5%; padding: 2px;" class="rootTable text-center">ক্রমিক</td>
                <td style="width: 55%; padding: 2px;" class="rootTable text-center">পণ্যের নাম</td>
                <td style="width: 20%; padding: 2px;" class="rootTable text-center">একক</td>
                <td style="width: 20%; padding: 2px;" class="rootTable text-center">পরিমান </td>
            </tr>
            <tr>
                <td class="rootTable text-center"
                    style="width: 5%; padding: 2px; ">{{$Controller::entoBn($index+1,'number')}} |
                </td>
                <td class="rootTable text-left" style="width: 55%; padding: 2px; ">
                    @if($list->item != null && $list->item->itemNameEn != null)
                        <sapn>{{optional($list->item)->itemNameEn}} </sapn> <br>
                        <sapn>{!! ( optional($list->item)->itemLongSpecification) !!} </sapn> <br>
                        @if($list->countryRecommend != null)
                        <sapn>Country: {{optional($list)->countryRecommend}} </sapn>
                        @endif
                    @endif
                </td>
                <td class="rootTable text-center" style="width: 20%; padding: 2px; ">
                    @if($list->item != null && $list->item->mcItemUnit != null)
                        <sapn>{{optional($list->item->mcItemUnit)->nameEn}} </sapn>
                    @endif
                </td>
                <td class="rootTable text-center" style="width: 20%; padding: 2px; ">
                    @if($list->indentQty != null)
                        <sapn>{{optional($list)->indentQty}} </sapn>
                    @endif
                </td>
            </tr>
            <tr class="rootTable">
                <td style="width: 5%; padding: 2px;" class="rootTable text-center">ক্রমিক</td>
                <td colspan="2" style="width: 75%; padding: 2px;" class="rootTable text-center">দরদাতা প্রতিষ্ঠানের নাম</td>
                <td style="width: 20%; padding: 2px;" class="rootTable text-center">একক দর</td>
            </tr>
            @foreach ($list->supplierList as $indx => $spList)
                <tr>
                    <td class="rootTable text-center"
                        style="width: 5%; padding: 2px; ">{{$Controller::entoBn($indx+1,'number')}} |
                    </td>
                    <td colspan="2" class="rootTable text-left" style="width: 75%; padding: 2px; ">
                        @if($spList->scheduleSaleInfo != null && $spList->scheduleSaleInfo->supplierProfile != null)
                            <sapn>{{optional($spList->scheduleSaleInfo->supplierProfile)->supplierName}} </sapn>
                        @endif
                    </td>
                    <td class="rootTable text-right" style="width: 20%; padding: 2px; ">
                        @if($spList->scheduleSaleInfo != null && $spList->scheduleSaleInfo->schedulePrice != null)
                            <sapn>{{optional($spList->scheduleSaleInfo)->schedulePrice}}/- </sapn>
                        @endif
                    </td>
                </tr>
            @endforeach
        @endforeach



    </table>
    <br>
    <table width="100%">
        <tr>
            <td style="width: 100% !important; text-align: left;">
                নিম্নস্বাক্ষরকারিগনের উপস্থিতিতে অদ্য
                @if($data->closingDate)
                    {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data)->closingDate))}}
                @endif
                খ্রি:@if($data->tenderClosingTime)
                    {{optional($data)->tenderClosingTime}}
                @endif
                ঘটিকায় দরপত্র বাক্স বন্ধ করা হয় এবং @if($data->tenderOpeningTime)
                    {{optional($data)->tenderOpeningTime}}
                @endif
                ঘটিকায় দরপত্র খোলা হয়। মোট {{$Controller::enToBnConveter($data->noOfTenderSold)}} টি অফার পাওয়া গিয়েছে।
            </td>
        </tr>
    </table>

    <br>
    <br>

    <table width="100%">
        <tr>
            <td style="width: 25%; !important; text-align: center;">প্রতিনিধি ব্যবহারকারী শাখা</td>
            <td style="width: 25%; !important; text-align: center;">প্রতিনিধি এসিসিডিএফ (বিওএফ)</td>
            <td style="width: 25%; !important; text-align: center;">প্রতিনিধি ক্রয় শাখা</td>
            <td style="width: 25%; !important; text-align: center;">সভাপতি দরপত্র কমিটি</td>
        </tr>
    </table>
</div>

<div class="page-break"></div>
<br>
<br>
<br>
<table width="100%">
    <tr>
        <td style="width: 100% !important; text-align: center;">
            <h3>
                <u>১ম বার দরপত্র</u>
            </h3>
        </td>
    </tr>
</table>
<div style="text-align: center;">
    <table width="100%">
        <tr>
           <td style="width: 100% !important; text-align: left;">
               দরপত্র বিক্রয় = {{$Controller::enToBnConveter($data->noOfTenderSold)}} টি
           </td>
        </tr>
        <tr style="width: 100% !important; text-align: left;">
            <td style="width: 100% !important; text-align: left;">
                দরপত্র দাখিল = {{$Controller::enToBnConveter($data->noOfTenderReceived)}} টি
            </td>
        </tr>
        <br>
        <br>
        <br>
        <tr>
            <td style="width: 100% !important; text-align: left;">
                ____ পরিমান ___ ___ দেশীয় মুদ্রায় ক্রয়ের লক্ষ্যে {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data)->openingDate))}}
                তারিখে ১ম বার খোলা দরপত্র আহবান করা হয়। {{$Controller::enToBnConveter($data->noOfTenderSold)}} টি প্রতিষ্ঠান
                দরপত্র সিডিউল ক্রয় করে এবং অফার দাখিল করে। এমতাবস্থায় প্রাপ্ত দর এর প্রেক্ষিতে দরপত্র মূল্যায়ণ কমিটি (TEC)
                সুপারিশের ভিত্তিতে পরবর্তী কার্যক্রম গ্রহণ করা যেতে পারে। </td>
        </tr>
    </table>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <table width="100%">
        <tr>
            <td style="width: 25%; !important; text-align: center;">প্রতিনিধি ব্যবহারকারী শাখা</td>
            <td style="width: 25%; !important; text-align: center;">প্রতিনিধি এসিসিডিএফ (বিওএফ)</td>
            <td style="width: 25%; !important; text-align: center;">প্রতিনিধি ক্রয় শাখা</td>
            <td style="width: 25%; !important; text-align: center;">সভাপতি দরপত্র কমিটি</td>
        </tr>
    </table>
</div>


</body>
