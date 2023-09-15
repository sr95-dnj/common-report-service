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
                    <u>Date {{$Controller::dateFormatter($data->createdDate)}} </u><br>
                </h3>
            </td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td style="width: 100% !important; text-align: center;">
                <h3><strong><u>DETAILS OF THE MACHINE</u></strong></h3>
            </td>
        </tr>
    </table>
    <table class="rootTable" width="100%">
        <tr class="rootTable">
            <td style="width: 20%; padding: 2px;" class="rootTable text-center">Name Of Machine</td>
            <td style="width: 70%; padding: 2px;" class="rootTable text-center">Specification</td>
            <td style="width: 5%; padding: 2px;" class="rootTable text-center">A/U</td>
            <td style="width: 5%; padding: 2px;" class="rootTable text-center">Qty</td>
        </tr>
        <tr class="rootTable">
            <td style="width: 20%; padding: 2px;" class="rootTable text-center">(a)</td>
            <td style="width: 70%; padding: 2px;" class="rootTable text-center">(b)</td>
            <td style="width: 5%; padding: 2px;" class="rootTable text-center">(c)</td>
            <td style="width: 5%; padding: 2px;" class="rootTable text-center">(d)</td>
        </tr>
        @foreach ($data->details as $index => $list)
            <tr>
                <td class="rootTable text-center" style="width: 20%; padding: 2px; ">
                    @if($list->mcFinalIndentDetails != null && $list->mcFinalIndentDetails->folioNo != null)
                        <sapn>{{optional($list->mcFinalIndentDetails->folioNo)->itemNameBn}} </sapn>
                    @endif
                </td>

                <td class="rootTable text-left" style="width: 70%; padding: 2px; ">
                    @if($list->mcFinalIndentDetails != null && $list->mcFinalIndentDetails->folioNo != null)
                        <sapn>
                            {!! (optional($list->mcFinalIndentDetails->folioNo)->itemLongSpecification) !!}</sapn>
                    @endif
                </td>
                <td class="rootTable text-center" style="width: 5%; padding: 2px; ">
                    No
                </td>
                <td class="rootTable text-center" style="width: 5%; padding: 2px; ">
                    @if($list->mcFinalIndentDetails != null)
                        <sapn>{{$list->mcFinalIndentDetails->indentQty}} </sapn>
                    @endif
                </td>

            </tr>
        @endforeach
    </table>
    <br>

    <table width="100%">

        <tr>
            <td><strong><u>Terms and Conditions</u></strong></td>
        </tr>
        <tr>
            <td>{!! (optional($data)->termsAndCondition) !!}</td>
        </tr>
    </table>

    {{--     <table width="100%">
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
    </table> --}}


</div>


</body>
