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
        @if($data->menuType == 'INDIRECT')
            <div style="width: 100%; margin-top: 50px;">
                <div style="text-align: right; font-size: 12px;">BOF NO: 199</div>
                <div style="width: 50%; float: left;">
                    <div>
                        <br>
                        <table width="90%" style="border-top: 1px solid;  padding-right: 50px;">
                            <tr>
                                <hr>
                                <td>পরিদর্শনকারী : আইএসআই/আইএএন্ডই/গাড়ীর পর্যন</td>
                            </tr>
                        </table>
                        <br><br>
                        <table width="90%" style="border-top: 1px solid;  padding-right: 50px;">
                            <tr>
                                <td>ইন্ডেন্টের দ্রবগুলো বীমাকৃত হইবে কিনা : হ্যাঁ/না</td>
                            </tr>
                        </table>
                        <br><br>
                        <table width="90%" style="border-top: 1px solid;  padding-right: 50px;">
                            <tr>
                                <td>ইন্ডেন্টের দ্রবগুলো পূর্বে সরবরাহ হইয়া থাকিলে: <br>
                                    দ্রবটি ইতিপূর্বে ক্রয় করা  হয়েছে।</td>
                            </tr>
                        </table>
                        <br><br><br><br><br>
                        <table width="95%" class="top-border bottom-border">
                            <tr class="top-border bottom-border">
                                <td class="top-border bottom-border right-border text-center" style="width: 10% !important;">
                                    ক্রমিক
                                </td>
                                <td class="top-border bottom-border right-border text-center" style="width: 60%">
                                    গত ইন্ডেন্টের নং সরবরাহ / চুক্তিপত্র এবং তারিখ
                                </td>
                                <td class="top-border bottom-border text-center" style="width: 30%">
                                    সরবরাহকারী  প্রতিষ্ঠান
                                </td>
                            </tr>
                            <tr class="top-border bottom-border">
                                <td class="top-border bottom-border right-border" style="width: 10% !important;">
                                    <br><br><br><br><br><br><br>

                                </td>
                                <td class="top-border bottom-border right-border" style="width: 60%">


                                </td>
                                <td class="top-border bottom-border" style="width: 30%">



                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>বিশেষ নির্দেশ</td>
                            </tr>
                        </table>
                        <br><br><br>
                        <table width="90%" style="border-top: 1px solid;  padding-right: 20px;">
                            <tr>
                                <td>ইন্ডেন্টের দ্রবগুলোর বিশদ বিবরণ আই, এ এন্ড ই /আইএ আই কর্তৃক পরীক্ষিত /অনুমোদিত </td>
                            </tr>
                        </table>
                    </div>



                </div>
                <div style="width: 50%; float: right">
                    <table width="100%">
                        <tr>
                            <td style="width: 100% !important; text-align: center;">
                                <span style="font-size: 18px;">বাংলাদেশ সমরাস্ত্র কারখানা</span><br>
                                <span style="font-size: 16px;"><u>গাজীপুর সেনানিবাস, গাজীপুর।</u></span><br>
                                <span>দ্রব্যের ইনডেন্ট</span>
                            </td>
                        </tr>
                    </table>

                    <table width="100%">
                        <tr>
                            <td style="width: 25% !important; text-align: left;">
                                দ্রব্যের শ্রেণী  বিভাগ:
                            </td>
                            <td style="width: 75% !important; text-align: left;">

                            </td>
                        </tr>
                    </table>
                    <table style="width: 100%; margin-top: 30px;">
                        <tr>
                            <td style="width: 50% !important; text-align: left;">
                                প্রতি: &nbsp; <span>Deputi Director Material</span>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width: 80% !important; text-align: left;">
                                ইনডেন্ট নং: &nbsp;
                                <span>
                                    @if($data->indentNo != null)
                                        {{$Controller::enToBnConveter($data->indentNo)}}
                                    @endif
                                </span>
                            </td>
                            <td style="width: 20% !important; text-align: center;">
                                <span>
                                    তারিখ:
                                @if($data->indentDate != null)
                                        {{$Controller::enToBnConveter($Controller::dateFormatter($data->indentDate))}}
                                    @endif
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                যথোপযুক্ত কর্তৃপক্ষ কর্তৃক আর্থিক সম্মতিক্রমে পাঠানো হইলো।
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width: 60% !important; text-align: left;">
                                (ক) ইনডেন্ট চাহিদাকৃত দ্রব্যের মোট মূল্য:
                            </td>
                            <td style="width: 40%">
                                @if($data->totalIndentPrice != null)
                                    {{$Controller::enToBnConveter($data->totalIndentPrice)}}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 60% !important; text-align: left;">
                                (খ) বর্তমান অর্থ বৎসরে উপস্থাপিত ইনডেন্ট সমূহের মোট মূল্য:
                            </td>
                            <td style="width: 40%">

                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width: 45% !important; text-align: left;">
                                (গ) বিকল্পনীয় বাজেট খাত:
                            </td>
                            <td style="width: 55%">
                                = Financial Code No.
                                <span>
                                    @if($data->budgetCode != null)
                                        {{$Controller::enToBnConveter($data->budgetCode->economicCode)}}
                                    @endif
                                </span>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr style="margin-top: 10px;">
                            <td style="width: 70%">&nbsp;</td>
                            <td style="text-align: center; width: 30%">
                                সহকারী প্রকৌশলী, দ্রব নিয়ন্ত্রণ শাখা <br>
                                বাংলাদেশ সমরাস্ত্র কারখানা
                            </td>
                        </tr>
                    </table>

                    <table class="top-border bottom-border" style="margin-top: 13px;">
                        <tr class="top-border bottom-border">
                            <td class="top-border bottom-border right-border text-center" style="width: 33% !important;">
                                পরীক্ষিত
                            </td>
                            <td class="top-border bottom-border right-border text-center" style="width: 33%">
                                অনুমোদিত
                            </td>
                            <td class="top-border bottom-border text-center" style="width: 34%">
                                আর্থিক সম্মতিকৃত/সমীক্ষিত
                            </td>
                        </tr>
                        <tr class="top-border bottom-border">
                            <td class="top-border bottom-border right-border" style="width: 33% !important;">
                                <br><br><br><br>
                                সাক্ষর
                                <br> <br> <br>
                                পরিচালক পরিকল্পনা এবং সংরক্ষণ <br>
                                বাংলাদেশ সমরাস্ত্র কারখানা <br>
                                গাজীপুর সেনানিবাস, গাজীপুর।
                            </td>
                            <td class="top-border bottom-border right-border" style="width: 33%">
                                <br><br><br><br>
                                সাক্ষর
                                <br> <br> <br>
                                ডেপুটি কমান্ড্যান্ট <br>
                                বাংলাদেশ সমরাস্ত্র কারখানা <br>
                                গাজীপুর সেনানিবাস, গাজীপুর।
                            </td>
                            <td class="top-border bottom-border" style="width: 34%">
                                <br><br><br><br>
                                সাক্ষর
                                <br> <br> <br>
                                এডিশনাল চিফ কন্ট্রোলার অফ ডিফেন্স ফাইন্যান্স <br>
                                বাংলাদেশ সমরাস্ত্র কারখানা <br>
                                গাজীপুর সেনানিবাস, গাজীপুর।

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        @endif
    </div>
    @if($data->menuType == 'INDIRECT')
        <div class="page-break"></div>
    @endif
    <!--    details page-->
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
                        </span>
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
                    <td class="rootTable text-center" style="width: 7%;">Folio No</td>
                    <td class="rootTable text-center" style="width: 15%;">Name of Item and Specification</td>
                    <td class="rootTable text-center" style="width: 5%;">Unit</td>
                    <td class="rootTable text-center" style="width: 5%;">Indent Qty</td>
                    <td class="rootTable text-center" style="width: 5%;">Rate (Tk)</td>
                    <td class="rootTable text-center" style="width: 7%;">Total Value</td>
                    <td class="rootTable text-center" style="width: 10%;">So No Supplier Name</td>
                    <td class="rootTable text-center" style="width: 7%;">User Section</td>
                    <td class="rootTable text-center" style="width: 5%;">Present Stock</td>
                    <td class="rootTable text-center" style="width: 7%;">Country of Origin</td>
                    <td class="rootTable text-center" style="width: 7%;">Appx. Date/ Time of Supply</td>
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
                            @if($item->countryOfOrigin != null)
                                {{($item->countryOfOrigin)}}
                            @endif
                        </td>
                        <td class="rootTable text-center">
                            @if($item->appxDateOfSupply != null)
                                {{($Controller::dateFormatter($item->appxDateOfSupply))}}
                            @endif
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


</body>
