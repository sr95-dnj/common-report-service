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
    ?>


    <div class="landscapePage">
        <div style="text-align: right; font-size: 12px;">BOF NO: 199</div>
        <div>
            @if($data->menuType == 'INDIRECT')
                <table width="100%">
                    <tr>
                        <td class="text-center">
                            <span style="font-size: 15px;">MATERIAL CONTROL SECTION</span> <br>
                            <span style="font-size: 13px;">Draft Indent -
                            <span>
                                @if($data->financialYear != null)
                                    {{($data->financialYear->financialYear)}}
                                @endif
                            </span></span>
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
                        <td class="rootTable text-center" style="width: 5%;">Demand Qty</td>
                        <td class="rootTable text-center" style="width: 7%;">User Section</td>
                        <td class="rootTable text-center" style="width: 5%;">Present Stock</td>
                        <td class="rootTable text-center" style="width: 5%;">Pipe Line</td>
                        <td class="rootTable text-center" style="width: 7%;">Reqd Qty</td>
                        <td class="rootTable text-center" style="width: 10%;">Previous rate S.O No & dt</td>
                        <td class="rootTable text-center" style="width: 20%;">Remarks</td>
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
                                    <span>{{($item->folioNo->itemSpecification)}}</span><br>
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
                                @if($item->demandQty != null)
                                    {{($item->demandQty)}}
                                @endif
                            </td>
<!--                            User Section-->
                            <td class="rootTable text-center">
                                @foreach ($item->userSections as $indx => $user)
                                    @if($user != null)
                                        {{($user->name)}},<br>
                                    @endif
                                @endforeach
                            </td>
<!--                            Present Stock-->
                            <td class="rootTable text-center">
                                @if($item->presentStock != null)
                                    {{($item->presentStock)}}
                                @endif
                            </td>
<!--                            Pipe Line-->
                            <td class="rootTable text-center">
                                @if($item->pipeLine != null)
                                    {{($item->pipeLine ? $item->pipeLine : 0)}}
                                @endif
                            </td>
<!--                            Reqd Qty-->
                            <td class="rootTable text-center">
                                @if($item->totalQty != null)
                                    {{($item->totalQty)}}
                                @endif
                            </td>
<!--                            Previous rate S.O No & dt previousRate-->
                            <td class="rootTable">
                                @if($item->previousRate != null)
                                    {{($item->previousRate)}}
                                @endif
                            </td>
                            <!--Remarks-->
                            <td class="rootTable">
                                @if($item->remarks != null)
                                    {{($item->remarks)}}
                                @endif
                            </td>

                        </tr>
                    @endforeach
                </table>
            @endif
        </div>

        <div>
            @if($data->menuType == 'DIRECT')
                <table width="100%">
                    <tr>
                        <td class="text-center">
                            <span style="font-size: 15px;">Row Mat-SAA</span> <br>
                            <span style="font-size: 13px;">Draft Indent -
                            <span>
                                @if($data->financialYear != null)
                                    {{($data->financialYear->financialYear)}}
                                @endif
                            </span></span>
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
                        <td class="rootTable text-center" style="width: 5%">SL</td>
                        <td class="rootTable text-center" style="width: 8%">Folio No</td>
                        <td class="rootTable text-center" style="width: 17%">Name of Item</td>
                        <td class="rootTable text-center" style="width: 5%">Unit</td>
                        <td class="rootTable text-center" style="width: 7%">Component Name</td>
                        <td class="rootTable text-center" style="width: 7%">Consumption <br> Rate/Million <br> (Ton)</td>
                        <td class="rootTable text-center" style="width: 7%">Target/Yr <br> (Mill)</td>
                        <td class="rootTable text-center" style="width: 7%">Reqr/Yr <br> (Mill)</td>
                        <td class="rootTable text-center" style="width: 7%">Storage Plan <br> (Yr)</td>
                        <td class="rootTable text-center" style="width: 7%">Total Reqr <br> (Ton)</td>
                        <td class="rootTable text-center" style="width: 7%">Present Stock <br> (Ton)</td>
                        <td class="rootTable text-center" style="width: 7%">Pro Duration by <br> Present Stock <br> (Yr)</td>
                        <td class="rootTable text-center" style="width: 7%">Contracted/S.O (Ton)</td>
                        <td class="rootTable text-center" style="width: 7%">Supply(+)/ <br> Shortfall(-) <br> (Ton)</td>
                    </tr>
                    @foreach ($data->details as $index => $item)
                        <tr>
                            <td class="rootTable text-center">{{($index + 1)}}</td>
                            <td class="rootTable text-center top-align">
                                @if($item->folioNo != null)
                                    {{($item->folioNo->itemClassRefNo)}}
                                @endif
                            </td>
                            <td class="rootTable top-align">
                                @if($item->folioNo != null)
                                    <span>{{($item->folioNo->itemNameEn)}}</span><br>
                                    <span>{{($item->folioNo->itemSpecification)}}</span>
                                @endif

                            </td>
                            <td class="rootTable top-align text-center">
                                @if($item->folioNo != null && $item->folioNo->mcItemUnit != null)
                                    {{($item->folioNo->mcItemUnit->nameEn)}}
                                @endif
                            </td>
                            <td class="rootTable top-align text-center">
                                @foreach ($item->consumptionRates as $index => $consumption)
                                <span>
                                    {{($consumption->component->nameEn)}}
                                </span><br>
                                @endforeach
                            </td>
                            <td class="rootTable top-align text-center">
                                @foreach ($item->consumptionRates as $index => $consumption)
                                    <span>
                                    {{($consumption->consumptionRate)}}
                                </span><br>
                                @endforeach
                            </td>
                            <td class="rootTable top-align text-center">
                                @foreach ($item->consumptionRates as $index => $consumption)
                                    <span>
                                    {{($consumption->targetQty)}}
                                </span><br>
                                @endforeach
                            </td>
                            <td class="rootTable top-align text-center">
                                @foreach ($item->consumptionRates as $index => $consumption)
                                    <span>
                                    {{($consumption->reqrYr)}}
                                </span><br>
                                @endforeach
                                <span>
                                    @if($item->reqrQtyYr != null && count($item->consumptionRates) > 1)
                                        <div style="border-top: 1px solid !important;">{{($item->reqrQtyYr)}}</div>
                                    @endif
                                </span>
                            </td>
                            <td class="rootTable top-align text-center">
                                @if($item->storagePlanYr != null)
                                    {{($item->storagePlanYr)}}
                                @endif
                            </td>
                            <td class="rootTable top-align text-center">
                                @if($item->requiredQty != null)
                                    {{($item->requiredQty)}}
                                @endif
                            </td>
                            <td class="rootTable top-align text-center">
                                @if($item->presentStock != null)
                                    {{($item->presentStock)}}
                                @endif
                            </td>
                            <td class="rootTable top-align text-center">
                                @if($item->productionDistributionYr != null)
                                    {{($item->productionDistributionYr)}}
                                @endif
                            </td>
                            <td class="rootTable top-align text-center">
                                @if($item->productionDistributionYr != null)
                                    {{($item->pipeLine)}}
                                @endif
                            </td>
                            <td class="rootTable top-align text-center">
                                @if($item->requiredQty != null)
                                    {{($item->requiredQty - $item->presentStock - $item->pipeLine)}}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
        <div style="width: 100%; margin-top: 8px;">
            <div style="width: 50%; float: left;">Total Item = {{count($data->details)}} Items</div>

        </div>
    </div>



</body>
