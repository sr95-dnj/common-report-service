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
    <table width="100%">
        <tr>
            <td style="width: 20% !important; text-align: center;"></td>
            <td style="width: 60% !important; text-align: center;">
                <span style="font-size: 13px;"><u>বাংলাদেশ সমরাস্ত্র কারখানা, গাজীপুর সেনানিবাস</u></span><br>
                <span style="font-size: 13px;"><u> তুলনামূলক দরপত্রের বিবরণী  </u></span><br>
            </td>
            <td style="width: 20% !important; text-align: center;"></td>

        </tr>
    </table>
    <table width="100%">
        <tr>
            <td style="width: 50% !important; text-align: left;">
                দরপত্র নং:
            @if($data->tenderNo != null)
                    {{$Controller::enToBnConveter($data->tenderNo)}}
                @endif
            </td>
            <td style="width: 50% !important; text-align: right;">
                তারিখ:
                @if($data->currentDate != null)
                    {{($Controller::enToBnConveter($Controller::dateFormatter($data->currentDate)))}}
                @endif
            </td>
        </tr>
    </table>
    @if(count($data->groupList) > 0)
        @foreach($data->groupList as $index => $groupItem)
            <table class="rootTable" width="100%">
                <tr class="rootTable">
                    <td colspan="2" style="width: 50%; padding: 2px;" class="rootTable text-center">পণ্য সরবরাহের প্রকৃতি</td>
                    <td style="width: 25%; padding: 2px;" class="rootTable text-center">একক  </td>
                    <td style="width: 25%; padding: 2px;" class="rootTable text-center">পরিমাণ </td>
                </tr>
                <tr>
                    <td colspan="2" style="width: 55%; padding: 2px;" class="rootTable text-left">
                        <span>{{$groupItem[0]->itemName}}</span><br>
                        <span>{{$groupItem[0]->itemSpecification}}</span><br>
                        <span>Country of Origin: Group A</span><br>
                    </td>
                    <td style="width: 20%; padding: 2px;" class="rootTable text-center">{{$groupItem[0]->uom}}</td>
                    <td style="width: 20%; padding: 2px;" class="rootTable text-center">{{$groupItem[0]->indentQty}}</td>
                </tr>
                <tr>
                    <td style="width: 5%; padding: 2px;" class="rootTable text-center">ক্রমিক </td>
                    <td colspan="2" style="width: 60%; padding: 2px;" class="rootTable text-center">সরবরাহকারীর নাম</td>
                    <td style="width: 35%; padding: 2px;" class="rootTable text-center">সর্বমোট পরিমাণ </td>
                </tr>
                @foreach($groupItem as $i => $item)
                    <tr>
                        <td style="width: 5%; padding: 2px;" class="rootTable text-center">{{$i + 1}} </td>
                        <td colspan="2" style="width: 60%; padding: 2px;" class="rootTable text-center">{{$item->supplierName}}</td>
                        <td style="width: 35%; padding: 2px;" class="rootTable text-center">{{$item->totalAmount}}</td>
                    </tr>
                @endforeach
                @if(count($data->groupList) != $index+1)
                    <tr>
                        <td colspan="4">&nbsp;</td>
                    </tr>
                @endif


            </table>
        @endforeach
    @endif

    <table>
        <tr>
            <td>
                নিম্ন সাক্ষরকারীগণের উপস্থিতিতে {{($Controller::enToBnConveter($Controller::dateFormatter($data->currentDate)))}} ইং ১২:০০ ঘটিকায় কারিগরীভাবে উপযুক্ত ২ টি প্রতিষ্ঠানের আর্থিক অফার খোলা হয়েছে।
            </td>
        </tr>
    </table>
    <br><br><br>
    <table width="100%">
        <tr>
            <td style="width: 25%; text-align: center">প্রতিনিধি ব্যবহারকারী শাখা </td>
            <td style="width: 25%; text-align: center">প্রতিনিধি এসিসিডি অফ(বিওএফ) </td>
            <td style="width: 25%; text-align: center">পার্সোনাল অফিসার, ক্রয় </td>
            <td style="width: 25%; text-align: center">সভাপতি দরপত্র কমিটি </td>
        </tr>
    </table>


</div>

</body>
