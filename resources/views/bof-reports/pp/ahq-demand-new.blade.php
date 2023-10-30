<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>
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
            margin-top: 10%;
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
            <td style="width: 100% !important; text-align: center;">
               <u> <span style="font-size: 18px;">AHQ Demand Report</span></u>
            </td>
        </tr>
    </table>
    <br>

    <table width="100%">
        <tr>
            <td style="width: 20%" >Demand No</td>
            <td style="width: 30%" class=" rootTable" > {{ isset($data->master) ? $data->master->demandNo : '' }}</td>
            <td style="width: 20%" class="text-right">Demand Date</td>
            <td style="width: 30%" class="rootTable text-right">{{ isset($data->master) ? $Controller::dateFormatter($data->master->demandDate) : ''}}
            </td>
        </tr>
        <tr>
            <td style="width: 20%"  >Year From</td>
            <td style="width: 30%" class="rootTable"> {{ isset($data->master) ? $data->master->fromYear : '' }}</td>
            <td style="width: 20%" class="text-right">Year To</td>
            <td style="width: 30%" class="rootTable text-right">{{ isset($data->master) ? $data->master->toYear : '' }}
            </td>
        </tr>
        <tr>
            <td style="width: 20%" >Client Name</td>
            <td style="width: 30%" class="rootTable"> {{ isset($data->master->client) ? $data->master->client->nameEn : '' }}</td>
            <td style="width: 20%" class="text-right">Demand Unit</td>
            <td style="width: 30%" class="rootTable text-right">{{ isset($data->master->demandUnit) ? $data->master->demandUnit->nameEn : '' }}
            </td>
        </tr>
        <tr>
            <td style="width: 20%" >Demand No</td>
            <td colspan="3" class="rootTable" style="width: 80%" >{{ isset($data->master) ? $data->master->description : '' }}</td>
        </tr>
    </table>

    <br>
    <br>

    <div style="text-align: center;">
        <table class="center tbBorder" style="text-align: center; padding: 5px;">
            <thead>
            <tr>
                <th style="width: 10%; padding: 2px; ">Sl</th>
                <th style="width: 20%; padding: 2px; ">Product Name English</th>
                <th style="width: 20%; padding: 2px; ">Product Name Bangla</th>
                <th style="width: 10%; padding: 2px; ">Component Name English</th>
                <th style="width: 10%; padding: 2px; ">Component Name Bangla</th>
                <th style="width: 10%; padding: 2px; ">UOM</th>
                <th style="width: 10%; padding: 2px; ">Demand Qty</th>
                <th style="width: 10%; padding: 2px; ">Remarks</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data->details as $index => $list)
                <tr>
                    <td style="width: 10%; padding: 2px; ">{{$Controller::entoBn($index+1,'number')}}</td>
                    <td style="text-align: left; width: 30%; padding: 2px;">
                        @if($list->product != null)
                            <span>{{optional($list)->product->nameEn}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->product != null)
                            <span>{{optional($list)->product->nameBn}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->productComponent != null)
                            <span>{{optional($list)->productComponent->nameEn}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->productComponent != null)
                            <span>{{optional($list)->productComponent->nameBn}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->unit != null && $list->unit->nameEn != null)
                            <span>{{optional($list)->unit->nameEn}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->demandQty != null)
                            <span>{{optional($list)->demandQty}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->remarks != null)
                            <span>{{optional($list)->remarks}}</span>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>


<!--main start-->



</body>
