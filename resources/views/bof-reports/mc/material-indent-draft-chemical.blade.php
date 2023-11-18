<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>


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
            font-size: 10px;
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
        td{
            padding: 2px;
        }

        td th {
            vertical-align: top !important;
            padding-left: 7px !important;
            padding-right: 7px !important;
        }

        .top-align {
            vertical-align: top !important;
        }
    </style>

</head>


<body>
<?php
$data = json_decode($val['data']);
?>


<div class="landscapePage">
    <div style="text-align: right; font-size: 12px;">BOF NO: 199</div>
    <div>
        <table width="100%">
            <tr>
                <td class="text-center">
                    <span style="font-size: 15px;"><u>MATERIAL CONTROL SECTION</u></span> <br>
                    <span style="font-size: 13px;"><u>
                                DRAFT INDENT FOR INDIRECT CHEMICAL -
                            <span>
                                @if($data->financialYear != null)
                                    {{($data->financialYear->financialYear)}}
                                @endif
                            </span>
                            </u></span>
                </td>
            </tr>
        </table>
        <table width="100%">
            <tr>
                <td style="width: 100% !important; text-align: left;">
                    <span style="font-size: 18px;">বাংলাদেশ সমরাস্ত্র কারখানা</span><br>
                    <span style="font-size: 16px;">গাজীপুর সেনানিবাস, গাজীপুর।</span>
                </td>
            </tr>
            <tr>
                <td>
                    <span>
                        ইনডেন্ট নং:
                    @if($data->indentNo != null)
                            {{$Controller::enToBnConveter($data->indentNo)}}
                        @endif
                    </span>&nbsp;&nbsp;
                    <span>
                        তারিখ:
                    @if($data->indentDate != null)
                            {{$Controller::enToBnConveter($Controller::dateFormatter($data->indentDate))}}
                        @endif
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
                <td class="rootTable text-center" style="width: 5%;">Section</td>
                <td class="rootTable text-center" style="width: 5%;">Demand Qty</td>
                <td class="rootTable text-center" style="width: 5%;">Country of Origin</td>
                <td class="rootTable text-center" style="width: 5%;">Total Demand Qty</td>
                <td class="rootTable text-center" style="width: 5%;">Average Consumption</td>
                <td class="rootTable text-center" style="width: 5%;">Storage Plan (Yr)</td>
                <td class="rootTable text-center" style="width: 5%;">Total Reqr as Per Storage Plan</td>

                <td class="rootTable text-center" style="width: 5%;">Present Stock</td>
                <td class="rootTable text-center" style="width: 5%;">Prod Duration by P/S (Yr)</td>
                <td class="rootTable text-center" style="width: 5%;">Pipe Line</td>
                <td class="rootTable text-center" style="width: 5%;">Supplier Name</td>
                <td class="rootTable text-center" style="width: 5%;">PDS</td>
                <td class="rootTable text-center" style="width: 7%;">Shortfall / Surplus</td>
                <td class="rootTable text-center" style="width: 7%;">Propose Qty</td>
                <td class="rootTable text-center" style="width: 7%;">Approved Qty</td>
            </tr>
            <tr>
                <td class="rootTable text-center">1</td>
                <td class="rootTable text-center">2</td>
                <td class="rootTable text-center">3</td>
                <td class="rootTable text-center">4</td>
                <td class="rootTable text-center">5</td>
                <td class="rootTable text-center">6</td>
                <td class="rootTable text-center">7</td>
                <td class="rootTable text-center">8</td>
                <td class="rootTable text-center">9</td>
                <td class="rootTable text-center">10</td>
                <td class="rootTable text-center">11</td>
                <td class="rootTable text-center">12</td>
                <td class="rootTable text-center">13</td>
                <td class="rootTable text-center">14</td>
                <td class="rootTable text-center">15</td>
                <td class="rootTable text-center">16</td>
                <td class="rootTable text-center">17</td>
                <td class="rootTable text-center">18</td>
                <td class="rootTable text-center">19</td>
            </tr>
            @foreach ($data->details as $index => $item)
                <tr>
                    <td class="rootTable text-center">{{($index + 1)}}</td>
                    <!--                            Folio No-->
                    <td class="rootTable text-center">
                        @if($item->folioNo != null)
                            {{($item->folioNo->itemClassRefNo)}}
                        @endif
                    </td>
                    <!--                            Name of Item and Specification-->
                    <td class="rootTable">
                        @if($item->folioNo != null)
                            <span>{{($item->folioNo->itemNameEn)}}</span><br>
                            <span>{!! $item->folioNo->itemSpecification!!}</span><br>
                            <span>
                                        @if($item->countryOfOrigin != null)
                                    <span>Country of Origin {{($item->countryOfOrigin)}}</span>
                                @endif
                                    </span>
                        @endif
                    </td>
                    <!--Unit-->
                    <td class="rootTable text-center">
                        @if($item->folioNo != null && $item->folioNo->mcItemUnit != null)
                            {{($item->folioNo->mcItemUnit->nameEn)}}
                        @endif
                    </td>
                    <!--                            Demand Qty-->
                    <td class="rootTable text-center">
                        @if(count($item->demandSectionDetails) > 0)
                            @foreach ($item->demandSectionDetails as $indx => $demand)
                                <span>
                                    {{($demand->demandSection->name)}}
                                </span><br>
                            @endforeach
                        @endif
                    </td>
                    <!--                            User Section-->
                    <td class="rootTable text-center">
                        @if(count($item->demandSectionDetails) > 0)
                            @foreach ($item->demandSectionDetails as $indx => $demand)
                                <span>
                                    {{($demand->demandQty)}}
                                </span><br>
                            @endforeach
                        @endif
                    </td>
                    <td class="rootTable text-center">
                        @if(count($item->demandSectionDetails) > 0)
                            @foreach ($item->demandSectionDetails as $indx => $demand)
                                <span>
                                    {{($demand->countryOfOrigin)}}
                                </span><br>
                            @endforeach
                        @endif
                    </td>
                    <td class="rootTable text-center">
                        @if($item->demandQty != null)
                            {{($item->demandQty)}}
                        @else
                            0
                        @endif
                    </td>
                    <td class="rootTable text-center">
                        @if($item->avgConsumption != null)
                            {{($item->avgConsumption)}}
                        @else
                            0
                        @endif
                    </td>
                    <td class="rootTable text-center">
                        @if($item->storagePlanYr != null)
                            {{($item->storagePlanYr)}}
                        @else
                            0
                        @endif
                    </td>
                    <td class="rootTable text-center">
                        @if($item->reqrQtyYr != null)
                            {{($item->reqrQtyYr)}}
                        @else
                            0
                        @endif
                    </td>
                    <td class="rootTable text-center">
                        @if($item->presentStock != null)
                            {{($item->presentStock)}}
                        @else
                            0
                        @endif
                    </td>
                    <!--                            Present Stock-->
                    <td class="rootTable text-center">
                        @if($item->productionDistributionYr != null)
                            {{($item->productionDistributionYr)}}
                        @else
                            0
                        @endif
                    </td>
                    <!--                            Pipe Line-->
                    <td class="rootTable text-center">
                        @if($item->pipeLine != null)
                            {{($item->pipeLine)}}
                        @else
                            0
                        @endif
                    </td>
                    <!--                            Reqd Qty-->
                    <td class="rootTable text-center">
                        @if($item->previousSupplier != null)
                            {{($item->previousSupplier)}}
                        @endif
                    </td>
                    <!--                            Previous rate S.O No & dt previousRate-->
                    <td class="rootTable text-center">
                        @if($item->pds != null)
                            {{($item->pds)}}
                        @endif
                    </td>
                    <!--Remarks-->
                    <td class="rootTable text-center">
                        @if($item->shortfall != null)
                            {{($item->shortfall)}}
                        @else
                            0
                        @endif
                    </td>
                    <td class="rootTable text-center">
                        @if($item->proposedQty != null)
                            {{($item->proposedQty)}}
                        @else
                            0
                        @endif
                    </td>
                    <td class="rootTable text-center">
                        @if($item->approvedQty != null)
                            {{($item->approvedQty)}}
                        @else
                            0
                        @endif
                    </td>

                </tr>
            @endforeach
        </table>
    </div>
    <div style="width: 50%; margin-top: 8px; float: left;">
        <table>
            <tr>
                <td>Total = {{count($data->details)}} Items</td>
            </tr>
        </table>

    </div>
</div>
<br><br><br><br>
<!--position: fixed; bottom: 0; width: 100%;-->
<div style="font-size: 24px; text-align: center">
    <table style="width: 100%">
        <tr>
            <td style="width: 20%; text-align: center; vertical-align: bottom;">
                <span>
                    @if(isset($data->preparedUser) && $data->preparedUser->signature != null && $data->preparedUser != null)
                        <img style="width: 100px; height: 60px;" src="{{$data->preparedUser->signatureURL}}" alt="">
                    @endif
                </span><br>
                <span>
                    @if(isset($data->preparedUser) && $data->createdDate != null)
                        {{$Controller::dateFormatter($data->createdDate)}}
                    @endif
                </span><br>
                <span>
                    @if(isset($data->preparedUser) && $data->preparedUser != null)
                        {{$data->preparedUser->employeeName}}
                    @endif
                </span><br>
                <span>Prepared By</span>
            </td>
            <td style="width: 20%; text-align: center; vertical-align: bottom;">
                <span>
                    @if(isset($data->assistantEng) && $data->assistantEng != null && $data->assistantEng->employeeInfo != null && $data->assistantEng->employeeInfo->signature != null)
                        <img style="width: 100px; height: 60px;" src="{{$data->assistantEng->employeeInfo->signatureURL}}" alt="">
                    @endif
                </span><br>
                <span>
                    @if(isset($data->assistantEng) && $data->assistantEng != null)
                        {{$Controller::dateFormatter($data->assistantEng->employeeInfo->entryDate)}}
                    @endif
                </span><br>
                <span>
                    @if(isset($data->assistantEng) && $data->assistantEng != null)
                        {{$data->assistantEng->name}}
                    @endif
                </span><br>
                <span>Asst. Engr MC</span>
            </td>
            <td style="width: 20%; text-align: center; vertical-align: bottom;">

                <span>Asst. Manager Plg</span>
            </td>
            <td style="width: 20%; text-align: center; vertical-align: bottom;">
                <span>
                    @if(isset($data->manager) && $data->manager != null && $data->manager->employeeInfo != null && $data->manager->employeeInfo->signature != null)
                        <img style="width: 100px; height: 60px;" src="{{$data->manager->employeeInfo->signatureURL}}" alt="">
                    @endif
                </span><br>
                <span>
                    @if(isset($data->manager) && $data->manager != null)
                        {{$Controller::dateFormatter($data->manager->employeeInfo->entryDate)}}
                    @endif
                </span><br>
                <span>
                    @if(isset($data->manager) && $data->manager != null)
                        {{$data->manager->name}}
                    @endif
                </span><br>
                <span>Manager Plg</span>
            </td>
            <td style="width: 20%; text-align: center; vertical-align: bottom;">
                <span>
                    @if(isset($data->ddPlanning) && $data->ddPlanning != null && $data->ddPlanning->employeeInfo != null && $data->ddPlanning->employeeInfo->signature != null)
                        <img style="width: 100px; height: 60px;" src="{{$data->ddPlanning->employeeInfo->signatureURL}}" alt="">
                    @endif
                </span><br>
                <span>
                    @if(isset($data->ddPlanning) && $data->ddPlanning != null)
                        {{$Controller::dateFormatter($data->ddPlanning->employeeInfo->entryDate)}}
                    @endif
                </span><br>
                <span>
                    @if(isset($data->ddPlanning) && $data->ddPlanning != null)
                        {{$data->ddPlanning->name}}
                    @endif
                </span><br>
                <span>Dy Dir Plg</span>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
