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
        vertical-align: middle !important;
        padding-left: 7px !important;
        padding-right: 7px !important;
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
                        <td style="width: 100% !important; text-align: left;">
                            <span style="font-size: 18px;">বাংলাদেশ সমরাস্ত্র কারখানা</span><br>
                            <span style="font-size: 16px;">গাজীপুর সেনানিবাস, গাজীপুর।</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="70%">ইনডেন্ট নং:
                            <span>
                            @if($data->indentNo != null)
                                    {{($data->indentNo)}}
                                @endif
                            </span>&nbsp;&nbsp;
                            <span> তারিখ: &nbsp;
                            @if($data->indentDate != null)
                                    {{$Controller::enToBnConveter($Controller::dateFormatter($data->indentDate))}}
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
                        <td class="rootTable text-center" style="width: 10%;">Demand Section</td>
                        <td class="rootTable text-center" style="width: 5%;">Indent Qty</td>
                        <td class="rootTable text-center" style="width: 5%;">Rate (Tk)</td>
                        <td class="rootTable text-center" style="width: 7%;">Total Value</td>
                        <td class="rootTable text-center" style="width: 10%;">SO No Supplier Name and Date</td>
                        <td class="rootTable text-center" style="width: 7%;">User Section</td>
                        <td class="rootTable text-center" style="width: 5%;">Present Stock</td>
                        <td class="rootTable text-center" style="width: 7%;">Country of Origin</td>
                        <td class="rootTable text-center" style="width: 20%;">Remarks</td>
                    </tr>
                    @foreach ($data->details as $index => $item)
                        <tr>
                            <td class="rootTable text-center">{{($index + 1)}}</td>
                            <td class="rootTable text-center">
                                @if($item->folioNo != null)
                                    {{($item->folioNo->itemClassRefNo)}}
                                @endif
                            </td>
                            <td class="rootTable">
                                @if($item->folioNo != null)
                                    <span>{{($item->folioNo->itemNameEn)}}</span><br>
                                    <span>{{($item->folioNo->itemSpecification)}}</span>
                                @endif

                            </td>
                            <td class="rootTable text-center">
                                @if($item->folioNo != null && $item->folioNo->mcItemUnit != null)
                                    {{($item->folioNo->mcItemUnit->nameEn)}}
                                @endif
                            </td>

                            <td class="rootTable text-center">
                                @foreach ($item->demandSectionDetails as $indx => $demand)
                                    @if($demand->demandSection != null)
                                        {{($demand->demandSection->name)}},<br>
                                    @endif
                                @endforeach
                            </td>
                            <td class="rootTable text-center">
                                @if($item->demandQty != null)
                                    {{($item->demandQty)}}
                                @endif
                            </td>
                            <td class="rootTable text-center">
                                @if($item->unitRate != null)
                                    {{($item->unitRate)}}
                                @endif
                            </td>
                            <td class="rootTable text-center">
                                @if($item->totalValue != null)
                                    {{($item->totalValue)}}
                                @endif
                            </td>
                            <td class="rootTable"></td>
                            <td class="rootTable text-center"></td>
                            <td class="rootTable text-center">
                                @if($item->presentStock != null)
                                    {{($item->presentStock)}}
                                @endif
                            </td>
                            <td class="rootTable text-center">

                            </td>
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
                <div style="text-align: right; font-size: 12px;">BOF NO: 199</div>
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
                <table class="rootTable" width="100%">
                    <tr class="rootTable">
                        <td class="rootTable text-center" style="width: 5%">SL</td>
                        <td class="rootTable text-center" style="width: 5%">Folio No</td>
                        <td class="rootTable text-center" style="width: 15%">Name of Item</td>
                        <td class="rootTable text-center" style="width: 5%">Unit</td>
                        <td class="rootTable text-center" style="width: 5%">Component Name</td>
                        <td class="rootTable text-center" style="width: 5%">Consumption <br> Rate/Million <br> Ton</td>
                        <td class="rootTable text-center" style="width: 5%">Target/Yr <br> (Mill)</td>
                        <td class="rootTable text-center" style="width: 5%">Reqr/Yr <br> (Mill)</td>
                        <td class="rootTable text-center" style="width: 5%">Storage Plan <br> (Yr)</td>
                        <td class="rootTable text-center" style="width: 5%">Total Reqr <br> (Ton)</td>
                        <td class="rootTable text-center" style="width: 5%">Present Stock <br> (Ton)</td>
                        <td class="rootTable text-center" style="width: 5%">Pro Duration by <br> Present Stock <br> (Yr)</td>
                        <td class="rootTable text-center" style="width: 5%">Contracted/S.O (Ton)</td>
                        <td class="rootTable text-center" style="width: 5%">Supply(+)/ <br> Shortfall(-) <br> (Ton)</td>
                        <td class="rootTable text-center" style="width: 5%">Indent No & <br> Date</td>
                        <td class="rootTable text-center" style="width: 5%">Indent Qty <br> (Ton) </td>
                        <td class="rootTable text-center" style="width: 5%">Tender/S.O.No & <br> Date</td>
                        <td class="rootTable text-center" style="width: 5%">Supplier Name</td>
                        <td class="rootTable text-center" style="width: 5%">Approve Qty</td>
                    </tr>
                    @foreach ($data->details as $index => $item)
                        <tr>
                            <td class="rootTable text-center">{{($index + 1)}}</td>
                            <td class="rootTable text-center">
                                @if($item->folioNo != null)
                                    {{($item->folioNo->itemClassRefNo)}}
                                @endif
                            </td>
                            <td class="rootTable">
                                @if($item->folioNo != null)
                                    <span>{{($item->folioNo->itemNameEn)}}</span><br>
                                    <span>{{($item->folioNo->itemSpecification)}}</span>
                                @endif

                            </td>
                            <td class="rootTable text-center">
                                @if($item->folioNo != null && $item->folioNo->mcItemUnit != null)
                                    {{($item->folioNo->mcItemUnit->nameEn)}}
                                @endif
                            </td>
                            <td class="rootTable text-center">
                                @if($item->productComponent != null)
                                    {{($item->productComponent->nameEn)}}
                                @endif
                            </td>
                            <td class="rootTable text-center">
                                @if($item->consumptionRate != null)
                                    {{($item->consumptionRate)}}
                                @endif
                            </td>
                            <td class="rootTable text-center">
                                @if($item->qtyOneYear != null)
                                    {{($item->qtyOneYear)}}
                                @endif
                            </td>
                            <td class="rootTable text-center">
                                @if($item->qtyTwoYear != null)
                                    {{($item->qtyTwoYear)}}
                                @endif
                            </td>
                            <td class="rootTable text-center"></td>
                            <td class="rootTable text-center"></td>
                            <td class="rootTable text-center">
                                @if($item->presentStock != null)
                                    {{($item->presentStock)}}
                                @endif
                            </td>
                            <td class="rootTable text-center"></td>
                            <td class="rootTable text-center"></td>
                            <td class="rootTable text-center">
                                @if($item->shortfall != null)
                                    {{($item->shortfall)}}
                                @endif
                            </td>
                            <td class="rootTable text-center"></td>
                            <td class="rootTable text-center"></td>
                            <td class="rootTable text-center"></td>
                            <td class="rootTable text-center"></td>
                            <td class="rootTable text-center">
                                @if($item->qtyOneYear != null)
                                    {{($item->qtyOneYear)}}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>



</body>
