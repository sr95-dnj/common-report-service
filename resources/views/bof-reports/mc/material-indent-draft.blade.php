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
    td{
        padding:2px;
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
                        <td class="rootTable text-center" style="width: 3%;">SL</td>
                        <td class="rootTable text-center" style="width: 7%;">Folio No</td>
                        <td class="rootTable text-center" style="width: 21%;">Name of Item and Specification</td>
                        <td class="rootTable text-center" style="width: 5%;">Unit</td>
                        <td class="rootTable text-center" style="width: 5%;">Section</td>
                        <td class="rootTable text-center" style="width: 5%;">Demand Qty</td>
                        <td class="rootTable text-center" style="width: 5%;">Country of Origin</td>
                        <td class="rootTable text-center" style="width: 5%;">Total Demand Qty</td>
                        <td class="rootTable text-center" style="width: 5%;">Present Stock</td>
                        <td class="rootTable text-center" style="width: 5%;">Pipe Line</td>
                        <td class="rootTable text-center" style="width: 7%;">Shortfall / Surplus</td>
                        <td class="rootTable text-center" style="width: 7%;">Average Consumption</td>
                        <td class="rootTable text-center" style="width: 7%;">Propose Qty</td>
                        <td class="rootTable text-center" style="width: 7%;">Approved Qty</td>
                        <td class="rootTable text-center" style="width: 7%;">Previous Rate</td>
                        <td class="rootTable text-center" style="width: 7%;">S.O. No. Dt & Supplier Name</td>
                        <td class="rootTable text-center" style="width: 13%;">Remarks</td>
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
                                    <span>{!! $item->folioNo->itemLongSpecification !!}</span><br>
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
                                @if($item->presentStock != null)
                                    {{($item->presentStock)}}
                                @else
                                    0
                                @endif
                            </td>
                            <td class="rootTable text-center">
                                @if($item->pipeLine != null)
                                    {{($item->pipeLine)}}
                                @else
                                    0
                                @endif
                            </td>
                            <td class="rootTable text-center">
                                @if($item->shortfall != null)
                                    {{($item->shortfall)}}
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
<!--                            Present Stock-->
                            <td class="rootTable text-center">
                                @if($item->proposeQty != null)
                                    {{($item->proposeQty)}}
                                @else
                                    0
                                @endif
                            </td>
<!--                            Pipe Line-->
                            <td class="rootTable text-center">
                                @if($item->approvedQty != null)
                                    {{($item->approvedQty ? $item->approvedQty : 0)}}
                                @else
                                    0
                                @endif
                            </td>
<!--                            Reqd Qty-->
                            <td class="rootTable text-center">
                                @if($item->previousRate != null)
                                    {{($item->previousRate)}}
                                @else
                                    0
                                @endif
                            </td>
<!--                            Previous rate S.O No & dt previousRate-->
                            <td class="rootTable">
                                @if($item->previousSupplier != null)
                                    {{($item->previousSupplier)}}
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
                        <td class="rootTable text-center" style="width: 3%">Ser</td>
                        <td class="rootTable text-center" style="width: 5%">Folio No</td>
                        <td class="rootTable text-center" style="width: 8%">Nomenclature</td>
                        <td class="rootTable text-center" style="width: 4%">Unit</td>
                        <td class="rootTable text-center" style="width: 5%">Product Name</td>
                        <td class="rootTable text-center" style="width: 5%">Component Name</td>
                        <td class="rootTable text-center" style="width: 4%">C/R <br>(Thou / Mill / Lac)</td>
                        <td class="rootTable text-center" style="width: 4%">Target /Yr</td>
                        <td class="rootTable text-center" style="width: 4%">Reqr /Yr</td>
                        <td class="rootTable text-center" style="width: 4%">Total Reqr/Yr</td>
                        <td class="rootTable text-center" style="width: 4%">Storage Plan</td>
                        <td class="rootTable text-center" style="width: 4%">Total Reqr as per Storage Plan</td>
                        <td class="rootTable text-center" style="width: 4%">Present Stock</td>
                        <td class="rootTable text-center" style="width: 4%">Prod Duration <br> by P/S <br> (Yr)</td>
                        <td class="rootTable text-center" style="width: 4%">Pipe Line</td>
                        <td class="rootTable text-center" style="width: 5%">Indent No & Dt</td>
                        <td class="rootTable text-center" style="width: 5%">Indent Qty</td>
                        <td class="rootTable text-center" style="width: 5%">Tender/ Contract No & Dt</td>
                        <td class="rootTable text-center" style="width: 5%">Supplier Name</td>
                        <td class="rootTable text-center" style="width: 4%">PDS</td>
                        <td class="rootTable text-center" style="width: 4%">Shortfall/ Surplus</td>
                        <td class="rootTable text-center" style="width: 4%">Approved Qty</td>
                        <td class="rootTable text-center" style="width: 4%">Remarks</td>
                    </tr>
                    <tr class="rootTable">
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
                        <td class="rootTable text-center">20</td>
                        <td class="rootTable text-center">21</td>
                        <td class="rootTable text-center">22</td>
                        <td class="rootTable text-center">23</td>
                    </tr>
                    @foreach ($data->details as $index => $item)
                        <tr>
                            <!--serial-->
                            <td class="rootTable text-center">{{($index + 1)}}</td>
                            <!--folio NO-->
                            <td class="rootTable text-center top-align">
                                @if($item->folioNo != null)
                                    {{($item->folioNo->itemClassRefNo)}}
                                @endif
                            </td>
                            <!--itemName-->
                            <td class="rootTable top-align">
                                @if($item->folioNo != null)
                                    <span>{{($item->folioNo->itemNameEn)}}</span><br>
                                    <span>{{($item->folioNo->itemSpecification)}}</span>
                                @endif

                            </td>
                            <!--unit-->
                            <td class="rootTable top-align text-center">
                                @if($item->folioNo != null && $item->folioNo->mcItemUnit != null)
                                    {{($item->folioNo->mcItemUnit->nameEn)}}
                                @endif
                            </td>
                            <!--productName-->
                            <td class="rootTable top-align text-center">
                                @foreach ($item->consumptionRates as $index => $consumption)
                                <span>
                                    {{($consumption->product->nameEn)}}
                                </span><br>
                                @endforeach
                            </td>
                            <!--componentName-->
                            <td class="rootTable top-align text-center">
                                @foreach ($item->consumptionRates as $index => $consumption)
                                    <span>
                                    {{($consumption->component->nameEn)}}
                                </span><br>
                                @endforeach
                            </td>
                            <!--consumptionRate-->
                            <td class="rootTable top-align text-center">
                                @foreach ($item->consumptionRates as $index => $consumption)
                                    <span>
                                    {{($consumption->reqrYr)}}
                                </span><br>
                                @endforeach
                            </td>
                            <!--targetYr-->
                            <td class="rootTable top-align text-center">
                                @foreach ($item->consumptionRates as $index => $consumption)
                                    <span>
                                    {{($consumption->targetQty)}}
                                </span><br>
                                @endforeach
                            </td>
                            <!--reqrYr-->
                            <td class="rootTable top-align text-center">
                                @foreach ($item->consumptionRates as $index => $consumption)
                                    <span>
                                    {{($consumption->total)}}
                                </span><br>
                                @endforeach
                            </td>
                            <!--totalReqrYr-->
                            <td class="rootTable top-align text-center">
                                <span>
                                    @if($item->reqrQtyYr != null)
                                        <div style="border-top: 1px solid !important;">{{($item->reqrQtyYr)}}</div>
                                    @else
                                        0
                                    @endif
                                </span>
                            </td>
                            <!--storagePlan-->
                            <td class="rootTable top-align text-center">
                                @if($item->storagePlanYr != null)
                                    {{($item->storagePlanYr)}}
                                @else
                                    0
                                @endif
                            </td>
                            <!--asPerSP-->
                            <td class="rootTable top-align text-center">
                                @if($item->requiredQty != null)
                                    {{($item->requiredQty)}}
                                @else
                                    0
                                @endif
                            </td>
                            <!--presentStock-->
                            <td class="rootTable top-align text-center">
                                @if($item->presentStock != null)
                                    {{($item->presentStock)}}
                                @else
                                    0
                                @endif
                            </td>
                            <!--prodDurationByPs-->
                            <td class="rootTable top-align text-center">
                                @if($item->productionDistributionYr != null)
                                    {{($item->productionDistributionYr)}}
                                @else
                                    0
                                @endif
                            </td>
                            <!--pipeLine-->
                            <td class="rootTable top-align text-center">
                                @if($item->pipeLine != null)
                                    {{($item->pipeLine)}}
                                @else
                                    0
                                @endif
                            </td>
                            <!--indentNoDt-->
                            <td class="rootTable top-align text-center">
                                @if($item->preIndentNoDt != null)
                                    {{($item->preIndentNoDt)}}
                                @endif
                            </td>
                            <!--indentQty-->
                            <td class="rootTable top-align text-center">
                                @if($item->preIndentQty != null)
                                    {{($item->preIndentQty)}}
                                @endif
                            </td>
                            <!--tenderSupplier-->
                            <td class="rootTable top-align text-center">

                            </td>
                            <!--supplierName-->
                            <td class="rootTable top-align text-center">
                                @if($item->previousSupplier != null)
                                    {{($item->previousSupplier)}}
                                @endif
                            </td>
                            <!--PDS-->
                            <td class="rootTable top-align text-center">
                                @if($item->pds != null)
                                    {{($item->pds)}}
                                @endif
                            </td>
                            <!--shortfall-->
                            <td class="rootTable top-align text-center">
                                @if($item->shortfall != null)
                                    {{($item->shortfall)}}
                                @else
                                    0
                                @endif
                            </td>
                            <!--approvedQty-->
                            <td class="rootTable top-align text-center">
                                @if($item->approvedQty != null)
                                    {{($item->approvedQty)}}
                                @else
                                    0
                                @endif
                            </td>
                            <!--remarks-->
                            <td class="rootTable top-align text-center">
                                @if($item->remarks != null)
                                    {{($item->remarks)}}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
        <div style="width: 50%; margin-top: 8px; float: left;">
            <table>
                <tr>
                    <td>Total Item = {{count($data->details)}} Items</td>
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
                    @if(isset($data->preparedUser) && isset($data->preparedUser->signature))
                        <img style="width: 100px; height: 60px;" src="{{$data->preparedUser->signatureURL}}" alt="">
                    @endif
                </span><br>
                    <span>
                    @if(isset($data->preparedUser) && $data->createdDate != null)
                            {{$Controller::dateFormatter($data->createdDate)}}
                        @endif
                </span><br>
                    <span>
                    @if(isset($data->preparedUser) && $data->preparedUser != null && isset($data->preparedUser->employeeName))
                            {{$data->preparedUser->employeeName}}
                        @endif
                </span><br>
                    <span>Prepared By</span>
                </td>
                <td style="width: 20%; text-align: center; vertical-align: bottom;">
                <span>
                    @if(isset($data->assistantEng) && $data->assistantEng != null && $data->assistantEng->employeeInfo != null && isset($data->assistantEng->employeeInfo->signature))
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
                    @if(isset($data->manager) && $data->manager != null && $data->manager->employeeInfo != null && isset($data->manager->employeeInfo->signature))
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
                    @if(isset($data->ddPlanning) && $data->ddPlanning != null && $data->ddPlanning->employeeInfo != null && isset($data->ddPlanning->employeeInfo->signature))
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
