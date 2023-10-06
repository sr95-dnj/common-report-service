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
                <p style="font-size: 13px;"><u>TENDER EVALUATION REPORT</u></p><br>
                <span style="font-size: 13px;">1. <u> Name of Stores to procured: Rectified Spirit</u></span><br>
                <span style="font-size: 13px;"><u>Demanded by SAA</u></span><br>
            </td>
            <td style="width: 20% !important; text-align: center;">
                <span>
                    Date:
                    @if($data->currentDate != null)
                        {{($Controller::dateFormatter($data->currentDate))}}
                    @endif
                </span>
            </td>

        </tr>
    </table>
    <table width="100%">
        <tr>
            <td style="width: 50% !important; text-align: left;">
                DD No.
                @if($data->tenderNo != null)
                    {{$data->tenderNo}}
                @endif
            </td>
            <td style="width: 50% !important; text-align: right;">
                Tender No.
                @if($data->tenderNo != null)
                    {{$data->tenderNo}}
                @endif
            </td>
        </tr>
    </table>
    <table class="rootTable" width="100%">
        <tr class="rootTable">
            <td style="width: 5%; padding: 2px;" class="rootTable text-center">Ser</td>
            <td style="width: 20%; padding: 2px;" class="rootTable text-center">Name of the Firm</td>
            <td style="width: 15%; padding: 2px;" class="rootTable text-center">Specification</td>
            <td style="width: 10%; padding: 2px;" class="rootTable text-center">Quoted Schedule Form</td>
            <td style="width: 12%; padding: 2px;" class="rootTable text-center">Total Quoted Amount</td>
            <td style="width: 13%; padding: 2px;" class="rootTable text-center">Total Lowest Amount</td>
            <td style="width: 10%; padding: 2px;" class="rootTable text-center">Valid Trade License</td>
            <td style="width: 20%; padding: 2px;" class="rootTable text-center">Remarks</td>
        </tr>

        @if(count($data->details) > 0)
            @foreach ($data->details as $i => $item)
                <tr>
                    <td class="rootTable text-center"
                        style="width: 5%; padding: 2px; ">{{$i+1}}
                    </td>
                    <td class="rootTable text-left"  style="padding: 2px; ">
                        {{$item->supplierName}}
                    </td>
                    <td class="rootTable text-center"  style="padding: 2px; ">
                        {{$item->itemSpecification}}
                    </td>
                    <td class="rootTable text-center"  style="padding: 2px; ">
                        Ok
                    </td>
                    <td class="rootTable text-center"  style="padding: 2px; ">
                        {{$item->totalAmount}}
                    </td>
                    <td class="rootTable text-center"  style="padding: 2px; ">
                        {{$item->totalAmount}}
                    </td>
                    <td class="rootTable text-center"  style="padding: 2px; ">
                        YES
                    </td>
                    <td class="rootTable text-left"  style="padding: 2px; ">
                        @if($item->sectionDecision != null)
                            {{$item->sectionDecision}}
                        @endif
                    </td>

                </tr>
            @endforeach
        @endif
    </table>


</div>


</body>
