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

        @page {
            margin-top: 5px;
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
    <table width="100%">
        <tr>
            <td style="width: 50% !important; text-align: center;">&nbsp;</td>
            <td style="width: 50% !important; text-align: left;">
                <h3>
                    <u>Annexure - A TO</u><br>
                    <u>Tender NO. {{$data-> tenderNo}}</u><br>
                    <u>Date {{$Controller::dateFormatter($data->createdDate)}}  </u><br>
                </h3>
            </td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td style="width: 100% !important; text-align: center;">
                <h3><strong><u>NECESSARY DETAILS</u></strong></h3>
            </td>
        </tr>
    </table>
    <table class="rootTable" width="100%">
        <tr class="rootTable">
            <td style="width: 5%; padding: 2px;" class="rootTable text-center">Ser</td>
            <td style="width: 30%; padding: 2px;" class="rootTable text-center">Name of item & Specification</td>
            <td style="width: 8%; padding: 2px;" class="rootTable text-center">Unit</td>
            <td style="width: 7%; padding: 2px;" class="rootTable text-center">Qty</td>
            <td style="width: 15%; padding: 2px;" class="rootTable text-center">Unit Price (In figure & word)</td>
            <td style="width: 15%; padding: 2px;" class="rootTable text-center">Total Price (In figure & word)</td>
            <td style="width: 20%; padding: 2px;" class="rootTable text-center">Remarks</td>
        </tr>
        @foreach ($data->details as $index => $list)
            <tr>
                <td class="rootTable text-center"
                    style="width: 5%; padding: 2px; ">{{$Controller::entoBn($index+1,'number')}} |
                </td>
                <td class="rootTable text-left" style="width: 30%; padding: 2px; ">
                    @if($list->mcFinalIndentDetails != null && $list->mcFinalIndentDetails->folioNo != null)
                        <sapn>{{optional($list->mcFinalIndentDetails->folioNo)->itemNameBn}} </sapn><br>
                        <sapn>{{optional($list->mcFinalIndentDetails->folioNo)->itemSpecification}} </sapn>
                    @endif
                </td>
                <td class="rootTable text-center" style="width: 8%; padding: 2px; ">
                    @if($list->mcFinalIndentDetails != null && $list->mcFinalIndentDetails->folioNo != null && $list->mcFinalIndentDetails->folioNo->mcItemUnit != null)
                        <sapn>{{optional($list->mcFinalIndentDetails->folioNo->mcItemUnit)->nameBn}} </sapn>
                    @endif
                </td>
                <td class="rootTable text-center" style="width: 7%; padding: 2px; ">
                    @if($list->mcFinalIndentDetails != null)
                        <sapn>{{$Controller::enToBnConveter($list->mcFinalIndentDetails->indentQty)}} </sapn>
                    @endif
                </td>
                <td class="rootTable text-center" style="width: 15%; padding: 2px; ">
                    @if($list->mcFinalIndentDetails != null)
                        <sapn>{{$Controller::enToBnConveter($list->mcFinalIndentDetails->unitRate)}} </sapn>
                    @endif
                </td>
                <td class="rootTable text-center" style="width: 15%; padding: 2px; ">
                    @if($list->mcFinalIndentDetails != null)
                        <sapn>{{$Controller::enToBnConveter($list->mcFinalIndentDetails->totalValue)}} </sapn>
                    @endif
                </td>
                <td class="rootTable text-center" style="width: 20%; padding: 2px; ">
                    @if($list->remarks != null)
                        <sapn>{{$list->remarks}} </sapn>
                    @endif
                </td>


            </tr>
        @endforeach
    </table>
    <br>
    <table width="100%">
        <tr>
            <td>{!! (optional($data)->termsAndCondition) !!}</td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td style="width: 50%">&nbsp;</td>
            <td style="width: 50%; text-align: center;">
                দরপত্রে অংশ গ্রহণকারীর স্বাক্ষর <br>
                (বড় অক্ষরের নাম) <br>
                'সীলমোহর'
            </td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td>
                স্থানঃ <br>
                তারিখঃ
            </td>

        </tr>
    </table>


</div>


</body>
